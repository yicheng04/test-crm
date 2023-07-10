<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	protected $table = 'contacts';
	protected $guarded = [ 'id' ];
	public $timestamps = true;

	public function contact_reason()
    {
        return $this->belongsTo('App\ContactReason', 'reason');
    }
}
