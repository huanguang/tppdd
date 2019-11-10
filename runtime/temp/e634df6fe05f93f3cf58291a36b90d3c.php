<?php /*a:6:{s:58:"/vagrant/pdd/application/system/view/pinduoduo/orders.html";i:1572453610;s:48:"/vagrant/pdd/application/system/view/layout.html";i:1572453610;s:54:"/vagrant/pdd/application/system/view/block/header.html";i:1572453610;s:52:"/vagrant/pdd/application/system/view/block/menu.html";i:1572453610;s:53:"/vagrant/pdd/application/system/view/block/layui.html";i:1572453610;s:54:"/vagrant/pdd/application/system/view/block/footer.html";i:1572453610;}*/ ?>
<?php if(input('param.hisi_iframe') || cookie('hisi_iframe')): ?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo htmlentities($hisiCurMenu['title']); ?></title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="stylesheet" href="/static/js/layui/css/layui.css?v=<?php echo config('hisiphp.version'); ?>">
    <link rel="stylesheet" href="/static/system/css/theme.css?v=<?php echo config('hisiphp.version'); ?>">
    <link rel="stylesheet" href="/static/system/css/style.css?v=<?php echo config('hisiphp.version'); ?>" media="all">
    <link rel="stylesheet" href="/static/fonts/typicons/min.css?v=<?php echo config('hisiphp.version'); ?>">
    <link rel="stylesheet" href="/static/fonts/font-awesome/min.css?v=<?php echo config('hisiphp.version'); ?>">
</head>
<body class="hisi-theme-<?php echo cookie('hisi_admin_theme'); ?>">
<?php else: ?>
<!DOCTYPE html>
<html>
<head>
    <title><?php if($hisiCurMenu['url'] == 'system/index/index'): ?>管理控制台<?php else: ?><?php echo htmlentities($hisiCurMenu['title']); ?><?php endif; ?></title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="stylesheet" href="/static/js/layui/css/layui.css?v=<?php echo config('hisiphp.version'); ?>">
    <link rel="stylesheet" href="/static/system/css/theme.css?v=<?php echo config('hisiphp.version'); ?>">
    <link rel="stylesheet" href="/static/system/css/style.css?v=<?php echo config('hisiphp.version'); ?>" media="all">
    <link rel="stylesheet" href="/static/fonts/typicons/min.css?v=<?php echo config('hisiphp.version'); ?>">
    <link rel="stylesheet" href="/static/fonts/font-awesome/min.css?v=<?php echo config('hisiphp.version'); ?>">
</head>
<body class="layui-layout-body hisi-theme-<?php echo cookie('hisi_admin_theme'); ?>">
<?php 
$ca = strtolower(request()->controller().'/'.request()->action());
 ?>
<div class="layui-layout layui-layout-admin">
    <div class="layui-header" style="z-index:999!important;">
    <div class="fl header-logo">出码后台管理</div>
    <div class="fl header-fold"><a href="javascript:;" title="打开/关闭左侧导航" class="aicon ai-shouqicaidan" id="foldSwitch"></a></div>
    <ul class="layui-nav fl nobg main-nav">
        <?php if(is_array($hisiMenus) || $hisiMenus instanceof \think\Collection || $hisiMenus instanceof \think\Paginator): $i = 0; $__LIST__ = $hisiMenus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(($hisiCurParents['pid'] == $vo['id'] and $ca != 'plugins/run') or ($ca == 'plugins/run' and $vo['id'] == 3)): ?>
           <li class="layui-nav-item layui-this">
            <?php else: ?>
            <li class="layui-nav-item">
            <?php endif; ?> 
            <a href="javascript:;"><?php echo htmlentities($vo['title']); ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    <ul class="layui-nav fr nobg head-info">
        <li class="layui-nav-item">
            <a href="/" target="_blank" class="aicon ai-ai-home" title="前台"></a>
        </li>
        <?php if(false): ?>
        <li class="layui-nav-item">
            <a href="javascript:void(0);" class="aicon ai-qingchu" id="hisi-clear-cache" title="清缓存"></a>
        </li>
        <?php endif; ?>
        <li class="layui-nav-item">
            <a href="javascript:void(0);" class="aicon ai-suo" id="lockScreen" title="锁屏"></a>
        </li>
        <li class="layui-nav-item">
            <a href="<?php echo url('system/user/setTheme'); ?>" id="hisi-theme-setting" class="aicon ai-theme"></a>
        </li>
        <?php if(false): ?>
        <li class="layui-nav-item hisi-lang">
            <a href="javascript:void(0);"><i class="layui-icon layui-icon-website"></i></a>
            <dl class="layui-nav-child">
                <?php if(is_array($languages) || $languages instanceof \think\Collection || $languages instanceof \think\Paginator): $i = 0; $__LIST__ = $languages;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['pack']): ?>
                    <dd><a href="<?php echo url('system/index/index'); ?>?lang=<?php echo htmlentities($vo['code']); ?>"><?php echo htmlentities($vo['name']); ?></a></dd>
                    <?php endif; ?>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <dd>
                    <a data-id="000" class="admin-nav-item top-nav-item" href="<?php echo url('system/language/index'); ?>">语言包管理</a>
                </dd>
            </dl>
        </li>
        <?php endif; ?>
        <li class="layui-nav-item">
            <a href="javascript:void(0);"><?php echo htmlentities($login['nick']); ?>&nbsp;&nbsp;</a>
            <dl class="layui-nav-child">
                <dd>
                    <a data-id="00" class="admin-nav-item top-nav-item" href="<?php echo url('system/user/info'); ?>">个人设置</a>
                </dd>
                <dd>
                    <a href="<?php echo url('system/user/iframe'); ?>" class="hisi-ajax" refresh="true"><?php echo input('cookie.hisi_iframe') ? '单页布局' : '框架布局'; ?></a>
                </dd>
                <dd>
                    <a href="<?php echo url('system/publics/logout'); ?>">退出登陆</a>
                </dd>
            </dl>
        </li>
    </ul>
