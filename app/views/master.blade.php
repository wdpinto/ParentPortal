<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<!DOCTYPE html>
<html>
    <head>

        @include('includes/default_header')
        
        @if(Route::current()->getUri() == 'login' || Route::current()->getUri() == 'logout' || Route::current()->getUri() == 'register' || Route::current()->getUri() == '/')
            @include('includes/login-css')
        @endif
        
        @if(Route::current()->getUri() != 'login' && Route::current()->getUri() != 'forgotpassword' && Route::current()->getUri() != 'register' && Route::current()->getUri() != '/')
            <!-- for parent profile include following css -->
            @if(Auth::user()->idProfile  == 1)
                {{HTML::style('css/student.css') }}
                {{HTML::style('css/qlms.css') }} 
                {{HTML::style('css/mdl.css') }}
                {{HTML::style('css/fonts.css') }}
                {{HTML::style('css/bootstrap.min.css') }}
                {{HTML::style('css/square.css') }}
                {{HTML::style('css/bootstrap-select.css') }} 
                {{HTML::style('css/mdl.css') }}
                {{HTML::style('css/fonts.css') }}
                {{HTML::style('css/bootstrap.min.css') }}
                {{HTML::style('css/square.css') }}
                {{HTML::style('css/bootstrap-select.css') }}
                {{HTML::style('css/font-awesome.min.css') }}
                {{HTML::style('css/style.css') }}    
            <!-- for admin profile include following css -->
            @elseif(Auth::user()->idProfile == 2)
                {{HTML::style('css/admin.css')}}
            @endif
        @endif
        
    </head>
    <body>
        @if(Route::current()->getUri() != 'login' && Route::current()->getUri() != '/' && Route::current()->getUri() != 'register')            
                @include('includes/pageheader')           
        @endif
        @yield('content')
        @if(Route::current()->getUri() != 'login' && Route::current()->getUri() != '/' && Route::current()->getUri() != 'register')              
                @include('includes/pagefooter')            
        @endif      
    </body>
</html>