@extends('layeout')

@section('content')
<div>
<h1>User Register Page</h1>


<form action="/register" method="POST">

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
        <label class="form-label">Contact No</label>
        <input type="text" name="Number" class="form-control" placeholder="Enter Number">
        
      </div>


      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Enter Password">
        
      </div>
  
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>














</div>    
@endsection