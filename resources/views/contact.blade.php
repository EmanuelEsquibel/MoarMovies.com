@extends('layouts.main')

@section('content')
    <div class="containerContact">
      <div class="divForm">
        <form class="form" action="" method="post">
          <input type="text" name="name" class="input" placeholder="Ingrese su nombre">
          <br>
            <input type="text" name="email" class="input" placeholder="Ingrese su email">
          <br>
          <textarea name="subjet" rows="8" cols="40" placeholder="Asunto" class="areas"></textarea>
          <br>
          <br>
          <input type="submit" name="submit" class="submit" value="Enviar">
        </form>
      </div>
    </div>
@stop
