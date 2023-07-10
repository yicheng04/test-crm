<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    protected $table = 'blocks';
	protected $guarded = ['id'];
	public $timestamps = true;

    public static function boot()
    {
        parent::boot();

        static::saving(function($model) {
            $model->slug = str_slug($model->title);
            return true;
        });
    }

	/**
     * Get the route key for the model
     *
     * @return string
     */
    public function getRouteKeyName() {
        return 'slug';
    }

    /**
     * Relationships
     */
    public function type() {
        return $this->belongsTo('App\BlockType', 'block_type_id');
    }

}
