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

class ProController extends CommonController
{	
	//产品服务列表
	public function product(){
		$proall = DB::table('product')->orderby("pro_time","desc")->get();
    	return view("admin/pro/prolist",['proall'=>$proall]);
	}
	//产品添加页面
	public function productadd()
	{
		return view("admin/pro/proadd");
	}
	//产品添加
	public function productadds()
	{
		$pro_name = Input::get("pro_name");
		$pro_link = Input::get("pro_link");
		$pro_desc = Input::get("pro_desc");
		$pro_time = date("Y-m-d H:i:s",time());
		$pro_img = $_FILES['pro_img'];
		$c_path = "./image/".md5($pro_img['name']).substr($pro_img['name'],strrpos($pro_img['name'],"."));
		$succ = move_uploaded_file($pro_img['tmp_name'], $c_path);
		if($succ){
			$proadd = DB::table("product")->insert(array("pro_name"=>"$pro_name","pro_link"=>"$pro_link","pro_img"=>"$c_path","pro_desc"=>"$pro_desc","pro_time"=>"$pro_time"));
			if($proadd)
			{
				echo "<script>alert('添加成功');location.href='product';</script>";
			}else{
				echo "<script>alert('添加失败');location.href='productadd';</script>";
			}
		}
	}
	
}