<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = ['title','content'];

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
