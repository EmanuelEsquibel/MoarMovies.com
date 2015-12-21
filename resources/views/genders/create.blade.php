@extends('layouts.administration')
@section('content')
  {!! Form::open() !!}
    <input type="hidden" id="token" name="token" value="{{ csrf_token() }}">
    {!! Form::label('textValue', 'Name') !!}
    {!! Form::text( 'textValue', null, $attributes = [ 'id' => 'textValue' ] ) !!}
    {!! link_to( '#', $title = 'Add', $attributes = [ 'id' => 'buttonAdd', 'class' => 'add'], $secure = null) !!}
  {!! Form::close() !!}
@endsection
