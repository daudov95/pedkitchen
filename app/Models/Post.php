<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'title',
    //     'content',
    // ];

    public function authors () {
        return $this->belongsToMany(Author::class);
    }

    public function category () {
        return $this->hasOne(PostCategory::class, 'id', 'category_id');
    }

}