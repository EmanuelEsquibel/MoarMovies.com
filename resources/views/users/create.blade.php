@extends('layouts.administration')
@section('content')

  {!!Form::open( [ 'route' => 'user.store' , 'method' => 'post' ] ) !!}
    @include('form.createForm')
  {!! Form::close() !!}

  @include('alerts.errorValidate')

@stop
