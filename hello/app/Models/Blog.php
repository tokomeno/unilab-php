<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;



    protected $fillable = [
        'title',
        'text',
        'category_id'
    ];



    public function scopeFilter($query)
    {
        if (request('search')) {
            $query->where('title', 'like', "%". request('search') ."%");
        }
        if(request('category_id')){
            $query->where('category_id', request('category_id'));
        }
        if(request('date')){
            $query->whereDate('created_at', '>=', request('date'));
        }
        
    }


   
    public function comments()
    {
        return $this->hasMany(Comment::class, 'blog_id', 'id');

    }
    

 
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }




    public function user()
    {
       return $this->belongsTo(User::class, 'user_id', 'id');
    }


}
