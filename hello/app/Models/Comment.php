<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['text', 'blog_id', 'user_id'];


    public function user()
    {
        // https://laravel.com/docs/8.x/eloquent-relationships#one-to-many
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
