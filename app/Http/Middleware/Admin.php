<?php namespace LaravelProject\Http\Middleware;

use Session;
use Closure;
use illuminate\Contracts\Auth\Guard;

class Admin
{
  protected $auth;

  public function __construct( Guard $auth ){
    $this -> auth = $auth;
  }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      if( $this -> auth -> user() -> id != 1 )
      {
        Session::flash('notPrivileges', 'Without privileges');
        return redirect() -> to('admin');
      }
        return $next($request);
    }
}
