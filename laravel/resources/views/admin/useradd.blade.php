<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="down/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="down/css/main.css"/>
    <script type="text/javascript" src="down/js/libs/modernizr.min.js"></script>
</head>
<body>
@extends('admin/header')
@section('content')
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="index">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="userlist">用户管理</a><span class="crumb-step">&gt;</span><span>新增用户</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="useradds" method="post" id="myform" name="myform" enctype="multipart/form-data" onsubmit="return check_all()">
                    <table class="insert-tab" width="100%">
                        <tbody><tr>
                            <th width="120"><i class="require-red">*</i>分类：</th>
                            <td>
                                <select name="role_id" id="catid" class="required" onchange="check_role();">
                                <option value="0">请选择</option>
                                @foreach($roleall as $k=>$v)
                                    
                                    <option value="{{$v->role_id}}">{{$v->role_name}}</option>
                                @endforeach
                                </select>
                                <span id="sp_catid"></span>
                            </td>
                        </tr>
                            <tr>
                                <th><i class="require-red">*</i>用户名称：</th>
                                <td>
                                    <input class="common-text required" id="name" name="a_name" size="50" value="" type="text" onblur="check_name();"><span id="sp_name"></span>
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>用户密码：</th>
                                <td>
                                    <input class="common-text required" id="pwd1" name="a_pwd" size="50" value="" type="password" onblur="check_pwd1();"><span id="sp_pwd1"></span>
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>确认密码：</th>
                                <td><input class="common-text" id="pwd2" size="50" value="" type="password" onblur="check_pwd2();"><span id="sp_pwd2"></span></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="reset">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>
@stop

<script>
    function check_name(){
        var str = document.getElementById('name').value.trim();
        var sp_name = document.getElementById('sp_name');
        if(str.length!=0){    
            reg=/^[\u0391-\uFFE5]+$/;     
            if(!reg.test(str)){    
                sp_name.innerHTML="对不起，您输入的字符串类型格式不正确!";
                return false;    
            }else{
                 sp_name.innerHTML="OK";
                 return true;
            }
        }else{
             sp_name.innerHTML="不能为空";
             return false;
        }

    }
    function check_pwd1(){
        var pwd1 = document.getElementById('pwd1').value.trim();
        var sp_pwd1 = document.getElementById('sp_pwd1');
        if(pwd1.length!=0){    
            reg=/^\w{6,9}$/;     
            if(!reg.test(pwd1)){    
                sp_pwd1.innerHTML="长度不符合6-9";
                return false;    
            }else{
                 sp_pwd1.innerHTML="OK";
                 return true;
            }
        }else{
             sp_pwd1.innerHTML="不能为空";
             return false;
        }
    }

     function check_pwd2(){
        var pwd2 = document.getElementById('pwd2').value.trim();
        var sp_pwd2 = document.getElementById('sp_pwd2');
        var pwd3 = document.getElementById('pwd1').value;
        if(pwd2.length!=0){    
            
            if(pwd2 == pwd3){    
                sp_pwd2.innerHTML="OK";
                 return true;
            }else{
                 sp_pwd2.innerHTML="与密码不符";
                return false;  
            }
        }else{
             sp_pwd2.innerHTML="不能为空";
             return false;
        }

    }
    function check_role(){
        var roleid = document.getElementById('catid').value;
        var sp_cat = document.getElementById('sp_catid');
        if(roleid == 0){
            sp_cat.innerHTML='必须选择一项';
            return false;
        }else{
            sp_cat.innerHTML='OK';
            return true;
        }
    }
     function check_all(){
        return check_pwd2() && check_pwd1() && check_name() && check_role();
    }
</script>