<?php

namespace LaravelProject\Http\Controllers;

use Illuminate\Http\Request;

use LaravelProject\Http\Requests;
use LaravelProject\Http\Controllers\Controller;
use LaravelProject\Http\Requests\LogRequest;
use Auth;
use Session;
use Redirect;
class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LogRequest $request)
    {
        if( Auth::attempt( [ 'name' => $request['username'], 'password' => $request['password'] ] ) )
        {
          return Redirect::to('admin');
        } else {
          Session::flash('userNotFound', 'User not found');
          return Redirect::to('login');
        }
    }

    public function logout()
    {
      Auth::logout();
      return Redirect::to('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
