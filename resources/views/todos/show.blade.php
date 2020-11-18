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
      </div>
    </div>  
  </div>  
</div>    
@endsection