<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Http\Requests\Login as LoginRequest;

class AuthController extends BaseController
{
    public function login (LoginRequest $request)
    {
    	\Session::put('user', array(
    		'username' => $request->input('username')
    	));
    	return redirect('all-events');
    }
}
