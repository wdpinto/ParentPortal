<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<title>{{$title}}</title>

<!-- Default Head -->
{{ HTML::style('bower/bootstrap/dist/css/bootstrap.min.css') }}


{{ HTML::style('css/master.css') }}
@if(isset(Auth::user()->idUser))
    @if(Auth::user()->idProfile == 1)
        {{ HTML::style('bower/bootstrap/dist/css/bootstrap.icon-large.min.css') }}
    @endif
@endif

@if(isset($loadJS))
    @foreach($loadJS as $inc)
        @if(isset($inc->css))
{{ HTML::style($inc->css) }}
        @endif
    @endforeach
@endif


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
{{ HTML::script('bower/jquery/dist/jquery.min.js') }}
<!-- Include all compiled plugins (below), or include individual files as needed -->
{{ HTML::script('bower/bootstrap/dist/js/bootstrap.min.js') }}


@if(isset($loadJS))
    <!-- Load extra JS and CSS -->
    @foreach($loadJS as $inc)
        @if(isset($inc->file))
{{ HTML::script($inc->file) }}
        @endif
    @endforeach
@endif

<script>
    
    var editor;
    
    $(document).ready(function () {

        @if(isset($datatable))
            <!-- Init dataTables -->
            var table = $("#DT_{{$datatable->name}}").DataTable({
                    "ajax": "{{URL::to($datatable->ajax_url)}}"
                    ,"columns" : {{$datatable->getColsJSON()}}
                    ,"stateSave": true
                    ,"processing": true
                    ,"serverSide": true
            });
            var tt = new $.fn.dataTable.TableTools( table );

            $(tt.fnContainer() ).insertBefore('div.dataTables_wrapper');
        @endif
    });
</script>
<!-- End Default -->