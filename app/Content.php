<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
	protected $table = 'contents';
	protected $fillable = [ 'slug', 'status_id', 'title', 'body', 'image' ];
	public $timestamps = true;
}
