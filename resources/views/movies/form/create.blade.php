<div class="">
  {!! Form::label('name', 'Name') !!}
  {!! Form::text('name', null, ['class' => 'input', 'placeholder' => 'Movie name']) !!}

  {!! Form::label('cast', 'Cast') !!}
  {!! Form::text('cast', null, ['class' => 'input', 'placeholder' => 'Movie Caster']) !!}

  {!! Form::label('direction', 'Direction') !!}
  {!! Form::text('direction', null, ['class' => 'input', 'placeholder' => 'Movie direction']) !!}

  {!! Form::label('duration', 'Duration') !!}
  {!! Form::text('duration', null, ['class' => 'input', 'placeholder' => 'Movie duration']) !!}

  {!! Form::label( 'genre_id','Genres') !!}
  {!! Form::select( 'genre_id', $genres, null, ['class' => 'input'] ) !!}

  {!! Form::label( 'photo', 'Photo') !!}
  {!! Form::file( 'photo', ['class' => 'input'] ) !!}
  <br>
  {!! Form::submit('Register', ['class' => 'input']) !!}
</div>
