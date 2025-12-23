<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','category_id','image','description'];


    public function Category(){
        return $this->belongsTo(Category::class);
    }
}

