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

class LunController extends CommonController
{	
	//轮播图列表添加
	public function lunimg()
	{
		//查询导航栏
		$navrow = DB::table("nav")->select('nav_name','nav_id')->get();
    	return view("admin/lunbo/lunadd",['navrow'=>$navrow]);
	}
	//添加轮播图
	public function lunadds()
	{
		$lun_status = Input::get("lun_status");	
		$lun_title = Input::get("lun_title");
		$nav_id = Input::get("nav_id");
		$lun_time = date("Y-m-d H:i:s",time());
		$lun_update_time= date("Y-m-d H:i:s",time());
		$lun_img = $_FILES['lun_img'];
		$c_path = "./image/lun/".md5($lun_img['name']).substr($lun_img['name'],strrpos($lun_img['name'],"."));
		$succ = move_uploaded_file($lun_img['tmp_name'], $c_path);
		if($succ){
			$lun_add = DB::table("lunbo")->insert(array("lun_img"=>"$c_path","nav_id"=>"$nav_id","lun_title"=>"$lun_title","lun_time"=>$lun_time,"lun_update_time"=>$lun_update_time,"lun_status"=>$lun_status));
			if($lun_add)
			{
				echo "<script>alert('添加成功');location.href='product';</script>";
			}else{
				echo "<script>alert('添加失败');location.href='productadd';</script>";
			}
		}
	}
	//轮播图列表
	public function lunlists()
	{
		$lunlist = DB::table("lunbo")
		->join('nav', 'lunbo.nav_id', '=', 'nav.nav_id')
		->get();
		return view("admin/lunbo/lunlist",['lunlist'=>$lunlist]);
	}



}