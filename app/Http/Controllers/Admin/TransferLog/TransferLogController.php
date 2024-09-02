<?php

namespace App\Http\Controllers\Admin\TransferLog;

use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Admin\TransferLog;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class TransferLogController extends Controller
{
    public function index()
    {
        $this->authorize('transfer_log', User::class);
        $transferLogs = Auth::user()->transactions()->with('targetUser')->latest()->paginate();

        return view('admin.trans_log.index', compact('transferLogs'));
    }

    public function transferLog($id)
    {
        abort_if(
            Gate::denies('make_transfer') || ! $this->ifChildOfParent(request()->user()->id, $id),
            Response::HTTP_FORBIDDEN,
            '403 Forbidden | You cannot access this page because you do not have permission'
        );

        $transferLogs = Auth::user()->transactions()->with('targetUser')->where('target_user_id', $id)->latest()->paginate();

        return view('admin.trans_log.detail', compact('transferLogs'));
    }


    public function depositTransaferLog()
    {
        $transferLogs = Auth::user()->transactions()
            ->where('transactions.type', 'withdraw')
            ->whereIn('transactions.name', ['credit_transfer', 'debit_transfer'])
            ->with('targetUser')
            ->orderBy('id', 'desc')
            ->get();

        return view('admin.trans_log.deposit_log', compact('transferLogs'));
    }

    public function withdrawTransaferLog()
    {
        $transferLogs = Auth::user()->transactions()
            ->where('transactions.type', 'deposit')
            ->whereIn('transactions.name', ['credit_transfer', 'debit_transfer'])
            ->with('targetUser')
            ->orderBy('id', 'desc')
            ->get();

        return view('admin.trans_log.withdraw_log', compact('transferLogs'));
    }

}
