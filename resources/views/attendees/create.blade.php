@extends('layout')

@section('content')
    
<h1>Add</h1>

{!! Form::open(['route' => 'attendees.store']) !!}
    @include('attendees._form')
{!! Form::close() !!}

@stop