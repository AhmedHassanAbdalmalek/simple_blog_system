<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    //use softdeletes;
    protected $table="comments";
    protected $fillable=['post_id','user_id','body'];

    public function post()
    {
        return $this->belongsTo(posts::class,'post_id');
    }
    public function user()
    {
        return $this->hasMany(user::class);
    }
}
