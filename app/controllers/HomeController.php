<?php

class HomeController extends BaseController {

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

	public function showWelcome()
	{
		return View::make('hello');
	}
        
        public function showLogin()
        {
            //var_dump(Hash::make('rajni'));
            return View::make('login')->with('title', 'Parent Portal Login');
        }   
        
        public function doLogin()
        {
            $data = Input::all();
            var_dump($data);
            if(isset($data['login']))
            {
                //var_dump('you are in dologin');
                var_dump($data['login']);
                $userdata = array(
                        'username' => Input::get('username'),
                        'password' => Input::get('password')
                    ); 

                //$user = DB::table('users')->where('username', Input::get('username'))->first();
                //echo $user->firstname;

                //attempt to authenticate the user and log them in
                if(Auth::attempt($userdata)) {
                    var_dump('Authentication successful');
                    //Set user data and redirect to dashboard
                    return Redirect::to('dashboard');
                } else { //if fail return them to the login with an error
                    var_dump($userdata);
                    var_dump('Authentication failed');
                    Session::flash('message', 'Invalid login.');
                    Session::flash('alert-class', 'alert-danger');                
                   return Redirect::to('login');
                }
            }
            else if(isset($data['registerme']))
            {
                //return View::make('register')->with('title', 'Parent Portal Registration');
                return Redirect::to('register');
            }
        }  
        
        public function doLogout()
        {
            Auth::logout();
            Session::flash('message', 'You have been logged out.');
            Session::flash('alert-class', 'alert-info');
            return Redirect::to('login');
        }
        
        public function getEmail()
        {
            
        }
        
        public function showRegistration()
        {            
            return View::make('register')->with('title', 'Parent Portal Registration');
        } 
        
        public function doRegistration()
        {
            $data = Input::all();
            var_dump($data);
            if(isset($data['registerme']))
            {
                $userdata = array(
                        'firstname' => Input::get('firstname'),
                        'lastname' => Input::get('lastname'),
                        'username' => Input::get('username'),                    
                        'email' => Input::get('email'),
                        'password' => Hash::make(Input::get('password')),                        
                        'address' => Input::get('address'),
                        'city' => Input::get('city'),
                        'state' => Input::get('state'),
                        'country' => Input::get('country'),
                        'zipcode' => Input::get('zipcode'),
                        'idProfile' => '1',
                    ); 
                
                // check whether this user already exists or not
                $existinguserobj = User::where('username', '=', $userdata['username'])->orWhere('email', '=', $userdata['email'])->first();        			
                if(is_null($existinguserobj))
                {
                    // register the user
                    $newuserobj = User::create($userdata); 
                    return Redirect::to('login')->with('message', 'Your registration is successul. Please login with your credentials');   
                }
                else 
                {
                    // user already exists
                    return Redirect::to('login')->with('message', 'Email id is already existing. Please login with your credentials');   
                }
                             
            }
            else if(isset($data['login'])){
                return Redirect::to('login');
            }  
        }
}
