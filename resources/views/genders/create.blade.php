@extends('layouts.administration')
@section('content')
  {!! Form::open() !!}
    {!! Form::label('genre', 'Name') !!}
    {!! Form::text( 'genre' ) !!}
    {!! link_to( '#', $title = 'Add', $attributes = [ 'id' => 'add', 'class' => 'add'], $secure = null) !!}
  {!! Form::close() !!}
@endsection
