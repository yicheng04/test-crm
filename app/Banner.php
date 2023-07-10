<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banners';
	protected $guarded = [ 'id' ];
	public $timestamps = true;

	public function status()
    {
        return $this->belongsTo('App\Status');
    }
}
