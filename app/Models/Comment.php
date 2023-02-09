<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    // blog_post_id
    public function blogPost()
    {
        //return $this->belongsTo('App\Models\Blogpost', 'post_id', 'blog_post_id');
        return $this->belongsTo('App\Models\Blogpost');
    }
}
