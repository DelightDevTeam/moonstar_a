<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SeamlessTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;

class GetBetDetailController extends Controller
{
    public function index(Request $request)
    {
        $query = SeamlessTransaction::with(['user', 'seamlessEvent']);

        if ($request->has(['fromDate', 'toDate'])) {
            $query->whereBetween('created_at', [
                $request->fromDate.' 00:00:00', // Start of fromDate
                $request->toDate.' 23:59:59',    // End of toDate
            ]);
        }

        $transactions = $query->get();

        return view('admin.get_bet_detail.index', compact('transactions'));
    }

    public function getBetDetail(Request $request, $wagerId)
    {
        $operatorCode = Config::get('game.api.operator_code');
        $apiUrl = Config::get('game.api.url')."/Report/BetDetail?agentCode={$operatorCode}&WagerID={$wagerId}";
        //dd($apiUrl);
        // Make the API request
        $response = Http::get($apiUrl);
        //dd($response);
        if ($response->successful()) {
            $betDetails = $response->json();

            return view('admin.get_bet_detail.show', compact('betDetails'));
        } else {
            return back()->withErrors('Unable to fetch bet details.');
        }
    }
}
