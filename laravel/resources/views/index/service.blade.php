@extends('index/header')
@section('content')
	<link href="top/css/css.css" rel="stylesheet" type="text/css" />
	<link href="top/css/public.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="top/js/jquery-1.8.0.min.js"></script>
   
    <div class="clear"></div>
    <div class="bannerbx">
      <div class="banner">
        <img src="{{$lunrow[0]->lun_img}}" width="1920" height="249" title="{{$lunrow[0]->lun_title}}"/>
      </div><!--banner-->
    </div><!--bannerbx-->
    <div class="clear"></div>
    <div class="content">
      <div class="path"><a href="#">首页</a> > 服务项目</div>
      <div class="content_c">
    @foreach($proall as $k=>$v)
         <div class="service">
            <div class="sercice_l"><img src="{{$v->pro_img}}" width="117" height="110" title="{{$v->pro_name}}" alt="暂无"/></div>
            <div class="sercice_r">
              <b>{{$v->pro_name}}</b>
              <span>{{$v->pro_desc}}</span>
              <a href="service_about?id={{$v->pro_id}}">了解详情</a>
            </div>
         </div>
    @endforeach
      </div><!--content_c-->
    </div><!--content-->
    <div class="clear"></div>
@stop
