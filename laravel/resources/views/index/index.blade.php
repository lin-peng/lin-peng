@extends('index/header')

@section('content')
<link href="top/css/index.css" rel="stylesheet" type="text/css" />
  <link href="top/css/public.css" rel="stylesheet" type="text/css" />
  
    <script type="text/javascript" src="top/js/jquery-1.8.0.min.js"></script>
    <script type="text/javascript" src="top/js/jquery.jslides.js"></script>
    <script type="text/javascript" src="top/js/bigpicroll.js"></script>
    <div class="clear"></div>
    <div class="banner">
      <div id="full-screen-slider">
          <ul id="slides">
          @foreach($lunrow as $k=>$v)
              <li style="background:url({{$v->lun_img}}) no-repeat center top" title="{{$lunrow[0]->lun_title}}" alt="暂无"><a href="#" target="_blank"></a></li>
           @endforeach   
          </ul>
      </div>
    </div><!--banner-->
    <div class="clear"></div>
    <div class="content">
      <div class="news">
        <div class="hdwrap">
  <div class="hdflash f_list">
  <div class="flash_tab">
    <div class="tabs f_tabs">
      <ul>
        <li class="f_tab opdiv">
          <a href="javascript:void(0);">
          </a>
        </li>
        <li class="f_tab opdiv">
          <a href="javascript:void(0);">
          </a>
        </li>

      </ul>
    </div>
    <div class="news_more"><a href="#">more+</a></div>
  </div>
  <div class="clear"></div>
  <div class="flashlist">
    <div class="f_out">
      <a href="#" target="_blank">
        <img src="top/images/news_pic.gif" width="254" height="156" />
      </a>
      <div class="picintro">
        <h2>
          <a href="#">
            担保业涉水互联网金融
          </a>
        </h2>
      </div>
    </div>
    <div class="f_out">
     <a href="#" target="_blank">
        <img src="top/images/news_pic.gif" width="254" height="156" />
      </a>
      <div class="picintro">
        <h2>
          <a href="#">
            担保业涉水互联网金融
          </a>
        </h2>
        
      </div>
    </div>

  </div>
  
  <script type="text/javascript">
    FeatureList(".f_list", {
      "onclass": "noopdiv",
      "offclass": "opdiv",
      "pause_on_act": "mouseover",
      "interval": 5000,
      "speed": 5
    });
  </script>
</div>
</div>
      </div><!--news-->
      <div class="gsdt">
        <div class="gsdt_top">
          <div class="dt">公司动态<span>DYNAMIC</span></div>
          <a href="news_about">more+</a>
        </div><!--gsdt_top-->
        <div class="clear"></div>

        @foreach($doall as $k=>$v)
        <div class="gsdt_list">
          <span>{{$v->do_name}}</span>
          {{$v->do_desc}}……
        </div><!--gsdt_list-->
        @endforeach

      </div><!--gsdt-->
      <div class="pro">
        <div class="gsdt_top">
          <div class="dt">产品服务<span>PRODUCT</span></div>
          <a href="service">more+</a>
        </div><!--gsdt_top-->
        <div class="clear"></div>
        <div class="pro_list">
          <ul>
          @foreach($proall as $k=>$v)
             <li>
              <a href="{{$v->pro_link}}">
                <img src="{{$v->pro_img}}" width="55px;" height="42px;" title="{{$v->pro_name}}" />
                <span>{{$v->pro_name}}</span>
              </a>
             </li>
           @endforeach  
          </ul>
        </div><!--pro_list-->
      </div><!--pro-->
    </div><!--content-->
    <div class="clear"></div>
    <div class="zcfg">
      <div class="zcfg_c">
        <div class="zcfg_1"><img src="top/images/zcfg_left.gif" width="141" height="77" /></div>
        <div class="zcfg_2"><img src="top/images/zcfg_center.gif" width="304" height="77"/></div>
        <div class="zcfg_3">
          <ul>
            <li><a href="policy">法律法规</a></li>
            <li><a href="policy">政策解读</a></li>
          </ul>
        </div>
        <div class="zcfg_4">{{$cominfo[0]->com_phone}}</div>
        <div class="zcfg_5">{{$cominfo[0]->com_email}}</div>
      </div><!--zcfg_c-->
    </div><!--zcfg-->
    <div class="clear"></div>

  
@stop