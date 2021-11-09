<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'inscurance_price',
        'shipping_price',
        'transaction_total',
        'transaction_status',
        'code',
    ];

    public function details()
    {
        return $this->hasMany(TransactionDetail::class, 'transactions_id');
    }
}
