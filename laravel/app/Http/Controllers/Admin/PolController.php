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

class PolController extends CommonController
{	
	//法律法规添加页面
	public function policys(){
    	return view("admin/pol/index");
	}
	//添加法律法规信息
	public function policyadd()
	{
		$pol_name = Input::get("pol_name");
		$pol_time = date("Y-m-d H:i:s",time());
		$pol_form = Input::get("pol_form");
		$pol_author = Input::get("pol_author");
		$pol_name = Input::get("pol_name");
		$pol_img = $_FILES['pol_img'];
		$pol_desc = Input::get("pol_desc");
		$c_path = "./image/pol/".md5($pol_img['name']).substr($pol_img['name'],strrpos($pol_img['name'],"."));
		$succ = move_uploaded_file($pol_img['tmp_name'], $c_path);
		if($succ){
			$pol_add = DB::table("policy")->insert(array("pol_name"=>"$pol_name","pol_time"=>"$pol_time","pol_form"=>"$pol_form","pol_author"=>"$pol_author","pol_img"=>"$c_path","pol_desc"=>"$pol_desc"));
			if($pol_add)
			{
				echo "<script>alert('添加成功');location.href='policylist';</script>";
			}else{
				echo "<script>alert('添加失败');location.href='policys';</script>";
			}
		}
	}
	//法律法规列表
	public function policylist()
	{
		$polall = DB::table("policy")->orderby("pol_time")->get();
		print_r($polall);die;
	}



}