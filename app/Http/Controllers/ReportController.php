<?php

namespace App\Http\Controllers;

use App\Enums\UserType;
use App\Models\Admin\GameType;
use App\Models\Admin\Product;
use App\Models\FinicalReport;
use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $reports = $this->makeJoinTable()->select(
            'products.name as product_name',
            'products.code',
            DB::raw('SUM(reports.bet_amount) as total_bet_amount'),
            DB::raw('SUM(reports.valid_bet_amount) as total_valid_bet_amount'),
            DB::raw('SUM(reports.payout_amount) as total_payout_amount'))
            ->groupBy('product_name', 'products.code')
            ->when(isset($request->fromDate) && isset($request->toDate), function ($query) use ($request) {
                $query->whereBetween('reports.settlement_date', [$request->fromDate, $request->toDate]);
            })
            ->get();

        return view('report.index', compact('reports'));
    }

    public function show(Request $request, int $code)
    {
        $reports = $this->makeJoinTable()->select(
            'users.user_name',
            'users.id as user_id',
            'products.name as product_name',
            'products.code as product_code',
            DB::raw('SUM(reports.bet_amount) as total_bet_amount'),
            DB::raw('SUM(reports.valid_bet_amount) as total_valid_bet_amount'),
            DB::raw('SUM(reports.payout_amount) as total_payout_amount'))
            ->groupBy('users.user_name', 'users.id', 'products.name', 'products.code')
            ->where('reports.product_code', $code)
            ->when(isset($request->player_name), function ($query) use ($request) {
                $query->whereBetween('reports.member_name', $request->player_name);
            })
            ->when(isset($request->fromDate) && isset($request->toDate), function ($query) use ($request) {
                $query->whereBetween('reports.settlement_date', [$request->fromDate, $request->toDate]);
            })
            ->get();

        return view('report.show', compact('reports'));
    }

    // amk
    public function detail(Request $request, int $userId, int $productCode)
    {
        $player = User::find($userId);

        $report = $this->makeJoinTable()
            ->select(
                'products.name as product_name',
                'users.user_name',
                'users.id as user_id',
                'reports.wager_id',
                'reports.valid_bet_amount',
                'reports.bet_amount',
                'reports.payout_amount',
                'reports.settlement_date',
                'game_lists.code as game_code',
                'game_lists.name as game_list_name'
            )
            ->where('users.id', $userId)
            ->where('reports.product_code', $productCode)
            ->when($request->has('fromDate') && $request->has('toDate'), function ($query) use ($request) {
                $query->whereBetween('reports.settlement_date', [$request->fromDate, $request->toDate]);
            })
            ->get();
        return view('report.detail', compact('report', 'player'));
    }


    public function view($user_name)
    {
        $player = Report::where('member_name', $user_name)->first();
        if($player)
            $reports = $this->makeJoinTable()->select(
            'users.user_name',
            'users.id as user_id',
            'products.name as product_name',
            'products.code as product_code',
            DB::raw('SUM(reports.bet_amount) as total_bet_amount'),
            DB::raw('SUM(reports.valid_bet_amount) as total_valid_bet_amount'),
            DB::raw('SUM(reports.payout_amount) as total_payout_amount'))
            ->groupBy('users.user_name', 'product_name', 'product_code')
            ->where('reports.member_name', $user_name)
            ->get();
        else{
            $reports = [];
        }

        return view('report.view', compact('reports'));
    }

    // amk
    private function makeJoinTable()
    {
        $query = User::query()->roleLimited();
        $query->join('reports', 'reports.member_name', '=', 'users.user_name')
            ->join('products', 'reports.product_code', '=', 'products.code')
            ->join('game_lists', 'reports.game_name', '=', 'game_lists.code')
            ->where('reports.status', '101');

        return $query;
    }

}
