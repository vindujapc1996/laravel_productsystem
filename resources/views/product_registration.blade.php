@extends('index2')
@section('content')
@if(session('success'))
<div class="alert alert-success">
    {!! session('success') !!}
</div>
@endif


<section>
<form action="{{route('product_reg')}}" method="POST" enctype="multipart/form-data">

    <div class="card" style="width: 600px; background-color:lightGray;">

    <h1 class="text-center">product Registration Form</h1>
      @csrf
      <label for="name">product_name:</label>
      <input type="text" id="product_name" name="product_name" required class="form-control mb-3">

      <label for="product_detail">product_detail:</label>
      <input type="text" id="product_detail" name="product_detail" required class="form-control mb-3">

      <label for="product_price">product_price:</label>
      <input type="text" id="product_price" name="product_price" required class="form-control mb-3">

      <label for="discount">discount:</label>
      <input type="text" id="discount" name="discount" required class="form-control mb-3">


      <label for="image">image:</label>
      <input type="file" id="image" name="image" required class="form-control mb-3">


      

    <center>  <input type="submit" value="submit" class="btn btn-primary"></center>
    </form>
  </div>
  </section>


  @endsection