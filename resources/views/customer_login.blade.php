@extends('customer_home')
@section('content')
<form action="{{ route('cust_log') }}" method="POST">
    @csrf
    <div class="card" style="width:80%;padding-right:5%;border-radius:20px;margin-right:100%;margin-top: 100px;box-shadow: 0 0 10px rgba(0, 0, 0, 1.9);">
    <div class="card-body">
<input type="email" name="email"  />
 <label >Email </label>
<br>

<input type="password"  name="password"  />
  <label >Password</label>
  <br>
  <button type="submit" class="btn btn-primary btn-block mb-4">login</button>


</div>
</div>

</form>
@endsection