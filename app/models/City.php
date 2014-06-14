<?php

/**
 * City
 *
 * @property integer $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class City extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required'
	);
}
