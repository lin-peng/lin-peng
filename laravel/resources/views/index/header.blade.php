    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>中鼎融德投资担保（北京）有限公司</title>

 
</head>
<body>
  <div class="container">
    <div class="header">
      <div class="header_c">
        <div class="top_left">
          <div class="tel">欢迎致电：</div>
          <div class="tel1">{{$cominfo[0]->com_phone}}</div>
          <div class="gz"><a href="#">关注我们</a></div>
          <div class="QQ">
            <a href="#"><img src="top/images/QQ.gif" onmouseover="this.src='top/images/QQ_over.gif'" border="0" onmouseout="this.src='top/images/QQ.gif'" /></a>
            <a href="#"><img src="top/images/wb.gif" onmouseover="this.src='top/images/wb_over.gif'" border="0" onmouseout="this.src='top/images/wb.gif'" /></a>
            <a href="#"><img src="top/images/wx.gif" onmouseover="this.src='top/images/wx_over.gif'" border="0" onmouseout="this.src='top/images/wx.gif'" /></a>
          </div>
        </div><!--top_left-->
        <div class="top_right">
          <a href="/">首页</a>|<a href="http://www.rongde.com" title="中鼎融德" rel="sidebar">加入收藏</a>
        </div><!--top_right-->
      </div><!--header_c-->
    </div><!--header-->
    <div class="clear"></div>
    <div class="top">
      <div class="top_c">
        <div class="logo"><a href="#"><img src="top/images/logo.png" width="143" height="74" /></a></div>
        <div class="menu">
          <ul>
                <!-- 导航循环开始 -->
              @foreach ($navall as $k=>$v)
              <li>
               <a href="{{$v->nav_link}}">{{$v->nav_name}}</a>
             </li>
              @endforeach
             <!-- 导航循环结束 -->
          </ul>
        </div><!--menu-->
        <div class="search">
          <div class="search_input"><input type="text" value="SEAECH..."  onFocus="this.value=''" onBlur="if(!value){value=defaultValue;}"/></div>
          <a href="#"><img src="top/images/search.gif" width="31" height="23" /></a>
        </div><!--search-->
      </div><!--top_c-->
    </div><!--top-->

    @yield('content')
        <div class="footer">
      <div class="footer_c">
        <div class="footer_left">
          <a href="about">关于我们</a>|
          <a href="service">合作伙伴</a>|
          <a href="contact">联系我们</a>
        </div>
        <div class="footer_right">
        中鼎融德投资担保（北京）有限公司Copyright <span>&copy;</span> 2011-2013 中鼎融德 版权所有
        </div>
      </div>
    </div><!--footer-->
    </div><!--container-->

</body>
</html>
<script>
//   function addFavorite2() {
// var url = window.location;
// var title = document.title;
// var ua = navigator.userAgent.toLowerCase();
// alert(ua)
// if (ua.indexOf("360se") > -1) {
// alert("由于360浏览器功能限制，请按 Ctrl+D 手动收藏！");
// }
// else if (ua.indexOf("msie 8") > -1) {
// window.external.AddToFavoritesBar(url, title); //IE8
// }
// else if (document.all) {
// try{
// window.external.addFavorite(url, title);
// }catch(e){
// alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
// }
// }
// else if (window.sidebar) {
// window.sidebar.addPanel(title, url, "");
// }
// else {
// alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
// }
// }
</script>
