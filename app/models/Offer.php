<?php

/**
 * Offer
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property integer $city_id
 * @property integer $company_id
 * @property integer $off
 * @property string $image
 * @property string $expires
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Offer extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'title' => 'required',
		'description' => 'required',
		'city_id' => 'required',
		'company_id' => 'required',
		'off' => 'required',
		'image' => 'required',
		'expires' => 'required'
	);
}
