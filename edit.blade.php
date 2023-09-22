@extends('layeout')

@section('content')
<div class="col-sm-6">
<h1>Edit Resturant Page</h1>


<form    action="/edit"  method="POST">

    @csrf 
   
    <div class="mb-3">
      <label class="form-label">Name</label>
      <input type="hidden" name="id" value="{{$data->id}}">
      <input type="text" name="name" class="form-control" value="{{$data->name}}" placeholder="Enter Name">
      
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="text" name="email" class="form-control" value="{{$data->email}}" placeholder="Enter Email">
        
      </div>

      <div class="mb-3">
        <label class="form-label">Address</label>
        <input type="text" name="address" class="form-control" value="{{$data->address}}" placeholder="Enter Address">
        
      </div>
  
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


</div>    
@endsection