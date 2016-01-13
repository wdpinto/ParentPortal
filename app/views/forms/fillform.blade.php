<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

@extends('master')
@section('content')

@if(Session::has('message'))
    <div class="form-signin alert {{ Session::get('alert-class', 'alert-info') }}" role="alert">{{ Session::get('message') }}</div>
@endif
<h3>Welcome {{Auth::user()->firstname}}</h3> 
@stop
