<?php
/**
 * Created by PhpStorm.
 * User: yoshiki-voyager
 * Date: 16/09/07
 * Time: 13:33
 */

namespace App\Http\Middleware;


use Illuminate\Support\Facades\Auth;

class Authenticate
{
    public function handle($request,$next,$guard = null){
        if(Auth::guard($guard)->guest()){
            if($request->ajax()){
                return response('Unauthorized.',401);
            }else{
                return redirect()->route('home');
            }
        }
        return $next($request);
    }
}