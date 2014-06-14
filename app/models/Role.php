<?php

/**
 * Role
 *
 * @property integer $id
 * @property string $role
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Role extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'role' => 'required'
	);
}
