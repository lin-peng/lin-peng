<?php

namespace App\Http\Controllers\admin;
//实例化DB
use DB;
use Request;
use Illuminate\Support\Facades\Input; 
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AdminController extends CommonController
{	
	//后台首页
	public function index(){
    	return view("admin/index");
	}
	//管理员列表
	public function userlist()
	{
		$userall = DB::table('admin')->join('role', 'admin.role_id', '=', 'role.role_id')->get();
		// print_r($roleall);die;
		return view("admin/userlist",['userall'=>$userall]);
	}
	//添加管理员表单页面
	public function useradd()
	{
		$roleall = DB::table('role')->orderby("role_id","asc")->get();
		return view("admin/useradd",['roleall'=>$roleall]);
	}
	//添加管理员
	public function useradds()
	{
		$role_id = Input::get("role_id");
		$a_name = Input::get("a_name");
		$a_pwd = md5(Input::get("a_pwd"));
		$a_time = date("Y-m-d H:i:s",time());
		$useradd = DB::table('admin')->insert(array("a_name"=>"$a_name","a_pwd"=>"$a_pwd","a_time"=>"$a_time","role_id"=>$role_id,));
		if($useradd)
		{
			echo "<script>alert('添加成功');location.href='userlist';</script>";
		}else{
			echo "<script>alert('添加失败');location.href='useradd';</script>";
		}
		
		
	}
	//当行列表
	public function navlist()
	{
		$navlist = DB::table('nav')->orderby("nav_time","desc")->get();
		// print_r($navlist);die;
		return view("admin/navlist",['navall'=>$navlist]);
	}
	//导航添加页面
	public function navadd()
	{
		return view("admin/navadd");
	}
	//导航添加数据
	public function navadds()
	{
		$nav_name = Input::get("nav_name");
		$nav_link = Input::get("nav_link");
		$nav_status = Input::get("nav_status");
		$nav_time = date("Y-m-d H:i:s",time());
		$navadd = DB::table('nav')->insert(array("nav_name"=>"$nav_name","nav_link"=>"$nav_link","nav_time"=>"$nav_time","nav_status"=>$nav_status,));
		if($navadd)
		{
			echo "<script>alert('添加成功');location.href='navlist';</script>";
		}else{
			echo "<script>alert('添加失败');location.href='navadd';</script>";
		}
	}

}
