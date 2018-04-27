<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table
    protected $table = 'posts';
    //Primary key
    public $primaryKey = 'id';
    //Time stamp
    public $timestamps = true;
}
