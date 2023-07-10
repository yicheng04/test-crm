<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	protected $table = 'articles';
	protected $fillable = [ 'status_id', 'title', 'body', 'image', 'author', 'type', 'link' ];
	public $timestamps = true;
}
