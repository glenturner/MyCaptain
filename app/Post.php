<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    // Table Name is posts by default, if you wanted to change it you can here
    protected $table = 'posts';

    // Primary KEY
    public $primaryKey = 'id';

    // Timestamps, if you don't want timestamps change to false
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
