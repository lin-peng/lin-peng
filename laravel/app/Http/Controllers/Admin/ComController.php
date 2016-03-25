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

class ComController extends CommonController
{	
	//公司列表信息展示
	public function company(){
		$companyall = DB::table('company')->get();
    	return view("admin/com/companylist",['companyall'=>$companyall]);
	}
	//公司列表信息全部展示
	public function comall()
	{
		$comall = DB::table('company')->take(1)->get();
    	return view("admin/com/comlist",['row'=>$comall]);
	}
	//修改公司信息
	public function comupdate()
	{
		$com_id = Input::get("com_id");
		$com_name = Input::get("com_name");
		$com_phone = Input::get("com_phone");
		$com_email = Input::get("com_email");
		$com_address = Input::get("com_address");
		$com_team = Input::get("com_team");
		$com_desc = Input::get("com_desc");
		$com_updatetime = date("Y-m-d H:i:s",time());
		$comupdate = DB::table('company')
	 		->where('com_id', $com_id)
	 		->update(array('com_name'=>"$com_name","com_phone"=>"$com_phone","com_email"=>"$com_email","com_address"=>"$com_address","com_desc"=>"$com_desc","com_updatetime"=>"$com_updatetime","com_team"=>"$com_team"));
	 	if($comupdate){
	 		echo "<script>alert('修改成功');location.href='company';</script>";
	 	}else{
	 		echo "<script>alert('修改成功');location.href='comall';</script>";
	 	}
	}
	
}