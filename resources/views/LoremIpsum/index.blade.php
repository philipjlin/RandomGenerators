@extends('layouts.master')

@section('title')
    Lorem Ipsum Generator - Dynamic Web Applications P3
@stop

{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
    <link href="/css/loremipsum.css" type='text/css' rel='stylesheet'>
@stop

@section('header')
  <!-- Page Title Section -->
  <div id = "pagetitle">
    <h1> Developer's Best Friend </h1>
  </div>

  <a href="/"> Home</a>
  <h3> Lorem Ipsum Generator </h3><br>
@stop

@section('content')

    <!-- Results Section -->
    <div id = "results">
      @if(isset($result))
        <?php echo join(' ', $result) ?>
        <br><br>
      @endif
    </div>

    <!-- Input Section -->
    <div id = "input">

      <h3> Select options for your lorem ipsum text below: </h3>

        @if(count($errors) > 0)
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        @endif

        <form method='POST' action='/loremipsum'>
          <input type='hidden' name='_token' value='{{ csrf_token() }}'>

          <label for="number"> Generate </label>
          <input type='number' id="number" name="number" />

          <select name="structure">
            <option value="words"> Words </option>
            <option value="sentences"> Sentences </option>
          </select>

          <br><br>
          <label for="capitalize"> Capitalize All </label>
          <input type="checkbox" id="capitalize" name="capitalize" />

          <br><br>
          <input type='submit' class='submit_button' name="submit" value='Generate Text!'/>
        </form>

    </div>
@stop
