<?php

namespace App\Models;

use App\Models\Admin\Bank;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WithDrawRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'agent_id', 'payment_type_id', 'amount', 'status', 'account_no', 'account_name', 'note', 'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function paymentType()
    {
        return $this->belongsTo(PaymentType::class);
    }
}
