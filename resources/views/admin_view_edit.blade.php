@extends('admin_home_index')
@section('content')
@if(session('success'))
<div class="alert alert-success">
    {!!session('success')!!}
</div>
@endif


<br>
<br>

<div class="container" style="width:500px;">
<form action="{{route('update',$product->product_id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <h4>Registration form</h4>
    
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="product_name" value="{{$product->product_name}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="product_detail">product_detail:</label>cvb`
        <input type="text" id="produ_detail" name="product_detail" value="{{$product->product_detail}}"  class="form-control" required>
    </div>

    <div class="form-group">
        <label for="product_price">product_price:</label>
        <input type="text" id="product_price" name="product_price" value="{{$product->product_price}}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="discount">discount:</label>
        <input type="text" id="discount" name="discount" value="{{$product->discount}}" class="form-control" required>
    </div>

<br>
    <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" id="image" value="{{$product->image}}"name="image" required>
    </div>
    <br>
    <input type="submit" name="submit" value="update" class="btn btn-primary">

</form>
</div>
  
@endsection