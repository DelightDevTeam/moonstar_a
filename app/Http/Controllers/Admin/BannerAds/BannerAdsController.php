<?php

namespace App\Http\Controllers\Admin\BannerAds;

use App\Http\Controllers\Controller;
use App\Models\Admin\BannerAds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BannerAdsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = BannerAds::latest()->get();

        return view('admin.banner_ads.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.banner_ads.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
        ]);
        // image
        $image = $request->file('image');
        $ext = $image->getClientOriginalExtension();
        $filename = uniqid('banner').'.'.$ext; // Generate a unique filename
        $image->move(public_path('assets/img/banners_ads/'), $filename); // Save the file
        BannerAds::create([
            'image' => $filename,
        ]);

        return redirect(route('admin.adsbanners.index'))->with('success', 'New Ads Banner Image Added.');
    }

    /**
     * Display the specified resource.
     */
    public function show(BannerAds $adsbanner)
    {
        if (! $adsbanner->exists) {
            return redirect()->route('admin.adsbanners.index')->with('error', 'Banner not found');
        }

        return view('admin.banner_ads.show', compact('adsbanner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BannerAds $adsbanner)
    {
        return view('admin.banner_ads.edit', compact('adsbanner'));
    }

    public function update(Request $request, BannerAds $adsbanner)
    {
        if (! $adsbanner) {
            return redirect()->back()->with('error', 'Ads Banner Not Found');
        }
        $request->validate([
            'image' => 'required',
        ]);

        // Remove banner from local storage
        File::delete(public_path('assets/img/banners_ads/'.$adsbanner->image));

        // image
        $image = $request->file('image');
        $ext = $image->getClientOriginalExtension();
        $filename = uniqid('banner').'.'.$ext; // Generate a unique filename
        $image->move(public_path('assets/img/banners_ads/'), $filename); // Save the file

        $adsbanner->update([
            'image' => $filename,
        ]);

        return redirect(route('admin.adsbanners.index'))->with('success', 'Ads Banner Image Updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BannerAds $banner)
    {
        if (! $banner) {
            return redirect()->back()->with('error', 'Banner Not Found');
        }
        //remove banner from localstorage
        File::delete(public_path('assets/img/banners_ads/'.$banner->image));
        $banner->delete();

        return redirect()->back()->with('success', 'Ads Banner Deleted.');
    }
}
