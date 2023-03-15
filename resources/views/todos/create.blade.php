@extends('todos.layout')

@section('content')
<div>
    <div>
            <h2>Add New Todo</h2>
            <a href="{{ route('todos.index') }}">Back</a>
    </div>
</div>
@if ($errors->any()) 
    <div></div>
@endif

@endsection