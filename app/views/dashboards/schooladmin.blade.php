<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

@extends('master')
@section('content')

<h3>Welcome {{Auth::user()->firstname}}</h3> 
<h4>You logged in as {{$data["profile"]}} </h4>
<h4>You are in dashboard</h4>
@stop
