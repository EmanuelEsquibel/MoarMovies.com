@extends('layouts.administration')
@section('content')
  <table class="orangeTable">
    <thead>
      <th>Genders</th>
      <th>Operator</th>
    </thead>
    <tbody id="dataTable">
    </tbody>
  </table>
  <audio id="pleaseSelect">
    <source src="tracks/select.wav">
  </audio>
  <br>
  <!-- Delete genre -->
  <div class="confirmateDelete">
    <input type="hidden" id="token" name="token" value="{{ csrf_token() }}">
    Eliminar genero <span id="spanGenre"></span>? <br>
    <input name="" type="button" id="cancel" value="Cancel">
    <input name="" type="button" id="delete" value="Delete">
  </div>
  <!-- Update genre -->
  <div class="updateGenre">
    <input type="hidden" id="token" name="token" value="{{ csrf_token() }}">
    Modificando el genero <span id="spanGenreUpdate"></span>
    <br>
    <input type="text" class="genreValue" placeHolder="Put the new value">
    <input name="" type="button" id="cancelUpdate" value="Cancel">
    <input name="" type="button" id="updateGenreButton" value="Update">
  </div>
@endsection

@section('script')
  {!! Html::script('js/deleteGenre.js') !!}
@endsection
