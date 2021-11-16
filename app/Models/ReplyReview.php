<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReplyReview extends Model
{
    use HasFactory;

    protected $table = 'reply_reviews';

    protected $fillable = [
        'reply', 'review_id'
    ];

    public function review()
    {
        return $this->belongsTo(Review::class);
    }
}
