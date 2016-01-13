<?php

class ProfilesSeeder extends Seeder
{

public function run()
{
    DB::table('profiles')->delete();
    DB::table('profiles')->insert(array('profilerole'=>'Student'));
    DB::table('profiles')->insert(array('profilerole'=>'School Admin'));
}

}