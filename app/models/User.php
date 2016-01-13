<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
             
        protected $fillable = ['username', 'password', 'firstname', 'lastname', 'email', 'password', 'address', 'city', 'state', 'country', 'zipcode', 'idProfile'];
  
        public static $rules = array(                     
            'firstname' => 'required',
            'lastname' => 'required',
            'useremail' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'usermobilenumber' => 'required|numeric|digits:10'
        );

}
