<?php

namespace App\Models;

use App\Enums\TransactionStatus;
use App\Models\SeamlessEvent;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeamlessTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'game_type_id',
        'product_id',
        'seamless_event_id',
        'user_id',
        'wager_id',
        'seamless_transaction_id',
        'rate',
        'transaction_amount',
        'bet_amount',
        'valid_amount',
        'status',
    ];

    protected $casts = [
        'status' => TransactionStatus::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function seamlessEvent()
    {
        return $this->belongsTo(SeamlessEvent::class, 'seamless_event_id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
