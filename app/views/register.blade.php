<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

@extends('master')

@section('content')

<!-- if there are login errors, show them here -->
<p>
    {{ $errors->first('firstname') }}    
    {{ $errors->first('lastname') }}
    {{ $errors->first('message') }}
</p>

        <div id="panel-login-area" class="panel panel-default pull-center"> 
             <h3 class="panel-title">Please do register here</h3>
            {{ Form::open() }}

                <div>
                    {{ Form::label('firstname', 'FirstName:', array('class' => 'sr-only')) }}
                    {{ Form::text('firstname', Input::old('firstname'), array(
                            'placeholder' => 'FirstName',
                            'class' => 'form-control',
                            'stype' => 'login'
                            )) }} 
                </div>

                <div>
                    {{ Form::label('lastname', 'LastName:', array('class' => 'sr-only')) }}
                    {{ Form::text('lastname', Input::old('lastname'), array(
                            'placeholder' => 'LastName',
                            'class' => 'form-control',
                            'stype' => 'login'
                            )) }} 
                </div>
            
                <div>
                    {{ Form::label('address', 'Address:', array('class' => 'sr-only')) }}
                    {{ Form::text('address', Input::old('address'), array(
                            'placeholder' => 'Address',
                            'class' => 'form-control',
                            'stype' => 'login'
                            )) }} 
                </div>
            
                <div>
                    {{ Form::label('zipcode', 'ZipCode:', array('class' => 'sr-only')) }}
                    {{ Form::text('zipcode', Input::old('zipcode'), array(
                            'placeholder' => 'ZipCode',
                            'class' => 'form-control',
                            'stype' => 'login'
                            )) }} 
                </div>
                
                <div>
                    {{ Form::label('city', 'City:', array('class' => 'sr-only')) }}
                    {{ Form::text('city', Input::old('city'), array(
                            'placeholder' => 'City',
                            'class' => 'form-control',
                            'stype' => 'login'
                            )) }} 
                </div>
                
                <div>
                            
                    {{ Form::label('state', 'State:', array('class' => 'sr-only')) }}
                    {{ Form::text('state', Input::old('state'), array(
                            'placeholder' => 'State',
                            'class' => 'form-control',
                            'stype' => 'login'
                            )) }}
                </div>
                
                <div>
                            
                    {{ Form::label('country', 'Country:', array('class' => 'sr-only')) }}
                    {{ Form::text('country', Input::old('country'), array(
                            'placeholder' => 'Country',
                            'class' => 'form-control',
                            'stype' => 'login'
                            )) }} 
                </div>
            
                <div>
                            
                    {{ Form::label('username', 'UserName:', array('class' => 'sr-only')) }}
                    {{ Form::text('username', Input::old('username'), array(
                            'placeholder' => 'UserName',
                            'class' => 'form-control',
                            'stype' => 'login'
                            )) }} 
                </div>
            
                <div>
                            
                    {{ Form::label('email', 'Email:', array('class' => 'sr-only')) }}
                    {{ Form::text('email', Input::old('email'), array(
                            'placeholder' => 'Email',
                            'class' => 'form-control',
                            'stype' => 'login'
                            )) }} 
                </div>
            
                <div>
                            
                    {{ Form::label('password', 'Password:', array('class' => 'sr-only')) }}
                    {{ Form::text('password', Input::old('password'), array(
                            'placeholder' => 'Password',
                            'class' => 'form-control',
                            'stype' => 'password'
                            )) }} 
                </div>
            
                <div>
                            
                    {{ Form::label('confirmpassword', 'Confirm Password:', array('class' => 'sr-only')) }}
                    {{ Form::text('confirmpassword', Input::old('confirmpassword'), array(
                            'placeholder' => 'Confirm Password',
                            'class' => 'form-control',
                            'stype' => 'password'
                            )) }} 
                </div>
            
                <div>
                    {{ Form::submit('Register', array('name' => 'registerme', 'class' => 'btn btn-lg btn-primary btn-block')) }}
                </div>
                <div>
                    {{ Form::submit('Login', array('name' => 'login', 'class' => 'btn btn-lg btn-primary btn-block')) }}
                </div>  

            </form>
        </div>

    @if (Session::has('error'))
        <p style="color: red;">{{ Session::get('error') }}</p>
    @endif
@stop