<?php 

namespace App\Http\Controllers;

class AuthController extends Controller
{
	// admin
	function showLogin(){
		return view('login');
	}

	function processLogin(){

	}

	function logout(){

	}

	function registration(){

	}

	function forgotPassword(){

	}

	// public
	function showLoginadmin(){
		return view('login-admin');
	}
}