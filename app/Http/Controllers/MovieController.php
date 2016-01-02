<?php

namespace LaravelProject\Http\Controllers;

use Illuminate\Http\Request;

use LaravelProject\Http\Requests;
use LaravelProject\Http\Controllers\Controller;
use Genre;
class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Este es el index de movies";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = \LaravelProject\Genre::Lists('genre', 'id');
        return view('movies.create', compact('genres') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      print $request;
        \LaravelProject\Movie::create([
          'id' => $request[ 'id' ],
          'name' => $request[ 'name' ],
          'cast' => $request[ 'cast' ],
          'direction' => $request[ 'direction' ],
          'duration' => $request[ 'duration' ],
          'genre_id' => $request[ 'genre_id' ],
          'photo' => $request[ 'photo' ]
        ]);
        return redirect('movies/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "Muestro un recurso especifico";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "Muestro un formulario  para editar un recurso";
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
