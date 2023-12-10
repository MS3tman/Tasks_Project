@extends('layouts.app')
@section('content')
<form method="POST" action="{{route('tasks.store')}}">
    @csrf
    <div class="col-md-4 position-relative">
      <label for="validationTooltip01" class="form-label">Task Name</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Task Name" required name="name"> 
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
   
    <div class="mb-3" style="padding-top: 30px">
        <label for="validationTextarea" class="form-label">Description</label>
        <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Enter your Description" name="description"></textarea>
        {{-- <div class="invalid-feedback">
          Please enter a message in the textarea.
        </div> --}}
      </div>
    
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Save</button>
    </div>
</form>
@endsection