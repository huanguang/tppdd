<?php /*a:1:{s:40:"theme/index/default/pinduoduo/index.html";i:1572451986;}*/ ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>自动出码系统</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/static/js/layui/css/layui.css"  media="all">
    <script src="/static/js/jquery.2.1.4.min.js"></script>
    <script src="/static/js/jquery.cookie.js"></script>
    <script src="/static/js/jquery.qrcode.min.js"></script>
</head>
<body>
<div class="layui-container">
    <div class="layui-tab layui-tab-brief">
        <ul class="layui-tab-title">
            <li class="layui-this">获取扫码</li>
            <li>查询订单</li>
        </ul>
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show get-qr">
                <div class="layui-col-md12 banner">
                    <div class="layui-card">
                        <div class="layui-card-body">自动出码系统</div>
                    </div>
                </div>
                <form class="layui-form">
                    <div class="layui-form-item" pane="">
                        <label class="layui-form-label">类型：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="type" value="wechat" title="微信" checked>
                            <input type="radio" name="type" value="alipay" title="支付宝"  >
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">金额：</label>
                        <div class="layui-input-block">
                            <input type="number" name="total" placeholder="请输入100倍数" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <button type="button" id="submit_btn" class="layui-btn layui-btn-fluid">获取二维码</button>
                    </div>

                </form>
                <blockquote class="layui-elem-quote">注意：让客户提前准备好手机。</blockquote>
            </div>
            <div class="layui-tab-item query-order">
                <div class="layui-col-md12 banner">
                    <div class="layui-card">
                        <div class="layui-card-body">订单状态查询</div>
                    </div>
                </div>
                <form class="layui-form">
                    <div class="layui-form-item">
                        <label class="layui-form-label">订单号：</label>
                        <div class="layui-input-block">
                            <input type="text" name="order_sn" placeholder="请输入订单号码" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <button type="button" id="query_order" class="layui-btn layui-btn-danger layui-btn-fluid">查询</button>
                    </div>
                </form>
                <div class="layui-col-md6">
                    <div class="layui-card">
                        <div class="layui-card-header">最近订单</div>
                        <div class="layui-card-body order-history"></div>
                    </div>
                </div>
            </div>
            <div class="layui-tab-item statistic">
                <div class="layui-col-md12 banner">
                    <div class="layui-card">
                        <div class="layui-card-body">员工数据统计查询</div>
                    </div>
                </div>
                <form class="layui-form">
                    <div class="layui-form-item">
                        <label class="layui-form-label">查询密码：</label>
                        <div class="layui-input-block">
                            <input type="password" name="password" placeholder="请输入查询密码" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">日期：</label>
                        <div class="layui-input-block">
                            <input type="text" class="layui-input" name="date" id="date" placeholder="请选择日期范围">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">支付：</label>
                        <div class="layui-input-block">
                            <select name="is_pay">
                                <option value="">全部</option>
                                <option value="1">是</option>
                                <option value="2">否</option>
                            </select>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <button type="button" id="statistic" class="layui-btn layui-btn-warm layui-btn-fluid">查询</button>
                    </div>
                </form>
                <div class="layui-col-md6">
                    <div class="layui-card">
                        <div class="layui-card-header">查询结果
                            <span style="float: right;" class="statistical"></span>
                        </div>
                        <div class="layui-card-body statistic-result" style="padding: 0">
                            <table class="layui-hide" id="statistic-data"></table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/static/js/layui/layui.js?v=2.0.0"></script>
<script>
    var ADMIN_PATH = "/index.php", LAYUI_OFFSET = 60;
    layui.config({
        base: '/static/system/js/',
        version: '2.0.0'
    }).use('global');
