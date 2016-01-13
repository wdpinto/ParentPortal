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
    {{ $errors->first('login') }}    
    {{ $errors->first('password') }}
    {{ $errors->first('message') }}
</p>

<div class="container">
       
    @if(Session::has('message'))
    <div class="form-signin alert {{ Session::get('alert-class', 'alert-info') }}" role="alert">{{ Session::get('message') }}</div>
    @endif
    <div class="panel panel-login panel-default">
        <div id="panel-login-heading">
            <h3 class="panel-title">Please sign in</h3>
        </div>
        
        <div id="panel-login-logo" class="panel panel-default pull-left">
            {{ HTML::image('images/app_icons/logo-72x72.png') }}
            <!--<img src="images/app_icons/logo-72x72.png"></img>-->
        </div>

        <div id="panel-login-area" class="panel panel-default pull-right">
            {{ Form::open(array(
                    'class' => 'form-signin',
                    'url' => 'login')) }}
                
                {{ Form::label('username', 'Username', array('class' => 'sr-only')) }}
                {{ Form::text('username', Input::old('login'), array(
                            'placeholder' => 'Username',
                            'class' => 'form-control',
                            'stype' => 'login'
                            )) }}                

                {{ Form::label('password', 'Password', array('class' => 'sr-only')) }}
                {{ Form::password('password', array(
                            'placeholder' => 'Password',
                            'class' => 'form-control',
                            'stype' => 'password'
                            )) }}

                {{ Form::submit('Login', array('name' => 'login', 'class' => 'btn btn-lg btn-primary btn-block')) }}
                {{ Form::submit('Register', array('name' => 'registerme', 'class' => 'btn btn-lg btn-primary btn-block')) }}
                
                <!--<input type="submit" name="login" value="Login">
                <input type="submit" name="registerme" value="Register">-->

            {{ Form::close() }}
        </div>
        <div class="clearfix"></div>
    </div>
</div>
@stop