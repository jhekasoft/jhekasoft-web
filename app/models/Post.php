<?php

/**
 * Post
 *
 * @property integer $id
 * @property string $title
 * @property string $announce
 * @property string $description
 * @property integer $off
 * @property string $image
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Post extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'title' => 'required',
		'announce' => 'required',
		'description' => 'required',
		'off' => 'required',
		//'image' => 'required',
	);
}
