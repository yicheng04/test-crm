<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $table = 'events';
	protected $fillable = [ 'title', 'body', 'start_date', 'end_date' ];
	public $timestamps = true;
}
