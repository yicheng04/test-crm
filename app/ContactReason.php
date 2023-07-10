<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactReason extends Model
{
	protected $table = 'contact_reasons';
	protected $guarded = ['id'];
	public $timestamps = true;

	public function contact()
    {
        return $this->hasOne('App\Contact', 'reason');
    }
}