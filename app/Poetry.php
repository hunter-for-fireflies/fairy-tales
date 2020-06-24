<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poetry extends Model
{
    protected $fillable=[
		'title', 'description', 'status', 'user_id'
	];
}
