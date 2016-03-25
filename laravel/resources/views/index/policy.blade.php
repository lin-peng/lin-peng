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
      <div class="path"><a href="#">首页</a> > 政策法规</div>
      <div class="content_c">
         <div class="news">
           <div class="dt">法律法规<span>LAWS</span></div>
           <div class="news_dt">
             <div class="news_dtl"><img src="{{$polirow[0]->pol_img}}" width="164" height="103" /></div>
             <div class="news_dtr">
               <ul>
                 <li class="news_dtr1"><a href="policy_about?pro_id={{$polirow[0]->pol_id}}">{{$polirow[0]->pol_name}}</a></li>
                 <li class="news_dtr2">{{$polirow[0]->pol_desc}}……</li>
                 <li class="news_dtr3"><a href="policy_about?pro_id={{$polirow[0]->pol_id}}">详细信息</a></li>
               </ul>
             </div><!--news_dtr-->
             <div class="clear"></div>
           </div><!--news_dt-->
           <div class="news_xl">
               <ul>
               @foreach($poliarr as $k=>$v)
               <?php 
                if($k != 0){ ?>
                  <li><a href="policy_about?pro_id={{$v->pol_id}}">{{$v->pol_name}}</a><span>{{$v->pol_time}}</span></li>
               <?php }?>
               
                 
                @endforeach
               </ul>
             </div><!--news_xl-->
             <div class="clear"></div>
             <div class="news_more"><a href="policy_about">更多>></a></div>
         </div><!--news-->
         <div class="news news_right">
           <div class="dt">政策解读<span>POLICY</span></div>
           <div class="news_dt">
             <div class="news_dtl"><img src="top/images/policy_pic2.gif" width="164" height="103" /></div>
             <div class="news_dtr">
               <ul>
                 <li class="news_dtr1"><a href="#">三部门加强小额担保贷款财政贴息资金管理</a></li>
                 <li class="news_dtr2">各省、自治区、直辖市、计划单列市财政厅(局)、人力资源社会保障厅……</li>
                 <li class="news_dtr3"><a href="#">详细信息</a></li>
               </ul>
             </div><!--news_dtr-->
             <div class="clear"></div>
           </div><!--news_dt-->
           <div class="news_xl">
               <ul>
                 <li><a href="#">三部门加强小额担保贷款财政贴息资金管理</a><span>2014-04-11</span></li>
                 <li><a href="#">三部门加强小额担保贷款财政贴息资金管理</a><span>2014-04-11</span></li>
                 <li><a href="#">三部门加强小额担保贷款财政贴息资金管理</a><span>2014-04-11</span></li>
               </ul>
             </div><!--news_xl-->
             <div class="clear"></div>
             <div class="news_more"><a href="policy_list.html">更多>></a></div>
         </div><!--news-->
      </div><!--content_c-->
    </div><!--content-->
    <div class="clear"></div>
    @stop
