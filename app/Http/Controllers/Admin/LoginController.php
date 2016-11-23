<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gregwar\Captcha\CaptchaBuilder;
use App\User;

class LoginController extends Controller{
	public function login(Request $request){
		if($request->isMethod('POST')){
			$user = User::find(1);
			$name = $request->input('name');
			$pwd = $request->input('password');
			echo($user['username']);
			if($name==$user['username'] && sha1($pwd)==$user['password']){
				session(['user' => $user]);
				return redirect('/');

			}
			else{
				return redirect('/login');
			}
		}
		else{
			return view('admin.login');
		}
		
	}
}
?>