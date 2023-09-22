@extends('layeout')

@section('content')
<div>
<h1>List of resturant Page</h1>
@if (Session::get('status'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Congrragulatin</strong> You have submitted.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
    
@endif
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Operation</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->address}}</td>
        <td><a href="/delete/{{$item->id}}"><button type="button" class="btn btn-sm btn-danger">DELETE</button></a></td>
        <td><a href="/edit/{{$item->id}}"><button type="button" class="btn btn-sm btn-primary">UPDATE</button></a></td>
      </tr>
      @endforeach 
   
    </tbody>

  </table>



    


</div>    
@endsection