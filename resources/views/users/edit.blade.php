@extends('layouts.administration')
@section('content')

  {!! Form::model($user, ['route' => [ 'user.update', $user->id ], 'method' => 'PUT' ]) !!}
    @include('form.editForm')
  {!! Form::close() !!}

  {!! Form::open( ['route' => ['user.destroy', $user -> id ], 'method' => 'DELETE' ] ) !!}
  {!! Form::submit('Delete!', [ 'class' => 'input' ] ) !!}
  {!! Form::close() !!}

  @include('alerts.errorValidate')
@stop
