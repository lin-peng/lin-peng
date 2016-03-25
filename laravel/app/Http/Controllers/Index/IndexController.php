<?php

namespace App\Http\Controllers\Index;

use DB;
use Illuminate\Support\Facades\Input; 
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class IndexController extends BaseController
{
    public function comm($a,$b)
    {
        return DB::table("lunbo")
        ->join("nav","lunbo.nav_id",'=',"nav.nav_id")
        ->where(array("lunbo.nav_id"=>$a,"lunbo.lun_status"=>1))
        ->orderby("lun_update_time","desc")
        ->take($b)
        ->get();
    }
	/*
		首页展示
	*/
    public function index()
    {
        //轮播图和公司信息
        $proall = DB::table("product")->get();
        $cominfo = DB::table("company")->get();
        //最新两条公司动态
        $doall = DB::table("dongtai")->orderby("do_time","desc")->take(2)->get();
        foreach ($doall as $k => $v) {
            $doall[$k]->do_desc = substr($v->do_desc,0,50);
        }
        // print_r($doall);die;
        $lunrow = $this->comm(1,2);
        // print_r($proall);die;
    	return view('index/index',['lunrow'=>$lunrow,'cominfo'=>$cominfo,"proall"=>$proall,'doall'=>$doall]);
    }
    /*
		关于我们
	*/
    public function about()
    {
        $cominfo = DB::table("company")->get();
        $lunrow = $this->comm(2,1);
    	return view('index/about',['lunrow'=>$lunrow,'cominfo'=>$cominfo]);
    }
    

    /*
		服务项目
	*/
    public function service()
    {
        $proall = DB::table("product")->get();
        $cominfo = DB::table("company")->get();
        $lunrow = $this->comm(3,1);
    	return view('index/service',['lunrow'=>$lunrow,'cominfo'=>$cominfo,"proall"=>$proall]);
    }
    /*
		新闻中心
	*/
    public function news()
    {
        $cominfo = DB::table("company")->get();
        $lunrow = $this->comm(4,1);
    	return view('index/news',['lunrow'=>$lunrow,'cominfo'=>$cominfo]);
    }
    /*
		政策法规
	*/
    public function policy()
    {
        //法律法规列表
        $polirow = DB::table("policy")->orderby("pol_time","desc")->take(1)->get();
        $polirow[0]->pol_desc = substr($polirow[0]->pol_desc,0,50);
        $poliarr = DB::table("policy")->orderby("pol_time","desc")->take(4)->get();
        $cominfo = DB::table("company")->get();
        $lunrow = $this->comm(5,1);
    	return view('index/policy',['lunrow'=>$lunrow,'cominfo'=>$cominfo,'polirow'=>$polirow,'poliarr'=>$poliarr]);
    }
    /*
        政策法规列表
    */
    public function policy_about()
    {
        /*
            查询所有的法律法规
            分页
        */
        $arr = DB::table("policy")->get();
        // 每页显示一条
        // print_r($arr);die;
        $cid = Input::get("pro_id");
        $count=count($arr);
        // echo $count;
        //如果get方式查看详情信息的话,
        // 1.根据id获取信息显示到详情页面
        // 2.再根据id信息的键明在$arr数组中获取上一条和下一条的键明
        // 3.判断键明,如果键明小于0的话说明是第一页了,就在详情页面不显示第一条的pol_name链接了
        // 4.判断键明大于$count的话说明到最后一页了,就在向明页面不要显示最后一条pol_name链接了
        if($cid){
            foreach ($arr as $k => $v) {
                if($v->pol_id == $cid){
                    $aa = $k;
                    //上一条   $bb为下一页 $cc 为上一页 
                    if($aa-1<0)
                    {
                        $cc = "没";       //判断上一页有没有数据
                    }else if($aa == 0){
                        $cc = 0;            //没有数据显示第一页
                    }else{
                        $cc = $aa-1;     //否则-1查询上一条数据
                    }
                    //下一条
                    if($aa+1>$count)
                    {
                        $bb = "没";
                    }else if($aa == $count){
                        $bb = $count;
                    }else{
                        $bb = $aa+1;
                    }
                }
            }
            
        }else{
            $aa = 0;  
            //$bb为下一页 $cc 为上一页 
            if($aa-1<0)
            {
                $cc = "没";
            }else if($aa == 0){
                $cc = 0;
            }else{
                $cc = $aa-1;
            }
            //下一条
            if($aa+1>$count)
            {
                $bb = "没";
            }else if($aa == $count){
                $bb = $count;
            }else{
                $bb = $aa+1;
            }
        }
        // echo $cc."<br/>";
        // echo $aa."<br/>";
        // echo $bb."<br/>";
        // die;
        foreach ($arr as $k => $v) {
                 //中间
                $arr1 = $arr[$aa];  
                //上一条   $arr3 为上一页 的数据
                if($cc == "没"){
                    $arr3 = "";
                }else if($cc == 0){
                    $arr3 = $arr[0];
                }else{
                    $arr3 = $arr[$cc];
                }
                //下一条   $arr2 为下一页 的数据
                if($bb == "没"){
                    $arr2 = "";
                }else if($bb == $count){
                    $arr2 = $arr[$count-1];
                }else{
                    $arr2 = $arr[$bb];
                }
                
            }
        // print_r($arr3);
        // print_r($arr1);
        // print_r($arr2);die;
        $cominfo = DB::table("company")->get();
        $lunrow = $this->comm(4,1);
        return view('index/policy_about',['lunrow'=>$lunrow,'cominfo'=>$cominfo,'arr1'=>$arr1,'arr2'=>$arr2,'arr3'=>$arr3,'count'=>$count]);
    }
    /*
		联系我们
	*/
    public function contact()
    {
        $cominfo = DB::table("company")->get();
        $lunrow = $this->comm(6,1);
    	return view('index/contact',['lunrow'=>$lunrow,'cominfo'=>$cominfo]);
    }
    /*
		关于我们->>工作机构
	*/
    public function cooperation()
    {
        $cominfo = DB::table("company")->get();
        $lunrow = $this->comm(2,1);
    	return view('index/cooperation',['lunrow'=>$lunrow,'cominfo'=>$cominfo]);
    }
    /*
		关于我们->>顾问团队
	*/
    public function team()
    {
        $cominfo = DB::table("company")->get();
        $lunrow = $this->comm(2,1);
    	return view('index/team',['lunrow'=>$lunrow,'cominfo'=>$cominfo]);
    }
    /*
        服务项目详情
    */
    public function service_about()
    {
        $cominfo = DB::table("company")->get();
        $lunrow = $this->comm(2,1);
        $pro_id = Input::get("id");
        if($pro_id)
        {
            $prorow = DB::table("product")->where("pro_id","$pro_id")->get();
        }
        $proalls = DB::table("product")->get();
        return view("index/pro/service_about",["proalls"=>$proalls,'lunrow'=>$lunrow,'cominfo'=>$cominfo,'prorow'=>$prorow]);
    }
    /*
        新闻列表
    */
    public function news_about()
    {
        $cominfo = DB::table("company")->get();
        $lunrow = $this->comm(2,1);
        return view('index/pro/news_about',['lunrow'=>$lunrow,'cominfo'=>$cominfo]);
    }

}
