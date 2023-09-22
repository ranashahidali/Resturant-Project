@extends('layeout')

@section('content')
<div class="col-sm-6">
<h1>Add New Resturant Page</h1>


<form action="/add" method="post">

    @csrf 
   
    <div class="mb-3">
      <label class="form-label">Name</label>
      <input type="text" name="name" class="form-control" placeholder="Enter Name">
      
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="text" name="email" class="form-control" placeholder="Enter Email">
        
      </div>

      <div class="mb-3">
        <label class="form-label">Address</label>
        <input type="text" name="address" class="form-control" placeholder="Enter Address">
        
      </div>
  
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


</div>    
@endsection