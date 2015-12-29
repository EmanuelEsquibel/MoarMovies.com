<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Administration</title>
    {!! Html::style( '../public/css/administration.css' ) !!}
    {!! Html::style( '../public/css/formUser.css' ) !!}
    {!! Html::style( '../public/css/showUsers.css' ) !!}
    {!! Html::style( '../public/css/formGenders.css' ) !!}
    {!! Html::style( '../public/css/showGenders.css' ) !!}
  </head>
  <body>

    <div class="main">

      <div class="divLeftC">
        <div class="menu">
          <ul>
            <li class="title">Administration</li>
            <hr>
            My Info
            <div class="userInfo">
              <p class="userLog"> Your name -> {!!  Auth::user() -> name !!} </p>
              <p class="userLog"> Your email -> {!!  Auth::user() -> email !!} </p>
              <a href="logout">Logout</a>
            </div>
            <br>
            @if( Auth::user() -> id == 1 )
              <li>
                <li class="titleList">Users</li>
                <li class="href"><a href="{!! URL::to('user/create') !!}">Create</a></li>
                <li class="href"><a href="{!! URL::to('user') !!}">All users</a></li>
              </li>
            @endif
            <br>
            <li>
              <li class="titleList">Genres</li>
              <li class="href"><a href="{!! URL::to('genders/create') !!}">Create</a></li>
              <li class="href"><a href="{!! URL::to('genders') !!}">Read</a></li>
              <li class="href"><a href="create">Update</a></li>
              <li class="href"><a href="create">Delete</a></li>
            </li>
            <br>
            <li>
              <li class="titleList">Movies</li>
              <li class="href"><a href="create">Create</a></li>
              <li class="href"><a href="create">Read</a></li>
              <li class="href"><a href="create">Update</a></li>
              <li class="href"><a href="create">Delete</a></li>
            </li>
          </ul>
        </div>
      </div>

      <div class="divRightC">
        <div class="content">
          @yield('content')
          @include('alerts.withoutPrivileges')
        </div>
      </div>
    </div>
    {!! Html::script('js/jquery-1.11.3.js') !!}
    @section('script')
    @show
  </body>
</html>
