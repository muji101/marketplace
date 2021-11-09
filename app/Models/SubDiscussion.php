<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubDiscussion extends Model
{
    use HasFactory;

    protected $fillable = [
        'discussion_id',
        'product_id',
        'user_id',
        'note',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function discussion()
    {
        return $this->belongsTo(Discussion::class);
    }
}
