<?php

/**
 * Comment
 *
 * @property integer $id
 * @property string $body
 * @property integer $user_id
 * @property integer $offer_id
 * @property integer $mark
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Comment extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'body' => 'required',
		'user_id' => 'required',
		'offer_id' => 'required',
		'mark' => 'required'
	);
}
