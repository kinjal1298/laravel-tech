<?php
namespace App\Http\Middleware;
use closure;
use Illuminate\Http\Request;

class CustAuth
{
	//@param\Closure $next
	public function handle(Request $request,Closure $next)
	{
		if(!session()->has('user'))
		{
			return redirect('/');
		}
		 return $next($request);
	}
}
?>