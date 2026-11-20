<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use Hasfactory;

    //protected $table = 'posting'

    protected $fillable = [
     //Insercion masiva 
     'id',
     'user_id',
     'title',
     'body'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function posts()
    {
        return $this->hasMany(Comment::class);
    }
}
