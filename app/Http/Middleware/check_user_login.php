<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class check_user_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check())
        {
            if(Auth::user()->role == '1') //amdin
            {
                return $next($request);
            }
            elseif(Auth::user()->role == '0') //normal user
            {
                return $next($request);
            }
            else
            {
                $notification = array(
                    'msg' =>'you are not admin but a regular user',
                    'alert-type' =>'danger',
                );
                return redirect()->route('admin.login')->with($notification);
            }
        }
        else
        {
            $notification = array(
                'msg' =>'you are not admin',
                'alert-type' =>'danger',
            );
            return redirect('/')->with($notification);
        }
    }
}
