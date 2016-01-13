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
    <h4>You are in forms section</h4>
   
    {{ Form::open(array(
                    'class' => 'form-signin',
                    'url' => 'forms')) }}
        {{ Form::submit('Back', array('name' => 'back', 'class' => 'btn btn-lg btn-primary btn-block')) }}
        {{ Form::submit('Fill The Form', array('name' => 'filltheform', 'class' => 'btn btn-lg btn-primary btn-block')) }}
    {{ Form::close() }}
</div>
@stop
