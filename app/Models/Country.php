<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\User;
class Country extends Model
{
    use HasFactory;
    protected $table='countries';
    protected $guarded=[''];
    // public function users()
    // {
    //     return $this->belongsTo(User::class);
    // }

    // public function posts()
    // {
    //     return $this->hasManyThrough(Post::class, User::class,'country_id','user_id');
    // }

   
}