</div>
<div class="layui-side layui-bg-black" id="switchNav">
    <div class="layui-side-scroll">
        <?php if(is_array($hisiMenus) || $hisiMenus instanceof \think\Collection || $hisiMenus instanceof \think\Paginator): $i = 0; $__LIST__ = $hisiMenus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if(($hisiCurParents['pid'] == $v['id'] and $ca != 'plugins/run') or ($ca == 'plugins/run' and $v['id'] == 3)): ?>
        <ul class="layui-nav layui-nav-tree">
        <?php else: ?>
        <ul class="layui-nav layui-nav-tree" style="display:none;">
        <?php endif; if((isset($v['childs']))): if(is_array($v['childs']) || $v['childs'] instanceof \think\Collection || $v['childs'] instanceof \think\Paginator): $kk = 0; $__LIST__ = $v['childs'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($kk % 2 );++$kk;?>
            <li class="layui-nav-item <?php if($kk == 1): ?>layui-nav-itemed<?php endif; ?>">
                <a href="javascript:;"><i class="<?php echo htmlentities($vv['icon']); ?>"></i><?php echo htmlentities($vv['title']); ?><span class="layui-nav-more"></span></a>
                <dl class="layui-nav-child">
                    <?php if($vv['title'] == '快捷菜单'): ?>
                        <dd>
                            <a class="admin-nav-item" data-id="0" href="<?php echo input('cookie.hisi_iframe') ? url('system/index/welcome') : url('system/index/index'); ?>"><i class="aicon ai-shouye"></i> 后台首页</a>
                        </dd>
                        <?php if((isset($vv['childs']))): if(is_array($vv['childs']) || $vv['childs'] instanceof \think\Collection || $vv['childs'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vv['childs'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vvv): $mod = ($i % 2 );++$i;?>
                        <dd>
                            <a class="admin-nav-item" data-id="<?php echo htmlentities($vvv['id']); ?>" href="<?php if(strpos('http', $vvv['url']) === false): ?><?php echo url($vvv['url'], $vvv['param']); else: ?><?php echo htmlentities($vvv['url']); ?><?php endif; ?>"><?php if(file_exists('.'.$vvv['icon'])): ?><img src="<?php echo htmlentities($vvv['icon']); ?>" width="16" height="16" /><?php else: ?><i class="<?php echo htmlentities($vvv['icon']); ?>"></i><?php endif; ?> <?php echo htmlentities($vvv['title']); ?></a><i data-href="<?php echo url('system/menu/del?id='.$vvv['id']); ?>" class="layui-icon j-del-menu">&#xe640;</i>
                        </dd>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <?php endif; else: if((isset($vv['childs']))): if(is_array($vv['childs']) || $vv['childs'] instanceof \think\Collection || $vv['childs'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vv['childs'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vvv): $mod = ($i % 2 );++$i;?>
                        <dd>
                            <a class="admin-nav-item" data-id="<?php echo htmlentities($vvv['id']); ?>" href="<?php if(strpos('http', $vvv['url']) === false): ?><?php echo url($vvv['url'], $vvv['param']); else: ?><?php echo htmlentities($vvv['url']); ?><?php endif; ?>"><?php if(file_exists('.'.$vvv['icon'])): ?><img src="<?php echo htmlentities($vvv['icon']); ?>" width="16" height="16" /><?php else: ?><i class="<?php echo htmlentities($vvv['icon']); ?>"></i><?php endif; ?> <?php echo htmlentities($vvv['title']); ?></a>
                        </dd>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                </dl>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        <?php endif; ?>
        </ul>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
<script type="text/html" id="hisi-theme-tpl">
    <ul class="hisi-themes">
        <?php $_result=session('hisi_admin_themes');if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <li data-theme="<?php echo htmlentities($vo); ?>" class="hisi-theme-item-<?php echo htmlentities($vo); ?>"></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</script>
<script type="text/html" id="hisi-clear-cache-tpl">
    <form class="layui-form" style="padding:10px 0 0 30px;" action="<?php echo url('system/index/clear'); ?>" method="post">
        <div class="layui-form-item">
            <input type="checkbox" name="cache" value="1" title="数据缓存" />
        </div>
        <div class="layui-form-item">
            <input type="checkbox" name="log" value="1" title="日志缓存" />
        </div>
        <div class="layui-form-item">
            <input type="checkbox" name="temp" value="1" title="模板缓存" />
        </div>
        <div class="layui-form-item">
            <button class="layui-btn layui-btn-normal" lay-submit="" lay-filter="formSubmit">执行删除</button>
        </div>
    </form>
</script>
    <div class="layui-body" id="switchBody">
        <ul class="bread-crumbs">
            <?php if(is_array($hisiBreadcrumb) || $hisiBreadcrumb instanceof \think\Collection || $hisiBreadcrumb instanceof \think\Paginator): $i = 0; $__LIST__ = $hisiBreadcrumb;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($key > 0 && $i != count($hisiBreadcrumb)): ?>
                    <li>></li>
                    <li><a href="<?php echo url($v['url'].'?'.$v['param']); ?>"><?php echo htmlentities($v['title']); ?></a></li>
                <?php elseif($i == count($hisiBreadcrumb)): ?>
                    <li>></li>
                    <li><a href="javascript:void(0);"><?php echo htmlentities($v['title']); ?></a></li>
                <?php else: ?>
                    <li><a href="javascript:void(0);"><?php echo htmlentities($v['title']); ?></a></li>
                <?php endif; ?>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <li><a href="<?php echo url('system/menu/quick?id='.$hisiCurMenu['id']); ?>" title="添加到首页快捷菜单" class="j-ajax">[+]</a></li>
        </ul>
        <div style="padding:0 10px;" class="mcolor"><?php echo runhook('system_admin_tips'); ?></div>
            <div class="page-body">
<?php endif; switch($hisiTabType): case "1": ?>
        
        <div class="layui-card">
            <div class="layui-tab layui-tab-brief">
                <ul class="layui-tab-title">
                    <li class="layui-this">
                        <a href="javascript:;" id="curTitle"><?php echo $hisiCurMenu['title']; ?></a>
                    </li>
                </ul>
                <div class="layui-tab-content page-tab-content">
                    <div class="layui-tab-item layui-show">
                        <script src="/static/js/layui/layui.js?v=<?php echo config('hisiphp.version'); ?>"></script>
<script>
    var ADMIN_PATH = "<?php echo htmlentities($_SERVER['SCRIPT_NAME']); ?>", LAYUI_OFFSET = 60;
    layui.config({
    	base: '/static/system/js/',
        version: '<?php echo config("hisiphp.version"); ?>'
    }).use('global');
</script>
<div class="layui-form" style="padding-top: 15px;">
    <div class="layui-form-item" style="margin-bottom: 0">
        <label class="layui-form-label">订单号：</label>
        <div class="layui-input-inline">
            <input type="text" name="order_sn" class="layui-input"  placeholder="请填写订单号">
        </div>
        <label class="layui-form-label">商户订单号：</label>
        <div class="layui-input-inline">
            <input type="text" name="api_order_sn" class="layui-input"  placeholder="请填写商户订单号">
        </div>
        <label class="layui-form-label">代理商：</label>
        <div class="layui-input-inline" id="agent">
            <select name="agent" lay-filter="agent"  lay-verify="required" lay-search="">
                <option value="">选择或搜索代理商</option>
                <?php if(ADMIN_ID==1): ?>
                <option value="">全部</option>
                <?php endif; if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <option value="<?php echo htmlentities($vo['id']); ?>"><?php echo htmlentities($vo['nick']); ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
        <label class="layui-form-label">日期</label>
        <div class="layui-input-inline">
            <input type="text" class="layui-input" name="date" id="date" placeholder="请选择日期范围">
        </div>
        <label class="layui-form-label">来源：</label>
        <div class="layui-input-inline">
            <select name="client">
                <option value="">全部</option>
                <option value="-1">自行出码</option>
                <?php foreach($clients as $v): ?>
                <option value="<?php echo htmlentities($v['id']); ?>"><?php echo htmlentities($v['nick']); ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <label class="layui-form-label">支付：</label>
        <div class="layui-input-inline">
            <select name="is_pay">
                <option value="">全部</option>
                <option value="1">是</option>
                <option value="2">否</option>
            </select>
        </div>
        <label class="layui-form-label">支付方式：</label>
        <div class="layui-input-inline">
            <select name="pay_type">
                <option value="">全部</option>
                <option value="38">微信</option>
                <option value="9">支付宝</option>
            </select>
        </div>
        <label class="layui-form-label">回调通知：</label>
        <div class="layui-input-inline">
            <select name="notify_status">
                <option value="">全部</option>
                <option value="cancel">通知失败</option>
            </select>
        </div>
        <div class="layui-form-mid layui-word-aux" style="padding: 5px 0!important;">
            <button type="button" id="search" data-type="search" class="layui-btn layui-btn-normal layui-btn-sm" >搜索</button>
        </div>
    </div>
</div>

<table class="layui-hide" id="orders"></table>
<div class="statistical" style="padding: 20px 10px;">
    总金额：<span class="total" style="color: red;"></span>元
</div>
<script>
    layui.use(['form','jquery','table','laydate'], function(){
        var form = layui.form;
        var table = layui.table;
        var $ = layui.$;
        var laydate = layui.laydate;
        $(document).on('click', 'a.notify', function(){
            layer.load();
            $.post($(this).attr('href'), function(data){
                layer.closeAll();
                layer.msg(data.msg);
            });
            return false;
        });
        table.render({
            elem: '#orders'
            ,url:"<?php echo url('pinduoduo/orders'); ?>"
            ,page: true
            ,cellMinWidth: 80
            ,cols: [[
                {field:'id', title: 'ID',width: 80}
                ,{field:'nick', title: '代理商',width:100}
                ,{field:'stores_name', title: '店铺名',width:140}
                ,{field:'order_sn', title: '订单号',width: 200}
                ,{field:'api_order_sn', title: '商户订单号',width: 200}
                ,{field:'total', title: '金额',width: 80}
                ,{field:'is_pay', title: '支付',width: 60}
                ,{field:'from_platform', title: '订单来源',width: 100}
                ,{field:'phone', title: '下单手机',width: 120}
                ,{field:'goods_id', title: '商品ID',width: 110}
                // ,{field:'receive', title: '收货',width: 65}
                ,{field:'pay_type', title: '方式',width: 80}
                ,{field:'ctime', title: '下单时间',width: 180}
                ,{field:'notice', title: '补发通知',width: 180}
            ]]
            ,done: function(res, curr, count){
                console.log(res)
                $(".statistical .total").text(res.total);
            }
        });
        //日期范围
        laydate.render({
            elem: '#date'
            ,range: "~"
            ,max: getNowFormatDate()
        });
        //搜索加载--数据表格重载
        var active = {
            search: function () {
                table.reload('orders', {
                    method:'GET',
                    page: {
                        curr: 1 //重新从第 1 页开始
                    }
                    , where: {
                        order_sn: $("input[name=order_sn]").val(),
                        api_order_sn: $("input[name=api_order_sn]").val(),
                        agent: $("select[name=agent]").val(),
                        staff: $("select[name=staff]").val(),
                        date: $("input[name=date]").val(),
                        client: $("select[name=client]").val(),
                        is_pay: $("select[name=is_pay]").val(),
                        pay_type: $("select[name=pay_type]").val(),
                        notify_status: $("select[name=notify_status]").val()
                    }
                });
            }
        };
        $('#search').on('click', function () {
            ids=new Array();
            var type = $(this).data('type');
            active[type] ? active[type].call(this) : '';
        });
        form.on('select(agent)', function(data){
            var admin_uid=data.value;
            $.post('<?php echo url('pinduoduo/getstaffs'); ?>',{
                admin_uid:admin_uid
            },function (res) {
                console.log(res);
                $('.staff').remove();
                if (res.data.length>0){
                    var html='<div class="layui-input-inline staff" >';
                    html+='<select class="layui-input" name="staff" lay-ignore>';
                    html+='<option value="">选择员工</option>';
                    html+='<option value="">全部</option>';
                    res.data.forEach(function (val) {
                        html+='<option value="'+val.id+'">'+val.name+'</option>';
                    });
                    html+='</select></div>';
                    $('#agent').after(html);
                    form.render('select', 'select');
                }
            })
        });
        //获取当前时间，格式YYYY-MM-DD
        function getNowFormatDate() {
            var date = new Date();
            var seperator1 = "-";
            var year = date.getFullYear();
            var month = date.getMonth() + 1;
            var strDate = date.getDate();
            if (month >= 1 && month <= 9) {
                month = "0" + month;
            }
            if (strDate >= 0 && strDate <= 9) {
                strDate = "0" + strDate;
            }
            var currentdate = year + seperator1 + month + seperator1 + strDate;
            return currentdate;
        }
    });
</script>
<style>
    .layui-form-label{
        min-width: initial !important;
        width: initial !important;
    }
</style>
                    </div>
                </div>
            </div>
        </div>
    <?php break; case "2": ?>
        
        <div class="layui-card">
            <div class="layui-tab layui-tab-brief">
                <ul class="layui-tab-title">
                    <?php if(is_array($hisiTabData['menu']) || $hisiTabData['menu'] instanceof \think\Collection || $hisiTabData['menu'] instanceof \think\Paginator): $k = 0; $__LIST__ = $hisiTabData['menu'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if(($k == 1)): ?>
                            <li class="layui-this">
                        <?php else: ?>
                            <li>
                        <?php endif; ?>
                            <a href="javascript:;" class="<?php if((isset($vo['class']))): ?><?php echo htmlentities($vo['class']); ?><?php endif; ?>" id="<?php if((isset($vo['id']))): ?><?php echo htmlentities($vo['id']); ?><?php endif; ?>"><?php echo $vo['title']; ?></a>
                        </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <div class="layui-tab-content page-tab-content">
                    <script src="/static/js/layui/layui.js?v=<?php echo config('hisiphp.version'); ?>"></script>
<script>
    var ADMIN_PATH = "<?php echo htmlentities($_SERVER['SCRIPT_NAME']); ?>", LAYUI_OFFSET = 60;
    layui.config({
    	base: '/static/system/js/',
        version: '<?php echo config("hisiphp.version"); ?>'
    }).use('global');
</script>
<div class="layui-form" style="padding-top: 15px;">
    <div class="layui-form-item" style="margin-bottom: 0">
        <label class="layui-form-label">订单号：</label>
        <div class="layui-input-inline">
            <input type="text" name="order_sn" class="layui-input"  placeholder="请填写订单号">
        </div>
        <label class="layui-form-label">商户订单号：</label>
        <div class="layui-input-inline">
            <input type="text" name="api_order_sn" class="layui-input"  placeholder="请填写商户订单号">
        </div>
        <label class="layui-form-label">代理商：</label>
        <div class="layui-input-inline" id="agent">
            <select name="agent" lay-filter="agent"  lay-verify="required" lay-search="">
                <option value="">选择或搜索代理商</option>
                <?php if(ADMIN_ID==1): ?>
                <option value="">全部</option>
                <?php endif; if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <option value="<?php echo htmlentities($vo['id']); ?>"><?php echo htmlentities($vo['nick']); ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
        <label class="layui-form-label">日期</label>
        <div class="layui-input-inline">
            <input type="text" class="layui-input" name="date" id="date" placeholder="请选择日期范围">
        </div>
        <label class="layui-form-label">来源：</label>
        <div class="layui-input-inline">
            <select name="client">
                <option value="">全部</option>
                <option value="-1">自行出码</option>
                <?php foreach($clients as $v): ?>
                <option value="<?php echo htmlentities($v['id']); ?>"><?php echo htmlentities($v['nick']); ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <label class="layui-form-label">支付：</label>
        <div class="layui-input-inline">
            <select name="is_pay">
                <option value="">全部</option>
                <option value="1">是</option>
                <option value="2">否</option>
            </select>
        </div>
        <label class="layui-form-label">支付方式：</label>
        <div class="layui-input-inline">
            <select name="pay_type">
                <option value="">全部</option>
                <option value="38">微信</option>
                <option value="9">支付宝</option>
            </select>
        </div>
        <label class="layui-form-label">回调通知：</label>
        <div class="layui-input-inline">
            <select name="notify_status">
                <option value="">全部</option>
                <option value="cancel">通知失败</option>
            </select>
        </div>
        <div class="layui-form-mid layui-word-aux" style="padding: 5px 0!important;">
            <button type="button" id="search" data-type="search" class="layui-btn layui-btn-normal layui-btn-sm" >搜索</button>
        </div>
    </div>
</div>

<table class="layui-hide" id="orders"></table>
<div class="statistical" style="padding: 20px 10px;">
    总金额：<span class="total" style="color: red;"></span>元
</div>
<script>
    layui.use(['form','jquery','table','laydate'], function(){
        var form = layui.form;
        var table = layui.table;
        var $ = layui.$;
        var laydate = layui.laydate;
        $(document).on('click', 'a.notify', function(){
            layer.load();
            $.post($(this).attr('href'), function(data){
                layer.closeAll();
                layer.msg(data.msg);
            });
            return false;
        });
        table.render({
            elem: '#orders'
            ,url:"<?php echo url('pinduoduo/orders'); ?>"
            ,page: true
            ,cellMinWidth: 80
            ,cols: [[
                {field:'id', title: 'ID',width: 80}
                ,{field:'nick', title: '代理商',width:100}
                ,{field:'stores_name', title: '店铺名',width:140}
                ,{field:'order_sn', title: '订单号',width: 200}
                ,{field:'api_order_sn', title: '商户订单号',width: 200}
                ,{field:'total', title: '金额',width: 80}
                ,{field:'is_pay', title: '支付',width: 60}
                ,{field:'from_platform', title: '订单来源',width: 100}
                ,{field:'phone', title: '下单手机',width: 120}
                ,{field:'goods_id', title: '商品ID',width: 110}
                // ,{field:'receive', title: '收货',width: 65}
                ,{field:'pay_type', title: '方式',width: 80}
                ,{field:'ctime', title: '下单时间',width: 180}
                ,{field:'notice', title: '补发通知',width: 180}
            ]]
            ,done: function(res, curr, count){
                console.log(res)
                $(".statistical .total").text(res.total);
            }
        });
        //日期范围
        laydate.render({
            elem: '#date'
            ,range: "~"
            ,max: getNowFormatDate()
        });
        //搜索加载--数据表格重载
        var active = {
            search: function () {
                table.reload('orders', {
                    method:'GET',
                    page: {
                        curr: 1 //重新从第 1 页开始
                    }
                    , where: {
                        order_sn: $("input[name=order_sn]").val(),
                        api_order_sn: $("input[name=api_order_sn]").val(),
                        agent: $("select[name=agent]").val(),
                        staff: $("select[name=staff]").val(),
                        date: $("input[name=date]").val(),
                        client: $("select[name=client]").val(),
                        is_pay: $("select[name=is_pay]").val(),
                        pay_type: $("select[name=pay_type]").val(),
                        notify_status: $("select[name=notify_status]").val()
                    }
                });
            }
        };
        $('#search').on('click', function () {
            ids=new Array();
            var type = $(this).data('type');
            active[type] ? active[type].call(this) : '';
        });
        form.on('select(agent)', function(data){
            var admin_uid=data.value;
            $.post('<?php echo url('pinduoduo/getstaffs'); ?>',{
                admin_uid:admin_uid
            },function (res) {
                console.log(res);
                $('.staff').remove();
                if (res.data.length>0){
                    var html='<div class="layui-input-inline staff" >';
                    html+='<select class="layui-input" name="staff" lay-ignore>';
                    html+='<option value="">选择员工</option>';
                    html+='<option value="">全部</option>';
                    res.data.forEach(function (val) {
                        html+='<option value="'+val.id+'">'+val.name+'</option>';
                    });
                    html+='</select></div>';
                    $('#agent').after(html);
                    form.render('select', 'select');
                }
            })
        });
        //获取当前时间，格式YYYY-MM-DD
        function getNowFormatDate() {
            var date = new Date();
            var seperator1 = "-";
            var year = date.getFullYear();
            var month = date.getMonth() + 1;
            var strDate = date.getDate();
            if (month >= 1 && month <= 9) {
                month = "0" + month;
            }
            if (strDate >= 0 && strDate <= 9) {
                strDate = "0" + strDate;
            }
            var currentdate = year + seperator1 + month + seperator1 + strDate;
            return currentdate;
        }
    });
</script>
<style>
    .layui-form-label{
        min-width: initial !important;
        width: initial !important;
    }
</style>
                </div>
            </div>
        </div>
    <?php break; case "3": ?>
        
        <div class="layui-card">
            <div class="layui-tab layui-tab-brief">
                <ul class="layui-tab-title">
                    <?php if(is_array($hisiTabData['menu']) || $hisiTabData['menu'] instanceof \think\Collection || $hisiTabData['menu'] instanceof \think\Paginator): $i = 0; $__LIST__ = $hisiTabData['menu'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;
                            $hisiTabData['current'] = isset($hisiTabData['current']) ? $hisiTabData['current'] : '';
                         if(($vo['url'] == $hisiCurMenu['url'] or (url($vo['url']) == $hisiTabData['current']))): ?>
                            <li class="layui-this">
                        <?php else: ?>
                            <li>
                        <?php endif; if((substr($vo['url'], 0, 4) == 'http')): ?>
                                <a href="<?php echo htmlentities($vo['url']); ?>" target="_blank"><?php echo $vo['title']; ?></a>
                            <?php else: ?>
                                <a href="<?php echo url($vo['url']); ?>" class="<?php if((isset($vo['class']))): ?><?php echo htmlentities($vo['class']); ?><?php endif; ?>" id="<?php if((isset($vo['id']))): ?><?php echo htmlentities($vo['id']); ?><?php endif; ?>"><?php echo $vo['title']; ?></a>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <div class="layui-tab-content page-tab-content">
                    <div class="layui-tab-item layui-show">
                        <script src="/static/js/layui/layui.js?v=<?php echo config('hisiphp.version'); ?>"></script>
<script>
    var ADMIN_PATH = "<?php echo htmlentities($_SERVER['SCRIPT_NAME']); ?>", LAYUI_OFFSET = 60;
    layui.config({
    	base: '/static/system/js/',
        version: '<?php echo config("hisiphp.version"); ?>'
    }).use('global');
</script>
<div class="layui-form" style="padding-top: 15px;">
    <div class="layui-form-item" style="margin-bottom: 0">
        <label class="layui-form-label">订单号：</label>
        <div class="layui-input-inline">
            <input type="text" name="order_sn" class="layui-input"  placeholder="请填写订单号">
        </div>
        <label class="layui-form-label">商户订单号：</label>
        <div class="layui-input-inline">
            <input type="text" name="api_order_sn" class="layui-input"  placeholder="请填写商户订单号">
        </div>
        <label class="layui-form-label">代理商：</label>
        <div class="layui-input-inline" id="agent">
            <select name="agent" lay-filter="agent"  lay-verify="required" lay-search="">
                <option value="">选择或搜索代理商</option>
                <?php if(ADMIN_ID==1): ?>
                <option value="">全部</option>
                <?php endif; if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <option value="<?php echo htmlentities($vo['id']); ?>"><?php echo htmlentities($vo['nick']); ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
        <label class="layui-form-label">日期</label>
        <div class="layui-input-inline">
            <input type="text" class="layui-input" name="date" id="date" placeholder="请选择日期范围">
        </div>
        <label class="layui-form-label">来源：</label>
        <div class="layui-input-inline">
            <select name="client">
                <option value="">全部</option>
                <option value="-1">自行出码</option>
                <?php foreach($clients as $v): ?>
                <option value="<?php echo htmlentities($v['id']); ?>"><?php echo htmlentities($v['nick']); ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <label class="layui-form-label">支付：</label>
        <div class="layui-input-inline">
            <select name="is_pay">
                <option value="">全部</option>
                <option value="1">是</option>
                <option value="2">否</option>
            </select>
        </div>
        <label class="layui-form-label">支付方式：</label>
        <div class="layui-input-inline">
            <select name="pay_type">
                <option value="">全部</option>
                <option value="38">微信</option>
                <option value="9">支付宝</option>
            </select>
        </div>
        <label class="layui-form-label">回调通知：</label>
        <div class="layui-input-inline">
            <select name="notify_status">
                <option value="">全部</option>
                <option value="cancel">通知失败</option>
            </select>
        </div>
        <div class="layui-form-mid layui-word-aux" style="padding: 5px 0!important;">
            <button type="button" id="search" data-type="search" class="layui-btn layui-btn-normal layui-btn-sm" >搜索</button>
        </div>
    </div>
</div>

<table class="layui-hide" id="orders"></table>
<div class="statistical" style="padding: 20px 10px;">
    总金额：<span class="total" style="color: red;"></span>元
</div>
<script>
    layui.use(['form','jquery','table','laydate'], function(){
        var form = layui.form;
        var table = layui.table;
        var $ = layui.$;
        var laydate = layui.laydate;
        $(document).on('click', 'a.notify', function(){
            layer.load();
            $.post($(this).attr('href'), function(data){
                layer.closeAll();
                layer.msg(data.msg);
            });
            return false;
        });
        table.render({
            elem: '#orders'
            ,url:"<?php echo url('pinduoduo/orders'); ?>"
            ,page: true
            ,cellMinWidth: 80
            ,cols: [[
                {field:'id', title: 'ID',width: 80}
                ,{field:'nick', title: '代理商',width:100}
                ,{field:'stores_name', title: '店铺名',width:140}
                ,{field:'order_sn', title: '订单号',width: 200}
                ,{field:'api_order_sn', title: '商户订单号',width: 200}
                ,{field:'total', title: '金额',width: 80}
                ,{field:'is_pay', title: '支付',width: 60}
                ,{field:'from_platform', title: '订单来源',width: 100}
                ,{field:'phone', title: '下单手机',width: 120}
                ,{field:'goods_id', title: '商品ID',width: 110}
                // ,{field:'receive', title: '收货',width: 65}
                ,{field:'pay_type', title: '方式',width: 80}
                ,{field:'ctime', title: '下单时间',width: 180}
                ,{field:'notice', title: '补发通知',width: 180}
            ]]
            ,done: function(res, curr, count){
                console.log(res)
                $(".statistical .total").text(res.total);
            }
        });
        //日期范围
        laydate.render({
            elem: '#date'
            ,range: "~"
            ,max: getNowFormatDate()
        });
        //搜索加载--数据表格重载
        var active = {
            search: function () {
                table.reload('orders', {
                    method:'GET',
                    page: {
                        curr: 1 //重新从第 1 页开始
                    }
                    , where: {
                        order_sn: $("input[name=order_sn]").val(),
                        api_order_sn: $("input[name=api_order_sn]").val(),
                        agent: $("select[name=agent]").val(),
                        staff: $("select[name=staff]").val(),
                        date: $("input[name=date]").val(),
                        client: $("select[name=client]").val(),
                        is_pay: $("select[name=is_pay]").val(),
                        pay_type: $("select[name=pay_type]").val(),
                        notify_status: $("select[name=notify_status]").val()
                    }
                });
            }
        };
        $('#search').on('click', function () {
            ids=new Array();
            var type = $(this).data('type');
            active[type] ? active[type].call(this) : '';
        });
        form.on('select(agent)', function(data){
            var admin_uid=data.value;
            $.post('<?php echo url('pinduoduo/getstaffs'); ?>',{
                admin_uid:admin_uid
            },function (res) {
                console.log(res);
                $('.staff').remove();
                if (res.data.length>0){
                    var html='<div class="layui-input-inline staff" >';
                    html+='<select class="layui-input" name="staff" lay-ignore>';
                    html+='<option value="">选择员工</option>';
                    html+='<option value="">全部</option>';
                    res.data.forEach(function (val) {
                        html+='<option value="'+val.id+'">'+val.name+'</option>';
                    });
                    html+='</select></div>';
                    $('#agent').after(html);
                    form.render('select', 'select');
                }
            })
        });
        //获取当前时间，格式YYYY-MM-DD
        function getNowFormatDate() {
            var date = new Date();
            var seperator1 = "-";
            var year = date.getFullYear();
            var month = date.getMonth() + 1;
            var strDate = date.getDate();
            if (month >= 1 && month <= 9) {
                month = "0" + month;
            }
            if (strDate >= 0 && strDate <= 9) {
                strDate = "0" + strDate;
            }
            var currentdate = year + seperator1 + month + seperator1 + strDate;
            return currentdate;
        }
    });
</script>
<style>
    .layui-form-label{
        min-width: initial !important;
        width: initial !important;
    }
</style>
                    </div>
                </div>
            </div>
        </div>
    <?php break; default: ?>
        
        <div class="page-tab-content">
            <script src="/static/js/layui/layui.js?v=<?php echo config('hisiphp.version'); ?>"></script>
<script>
    var ADMIN_PATH = "<?php echo htmlentities($_SERVER['SCRIPT_NAME']); ?>", LAYUI_OFFSET = 60;
    layui.config({
    	base: '/static/system/js/',
        version: '<?php echo config("hisiphp.version"); ?>'
    }).use('global');
</script>
<div class="layui-form" style="padding-top: 15px;">
    <div class="layui-form-item" style="margin-bottom: 0">
        <label class="layui-form-label">订单号：</label>
        <div class="layui-input-inline">
            <input type="text" name="order_sn" class="layui-input"  placeholder="请填写订单号">
        </div>
        <label class="layui-form-label">商户订单号：</label>
        <div class="layui-input-inline">
            <input type="text" name="api_order_sn" class="layui-input"  placeholder="请填写商户订单号">
        </div>
        <label class="layui-form-label">代理商：</label>
        <div class="layui-input-inline" id="agent">
            <select name="agent" lay-filter="agent"  lay-verify="required" lay-search="">
                <option value="">选择或搜索代理商</option>
                <?php if(ADMIN_ID==1): ?>
                <option value="">全部</option>
                <?php endif; if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <option value="<?php echo htmlentities($vo['id']); ?>"><?php echo htmlentities($vo['nick']); ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
        <label class="layui-form-label">日期</label>
        <div class="layui-input-inline">
            <input type="text" class="layui-input" name="date" id="date" placeholder="请选择日期范围">
        </div>
        <label class="layui-form-label">来源：</label>
        <div class="layui-input-inline">
            <select name="client">
                <option value="">全部</option>
                <option value="-1">自行出码</option>
                <?php foreach($clients as $v): ?>
                <option value="<?php echo htmlentities($v['id']); ?>"><?php echo htmlentities($v['nick']); ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <label class="layui-form-label">支付：</label>
        <div class="layui-input-inline">
            <select name="is_pay">
                <option value="">全部</option>
                <option value="1">是</option>
                <option value="2">否</option>
            </select>
        </div>
        <label class="layui-form-label">支付方式：</label>
        <div class="layui-input-inline">
            <select name="pay_type">
                <option value="">全部</option>
                <option value="38">微信</option>
                <option value="9">支付宝</option>
            </select>
        </div>
        <label class="layui-form-label">回调通知：</label>
        <div class="layui-input-inline">
            <select name="notify_status">
                <option value="">全部</option>
                <option value="cancel">通知失败</option>
            </select>
        </div>
        <div class="layui-form-mid layui-word-aux" style="padding: 5px 0!important;">
            <button type="button" id="search" data-type="search" class="layui-btn layui-btn-normal layui-btn-sm" >搜索</button>
        </div>
    </div>
</div>

<table class="layui-hide" id="orders"></table>
<div class="statistical" style="padding: 20px 10px;">
    总金额：<span class="total" style="color: red;"></span>元
</div>
<script>
    layui.use(['form','jquery','table','laydate'], function(){
        var form = layui.form;
        var table = layui.table;
        var $ = layui.$;
        var laydate = layui.laydate;
        $(document).on('click', 'a.notify', function(){
            layer.load();
            $.post($(this).attr('href'), function(data){
                layer.closeAll();
                layer.msg(data.msg);
            });
            return false;
        });
        table.render({
            elem: '#orders'
            ,url:"<?php echo url('pinduoduo/orders'); ?>"
            ,page: true
            ,cellMinWidth: 80
            ,cols: [[
                {field:'id', title: 'ID',width: 80}
                ,{field:'nick', title: '代理商',width:100}
                ,{field:'stores_name', title: '店铺名',width:140}
                ,{field:'order_sn', title: '订单号',width: 200}
                ,{field:'api_order_sn', title: '商户订单号',width: 200}
                ,{field:'total', title: '金额',width: 80}
                ,{field:'is_pay', title: '支付',width: 60}
                ,{field:'from_platform', title: '订单来源',width: 100}
                ,{field:'phone', title: '下单手机',width: 120}
                ,{field:'goods_id', title: '商品ID',width: 110}
                // ,{field:'receive', title: '收货',width: 65}
                ,{field:'pay_type', title: '方式',width: 80}
                ,{field:'ctime', title: '下单时间',width: 180}
                ,{field:'notice', title: '补发通知',width: 180}
            ]]
            ,done: function(res, curr, count){
                console.log(res)
                $(".statistical .total").text(res.total);
            }
        });
        //日期范围
        laydate.render({
            elem: '#date'
            ,range: "~"
            ,max: getNowFormatDate()
        });
        //搜索加载--数据表格重载
        var active = {
            search: function () {
                table.reload('orders', {
                    method:'GET',
                    page: {
                        curr: 1 //重新从第 1 页开始
                    }
                    , where: {
                        order_sn: $("input[name=order_sn]").val(),
                        api_order_sn: $("input[name=api_order_sn]").val(),
                        agent: $("select[name=agent]").val(),
                        staff: $("select[name=staff]").val(),
                        date: $("input[name=date]").val(),
                        client: $("select[name=client]").val(),
                        is_pay: $("select[name=is_pay]").val(),
                        pay_type: $("select[name=pay_type]").val(),
                        notify_status: $("select[name=notify_status]").val()
                    }
                });
            }
        };
        $('#search').on('click', function () {
            ids=new Array();
            var type = $(this).data('type');
            active[type] ? active[type].call(this) : '';
        });
        form.on('select(agent)', function(data){
            var admin_uid=data.value;
            $.post('<?php echo url('pinduoduo/getstaffs'); ?>',{
                admin_uid:admin_uid
            },function (res) {
                console.log(res);
                $('.staff').remove();
                if (res.data.length>0){
                    var html='<div class="layui-input-inline staff" >';
                    html+='<select class="layui-input" name="staff" lay-ignore>';
                    html+='<option value="">选择员工</option>';
                    html+='<option value="">全部</option>';
                    res.data.forEach(function (val) {
                        html+='<option value="'+val.id+'">'+val.name+'</option>';
                    });
                    html+='</select></div>';
                    $('#agent').after(html);
                    form.render('select', 'select');
                }
            })
        });
        //获取当前时间，格式YYYY-MM-DD
        function getNowFormatDate() {
            var date = new Date();
            var seperator1 = "-";
            var year = date.getFullYear();
            var month = date.getMonth() + 1;
            var strDate = date.getDate();
            if (month >= 1 && month <= 9) {
                month = "0" + month;
            }
            if (strDate >= 0 && strDate <= 9) {
                strDate = "0" + strDate;
            }
            var currentdate = year + seperator1 + month + seperator1 + strDate;
            return currentdate;
        }
    });
</script>
<style>
    .layui-form-label{
        min-width: initial !important;
        width: initial !important;
    }
</style>
        </div>
<?php endswitch; if(input('param.hisi_iframe') || cookie('hisi_iframe')): ?>
</body>
</html>
<?php else: ?>
        </div>
    </div>
    <?php if(false): ?>
    <div class="layui-footer footer">
        <span class="fl">Powered by <a href="<?php echo config('hisiphp.url'); ?>" target="_blank"><?php echo config('hisiphp.name'); ?></a> v<?php echo config('hisiphp.version'); ?></span>
        <span class="fr"> © 2018-2020 <a href="<?php echo config('hisiphp.url'); ?>" target="_blank"><?php echo config('hisiphp.copyright'); ?></a> All Rights Reserved.</span>
    </div>
    <?php endif; ?>
</div>
</body>
</html>
<?php endif; ?>