<?php

namespace LaravelProject\Http\Controllers;

use Illuminate\Http\Request;
use LaravelProject\Http\Requests;
use LaravelProject\Http\Controllers\Controller;
use LaravelProject\Http\Requests\UserCreateRequest;
use LaravelProject\Http\Requests\UserUpdateRequest;
use Session;
use Redirect;
class UsuarioController extends Controller
{
    public function __construct()
    {
      $this -> middleware( 'auth' );
      $this -> middleware( 'admin' );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = \LaravelProject\User::paginate(2);
        if( $request -> ajax() ){
          return response()->json( view('users.showUsersAjax', compact('users') ) -> render() );
        }
        return view('users.show', compact('users') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( UserCreateRequest $request)
    {
        \LaravelProject\User::create([
          'name' => $request[ 'name' ],
          'email' => $request[ 'mail' ],
          'password' => bcrypt( $request[ 'password' ] )
        ]);
        return redirect('user') -> with('status', 'Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user = \LaravelProject\User::find($id);
      return view('users.edit',['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $user = \LaravelProject\User::find($id);
        $user -> fill( $request -> all() );
        $user -> save();
        return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $user = \LaravelProject\User::Find( $id );
      $user -> delete();
      return redirect('user') -> with('status', 'Succesfully');
    }
}
