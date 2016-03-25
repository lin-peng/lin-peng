@extends('index/header')
@section('content')
	<link href="top/css/css.css" rel="stylesheet" type="text/css" />
	<link href="top/css/public.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="top/js/jquery-1.8.0.min.js"></script>
  
    <div class="clear"></div>
    <div class="bannerbx">
      <div class="banner">
        <img src="{{$lunrow[0]->lun_img}}" width="1920" height="249" title="{{$lunrow[0]->lun_title}}" alt="暂无"/>
      </div><!--banner-->
    </div><!--bannerbx-->
    <div class="clear"></div>
    <div class="content">
      <div class="path"><a href="#">首页</a> > 关于我们</div>
      <div class="content_c">
        <div class="aside">
          <span>关于我们</span>
          <div class="aside_list">
            <ul>
              <li class="aside_list1"><a href="about">公司介绍</a></li>
              <li class="aside_list2"><a href="Cooperation" class="aside2_over">合作机构</a></li>
              <li class="aside_list3"><a href="team">顾问团队</a></li>
            </ul>
          </div><!--aside_list-->
        </div><!--aside-->
        <div class="right">
          <div class="about_title">合作机构</div>
          <div class="cooperation">
            <ul>
              <li><a href="#"><img src="top/images/bj.gif" width="176" height="48" /></a></li>
              <li><a href="#"><img src="top/images/dl.gif" width="167" height="43" /></a></li>
              <li><a href="#"><img src="top/images/gd.gif" width="109" height="71" /></a></li>
              <li><a href="#"><img src="top/images/gf.gif" width="165" height="42" /></a></li>
              <li><a href="#"><img src="top/images/hq.gif" width="143" height="64"/></a></li>
              <li><a href="#"><img src="top/images/hx.gif" width="194" height="67" /></a></li>
              <li><a href="#"><img src="top/images/jt.gif" width="194" height="67" /></a></li>
              <li><a href="#"><img src="top/images/hengx.gif" width="163" height="49"/></a></li>
              <li><a href="#"><img src="top/images/zx.gif" width="160" height="43" /></a></li>
            </ul>
          </div>
        </div><!--right-->
      </div><!--content_c-->
    </div><!--content-->
    <div class="clear"></div>
    @stop