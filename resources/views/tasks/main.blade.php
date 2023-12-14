@extends('layouts.app')
@section('content')
<div style="border-color:black; border-style: groove; border-width:1px; border-color:darkgrey; border-radius:5px; padding:20px ">
  <table class="table" >
      <thead class="table-light">
          <tr>
              <th>ID</th>
              <th>Task Name</th>
              <th>Description</th>
              <th>Done</th>
              
          </tr>
      </thead>
      <tbody>
        @foreach($tasks as $task)
        <tr>
          <td>{{$task->id}}</td>
          <td>{{$task->name}}</td>
          <td>{{$task->description}}</td>
          <td>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              </div>
              <!-- <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
              </div> -->
          </td>
          <td>
            <form action="{{ route('to_edit', [$task->id]) }}" method="get">
            @csrf <!-- Add CSRF token for Laravel forms -->
            <button type="submit" class="btn btn-link">
                <span class="material-symbols-outlined" style="padding-right:5px">edit</span>
            </button>
            </form>
          </td>


          <td>
            <button class="btn btn-primary" type="submit">Delete</button>
          </td>
        </tr>
        @endforeach
      </tbody>
  </table>
    <div class="col-12">
        <a href="{{route('tasks22.create')}}"><button class="btn btn-primary" type="submit">Create Task</button></a>
    </div>
</div>
    
@endsection

