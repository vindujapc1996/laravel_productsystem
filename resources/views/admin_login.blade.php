@extends('index3')
@section('content')
<form action="{{ route('log') }}" method="POST">
    @csrf
    <div class="card" style="width:50%;padding-left:5%;border-radius:20px;margin-left:80%;margin-top:90px;box-shadow: 0 0 10px rgba(0, 0, 0, 0.9);">
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