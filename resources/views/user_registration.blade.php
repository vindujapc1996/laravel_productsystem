@extends('user_home')
@section('content')
@if(session('success'))
<div class="alert alert-success">
    {!! session('success') !!}
</div>
@endif

<form action="{{route('register')}}" method="POST">
@csrf


    <div class="card" style="width: 600px;margin-bottom:30px;">

    <h1 class="text-center">User Registration Form</h1>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required class="form-control mb-3">

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required class="form-control mb-3">

      <label for="place">Place:</label>
      <input type="text" id="place" name="place" required class="form-control mb-3">

      <label for="contact">Contact:</label>
      <input type="tel" id="contact" name="contact" required class="form-control mb-3">

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required class="form-control mb-3">

      <label for="type">type:</label>
      <input type="type" id="type" name="type" required class="form-control mb-3">


    <center>  <input type="submit" value="Register" class="btn btn-primary"></center>
  </div>
  </form>

 
@endsection