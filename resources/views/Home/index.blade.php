@extends('layouts.master')

@section('title')
    Developer's Best Friend - Dynamic Web Applications P3
@stop

{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
    <link href="/css/home.css" type='text/css' rel='stylesheet'>
@stop

@section('header')
  <!-- Page Title Section -->
  <div id = "pagetitle">
    <h1> Developer's Best Friend </h1>
    <h3> Web Application for Developers </h3>
  </div>
@stop

@section('content')
  <h3>
    <img src="http://selfpublish.streetlib.com/wp-content/uploads/2015/06/Toolbox.jpg" title = "Developer's Toolbox." alt="Tools." class="align-center medium"/>
  </h3>
  <br>

  <!-- Menu Section -->
  <div id = "menu">
    <ul>
        <li> <a href="/loremipsum" class=button> Lorem Ipsum Generator</a> </li>
        <li> <a href="/randomuser" class=button> Random User Generator</a> </li>
    </ul>
  </div>
@stop
