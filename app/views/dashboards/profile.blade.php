<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

@extends('master')
@section('content')


<div class="panel panel-login panel-default">
    <h3>Welcome {{Auth::user()->firstname}}</h3> 
    <h4>You are viewing your profile</h4>
   
    {{ Form::open(array(
                    'class' => 'form-signin',
                    'url' => 'profile')) }}
        {{ Form::submit('Back', array('name' => 'back', 'class' => 'btn btn-lg btn-primary btn-block')) }}
        {{ Form::submit('Update Profile', array('name' => 'updateprofile', 'class' => 'btn btn-lg btn-primary btn-block')) }}
    {{ Form::close() }}
</div>
@stop
