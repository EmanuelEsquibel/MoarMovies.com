@extends('layouts.administration')
<div class="success">
  <?php print Session::get('status'); ?>
</div>
@section('content')
  <table class="tableUsers">
    <thead>
        <tr>
          <th>Name</th>
          <th>Mail</th>
          <th>Operator</th>
        </tr>
    </thead>
    <tbody>
      @foreach( $users as $user )
          <tr>
            <td> {{ $user -> name }} </td>
            <td> {{ $user -> email }} </td>
            <td>
              {!! link_to_route( 'user.edit', $title = "Edit", $parameters = $user -> id, $attributes = null ) !!}
            </td>
          </tr>
      @endforeach
    </tbody>
  </table>
  {!! $users -> render() !!}
@stop
