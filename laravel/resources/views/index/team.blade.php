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
              <li class="aside_list2"><a href="cooperation">合作机构</a></li>
              <li class="aside_list3"><a href="team" class="aside3_over">顾问团队</a></li>
            </ul>
          </div><!--aside_list-->
        </div><!--aside-->
        <div class="right">
          <div class="about_title">顾问团队</div>
          <div class="about_nr">
          <p>中鼎融德投资担保（北京）有限公司（以下简称“中鼎融德”）成立于2012年，公司实收资本和注册资本均为壹亿元，公司主要经营范围为：贷款担保、票据承兑担保、信用证担保、工程履约担保资金过桥、财产保全担保、合同履约类担保、信用仓储担保。</p>
 
<p>公司已与工商银行北京支行、建设银行北京支行、交通银行北京支行、中国民生银行北京支行、招商银行北京支行、北京市农商行、包商银行北京支行、成都市农村信用合作联社开展了业务合作关系，并与农业银行等多家金融机构洽谈合作事宜，建立了良好的合作关系，为客户及时高效的提供全面优质的服务。</p>
<p> 
截止到2013年12月31日，中鼎融德在保余额为36858.6万元，共为198家企业和个人提供了担保服务，累计办理担保贷款868笔，金额为108100.8万元。2013年无不良担保贷款业务。</p>
 
<p>中鼎融德目前已经形成完善的保前调查、保后管理体系，能够为中小企业提供优质高效的担保服务，同时为资本提供者和使用者双方提供满意的回报，为资本的拥有者与价值创造者架设一条高效的沟通渠道，实现资源的优化配置。</p>
          </div>
        </div><!--right-->
      </div><!--content_c-->
    </div><!--content-->
    <div class="clear"></div>
    @stop
