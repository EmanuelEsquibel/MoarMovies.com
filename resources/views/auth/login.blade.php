@if( Auth::user() )
  return redirect()->route('index');
@endif
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    MOARMOVIES.com
    <br>
    Login
    <br>
    {!! Form::open( [ 'route' => 'log.store', 'method' => 'POST' ] ) !!}
      {!! Form::text('username', null, ['placeholder' => 'Username'] ) !!}
      <br>
      {!! Form::password('password', ['placeholder' => 'Password'] ) !!}
      <br>
      {!! Form::Submit('Login') !!}
    {!! Form::close() !!}
    @include('alerts.errorValidate')
    @include('alerts.userNotFound')
  </body>
</html>
