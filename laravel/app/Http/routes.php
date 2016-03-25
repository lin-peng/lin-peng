<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

/*
	前台
*/
//首页
Route::get("/","Index\IndexController@index");

//关于我们
Route::get("about","Index\IndexController@about");
		//合作机构
		Route::get("cooperation","Index\IndexController@cooperation");
		//顾问团队
		Route::get("team","Index\IndexController@team");
//服务项目
Route::get("service","Index\IndexController@service");
	Route::get("service_about","Index\IndexController@service_about");
//新闻中心
Route::get("news","Index\IndexController@news");
Route::get("news_about","Index\IndexController@news_about");
//政策法规
Route::get("policy","Index\IndexController@policy");
Route::get("policy_about","Index\IndexController@policy_about");
//联系我们
Route::get("contact","Index\IndexController@contact");

/*
	后台
*/

//登录页面
Route::get('login','Admin\PublicController@login');
Route::post('dologin','Admin\PublicController@dologin');
Route::get('admin','Admin\AdminController@index');


//退出
Route::get('outlogin','Admin\PublicController@outlogin');
//用户管理
Route::get('userlist','Admin\AdminController@userlist');
Route::get('useradd','Admin\AdminController@useradd');
Route::post('useradds','Admin\AdminController@useradds');
//导航管理
Route::get('navlist','Admin\AdminController@navlist');
Route::get('navadd','Admin\AdminController@navadd');
Route::post('navadds','Admin\AdminController@navadds');
//产品服务
Route::get('product','Admin\ProController@product');
Route::get('productadd','Admin\ProController@productadd');
Route::post('productadds','Admin\ProController@productadds');

//公司管理
Route::get('company','Admin\ComController@company');
Route::get('comall','Admin\ComController@comall');
Route::post('comupdate','Admin\ComController@comupdate');
//轮播图
Route::get('lunimg','Admin\LunController@lunimg');
Route::post('lunadds','Admin\LunController@lunadds');
Route::get('lunlists','Admin\LunController@lunlists');
//法律法规
Route::get('policys','Admin\PolController@policys');
Route::post('policyadd','Admin\PolController@policyadd');
Route::get('policylist','Admin\PolController@policylist');
//
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
