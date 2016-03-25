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
      <div class="path"><a href="#">首页</a> > 联系我们</div>
      <div class="content_c contact">
        <div class="contact_title">联系我们</div>
        <div class="contact_t">
          <img src="top/images/contect_tel.gif" />
          <b>010-12345678</b>
        </div><!--contact_t-->
        <div class="contact_t">
          <img src="top/images/contect_mail.gif" />
          <b>DanBao@163.com</b>
        </div><!--contact_t-->
        <div class="contact_t">
          <img src="top/images/contect_wz.gif" />
          <span>北京市朝阳区建国路93号
万达广场8号楼1907室</span>
        </div><!--contact_t-->
        <div class="contact_map">
           <span>中鼎融德投资担保（北京）有限公司地址</span>
           <img src="top/images/contect_map.gif" width="366" height="302" />
        </div><!--contact_map-->
      </div><!--content_c-->
    </div><!--content-->
    <div class="clear"></div>
   @stop