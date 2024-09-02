<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerAds extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
    ];

    protected $appends = ['img_url'];

    protected $table = 'banner_ads';

    public function getImgUrlAttribute()
    {
        return asset('assets/img/banners_ads/'.$this->image);
    }
}
