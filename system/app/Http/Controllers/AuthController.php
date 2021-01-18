<?php 

namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use App\Models\Pembeli;
use App\Models\Penjual;

class AuthController extends Controller
{
	// admin
	function showLogin(){
		return view('login');
	}

	function loginadminProcess(){
		// untuk login biasa tanpa multi user
        // if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
        //     return redirect('admin')->with('success', 'Login Berhasil');
        // } else {
        //     // return redirect('template.admin')->with('success', 'Login Berhasil');
        //     return back()->with('danger', 'Login gagal. Silahkan cek email dan password anda!');
        // }





		// if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
		// 	$user = Auth::user();
		// 	if($user->level == 1) return redirect('admin/penjual')->with('success', 'Login Berhasil');
		// 	if($user->level == 0) return redirect('admin/pembeli')->with('success', 'Login Berhasil');
		// }else{
		// 	return back()->with('danger', 'Login Gagal, Silahkan Cek Email dan Password Anda');
		// }



		// $email = request('email');
  //       $user = Pembeli::where('email', $email)->first();
  //       if ($user) {
  //           $guard = 'pembeli';
  //       } else {
  //           $user = Penjual::where('email', $email)->first();
  //           if ($user) {
  //               $guard = 'penjual';
  //           } else {
  //               $guard = false;
  //           }
  //       }
  //       if (!$guard) {
  //           return back()->with('danger', 'login gagal, email tidak dapat ditemukan');
  //       } else {
  //           if (Auth::guard($guard)->attempt(['email' => request('email'), 'password' => request('password')])) {
  //               return redirect('admin/$guard')->with('success', 'Anda berhasil login');
  //           } else {
  //               return back()->with('danger', 'login gagal silahkan cek email dan password');
  //           }
  //       }

		// Multi Authentication
		if (request('login_as') == 1) {
			if(Auth::guard('pembeli')->attempt(['email' => request('email'), 'password' => request('password')])){
				return redirect('main')->with('success', 'Login Berhasil');
			}else{
				return back()->with('danger', 'Login Gagal, Silahkan Cek Email dan Password Anda');
			}
		}else{
			if(Auth::guard('penjual')->attempt(['email' => request('email'), 'password' => request('password')])){
				return redirect('admin/penjual')->with('success', 'Login Berhasil');
			}else{
				return back()->with('danger', 'Login Gagal, Silahkan Cek Email dan Password Anda');
			}
		}
	}

	function logout(){
		Auth::logout();
		Auth::guard('pembeli')->logout();
		Auth::guard('penjual')->logout();
		return redirect('login-admin');
	}
	function create(){
		return  view ('login-admin');
	}
	function registration(){
		$user = new User;
		$user->nama = request('nama');
		$user->username = request('username');
		$user->email = request('email');
		$user->password = bcrypt(request('password'));
		$user->save();

		return redirect ('login-admin')->with('success', 'Data Berhasil Ditambahkan');

	}

	function forgotPassword(){

	}

	// public
	function showLoginadmin(){
		return view('login-admin');
	}
}