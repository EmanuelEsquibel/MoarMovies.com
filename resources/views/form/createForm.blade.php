{!! Form::label( 'name', 'Name ' ) !!}
{!! Form::text( 'name', null, ['class' => 'input', 'placeholder' => 'Here your Name' ])!!}
{!! Form::label( 'mail ', 'Mail ' ) !!}
{!! Form::text( 'mail', null, ['class' => 'input', 'placeholder' => 'Here your Mail' ] )!!}
{!! Form::label( 'password', 'Password ' ) !!}
{!! Form::password( 'password', ['class' => 'input', 'placeholder' => 'Here your Password'] ) !!}
<br>
{!! Form::submit( 'Register', [ 'class' => 'input' ] ) !!}
