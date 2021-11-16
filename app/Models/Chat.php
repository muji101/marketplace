<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $table = 'master_chats';

    protected $fillable = [
        'user_id', 'friend_id'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function friend()
    {
        return $this->belongsTo(User::class);
    }

    public function subchat()
    {
        return $this->hasMany(SubChat::class, 'masterchat_id', 'id');
    }

}
