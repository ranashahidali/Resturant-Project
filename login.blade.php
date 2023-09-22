@extends('layeout')

@section('content')
<div>
<h1>Login Page</h1>


<form  action="/login"  method="POST">

    @csrf

   

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="text" name="email" class="form-control" placeholder="Enter Email">
        
      </div>


      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Enter Password">
        
      </div>
  
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>














</div>    
@endsection