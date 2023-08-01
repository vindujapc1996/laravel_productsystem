@extends('admin_home_index')
@section('content')
@if(session('success'))
<div class="alert alert-success">
    {!! session('success') !!}
</div>
@endif

<div class="container">
    <div class="row">
        <div class="col-4">

        </div>
        <div class="col-22 mt-9">
            <center>
                <table class="table table-dark table-striped">
                    <tr>
                        <th>product_id</th>
                        <th>product_name</th>
                        <th>product_detail</th>
                        <th>image</th>
                        <th>product_price</th>
                        <th>discount</th>
                        <th>approval_status</th>
                        <th colspan="2">action</th>
                    </tr>
                    @foreach($view as $views)
                    <tr>
                        <td>{{ $views->product_id }}</td>
                        <td>{{ $views->product_name }}</td>
                        <td>{{ $views->product_detail }}</td>
                        <td><img src="{{ asset('storage/images/'.$views->image) }}" alt="" width="55" height="55"></td>
                        <td>{{ $views->product_price }}</td>
                        <td>{{ $views->discount }}</td>
                        <td>   
                            @if($views->approval_status == 0)
                                <a href="{{ route('update1', $views->product_id) }}" class="btn btn-success">approve</a>
                            @elseif($views->approval_status==1)
                                <a href="" class="btn btn-primary">approved</a>
                            @endif
                        </td>
                        <td><a href="{{ route('admin_view_edit',$views->product_id) }}" class="btn btn-danger">edit</a></td>

                        <td><a href="{{ route('delete',$views->product_id) }}" class="btn btn-danger">delete</a></td>
                    </tr>
                    
                    @endforeach
                </table>
            
            </center>

        </div>
    </div>
</div>

@endsection
