@extends('layouts.app')
@section('content')
<form  method="POST" action="{{route('auth.register')}}">
  @csrf {{-- must sent this with every submit --}}
  <div class="row">
      <label for="formGroupExampleInput" class="form-label">First Name</label>
      <div class="col">
        <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="first_name">
      </div> <br><br>
      <label for="formGroupExampleInput" class="form-label">Last Name</label>
      <div class="col">
        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="last_name">
      </div>
  </div>
  <div class="mb-3" style="padding-top: 20px">
      <label for="formGroupExampleInput" class="form-label">Email</label>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="email" name="email">
  </div>
  <div class="mb-3">
      <label for="formGroupExampleInput2" class="form-label">Password</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="password" name="password">
  </div>
  <div class="col-12">
      <button type="submit" class="btn btn-primary" >Sign up</button>
  </div>
</form>
@endsection