@extends('layouts.app')
@section('content')

<table class="table" style="margin-top: 100px">
    <thead class="table-light">
        <tr>
            <th>ID</th>
            <th>Task Name</th>
            <th>Description</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
      @foreach($tasks as $task)
      <tr>
        <td>{{$task->id}}</td>
        <td>{{$task->name}}</td>
        <td>{{$task->description}}</td>
        <td>
          @if($task->completed == 'false'){
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            </div>
          }
          @else{
            
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            </div>
            {{Task::create(request()->completed['true']);}}
          }
          @endif
        </td>
        <td>
            <a href="goole.com"><span class="material-symbols-outlined">edit</span></a>
        </td>
      </tr>
      @endforeach
    </tbody>
</table>
    <div class="col-12">
        <a href="{{route('tasks22.create')}}"><button class="btn btn-primary" type="submit">Create Task</button></a>
    </div>
@endsection

