@extends('index/header')

@section('content')
	<link href="top/css/css.css" rel="stylesheet" type="text/css" />
	<link href="top/css/public.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="top/js/jquery-1.8.0.min.js"></script>
 
    
    <div class="clear"></div>
    <div class="bannerbx">
      <div class="banner">
        <img src="{{$lunrow[0]->lun_img}}" width="1920" height="249" />
      </div><!--banner-->
    </div><!--bannerbx-->
    <div class="clear"></div>
    <div class="content">
      <div class="path"><a href="#">首页</a> > <a href="#">服务项目</a> >  贷款担保</div>
      <div class="content_c">
        <div class="aside">
          <span>服务项目</span>
          <div class="aside_list">
            <ul>
            <!-- @foreach($proall as $k=>$v) --> -->
              <li class="aside_list6"><a href="">经济合同担保</a></li>
              <li class="aside_list7"><a href="" class="aside7_over">贷款担保</a></li>
              <li class="aside_list8"><a href="">履约担保</a></li>
              <li class="aside_list9"><a href="">诉讼保全担保</a></li>
              <li class="aside_list10"><a href="">原材料赊购担保</a></li>
              <li class="aside_list11"><a href="">咨询顾问</a></li>
            <!-- @endforeach -->
            </ul>
          </div><!--aside_list-->
        </div><!--aside-->
        <div class="right">
          <div class="about_title">贷款担保</div>
          <div class="about_nr">
          <p>{{}}</p>
          </div>
        </div><!--right-->
      </div><!--content_c-->
    </div><!--content-->
    <div class="clear"></div>
   
@stop
