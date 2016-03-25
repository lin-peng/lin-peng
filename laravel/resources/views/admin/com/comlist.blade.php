<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>『有主机上线』后台管理</title>
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
            <div class="crumb-list"><i class="icon-font"></i><a href="/think/admin">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">系统设置</span></div>
        </div>
        <div class="result-wrap">
            <form action="comupdate" method="post">
                <div class="config-items">
                    <div class="config-title">
                        <h1><i class="icon-font">&#xe00a;</i>公司信息设置</h1>
                    </div>
                    <div class="result-content">
                        <table width="100%" class="insert-tab">
                        <input type="hidden" name="com_id" value="{{$row[0]->com_id}}">
                            <tbody>
                            <tr>
                                <th width="15%"><i class="require-red">*</i>公司名称：</th>
                                <td><input type="text" id="" value="{{$row[0]->com_name}}" size="85" name="com_name" class="common-text"></td>
                            </tr>
                                <tr>
                                    <th><i class="require-red">*</i>公司logo：</th>
                                    <td>
                                        <img src="{{$row[0]->com_logo}}" alt="" width="100px;" height="50px;">
                                </tr>
                                <tr>
                                    <th><i class="require-red">*</i>公司电话：</th>
                                    <td><input type="text" id="" value="{{$row[0]->com_phone}}" size="85" name="com_phone" class="common-text"></td>
                                </tr>
                                <tr>
                                    <th><i class="require-red">*</i>公司邮箱：</th>
                                    <td><input type="text" id="" value="{{$row[0]->com_email}}" size="85" name="com_email" class="common-text"></td>
                                </tr>
                                <tr>
                                    <th><i class="require-red">*</i>公司地址：</th>
                                    <td><input type="text" id="" value="{{$row[0]->com_address}}" size="40" name="com_address" class="common-text"></td>
                                </tr>
                                <tr>
                                    <th><i class="require-red">*</i>公司位置：</th>
                                    <td><img src="{{$row[0]->com_address_img}}" alt="" width="150px;" height="80px;" name="com_address_img"></td>
                                </tr>
                                <tr>
                                    <th><i class="require-red">*</i>公司描述:</th>
                                    <td>
                                    <textarea name="com_desc" id="" cols="100" rows="20">{{$row[0]->com_desc}}</textarea></td>
                                </tr>
                                <tr>
                                    <th><i class="require-red">*</i>顾问团队</th>
                                    <td>
                                    <textarea name="com_desc" id="" cols="100" rows="20">{{$row[0]->com_team}}</textarea></td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td>
                                        <input type="submit" value="修改" class="btn btn-primary btn6 mr10">
                                        <input type="button" value="返回" onclick="history.go(-1)" class="btn btn6">
                                    </td>
                                </tr>
                            </tbody></table>
                    </div>
                </div>
                
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>
@stop
<script src="down/js/jquery.js"></script>
