<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubChat extends Model
{
    use HasFactory;
    protected $table = 'chats';

    protected $fillable = [
        'masterchat_id', 'user_id', 'product_id', 'message', 'read'
    ];

    public function masterchat()
    {
        return $this->belongsTo(Chat::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
