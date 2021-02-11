@extends('layouts.master')

@section('title')
    Random User Generator - Dynamic Web Applications P3
@stop

{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
    <link href="/css/randomuser.css" type='text/css' rel='stylesheet'>
@stop

@section('header')
  <!-- Page Title Section -->
  <div id = "pagetitle">
    <h1> Developer's Best Friend </h1>
  </div>

  <a href="/"> Home</a>
  <h3> Random User Generator </h3><br>
@stop

@section('content')

    <!-- Results Section -->
    <div id = "results">
      @if(isset($name))
        {{ $name }}<br>
      @endif
      @if(isset($address))
        {{ $address }}<br>
      @endif
      @if(isset($phone))
        {{ $phone }}<br>
      @endif
      @if(isset($email))
        {{ $email }}<br>
      @endif
      @if(isset($user))
        {{ $user }}<br>
      @endif
      @if(isset($password))
        {{ $password }}<br>
      @endif
    </div>

    <!-- Avatar Image -->
    <div class = "image">
      @if(isset($img_url))
        <br>
        <img src = {{ $img_url }} title = "Randomly Generated Avatar." class="align-center small"/>
        <figcaption>User Avatar</figcaption><br>
      @endif
    </div>

    <!-- Input Section -->
    <div id = "input">

      <h3> Select options to display about the random user below: </h3>

        <form method='POST' action='/randomuser'>
          <input type='hidden' name='_token' value='{{ csrf_token() }}'>

          <label for="name"> Name </label>
          <input type="checkbox" id="name" name='name' /><br>
          <label for="city"> Address </label>
          <input type="checkbox" id="city" name='address' /><br>
          <label for="phone"> Phone </label>
          <input type="checkbox" id="phone" name='phone' /><br>
          <label for="email"> Email </label>
          <input type="checkbox" id="email" name='email' /><br>
          <label for="user"> User Name </label>
          <input type="checkbox" id="user" name='user' /><br>
          <label for="password"> Password </label>
          <input type="checkbox" id="password" name='password' /><br>
          <br>

    		  <input type='submit' class="submit_button" value='Generate Random User!'/>
        </form>

    </div>

@stop
