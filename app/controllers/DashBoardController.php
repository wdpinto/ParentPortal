<?php

class DashBoardController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

    public function showDashboard()
    {
      // var_dump('You are in dashboard');
       
       $fullName = Auth::user()->firstName . " " . Auth::user()->lastName;
       $idUser = Auth::user()->id;
       $data = array();    
       switch (Auth::user()->idProfile) {
           case 1:
                $dashboard_view = 'dashboards/' . 'parent';
                $title = 'Parent Dashboard';
               
                //get parent kids details
                $data = array('fullname' => $fullName, 'idUser' => $idUser, 'profile' => 'Parent');
                //var_dump($data);
                break;
           case 2:
                $dashboard_view = 'dashboards/' . 'schooladmin';
                $title = 'School Admin Dashboard';

                $data = array('fullname' => $fullName, 'idUser' => $idUser, 'profile' => 'School Admin');
                break;
       }
       
       return View::make($dashboard_view)->with('data', $data)->with('title', $title);       
    }
    
    public function showProfile()
    {
        var_dump('You are in show profiles');
        var_dump('hey sombabu');
        $data = array();    
        return View::make('dashboards/'.'profile')->with('data', $data)->with('title', 'View Profile');              
    }
    
    public function showForms()
    {
        var_dump('You are in show profiles');
        var_dump('hey sombabu');
        $data = array();    
        return View::make('dashboards/'.'forms')->with('data', $data)->with('title', 'View Profile');    
    }
    
    public function showSchoolContacts()
    {
        var_dump('You are in show profiles');
        var_dump('hey sombabu');
        $data = array();    
        return View::make('dashboards/'.'schoolcontacts')->with('data', $data)->with('title', 'View Profile');    
    }
    
    public function updateProfile()
    {
        var_dump('sombabu here in update profile');
        $data = Input::all();
        var_dump($data);
        if(isset($data['updateprofile']))
        {
            return Redirect::to('dashboard')->with('message', 'Your profile has been updated successfully...');
        }
        else if(isset($data['back']))
        {
            return Redirect::to('dashboard');
        } 
    }
    
    public function gotodashboard()
    {
        return Redirect::to('dashboard');
    }
    
    public function filltheform()
    {
        var_dump('sombabu here in update profile');
        $data = Input::all();
        var_dump($data);
        if(isset($data['filltheform']))
        {
            return Redirect::to('forms/'.'fillform')->with('message', 'Please fill the form...');
        }
        else if(isset($data['back']))
        {
            return Redirect::to('dashboard');
        } 
    }
}
