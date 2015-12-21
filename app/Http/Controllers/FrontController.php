<?php

namespace LaravelProject\Http\Controllers;

use Illuminate\Http\Request;

use LaravelProject\Http\Requests;
use LaravelProject\Http\Controllers\Controller;
use Auth;
use Redirect;
class FrontController extends Controller
{
    public function __construct()
    {
      $this -> middleware( 'auth', [ 'only' => 'admin'] );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('index');
    }
    public function login()
    {
      if( Auth::user() ){
        return view('layouts.administration');
      }else{
        return view('auth.login');
      }
    }
    public function contact()
    {
      return view('contact');
    }
    public function review()
    {
      return view('review');
    }
    public function admin()
    {
      return view('layouts.administration');
    }
}
