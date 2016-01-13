<?php

class UsersSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    DB::table('users')->insert(array(
			'username'=>'sombabu',
			'email'=>'somg.iisc@gmail.com',
			'password' => Hash::make('sombabu'), //By default, uses bcrypt algo
                        'firstname'=>'sombabu',
			'lastname' => 'gunithi', 
                        'idProfile' => 1, // this guy is student
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
			));
    
    DB::table('users')->insert(array(
			'username'=>'rajni',
			'email'=>'rajni@gmail.com',
			'password' => Hash::make('rajni'), //By default, uses bcrypt algo
                        'firstname'=>'rajni',
			'lastname' => 'chikkara', 
                        'idProfile' => 2, // this guy is school admin
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
			));
}

}
