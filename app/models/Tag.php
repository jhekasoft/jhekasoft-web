<?php

/**
 * Tag
 *
 * @property integer $id
 * @property string $title
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Tag extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'title' => 'required'
	);
}
