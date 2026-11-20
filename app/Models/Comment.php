<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
class Comment extends Model
{
    use Hasfactory;

    //protected $table = 'posting'

    protected $fillable = [
     //Insercion masiva 
     'id',
     'post_id',
     'body'
    ];
}
