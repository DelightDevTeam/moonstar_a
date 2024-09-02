<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPayment extends Model
{
    use HasFactory;

    protected $fillable = ['account_name', 'account_no', 'payment_type_id', 'user_id'];

    public function paymentType()
    {
        return $this->belongsTo(PaymentType::class);
    }
}
