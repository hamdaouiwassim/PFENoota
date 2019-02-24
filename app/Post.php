<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'Iduser', 'Title', 'Content','Description','Keywords','Lang','State',
    ];
}
