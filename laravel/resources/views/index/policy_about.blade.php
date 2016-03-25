@extends('index/header')

@section('content')
	<link href="top/css/css.css" rel="stylesheet" type="text/css" />
	<link href="top/css/public.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="top/js/jquery-1.8.0.min.js"></script>
    <script type="text/javascript"> 
  window.onscroll = function(){ 
   var t = document.documentElement.scrollTop || document.body.scrollTop;  
   var top_div = document.getElementById( "top_div" ); 
   if( t >= 100 ) { 
    top_div.style.display = "inline"; 
   } else { 
    top_div.style.display = "none"; 
   } 
  } 
 </script>
  

    <div class="clear"></div>
    <div class="bannerbx">
      <div class="banner">
        <img src="{{$lunrow[0]->lun_img}}" width="1920" height="249" alt="暂无"/>
      </div><!--banner-->
    </div><!--bannerbx-->
    <div class="clear"></div>
    <div class="content">
      <div class="path"><a href="#">首页</a> > <a href="#">政策法规</a> > 法律法规</div>
      <div class="content_c">
        <a name="top"><a> 
        <div id="top_div"><a href="#top"><img src="top/images/back_top.gif" width="62" height="62" /></a></div> 
        <div class="aside">
          <span>政策法规</span>
          <div class="aside_list">
            <ul>
              <li class="aside_list12"><a href="#" class="aside12_over">法律法规</a></li>
              <li class="aside_list13"><a href="#">政策解读</a></li>
            </ul>
          </div><!--aside_list-->
        </div><!--aside-->
        <div class="right">
          <div class="about_title">法律法规</div>
          <div class="about_nr">
            <div class="news_title">
              <b>{{$arr1->pol_name}}}</b>
              <span>发布时间：{{$arr1->pol_time}} 来源：{{$arr1->pol_form}} 作者：{{$arr1->pol_author}}</span>
            </div>
<p>
  {{$arr1->pol_desc}}
</p>
<p>(责任编辑：admin)</p>
          <div class="news_next">
            <div class="news_nextl">
              <ul>
              <?php if(!empty($arr3)){?>
                <li><a href="policy_about?pro_id={{$arr3->pol_id}}">上一篇：{{$arr3->pol_name}}</a></li>
                <?php }?>
                <?php if(!empty($arr2)){?>
                <li><a href="policy_about?pro_id={{$arr2->pol_id}}">下一篇：{{$arr2->pol_name}}</a></li>
                 <?php }?>
              </ul>
            </div><!--news_nextl-->
            <div class="news_nextr">
              <a href="#">返回列表</a>
            </div><!--news_nextr-->
          </div><!--news_next-->
          </div><!--about_nr-->
        </div><!--right-->
      </div><!--content_c-->
    </div><!--content-->
    <div class="clear"></div>
    
@stop
