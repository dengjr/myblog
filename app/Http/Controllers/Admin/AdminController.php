<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class AdminController extends CommonController{
	//首页
	public function index(Request $request){
		 return view('admin.index');
	}
	//网站设置页
	public function info(Request $request){
		 return view('admin.info');
	}
	//修改密码页
	public function pass(Request $request){
		 return view('admin.pass');
	}
	//单页管理页
	public function page(Request $request){
		 return view('admin.page');
	}
	//首页轮播
	public function adv(Request $request){
		 return view('admin.adv');
	}
	//留言管理页
	public function book(Request $request){
		 return view('admin.book');
	}

	//栏目管理页
	public function column(Request $request){
		 return view('admin.column');
	}

	//添加内容页
	public function add(Request $request){
		 return view('admin.add');
	}

	//内容管理页
	public function list1(Request $request){
		 return view('admin.list');
	}

	//分列管理页
	public function cate(Request $request){
		 return view('admin.cate');
	}

	//系统提示信息页
	public function tips(Request $request){
		 return view('admin.tips');
	}

	//系统基本信息页
	public function cms(Request $request){
		 return view('admin.cms');
	}

	public function clearSession(){
		session(['user' => '']);
		return redirect('/login');
	}

}
?>