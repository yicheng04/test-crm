<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlockType extends Model
{
    protected $table = 'block_types';
	protected $guarded = ['id'];
	public $timestamps = false;

	public function getTitleWithDescriptionAttribute(){
	    return $this->attributes['title'] . ' - ' . $this->attributes['description'];
	}
}
