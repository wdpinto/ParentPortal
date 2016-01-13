<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

@extends('master')

@section('content')
    <h1>Set Your New Password</h1>

    {{ Form::open() }}
        <input type="hidden" name="token" value="{{ $token }}">

        <div>
            {{ Form::label('email', 'Email Address:') }}
            {{ Form::email('email') }}
        </div>

        <div>
            {{ Form::label('password', 'Password:') }}
            {{ Form::password('password') }}
        </div>

        <div>
            {{ Form::label('password_confirmation', 'Password Confirmation:') }}
            {{ Form::password('password_confirmation') }}
        </div>

        <div>
            {{ Form::submit('Submit') }}
        </div>
    </form>

    @if (Session::has('error'))
        <p style="color: red;">{{ Session::get('error') }}</p>
    @endif
@stop
