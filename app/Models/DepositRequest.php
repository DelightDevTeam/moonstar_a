<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function Ramsey\Uuid\v1;

class DepositRequest extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'agent_id', 'user_payment_id', 'note', 'amount', 'status', 'refrence_no'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function userPayment()
    {
        return $this->belongsTo(UserPayment::class);
    }

}
