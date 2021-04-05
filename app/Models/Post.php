<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($post)
 */
class Post extends Model
{
    use HasFactory;


    protected $fillable= ["title","description","user_id"];

    // POST Belongs to a user
//    public  function myUserRelation(){
//        return $this->belongsTo(User::class,"user_id");
//    }
    // POST Belongs to a user
    // framework follows convention over configuration
    public  function user(){
        return $this->belongsTo(User::class);
    }
}
