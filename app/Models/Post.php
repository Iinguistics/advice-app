<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Like;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',

    ];

    public function likedBy(User $user){
      return $this->likes->contains('user_id', $user->id);
    }
   
    // to get the users use belongTo...then in your view ui while looping through ea post you can access the user...  $post->user->username
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }
}
