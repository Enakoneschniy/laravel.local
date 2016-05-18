<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPost extends Model
{
	protected $fillable = ['post_id', 'user_id'];
    public $timestamps = false;
}
