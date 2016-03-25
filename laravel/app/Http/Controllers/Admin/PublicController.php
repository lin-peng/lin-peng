<?php

namespace App\Http\Controllers\admin;
session_start();
//实例化DB
use DB;
use Illuminate\Support\Facades\Input; 
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class PublicController extends BaseController
{
	//登录方法
	public function login(){

		return view("admin/login");	

	}
	//处理用户登录
	public function dologin(){
		$name = Input::get("username");
		$pwd = Input::get("password");
		$is_name = DB::table("admin")->where("a_name",$name)->get();
		if ($is_name) {
			if($is_name[0]->a_pwd == md5($pwd)){
				$_SESSION["name"]=$name;
				header("location:admin");
			}else{
				echo "<script>alert('密码有误');location.href='login';</script>";
			}
			
		}else{
			echo "<script>alert('用户名不存在');location.href='login';</script>";
		}		
	}

	//退出
	public function outlogin(){
		unset($_SESSION['name']);
      if(empty($_SESSION['name'])){
         echo "<script>alert('退出成功');location.href='login'</script>";
      }
	}
}
