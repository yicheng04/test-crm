<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = 'products';
	protected $fillable = [ 'status_id', 'title', 'body', 'price', 'image' ];
	public $timestamps = true;
}
