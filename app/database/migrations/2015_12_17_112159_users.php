<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
                Schema::create('users', function(Blueprint $table)
		{
                    $table->increments('id'); //Autoincremented primary key
                    $table->string('username', 45);
                    $table->string('email', 45)->unique();
                    $table->string('password', 60);
                    $table->string('firstname', 45);
                    $table->string('lastname', 45);
                    $table->string('address', 200);
                    $table->string('zipcode', 6);
                    $table->string('city', 45);
                    $table->string('state', 45);
                    $table->string('country', 45);
                    $table->integer('idProfile')->unsigned();		
                    $table->rememberToken();
                    $table->timestamps();
		});
                
                Schema::table('users', function($table) {
                    $table->foreign('idProfile')->references('id')->on('profiles');
                });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
                Schema::drop('users');
	}

}
