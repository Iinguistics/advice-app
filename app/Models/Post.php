<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\Models\User;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',

    ];
   
    // to get the users use belongTo...then in your view ui while looping through ea post you can access the user...  $post->user->username
    public function user(){
        return $this->belongsTo(User::class);
    }
}
