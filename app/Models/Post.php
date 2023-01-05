<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Country;
class Post extends Model
{
    use HasFactory;
    protected $table='posts';
    protected $guarded=[''];
   
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
