<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

@extends('master')

@section('content')
    <h1>Need to reset your password?</h1>

    {{ Form::open() }}
        <div>
            {{ Form::label('email', 'Email Address:') }}
            {{ Form::email('email') }}
        </div>

        <div>
            {{ Form::submit('Reset') }}
        </div>
    {{ Form::close() }}

    @if (Session::has('error'))
        <p style="color: red;">{{ Session::get('error') }}</p>
    @elseif (Session::has('status'))
        <p>{{ Session::get('status') }}</p>
    @endif
@stop