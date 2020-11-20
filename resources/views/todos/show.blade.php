@extends('layouts.app')
@section('title')
    Single Todo : {{ $todo->name }}
@endsection
@section('content')
<h1 class="text-center my-5">{{ $todo->name }}</h1>
<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card card-default">
      <div class="card-header">
        Details    
      </div>
      <div class="card-body">
        <ul class="list-group">
            <li class="list-group-item">
              {{ $todo->description }}
            </li>
        </ul>
          <div class="form-group text-center mt-2">
            <a href="{{ URL::to('/todos/'.$todo->id.'/edit') }}" class="btn btn-info">Edit</a>
            <a href="{{ URL::to('/todos/'.$todo->id.'/delete') }}" class="btn btn-danger">Delete</a>
        </div>
      </div>
    </div>  
  </div>  
</div>    
@endsection