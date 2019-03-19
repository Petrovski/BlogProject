<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    // These below are just examples of if you wanted to change the table name, the id column name, or if you want timestamps or not.

    // Table Name
    protected $table = 'posts';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;
}
