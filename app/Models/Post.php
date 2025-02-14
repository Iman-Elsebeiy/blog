<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Post extends Model
{

    use HasFactory;
    protected $table = 'posts';
    // protected $fillable = ['title', 'description', 'image', 'user_id', 'slug'];


    function user(){
        return $this->belongsTo(User::class);

    }


    public static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $post->slug = Str::slug($post->title); // Generate slug from title
        });

}
}
