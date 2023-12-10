@extends('layouts.app')
@section('content')
<form  method="POST" action="{{route('auth.login')}}">
    @csrf
    <div class="row" style="padding-top: 150px;">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4" name="email">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword4" name="password">
        </div>
        <div class="col-12" style="padding-top: 15px">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </div>
</form>
@endsection