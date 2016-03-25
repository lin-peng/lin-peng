<?php
namespace App\Http\Controllers\admin;
session_start();
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class CommonController extends BaseController
{
		//判断是否登录
		public function __construct(){
			
			$user_name = isset($_SESSION['name'])?$_SESSION['name']:"";
			if(empty($user_name)){
				echo "<script>alert('请先登录');location.href='login';</script>";
			}
		}
}