</script>
<script>
    layui.use(['form','jquery','table','laydate'], function(){
        var form = layui.form;
        var table = layui.table;
        var $ = layui.$;
        var laydate = layui.laydate;
        //日期范围
        laydate.render({
            elem: '#date'
            ,range: "~"
        });
    })
    var lock = false;
    $("#submit_btn").click(function () {
        let type=$("input[name='type']:checked").val();
        let total=$("input[name='total']").val();
        let flag=true;
        if (lock) return;
        lock = true;
//        if(!total||total<=0||total%100!=0){
//            flag=false;
//            layer.msg('请输入100倍数的金额！', {
//                time: 3000, //20s后自动关闭
//                btn: ['知道了'],
//                btnAlign: 'c',
//                anim: 6
//            });
//            return;
//        }
        if (flag){
            var msg =layer.msg('拼命出码中...', {
                time: 10000,
                closeBtn: 0
            });
            $.post('<?php echo url('api/order'); ?>',{
                type:type,
                total:total,
                admin_uid:'<?php echo htmlentities($admin_uid); ?>',
                staff_id:''
            },function (res) {
                lock = false;
                layer.close(msg);
                if (res.status==1){
                    let order_sn=res.data.order_sn;
                    if(order_sn){
                        setCookie('ORDERSNS', order_sn.toString(),365);
                        readCookie();
                    }
                    if (res.data.type=='wechat') {
                        layer.open({
                            type: 1
                            ,title: '打开微信扫描下方二维码'
                            ,closeBtn: false
                            ,area: '250px;'
                            ,shade: 0.8
                            ,id: 'LAY_layuipro'
                            ,btn: ['直接打开', '再来一单']
                            ,btnAlign: 'c'
                            ,moveType: 0
                            ,content: '<div ><div style="padding: 10px 5px 0px 10px;"><p>订单号：'+res.data.order_sn+'</p><p style="word-wrap: break-word;word-break: normal;">代付号：'+res.data.fp_id+'</p></div><div style="padding: 10px;"><div id="output"></div></div>'
                            ,success: function(layero){
                                jQuery(function(){
                                    jQuery('#output').qrcode({
                                        width: 230,
                                        height: 260,
                                        text: res.data.qr_url
                                    });
                                });
                                return;
                                var btn = layero.find('.layui-layer-btn');
                                btn.find('.layui-layer-btn0').attr({
                                    href: res.data.order_url
                                    ,target: '_blank'
                                });
                            }
                            ,yes: function(index, layero){
                                window.open(res.data.qr_url);
                            }
                        });
                    }
                    if (res.data.type=='alipay') {
                        layer.open({
                            type: 1
                            ,title: '打开支付宝扫描下方二维码'
                            ,closeBtn: false
                            ,area: '250px;'
                            ,shade: 0.8
                            ,id: 'LAY_layuipro'
                            ,btn: ['直接打开', '再来一单']
                            ,btnAlign: 'c'
                            ,moveType: 0
                            ,content: '<div ><div style="padding: 10px 0px 0px 15px;"><p>订单号：'+res.data.order_sn+'</p></div><div style="padding: 10px;"><div id="output"></div></div></div>'
                            ,success: function(layero){
                                jQuery(function(){
                                    jQuery('#output').qrcode({
                                        width: 230,
                                        height: 260,
                                        text: res.data.qr_url
                                    });
                                });
                                return;
                                var btn = layero.find('.layui-layer-btn');
                                btn.find('.layui-layer-btn0').attr({
                                    href: res.data.qr_url
                                    ,target: '_blank'
                                });
                            }
                        });
                    }
                }else{
                    layer.msg(res.msg, {
                        time: 2000,
                        btn: ['知道了'],
                        btnAlign: 'c',
                        anim: 6
                    });
                }
                console.log(res);
            })
        }
    });
    $("#query_order").click(function () {
        let order_sn=$("input[name='order_sn']").val();
        let flag=true;
        if(!order_sn){
            flag=false;
            layer.msg('请输入订单号码！', {
                time: 3000, //20s后自动关闭
                btn: ['知道了'],
                btnAlign: 'c',
                anim: 6
            });
            return;
        }
        if (flag){
            var msg =layer.msg('查询中...', {
                time: 10000,
                closeBtn: 0
            });
            $.post('<?php echo url('api/queryorder'); ?>',{
                order_sn:order_sn
            },function (res) {
                layer.close(msg);
                if (res.status==1){
                    var color = 'green';
                    if (res.data.status == '待付款') {
                        color = 'red';
                    }
                    layer.open({
                        type: 1
                        ,title: '订单查询结果：'
                        ,closeBtn: false
                        ,area: '250px;'
                        ,shade: 0.8
                        ,id: 'LAY_layuipro2'
                        ,btn: ['确定']
                        ,btnAlign: 'c'
                        ,moveType: 0
                        ,content: '<div ><div style="padding: 10px 0px 0px 15px;"><p>订单号：'+res.data.order_sn+'</p><p>金额：'+res.data.total+'</p><p>支付情况：'+(res.data.is_pay==1?'<span style="color: green;">已支付</span>':'<span style="color: red;">未支付</span>')+'</p><p>状态：<span style="color:'+color+'">'+res.data.status+'</span></p></div></div>'
                        ,success: function(layero){

                        }
                    });
                }else{
                    layer.msg(res.msg, {
                        time: 2000,
                        btn: ['知道了'],
                        btnAlign: 'c',
                        anim: 6
                    });
                }
                console.log(res);
            })
        }
    });
    $("#statistic").click(function () {
        let password=$("input[name='password']").val();
        let date=$("input[name='date']").val();
        let is_pay=$("select[name='is_pay']").val();
        let flag=true;
        if(!password){
            flag=false;
            layer.msg('请输入查询密码！', {
                time: 3000, //20s后自动关闭
                btn: ['知道了'],
                btnAlign: 'c',
                anim: 6
            });
            return;
        }
        if (flag){
            var msg =layer.msg('查询中...', {
                time: 10000,
                closeBtn: 0
            });
            layui.use('table', function(){
                var table = layui.table;
                table.render({
                    elem: '#statistic-data'
                    ,url:'<?php echo url('api/statistic'); ?>'
                    ,where: {
                        password: password
                        ,date: date
                        ,is_pay:is_pay
                        ,staff_id:''
                    }
                    ,page: true
                    ,cols: [[
                        {field:'time_f',  title: '时间',width:100, sort: true}
                        ,{field:'order_sn', width:200, title: '订单号'}
                        ,{field:'total', width:80, title: '金额'}
                        ,{field:'is_pay', width:60, title: '支付'}
                    ]]
                    ,size: 'sm'
                    ,defaultToolbar: ['filter']
                    ,done:function (res) {
                        if (res.status){
                            $(".statistical").html('总金额：<span class="total" style="color: red;">'+res.total+'</span>元');
                        }
                        layer.close(msg);
                    }
                });
            });
        }
    });
    readCookie();
    function readCookie(){
        let cookie=getCookie('ORDERSNS');
        if (cookie) {
            let html='';
            cookie.forEach(function (val) {
                html+='<p style="font-size: 18px;margin:10px 0px;"><a target="_blank" href="https://mobile.yangkeduo.com/friend_pay.html?order_sn='+val+'">'+val+'</a><a href=javascript:queryOrder("'+val+'")><span style="color:green;float: right;">查询</span></a></p>';
            });
            $('.order-history').html(html);
        }
    }
    function queryOrder(order_sn) {
        console.log(order_sn);
        var msg =layer.msg('查询中...', {
            time: 10000,
            closeBtn: 0
        });
        $.post('<?php echo url('api/queryorder'); ?>',{
            order_sn:order_sn
        },function (res) {
            layer.close(msg);
            if (res.status==1){
                var color = 'green';
                if (res.data.status == '待付款') {
                    color = 'red';
                }
                layer.open({
                    type: 1
                    ,title: '订单查询结果：'
                    ,closeBtn: false
                    ,area: '250px;'
                    ,shade: 0.8
                    ,id: 'LAY_layuipro2'
                    ,btn: ['确定']
                    ,btnAlign: 'c'
                    ,moveType: 0
                    ,content: '<div ><div style="padding: 10px 0px 0px 15px;"><p>订单号：'+res.data.order_sn+'</p><p>金额：'+res.data.total+'</p><p>支付情况：'+(res.data.is_pay==1?'<span style="color: green;">已支付</span>':'<span style="color: red;">未支付</span>')+'</p><p>状态：<span style="color:'+color+'">'+res.data.status+'</span></p></div></div>'
                    ,success: function(layero){

                    }
                });
            }else{
                layer.msg(res.msg, {
                    time: 2000,
                    btn: ['知道了'],
                    btnAlign: 'c',
                    anim: 6
                });
            }
            console.log(res);
        })
    }
    function setCookie(c_name, value, expireTimes){
        var cookie = getCookie(c_name);
        if (!cookie){
            $.cookie(c_name, value, {expires:expireTimes,path: '/'});
        }else{
            cookie.unshift(value);
            cookie = cookie.join(';');
            $.cookie(c_name, cookie,{expires:expireTimes,path: '/'});
        }
    }
    function getCookie(c_name) {
        var cookie = $.cookie(c_name);
        if (cookie){
            return cookie.split(';');
        }
        return;
    }
</script>
<style>
    .layui-tab-content{
        padding: 0;
    }
    .banner {
        margin-top: 10px;
    }
    .banner .layui-card {
        padding: 20px;
        text-align: center;
        color: #ffffff;
        font-size: 20px;
    }
    .get-qr .banner .layui-card{
        background-color: #1E9FFF;
    }
    .query-order .banner .layui-card{
        background-color: #FFB800;
    }
    .statistic .banner .layui-card{
        background-color: #2f9688;
    }
    .layui-form{
        margin-top: 15px;
    }
    .layui-layer-title{
        padding-right: 0;
    }
    .layui-table-page .layui-laypage a, .layui-table-page .layui-laypage span.layui-laypage-curr{
        padding: 0 5px;
    }
    .layui-laydate-list>li, .layui-laydate-range .layui-laydate-main{
        display: block;
    }
    .layui-laydate-range{
        width: initial;
    }
</style>