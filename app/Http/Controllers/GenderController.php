<?php

namespace LaravelProject\Http\Controllers;

use Illuminate\Http\Request;

use LaravelProject\Http\Requests;
use LaravelProject\Http\Controllers\Controller;
use LaravelProject\Genre;
class GenderController extends Controller
{
    //Listing genres for ajax
    public function listing(){
      $genres = \LaravelProject\Genre::All();
      return response() -> json(
        $genres -> toArray()
      );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view( 'genders.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'genders.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if( $request -> Ajax() ){
        $genres = new Genre;
        $genres -> genre = $request -> genre;
        $genres -> save();
        return response() -> json([ "msg" => $request -> All() ]);
      }
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
    public function destroy( $id )
    {
      $user = \LaravelProject\Genre::Find( $id );
      $user -> delete();
    }
}
