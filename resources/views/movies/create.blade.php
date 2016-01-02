@extends('layouts.administration')
@section('content')
  {!! Form::open(['route' => 'movies.store', 'method' => 'POST', 'files' => true ]) !!}
   @include('movies.form.create')
  {!! Form::close() !!}
@stop
