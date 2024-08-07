<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminete\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //use SoftDeletes;
    protected $table="posts";
    protected $fillable=['title','body','user_id','status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->hasMany(comment::class);
    }
}
