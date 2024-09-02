<?php

namespace App\Http\Controllers\Api\V1\Player;

use App\Http\Controllers\Controller;
use App\Models\PaymentType;
use App\Models\UserPayment;
use App\Traits\HttpResponses;
use Exception;
use Illuminate\Support\Facades\Auth;

class PaymentTypeController extends Controller
{
    use HttpResponses;

    public function get()
    {
        $data = PaymentType::all();

        return $this->success($data, 'Get Payment Type List');
    }

    public function getAgentPayment()
    {
        $player = Auth::user();

        $data = UserPayment::with('paymentType')->where('user_id', $player->agent_id)->get();

        return $this->success($data, 'Get Agent Payment Type List');
    }
}
