<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   protected $fillable = [
        'Title', 'Content', 'Description','Iduser','Keywords','Lang','State'
    ];
}
