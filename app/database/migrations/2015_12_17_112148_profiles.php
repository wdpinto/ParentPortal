<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Profiles extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
                Schema::create('profiles', function(Blueprint $table)
                {
                    $table->increments('id'); //Autoincremented primary key
                    $table->string('profilerole', 45);
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
                Schema::drop('profiles');
	}

}
