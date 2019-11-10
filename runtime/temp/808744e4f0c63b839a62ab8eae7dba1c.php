<?php /*a:6:{s:57:"/vagrant/pdd/application/system/view/pinduoduo/users.html";i:1572453610;s:48:"/vagrant/pdd/application/system/view/layout.html";i:1572453610;s:54:"/vagrant/pdd/application/system/view/block/header.html";i:1572453610;s:52:"/vagrant/pdd/application/system/view/block/menu.html";i:1572453610;s:53:"/vagrant/pdd/application/system/view/block/layui.html";i:1572453610;s:54:"/vagrant/pdd/application/system/view/block/footer.html";i:1572453610;}*/ ?>
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
        <label class="layui-form-label">手机号：</label>
        <div class="layui-input-inline">
            <input type="text" name="phone" class="layui-input"  placeholder="请填写手机号码">
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
		<label class="layui-form-label">授权状态：</label>
        <div class="layui-input-inline" >
            <select name="expired_limit_noaddr" lay-search="">
                <option value="">选择或搜索授权状态</option>
                <option value="">全部</option>
                <option value="1">正常</option>
                <option value="2">超时</option>
            </select>
        </div>
      	<div class="layui-form-mid layui-word-aux" style="padding: 5px 0!important;">
            <button type="button" id="search" data-type="search" class="layui-btn layui-btn-normal layui-btn-sm" >搜索</button>
        </div>
    </div>  
</div>
<table class="layui-hide" id="users" lay-filter="users"></table>
<script type="text/html" id="toolbar">
    <div class="layui-btn-group fl">
        <a data-href="<?php echo url('users_status?val=1'); ?>" class="layui-btn layui-btn-primary layui-btn-sm hisi-page-btns layui-icon layui-icon-play" data-table="users">&nbsp;启用</a>
        <a data-href="<?php echo url('users_status?val=0'); ?>" class="layui-btn layui-btn-primary layui-btn-sm hisi-page-btns layui-icon layui-icon-pause" data-table="users">&nbsp;禁用</a>
		<a data-href="<?php echo url('users_delall'); ?>" class="layui-btn layui-btn-primary layui-btn-sm hisi-page-btns layui-icon layui-icon-delete" data-table="users">&nbsp;删除</a>
    </div>
</script>
<script type="text/html" id="buttonTpl">
    <form>
        <!---->
        <input type="checkbox" class="layui-btn layui-btn-sm" data-id="{{d.id }}" {{d.status==1?'checked':''}}  lay-skin="switch" lay-filter="StatusSwitch" lay-text="启用|禁用">
    </form>
</script>
<script>
    layui.use(['form','jquery','table'], function(){
        var form = layui.form;
        var table = layui.table;
        var $ = layui.$;
        table.render({
            elem: '#users'
            ,url:'<?php echo url('pinduoduo/users'); ?>'
            ,page: true
            ,cellMinWidth: 80
            ,toolbar: '#toolbar'
            ,cols: [[
                {type:'checkbox'}
                ,{field:'id', title: 'ID',width: 80, sort: true}
                ,{field:'phone', title: '手机号码'}
                ,{field:'admin_name', title: '代理商'}
                ,{field:'expired_limit_noaddr', title: '授权状态'}
                ,{field:'ctime', title: '添加时间', sort: true}
                ,{title: '操作',width: 220, templet: '#buttonTpl'}
            ]]
        });
        //搜索加载--数据表格重载
        var active = {
            search: function () {
                table.reload('users', {
                    method:'GET',
                    page: {
                        curr: 1 //重新从第 1 页开始
                    }
                    , where: {
                        phone: $("input[name=phone]").val(),
                        agent: $("select[name=agent]").val(),
						expired_limit_noaddr: $("select[name=expired_limit_noaddr]").val()
                    }
                });
            }
        };
        $('#search').on('click', function () {
            ids=new Array();
            var type = $(this).data('type');
            active[type] ? active[type].call(this) : '';
        });
        //监听工具条
        table.on('tool(users)', function(obj){
            var data = obj.data;
            console.log(data);
            if(obj.event === 'user_move'){
                var html='<div style="padding: 30px 58px 10px; background-color: #393D49;color: #FFFFFF; line-height: 22px; font-weight: 300;">';
                html+='<div class="layui-form" >';
                html+='<div class="layui-form-item">';
                html+='<div class="layui-input-inline" style="text-align: center" >';
                html+='<select class="layui-input" id="user_move_select" style="display: block">';
                html+='<option value="">选择代理商</option>';
                if(2!=data.admin_uid){
                    html+='<option value="2">lin330</option>';
                }
                if(3!=data.admin_uid){
                    html+='<option value="3">测试号</option>';
                }
                if(5!=data.admin_uid){
                    html+='<option value="5">客服02</option>';
                }
                if(6!=data.admin_uid){
                    html+='<option value="6">客服03</option>';
                }
                if(9!=data.admin_uid){
                    html+='<option value="9">支付平台后台</option>';
                }
                if(11!=data.admin_uid){
                    html+='<option value="11">康总</option>';
                }
                if(13!=data.admin_uid){
                    html+='<option value="13">南安</option>';
                }
                if(14!=data.admin_uid){
                    html+='<option value="14">南安002</option>';
                }
                if(16!=data.admin_uid){
                    html+='<option value="16">创鑫注塑</option>';
                }
                if(17!=data.admin_uid){
                    html+='<option value="17">骆哥008</option>';
                }
                if(18!=data.admin_uid){
                    html+='<option value="18">hwd</option>';
                }
                if(19!=data.admin_uid){
                    html+='<option value="19">福清余</option>';
                }
                if(20!=data.admin_uid){
                    html+='<option value="20">北峰郑</option>';
                }
                if(21!=data.admin_uid){
                    html+='<option value="21">小春1</option>';
                }
                if(22!=data.admin_uid){
                    html+='<option value="22">小春2</option>';
                }
                if(23!=data.admin_uid){
                    html+='<option value="23">小春3</option>';
                }
                if(24!=data.admin_uid){
                    html+='<option value="24">小春4</option>';
                }
                if(25!=data.admin_uid){
                    html+='<option value="25">小春5</option>';
                }
                if(26!=data.admin_uid){
                    html+='<option value="26">爱拼才能赢</option>';
                }
                if(27!=data.admin_uid){
                    html+='<option value="27">内部</option>';
                }
                if(28!=data.admin_uid){
                    html+='<option value="28">店铺交接</option>';
                }
                if(29!=data.admin_uid){
                    html+='<option value="29">江总</option>';
                }
                if(30!=data.admin_uid){
                    html+='<option value="30">小猪</option>';
                }
                if(31!=data.admin_uid){
                    html+='<option value="31">大胜</option>';
                }
                if(32!=data.admin_uid){
                    html+='<option value="32">电商团谢总</option>';
                }
                if(33!=data.admin_uid){
                    html+='<option value="33">cwb123</option>';
                }
                if(34!=data.admin_uid){
                    html+='<option value="34">周武军</option>';
                }
                if(35!=data.admin_uid){
                    html+='<option value="35">jiangyouwang</option>';
                }
                if(37!=data.admin_uid){
                    html+='<option value="37">老贾</option>';
                }
                if(38!=data.admin_uid){
                    html+='<option value="38">老吴</option>';
                }
                if(39!=data.admin_uid){
                    html+='<option value="39">噢賣嘎</option>';
                }
                if(40!=data.admin_uid){
                    html+='<option value="40">小米酒</option>';
                }
                if(41!=data.admin_uid){
                    html+='<option value="41">光哥</option>';
                }
                if(42!=data.admin_uid){
                    html+='<option value="42">3333陈总的</option>';
                }
                if(43!=data.admin_uid){
                    html+='<option value="43">阿锋团队</option>';
                }
                if(44!=data.admin_uid){
                    html+='<option value="44">丫丫</option>';
                }
                if(46!=data.admin_uid){
                    html+='<option value="46">追宝陈总的</option>';
                }
                if(47!=data.admin_uid){
                    html+='<option value="47">大头陈总的</option>';
                }
                if(52!=data.admin_uid){
                    html+='<option value="52">强格陈总的</option>';
                }
                if(54!=data.admin_uid){
                    html+='<option value="54">北方</option>';
                }
                if(57!=data.admin_uid){
                    html+='<option value="57">饼饼陈总的</option>';
                }
                if(58!=data.admin_uid){
                    html+='<option value="58">tankeyuan</option>';
                }
                if(59!=data.admin_uid){
                    html+='<option value="59">虎哥-团队</option>';
                }
                if(61!=data.admin_uid){
                    html+='<option value="61">河马</option>';
                }
                if(63!=data.admin_uid){
                    html+='<option value="63">陈总的财哥</option>';
                }
                if(70!=data.admin_uid){
                    html+='<option value="70">手机002</option>';
                }
                if(71!=data.admin_uid){
                    html+='<option value="71">鼎胜</option>';
                }
                if(73!=data.admin_uid){
                    html+='<option value="73">刚哥</option>';
                }
                if(74!=data.admin_uid){
                    html+='<option value="74">阿成</option>';
                }
                if(75!=data.admin_uid){
                    html+='<option value="75">小小陈总的</option>';
                }
                if(76!=data.admin_uid){
                    html+='<option value="76">阿凯陈总的</option>';
                }
                if(77!=data.admin_uid){
                    html+='<option value="77">安徽团队</option>';
                }
                if(78!=data.admin_uid){
                    html+='<option value="78">露露团队</option>';
                }
                if(79!=data.admin_uid){
                    html+='<option value="79">周哥团队</option>';
                }
                if(80!=data.admin_uid){
                    html+='<option value="80">鼎胜阿态</option>';
                }
                if(81!=data.admin_uid){
                    html+='<option value="81">田田团队</option>';
                }
                if(82!=data.admin_uid){
                    html+='<option value="82">虫二陈总的</option>';
                }
                if(83!=data.admin_uid){
                    html+='<option value="83">鼎胜花轮独立的</option>';
                }
                if(84!=data.admin_uid){
                    html+='<option value="84">王斌-团队</option>';
                }
                if(85!=data.admin_uid){
                    html+='<option value="85">二哥团队</option>';
                }
                if(86!=data.admin_uid){
                    html+='<option value="86">曾总团队</option>';
                }
                if(87!=data.admin_uid){
                    html+='<option value="87">大中华独立</option>';
                }
                if(88!=data.admin_uid){
                    html+='<option value="88">阿洪陈总的</option>';
                }
                if(90!=data.admin_uid){
                    html+='<option value="90">乐堂独立的</option>';
                }
                if(91!=data.admin_uid){
                    html+='<option value="91">多米鸡陈总的</option>';
                }
                if(92!=data.admin_uid){
                    html+='<option value="92">小猪二组陈总的</option>';
                }
                if(93!=data.admin_uid){
                    html+='<option value="93">小星星陈总的</option>';
                }
                if(94!=data.admin_uid){
                    html+='<option value="94">河北黄老吴团队的</option>';
                }
                if(95!=data.admin_uid){
                    html+='<option value="95">小老虎陈总的</option>';
                }
                if(96!=data.admin_uid){
                    html+='<option value="96">老朱-团队</option>';
                }
                if(97!=data.admin_uid){
                    html+='<option value="97">吴亦凡独立的</option>';
                }
                if(98!=data.admin_uid){
                    html+='<option value="98">百度人独立</option>';
                }
                if(99!=data.admin_uid){
                    html+='<option value="99">方老板陈总的</option>';
                }
                if(100!=data.admin_uid){
                    html+='<option value="100">鼎胜迎风独立的</option>';
                }
                if(101!=data.admin_uid){
                    html+='<option value="101">alex陈总的</option>';
                }
                if(102!=data.admin_uid){
                    html+='<option value="102">陀螺陈总的</option>';
                }
                if(103!=data.admin_uid){
                    html+='<option value="103">FZW总-团队</option>';
                }
                if(104!=data.admin_uid){
                    html+='<option value="104">江南陈总的</option>';
                }
                if(105!=data.admin_uid){
                    html+='<option value="105">阿伟团队</option>';
                }
                if(106!=data.admin_uid){
                    html+='<option value="106">小电陈总的</option>';
                }
                if(107!=data.admin_uid){
                    html+='<option value="107">大大独立的</option>';
                }
                if(108!=data.admin_uid){
                    html+='<option value="108">报团--田田</option>';
                }
                if(109!=data.admin_uid){
                    html+='<option value="109">财哥002陈总的</option>';
                }
                if(110!=data.admin_uid){
                    html+='<option value="110">鼎盛测试</option>';
                }
                if(111!=data.admin_uid){
                    html+='<option value="111">Aben独立的</option>';
                }
                if(112!=data.admin_uid){
                    html+='<option value="112">小超陈总的</option>';
                }
                if(113!=data.admin_uid){
                    html+='<option value="113">小男孩陈总的</option>';
                }
                html+='</select></div></div></div></div>';
                layer.open({
                    type: 1
                    ,title: '转移手机号('+data.phone+')给:'
                    ,closeBtn: false
                    ,area: '300px;'
                    ,shade: 0.8
                    ,id: 'LAY_user_move' //设定一个id，防止重复弹出
                    ,btn: ['转移','放弃']
                    ,btnAlign: 'c'
                    ,moveType: 1 //拖拽模式，0或者1
                    ,content: html
                    ,success: function(res){

                    }
                    ,yes: function(){
                        var admin_uid=$('#user_move_select').val();
                        var flag=true;
                        if(!admin_uid){
                            layer.msg('请选择代理商', {
                                time: 2000,
                                closeBtn: 0
                            });
                            flag=false;
                            return;
                        }
                        if (admin_uid==data.admin_uid){
                            layer.msg('别转移给自己', {
                                time: 2000,
                                closeBtn: 0
                            });
                            flag=false;
                            return;
                        }
                        if (flag){
                            $.post('<?php echo url('pinduoduo/user_move'); ?>',{
                                id:data.id,
                                admin_uid:admin_uid
                            },function (res) {
                                console.log(res);
                                if(res.status){
                                    layer.msg(res.msg, {
                                        time: 2000,
                                        closeBtn: 0
                                    });
                                    self.location.reload();
                                }else{
                                    layer.msg(res.msg, {
                                        time: 2000,
                                        closeBtn: 0
                                    });
                                }
                            })
                        }
                    }
                });
            }
            if(obj.event === 'user_copy'){
                var html='<div style="padding: 30px 58px 10px; background-color: #393D49;color: #FFFFFF; line-height: 22px; font-weight: 300;">';
                html+='<div class="layui-form" >';
                html+='<div class="layui-form-item">';
                html+='<div class="layui-input-inline" style="text-align: center" >';
                html+='<select class="layui-input" id="user_copy_select" style="display: block">';
                html+='<option value="">选择代理商</option>';
                if(2!=data.admin_uid){
                    html+='<option value="2">lin330</option>';
                }
                if(3!=data.admin_uid){
                    html+='<option value="3">测试号</option>';
                }
                if(5!=data.admin_uid){
                    html+='<option value="5">客服02</option>';
                }
                if(6!=data.admin_uid){
                    html+='<option value="6">客服03</option>';
                }
                if(9!=data.admin_uid){
                    html+='<option value="9">支付平台后台</option>';
                }
                if(11!=data.admin_uid){
                    html+='<option value="11">康总</option>';
                }
                if(13!=data.admin_uid){
                    html+='<option value="13">南安</option>';
                }
                if(14!=data.admin_uid){
                    html+='<option value="14">南安002</option>';
                }
                if(16!=data.admin_uid){
                    html+='<option value="16">创鑫注塑</option>';
                }
                if(17!=data.admin_uid){
                    html+='<option value="17">骆哥008</option>';
                }
                if(18!=data.admin_uid){
                    html+='<option value="18">hwd</option>';
                }
                if(19!=data.admin_uid){
                    html+='<option value="19">福清余</option>';
                }
                if(20!=data.admin_uid){
                    html+='<option value="20">北峰郑</option>';
                }
                if(21!=data.admin_uid){
                    html+='<option value="21">小春1</option>';
                }
                if(22!=data.admin_uid){
                    html+='<option value="22">小春2</option>';
                }
                if(23!=data.admin_uid){
                    html+='<option value="23">小春3</option>';
                }
                if(24!=data.admin_uid){
                    html+='<option value="24">小春4</option>';
                }
                if(25!=data.admin_uid){
                    html+='<option value="25">小春5</option>';
                }
                if(26!=data.admin_uid){
                    html+='<option value="26">爱拼才能赢</option>';
                }
                if(27!=data.admin_uid){
                    html+='<option value="27">内部</option>';
                }
                if(28!=data.admin_uid){
                    html+='<option value="28">店铺交接</option>';
                }
                if(29!=data.admin_uid){
                    html+='<option value="29">江总</option>';
                }
                if(30!=data.admin_uid){
                    html+='<option value="30">小猪</option>';
                }
                if(31!=data.admin_uid){
                    html+='<option value="31">大胜</option>';
                }
                if(32!=data.admin_uid){
                    html+='<option value="32">电商团谢总</option>';
                }
                if(33!=data.admin_uid){
                    html+='<option value="33">cwb123</option>';
                }
                if(34!=data.admin_uid){
                    html+='<option value="34">周武军</option>';
                }
                if(35!=data.admin_uid){
                    html+='<option value="35">jiangyouwang</option>';
                }
                if(37!=data.admin_uid){
                    html+='<option value="37">老贾</option>';
                }
                if(38!=data.admin_uid){
                    html+='<option value="38">老吴</option>';
                }
                if(39!=data.admin_uid){
                    html+='<option value="39">噢賣嘎</option>';
                }
                if(40!=data.admin_uid){
                    html+='<option value="40">小米酒</option>';
                }
                if(41!=data.admin_uid){
                    html+='<option value="41">光哥</option>';
                }
                if(42!=data.admin_uid){
                    html+='<option value="42">3333陈总的</option>';
                }
                if(43!=data.admin_uid){
                    html+='<option value="43">阿锋团队</option>';
                }
                if(44!=data.admin_uid){
                    html+='<option value="44">丫丫</option>';
                }
                if(46!=data.admin_uid){
                    html+='<option value="46">追宝陈总的</option>';
                }
                if(47!=data.admin_uid){
                    html+='<option value="47">大头陈总的</option>';
                }
                if(52!=data.admin_uid){
                    html+='<option value="52">强格陈总的</option>';
                }
                if(54!=data.admin_uid){
                    html+='<option value="54">北方</option>';
                }
                if(57!=data.admin_uid){
                    html+='<option value="57">饼饼陈总的</option>';
                }
                if(58!=data.admin_uid){
                    html+='<option value="58">tankeyuan</option>';
                }
                if(59!=data.admin_uid){
                    html+='<option value="59">虎哥-团队</option>';
                }
                if(61!=data.admin_uid){
                    html+='<option value="61">河马</option>';
                }
                if(63!=data.admin_uid){
                    html+='<option value="63">陈总的财哥</option>';
                }
                if(70!=data.admin_uid){
                    html+='<option value="70">手机002</option>';
                }
                if(71!=data.admin_uid){
                    html+='<option value="71">鼎胜</option>';
                }
                if(73!=data.admin_uid){
                    html+='<option value="73">刚哥</option>';
                }
                if(74!=data.admin_uid){
                    html+='<option value="74">阿成</option>';
                }
                if(75!=data.admin_uid){
                    html+='<option value="75">小小陈总的</option>';
                }
                if(76!=data.admin_uid){
                    html+='<option value="76">阿凯陈总的</option>';
                }
                if(77!=data.admin_uid){
                    html+='<option value="77">安徽团队</option>';
                }
                if(78!=data.admin_uid){
                    html+='<option value="78">露露团队</option>';
                }
                if(79!=data.admin_uid){
                    html+='<option value="79">周哥团队</option>';
                }
                if(80!=data.admin_uid){
                    html+='<option value="80">鼎胜阿态</option>';
                }
                if(81!=data.admin_uid){
                    html+='<option value="81">田田团队</option>';
                }
                if(82!=data.admin_uid){
                    html+='<option value="82">虫二陈总的</option>';
                }
                if(83!=data.admin_uid){
                    html+='<option value="83">鼎胜花轮独立的</option>';
                }
                if(84!=data.admin_uid){
                    html+='<option value="84">王斌-团队</option>';
                }
                if(85!=data.admin_uid){
                    html+='<option value="85">二哥团队</option>';
                }
                if(86!=data.admin_uid){
                    html+='<option value="86">曾总团队</option>';
                }
                if(87!=data.admin_uid){
                    html+='<option value="87">大中华独立</option>';
                }
                if(88!=data.admin_uid){
                    html+='<option value="88">阿洪陈总的</option>';
                }
                if(90!=data.admin_uid){
                    html+='<option value="90">乐堂独立的</option>';
                }
                if(91!=data.admin_uid){
                    html+='<option value="91">多米鸡陈总的</option>';
                }
                if(92!=data.admin_uid){
                    html+='<option value="92">小猪二组陈总的</option>';
                }
                if(93!=data.admin_uid){
                    html+='<option value="93">小星星陈总的</option>';
                }
                if(94!=data.admin_uid){
                    html+='<option value="94">河北黄老吴团队的</option>';
                }
                if(95!=data.admin_uid){
                    html+='<option value="95">小老虎陈总的</option>';
                }
                if(96!=data.admin_uid){
                    html+='<option value="96">老朱-团队</option>';
                }
                if(97!=data.admin_uid){
                    html+='<option value="97">吴亦凡独立的</option>';
                }
                if(98!=data.admin_uid){
                    html+='<option value="98">百度人独立</option>';
                }
                if(99!=data.admin_uid){
                    html+='<option value="99">方老板陈总的</option>';
                }
                if(100!=data.admin_uid){
                    html+='<option value="100">鼎胜迎风独立的</option>';
                }
                if(101!=data.admin_uid){
                    html+='<option value="101">alex陈总的</option>';
                }
                if(102!=data.admin_uid){
                    html+='<option value="102">陀螺陈总的</option>';
                }
                if(103!=data.admin_uid){
                    html+='<option value="103">FZW总-团队</option>';
                }
                if(104!=data.admin_uid){
                    html+='<option value="104">江南陈总的</option>';
                }
                if(105!=data.admin_uid){
                    html+='<option value="105">阿伟团队</option>';
                }
                if(106!=data.admin_uid){
                    html+='<option value="106">小电陈总的</option>';
                }
                if(107!=data.admin_uid){
                    html+='<option value="107">大大独立的</option>';
                }
                if(108!=data.admin_uid){
                    html+='<option value="108">报团--田田</option>';
                }
                if(109!=data.admin_uid){
                    html+='<option value="109">财哥002陈总的</option>';
                }
                if(110!=data.admin_uid){
                    html+='<option value="110">鼎盛测试</option>';
                }
                if(111!=data.admin_uid){
                    html+='<option value="111">Aben独立的</option>';
                }
                if(112!=data.admin_uid){
                    html+='<option value="112">小超陈总的</option>';
                }
                if(113!=data.admin_uid){
                    html+='<option value="113">小男孩陈总的</option>';
                }
                html+='</select></div></div></div></div>';
                layer.open({
                    type: 1
                    ,title: '复制手机号('+data.phone+')给:'
                    ,closeBtn: false
                    ,area: '300px;'
                    ,shade: 0.8
                    ,id: 'LAY_user_move' //设定一个id，防止重复弹出
                    ,btn: ['复制','放弃']
                    ,btnAlign: 'c'
                    ,moveType: 1 //拖拽模式，0或者1
                    ,content: html
                    ,success: function(res){

                    }
                    ,yes: function(){
                        var admin_uid=$('#user_copy_select').val();
                        var flag=true;
                        if(!admin_uid){
                            layer.msg('请选择代理商', {
                                time: 2000,
                                closeBtn: 0
                            });
                            flag=false;
                            return;
                        }
                        if (admin_uid==data.admin_uid){
                            layer.msg('你已经有了!', {
                                time: 2000,
                                closeBtn: 0
                            });
                            flag=false;
                            return;
                        }
                        if (flag){
                            $.post('<?php echo url('pinduoduo/user_copy'); ?>',{
                                id:data.id,
                                admin_uid:admin_uid
                            },function (res) {
                                console.log(res);
                                if(res.status){
                                    layer.msg(res.msg, {
                                        time: 2000,
                                        closeBtn: 0
                                    });
                                    self.location.reload();
                                }else{
                                    layer.msg(res.msg, {
                                        time: 2000,
                                        closeBtn: 0
                                    });
                                }
                            })
                        }
                    }
                });
            }
            if(obj.event === 'user_repeat'){
                var html='<div style="padding: 30px 58px 30px; background-color: #393D49;color: #FFFFFF; line-height: 22px; font-weight: 300;">';
                html+='<p>此操作将删除此手机的其它占用，仅保留当前这一条。</p>';
                html+='</div>';
                layer.open({
                    type: 1
                    ,title:'特别提醒'
                    ,closeBtn: false
                    ,area: '300px;'
                    ,shade: 0.8
                    ,id: 'LAY_user_repeat' //设定一个id，防止重复弹出
                    ,btn: ['去重','放弃']
                    ,btnAlign: 'c'
                    ,moveType: 1 //拖拽模式，0或者1
                    ,content: html
                    ,success: function(res){

                    }
                    ,yes: function(){
                        $.post('<?php echo url('pinduoduo/user_repeat'); ?>',{
                            id:data.id
                        },function (res) {
                            console.log(res);
                            if(res.status){
                                layer.msg(res.msg, {
                                    time: 2000,
                                    closeBtn: 0
                                });
                                self.location.reload();
                            }else{
                                layer.msg(res.msg, {
                                    time: 2000,
                                    closeBtn: 0
                                });
                            }
                        })
                    }
                });
            }
        });
        form.on('switch(StatusSwitch)', function(data){
            let id=data.elem.dataset.id;
            let status=this.checked?1:0;
            $.post('<?php echo url('pinduoduo/users_status'); ?>',{
                id:id,
                val:status
            },function (res) {
                console.log(res);
                layer.msg(res.msg, {
                    time: 2000,
                    closeBtn: 0
                });
                if(res.status==0){
                    $(data.elem).prop("checked", data.elem.defaultChecked);
                    form.render();
                }
            })
        });
    });
    function users_del(id) {
        if (confirm('确认是否删除？')==true){
            self.location='<?php echo url('pinduoduo/users_del'); ?>?id='+id;
        }
    }
</script>
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
        <label class="layui-form-label">手机号：</label>
        <div class="layui-input-inline">
            <input type="text" name="phone" class="layui-input"  placeholder="请填写手机号码">
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
		<label class="layui-form-label">授权状态：</label>
        <div class="layui-input-inline" >
            <select name="expired_limit_noaddr" lay-search="">
                <option value="">选择或搜索授权状态</option>
                <option value="">全部</option>
                <option value="1">正常</option>
                <option value="2">超时</option>
            </select>
        </div>
      	<div class="layui-form-mid layui-word-aux" style="padding: 5px 0!important;">
            <button type="button" id="search" data-type="search" class="layui-btn layui-btn-normal layui-btn-sm" >搜索</button>
        </div>
    </div>  
</div>
<table class="layui-hide" id="users" lay-filter="users"></table>
<script type="text/html" id="toolbar">
    <div class="layui-btn-group fl">
        <a data-href="<?php echo url('users_status?val=1'); ?>" class="layui-btn layui-btn-primary layui-btn-sm hisi-page-btns layui-icon layui-icon-play" data-table="users">&nbsp;启用</a>
        <a data-href="<?php echo url('users_status?val=0'); ?>" class="layui-btn layui-btn-primary layui-btn-sm hisi-page-btns layui-icon layui-icon-pause" data-table="users">&nbsp;禁用</a>
		<a data-href="<?php echo url('users_delall'); ?>" class="layui-btn layui-btn-primary layui-btn-sm hisi-page-btns layui-icon layui-icon-delete" data-table="users">&nbsp;删除</a>
    </div>
</script>
<script type="text/html" id="buttonTpl">
    <form>
        <!---->
        <input type="checkbox" class="layui-btn layui-btn-sm" data-id="{{d.id }}" {{d.status==1?'checked':''}}  lay-skin="switch" lay-filter="StatusSwitch" lay-text="启用|禁用">
    </form>
</script>
<script>
    layui.use(['form','jquery','table'], function(){
        var form = layui.form;
        var table = layui.table;
        var $ = layui.$;
        table.render({
            elem: '#users'
            ,url:'<?php echo url('pinduoduo/users'); ?>'
            ,page: true
            ,cellMinWidth: 80
            ,toolbar: '#toolbar'
            ,cols: [[
                {type:'checkbox'}
                ,{field:'id', title: 'ID',width: 80, sort: true}
                ,{field:'phone', title: '手机号码'}
                ,{field:'admin_name', title: '代理商'}
                ,{field:'expired_limit_noaddr', title: '授权状态'}
                ,{field:'ctime', title: '添加时间', sort: true}
                ,{title: '操作',width: 220, templet: '#buttonTpl'}
            ]]
        });
        //搜索加载--数据表格重载
        var active = {
            search: function () {
                table.reload('users', {
                    method:'GET',
                    page: {
                        curr: 1 //重新从第 1 页开始
                    }
                    , where: {
                        phone: $("input[name=phone]").val(),
                        agent: $("select[name=agent]").val(),
						expired_limit_noaddr: $("select[name=expired_limit_noaddr]").val()
                    }
                });
            }
        };
        $('#search').on('click', function () {
            ids=new Array();
            var type = $(this).data('type');
            active[type] ? active[type].call(this) : '';
        });
        //监听工具条
        table.on('tool(users)', function(obj){
            var data = obj.data;
            console.log(data);
            if(obj.event === 'user_move'){
                var html='<div style="padding: 30px 58px 10px; background-color: #393D49;color: #FFFFFF; line-height: 22px; font-weight: 300;">';
                html+='<div class="layui-form" >';
                html+='<div class="layui-form-item">';
                html+='<div class="layui-input-inline" style="text-align: center" >';
                html+='<select class="layui-input" id="user_move_select" style="display: block">';
                html+='<option value="">选择代理商</option>';
                if(2!=data.admin_uid){
                    html+='<option value="2">lin330</option>';
                }
                if(3!=data.admin_uid){
                    html+='<option value="3">测试号</option>';
                }
                if(5!=data.admin_uid){
                    html+='<option value="5">客服02</option>';
                }
                if(6!=data.admin_uid){
                    html+='<option value="6">客服03</option>';
                }
                if(9!=data.admin_uid){
                    html+='<option value="9">支付平台后台</option>';
                }
                if(11!=data.admin_uid){
                    html+='<option value="11">康总</option>';
                }
                if(13!=data.admin_uid){
                    html+='<option value="13">南安</option>';
                }
                if(14!=data.admin_uid){
                    html+='<option value="14">南安002</option>';
                }
                if(16!=data.admin_uid){
                    html+='<option value="16">创鑫注塑</option>';
                }
                if(17!=data.admin_uid){
                    html+='<option value="17">骆哥008</option>';
                }
                if(18!=data.admin_uid){
                    html+='<option value="18">hwd</option>';
                }
                if(19!=data.admin_uid){
                    html+='<option value="19">福清余</option>';
                }
                if(20!=data.admin_uid){
                    html+='<option value="20">北峰郑</option>';
                }
                if(21!=data.admin_uid){
                    html+='<option value="21">小春1</option>';
                }
                if(22!=data.admin_uid){
                    html+='<option value="22">小春2</option>';
                }
                if(23!=data.admin_uid){
                    html+='<option value="23">小春3</option>';
                }
                if(24!=data.admin_uid){
                    html+='<option value="24">小春4</option>';
                }
                if(25!=data.admin_uid){
                    html+='<option value="25">小春5</option>';
                }
                if(26!=data.admin_uid){
                    html+='<option value="26">爱拼才能赢</option>';
                }
                if(27!=data.admin_uid){
                    html+='<option value="27">内部</option>';
                }
                if(28!=data.admin_uid){
                    html+='<option value="28">店铺交接</option>';
                }
                if(29!=data.admin_uid){
                    html+='<option value="29">江总</option>';
                }
                if(30!=data.admin_uid){
                    html+='<option value="30">小猪</option>';
                }
                if(31!=data.admin_uid){
                    html+='<option value="31">大胜</option>';
                }
                if(32!=data.admin_uid){
                    html+='<option value="32">电商团谢总</option>';
                }
                if(33!=data.admin_uid){
                    html+='<option value="33">cwb123</option>';
                }
                if(34!=data.admin_uid){
                    html+='<option value="34">周武军</option>';
                }
                if(35!=data.admin_uid){
                    html+='<option value="35">jiangyouwang</option>';
                }
                if(37!=data.admin_uid){
                    html+='<option value="37">老贾</option>';
                }
                if(38!=data.admin_uid){
                    html+='<option value="38">老吴</option>';
                }
                if(39!=data.admin_uid){
                    html+='<option value="39">噢賣嘎</option>';
                }
                if(40!=data.admin_uid){
                    html+='<option value="40">小米酒</option>';
                }
                if(41!=data.admin_uid){
                    html+='<option value="41">光哥</option>';
                }
                if(42!=data.admin_uid){
                    html+='<option value="42">3333陈总的</option>';
                }
                if(43!=data.admin_uid){
                    html+='<option value="43">阿锋团队</option>';
                }
                if(44!=data.admin_uid){
                    html+='<option value="44">丫丫</option>';
                }
                if(46!=data.admin_uid){
                    html+='<option value="46">追宝陈总的</option>';
                }
                if(47!=data.admin_uid){
                    html+='<option value="47">大头陈总的</option>';
                }
                if(52!=data.admin_uid){
                    html+='<option value="52">强格陈总的</option>';
                }
                if(54!=data.admin_uid){
                    html+='<option value="54">北方</option>';
                }
                if(57!=data.admin_uid){
                    html+='<option value="57">饼饼陈总的</option>';
                }
                if(58!=data.admin_uid){
                    html+='<option value="58">tankeyuan</option>';
                }
                if(59!=data.admin_uid){
                    html+='<option value="59">虎哥-团队</option>';
                }
                if(61!=data.admin_uid){
                    html+='<option value="61">河马</option>';
                }
                if(63!=data.admin_uid){
                    html+='<option value="63">陈总的财哥</option>';
                }
                if(70!=data.admin_uid){
                    html+='<option value="70">手机002</option>';
                }
                if(71!=data.admin_uid){
                    html+='<option value="71">鼎胜</option>';
                }
                if(73!=data.admin_uid){
                    html+='<option value="73">刚哥</option>';
                }
                if(74!=data.admin_uid){
                    html+='<option value="74">阿成</option>';
                }
                if(75!=data.admin_uid){
                    html+='<option value="75">小小陈总的</option>';
                }
                if(76!=data.admin_uid){
                    html+='<option value="76">阿凯陈总的</option>';
                }
                if(77!=data.admin_uid){
                    html+='<option value="77">安徽团队</option>';
                }
                if(78!=data.admin_uid){
                    html+='<option value="78">露露团队</option>';
                }
                if(79!=data.admin_uid){
                    html+='<option value="79">周哥团队</option>';
                }
                if(80!=data.admin_uid){
                    html+='<option value="80">鼎胜阿态</option>';
                }
                if(81!=data.admin_uid){
                    html+='<option value="81">田田团队</option>';
                }
                if(82!=data.admin_uid){
                    html+='<option value="82">虫二陈总的</option>';
                }
                if(83!=data.admin_uid){
                    html+='<option value="83">鼎胜花轮独立的</option>';
                }
                if(84!=data.admin_uid){
                    html+='<option value="84">王斌-团队</option>';
                }
                if(85!=data.admin_uid){
                    html+='<option value="85">二哥团队</option>';
                }
                if(86!=data.admin_uid){
                    html+='<option value="86">曾总团队</option>';
                }
                if(87!=data.admin_uid){
                    html+='<option value="87">大中华独立</option>';
                }
                if(88!=data.admin_uid){
                    html+='<option value="88">阿洪陈总的</option>';
                }
                if(90!=data.admin_uid){
                    html+='<option value="90">乐堂独立的</option>';
                }
                if(91!=data.admin_uid){
                    html+='<option value="91">多米鸡陈总的</option>';
                }
                if(92!=data.admin_uid){
                    html+='<option value="92">小猪二组陈总的</option>';
                }
                if(93!=data.admin_uid){
                    html+='<option value="93">小星星陈总的</option>';
                }
                if(94!=data.admin_uid){
                    html+='<option value="94">河北黄老吴团队的</option>';
                }
                if(95!=data.admin_uid){
                    html+='<option value="95">小老虎陈总的</option>';
                }
                if(96!=data.admin_uid){
                    html+='<option value="96">老朱-团队</option>';
                }
                if(97!=data.admin_uid){
                    html+='<option value="97">吴亦凡独立的</option>';
                }
                if(98!=data.admin_uid){
                    html+='<option value="98">百度人独立</option>';
                }
                if(99!=data.admin_uid){
                    html+='<option value="99">方老板陈总的</option>';
                }
                if(100!=data.admin_uid){
                    html+='<option value="100">鼎胜迎风独立的</option>';
                }
                if(101!=data.admin_uid){
                    html+='<option value="101">alex陈总的</option>';
                }
                if(102!=data.admin_uid){
                    html+='<option value="102">陀螺陈总的</option>';
                }
                if(103!=data.admin_uid){
                    html+='<option value="103">FZW总-团队</option>';
                }
                if(104!=data.admin_uid){
                    html+='<option value="104">江南陈总的</option>';
                }
                if(105!=data.admin_uid){
                    html+='<option value="105">阿伟团队</option>';
                }
                if(106!=data.admin_uid){
                    html+='<option value="106">小电陈总的</option>';
                }
                if(107!=data.admin_uid){
                    html+='<option value="107">大大独立的</option>';
                }
                if(108!=data.admin_uid){
                    html+='<option value="108">报团--田田</option>';
                }
                if(109!=data.admin_uid){
                    html+='<option value="109">财哥002陈总的</option>';
                }
                if(110!=data.admin_uid){
                    html+='<option value="110">鼎盛测试</option>';
                }
                if(111!=data.admin_uid){
                    html+='<option value="111">Aben独立的</option>';
                }
                if(112!=data.admin_uid){
                    html+='<option value="112">小超陈总的</option>';
                }
                if(113!=data.admin_uid){
                    html+='<option value="113">小男孩陈总的</option>';
                }
                html+='</select></div></div></div></div>';
                layer.open({
                    type: 1
                    ,title: '转移手机号('+data.phone+')给:'
                    ,closeBtn: false
                    ,area: '300px;'
                    ,shade: 0.8
                    ,id: 'LAY_user_move' //设定一个id，防止重复弹出
                    ,btn: ['转移','放弃']
                    ,btnAlign: 'c'
                    ,moveType: 1 //拖拽模式，0或者1
                    ,content: html
                    ,success: function(res){

                    }
                    ,yes: function(){
                        var admin_uid=$('#user_move_select').val();
                        var flag=true;
                        if(!admin_uid){
                            layer.msg('请选择代理商', {
                                time: 2000,
                                closeBtn: 0
                            });
                            flag=false;
                            return;
                        }
                        if (admin_uid==data.admin_uid){
                            layer.msg('别转移给自己', {
                                time: 2000,
                                closeBtn: 0
                            });
                            flag=false;
                            return;
                        }
                        if (flag){
                            $.post('<?php echo url('pinduoduo/user_move'); ?>',{
                                id:data.id,
                                admin_uid:admin_uid
                            },function (res) {
                                console.log(res);
                                if(res.status){
                                    layer.msg(res.msg, {
                                        time: 2000,
                                        closeBtn: 0
                                    });
                                    self.location.reload();
                                }else{
                                    layer.msg(res.msg, {
                                        time: 2000,
                                        closeBtn: 0
                                    });
                                }
                            })
                        }
                    }
                });
            }
            if(obj.event === 'user_copy'){
                var html='<div style="padding: 30px 58px 10px; background-color: #393D49;color: #FFFFFF; line-height: 22px; font-weight: 300;">';
                html+='<div class="layui-form" >';
                html+='<div class="layui-form-item">';
                html+='<div class="layui-input-inline" style="text-align: center" >';
                html+='<select class="layui-input" id="user_copy_select" style="display: block">';
                html+='<option value="">选择代理商</option>';
                if(2!=data.admin_uid){
                    html+='<option value="2">lin330</option>';
                }
                if(3!=data.admin_uid){
                    html+='<option value="3">测试号</option>';
                }
                if(5!=data.admin_uid){
                    html+='<option value="5">客服02</option>';
                }
                if(6!=data.admin_uid){
                    html+='<option value="6">客服03</option>';
                }
                if(9!=data.admin_uid){
                    html+='<option value="9">支付平台后台</option>';
                }
                if(11!=data.admin_uid){
                    html+='<option value="11">康总</option>';
                }
                if(13!=data.admin_uid){
                    html+='<option value="13">南安</option>';
                }
                if(14!=data.admin_uid){
                    html+='<option value="14">南安002</option>';
                }
                if(16!=data.admin_uid){
                    html+='<option value="16">创鑫注塑</option>';
                }
                if(17!=data.admin_uid){
                    html+='<option value="17">骆哥008</option>';
                }
                if(18!=data.admin_uid){
                    html+='<option value="18">hwd</option>';
                }
                if(19!=data.admin_uid){
                    html+='<option value="19">福清余</option>';
                }
                if(20!=data.admin_uid){
                    html+='<option value="20">北峰郑</option>';
                }
                if(21!=data.admin_uid){
                    html+='<option value="21">小春1</option>';
                }
                if(22!=data.admin_uid){
                    html+='<option value="22">小春2</option>';
                }
                if(23!=data.admin_uid){
                    html+='<option value="23">小春3</option>';
                }
                if(24!=data.admin_uid){
                    html+='<option value="24">小春4</option>';
                }
                if(25!=data.admin_uid){
                    html+='<option value="25">小春5</option>';
                }
                if(26!=data.admin_uid){
                    html+='<option value="26">爱拼才能赢</option>';
                }
                if(27!=data.admin_uid){
                    html+='<option value="27">内部</option>';
                }
                if(28!=data.admin_uid){
                    html+='<option value="28">店铺交接</option>';
                }
                if(29!=data.admin_uid){
                    html+='<option value="29">江总</option>';
                }
                if(30!=data.admin_uid){
                    html+='<option value="30">小猪</option>';
                }
                if(31!=data.admin_uid){
                    html+='<option value="31">大胜</option>';
                }
                if(32!=data.admin_uid){
                    html+='<option value="32">电商团谢总</option>';
                }
                if(33!=data.admin_uid){
                    html+='<option value="33">cwb123</option>';
                }
                if(34!=data.admin_uid){
                    html+='<option value="34">周武军</option>';
                }
                if(35!=data.admin_uid){
                    html+='<option value="35">jiangyouwang</option>';
                }
                if(37!=data.admin_uid){
                    html+='<option value="37">老贾</option>';
                }
                if(38!=data.admin_uid){
                    html+='<option value="38">老吴</option>';
                }
                if(39!=data.admin_uid){
                    html+='<option value="39">噢賣嘎</option>';
                }
                if(40!=data.admin_uid){
                    html+='<option value="40">小米酒</option>';
                }
                if(41!=data.admin_uid){
                    html+='<option value="41">光哥</option>';
                }
                if(42!=data.admin_uid){
                    html+='<option value="42">3333陈总的</option>';
                }
                if(43!=data.admin_uid){
                    html+='<option value="43">阿锋团队</option>';
                }
                if(44!=data.admin_uid){
                    html+='<option value="44">丫丫</option>';
                }
                if(46!=data.admin_uid){
                    html+='<option value="46">追宝陈总的</option>';
                }
                if(47!=data.admin_uid){
                    html+='<option value="47">大头陈总的</option>';
                }
                if(52!=data.admin_uid){
                    html+='<option value="52">强格陈总的</option>';
                }
                if(54!=data.admin_uid){
                    html+='<option value="54">北方</option>';
                }
                if(57!=data.admin_uid){
                    html+='<option value="57">饼饼陈总的</option>';
                }
                if(58!=data.admin_uid){
                    html+='<option value="58">tankeyuan</option>';
                }
                if(59!=data.admin_uid){
                    html+='<option value="59">虎哥-团队</option>';
                }
                if(61!=data.admin_uid){
                    html+='<option value="61">河马</option>';
                }
                if(63!=data.admin_uid){
                    html+='<option value="63">陈总的财哥</option>';
                }
                if(70!=data.admin_uid){
                    html+='<option value="70">手机002</option>';
                }
                if(71!=data.admin_uid){
                    html+='<option value="71">鼎胜</option>';
                }
                if(73!=data.admin_uid){
                    html+='<option value="73">刚哥</option>';
                }
                if(74!=data.admin_uid){
                    html+='<option value="74">阿成</option>';
                }
                if(75!=data.admin_uid){
                    html+='<option value="75">小小陈总的</option>';
                }
                if(76!=data.admin_uid){
                    html+='<option value="76">阿凯陈总的</option>';
                }
                if(77!=data.admin_uid){
                    html+='<option value="77">安徽团队</option>';
                }
                if(78!=data.admin_uid){
                    html+='<option value="78">露露团队</option>';
                }
                if(79!=data.admin_uid){
                    html+='<option value="79">周哥团队</option>';
                }
                if(80!=data.admin_uid){
                    html+='<option value="80">鼎胜阿态</option>';
                }
                if(81!=data.admin_uid){
                    html+='<option value="81">田田团队</option>';
                }
                if(82!=data.admin_uid){
                    html+='<option value="82">虫二陈总的</option>';
                }
                if(83!=data.admin_uid){
                    html+='<option value="83">鼎胜花轮独立的</option>';
                }
                if(84!=data.admin_uid){
                    html+='<option value="84">王斌-团队</option>';
                }
                if(85!=data.admin_uid){
                    html+='<option value="85">二哥团队</option>';
                }
                if(86!=data.admin_uid){
                    html+='<option value="86">曾总团队</option>';
                }
                if(87!=data.admin_uid){
                    html+='<option value="87">大中华独立</option>';
                }
                if(88!=data.admin_uid){
                    html+='<option value="88">阿洪陈总的</option>';
                }
                if(90!=data.admin_uid){
                    html+='<option value="90">乐堂独立的</option>';
                }
                if(91!=data.admin_uid){
                    html+='<option value="91">多米鸡陈总的</option>';
                }
                if(92!=data.admin_uid){
                    html+='<option value="92">小猪二组陈总的</option>';
                }
                if(93!=data.admin_uid){
                    html+='<option value="93">小星星陈总的</option>';
                }
                if(94!=data.admin_uid){
                    html+='<option value="94">河北黄老吴团队的</option>';
                }
                if(95!=data.admin_uid){
                    html+='<option value="95">小老虎陈总的</option>';
                }
                if(96!=data.admin_uid){
                    html+='<option value="96">老朱-团队</option>';
                }
                if(97!=data.admin_uid){
                    html+='<option value="97">吴亦凡独立的</option>';
                }
                if(98!=data.admin_uid){
                    html+='<option value="98">百度人独立</option>';
                }
                if(99!=data.admin_uid){
                    html+='<option value="99">方老板陈总的</option>';
                }
                if(100!=data.admin_uid){
                    html+='<option value="100">鼎胜迎风独立的</option>';
                }
                if(101!=data.admin_uid){
                    html+='<option value="101">alex陈总的</option>';
                }
                if(102!=data.admin_uid){
                    html+='<option value="102">陀螺陈总的</option>';
                }
                if(103!=data.admin_uid){
                    html+='<option value="103">FZW总-团队</option>';
                }
                if(104!=data.admin_uid){
                    html+='<option value="104">江南陈总的</option>';
                }
                if(105!=data.admin_uid){
                    html+='<option value="105">阿伟团队</option>';
                }
                if(106!=data.admin_uid){
                    html+='<option value="106">小电陈总的</option>';
                }
                if(107!=data.admin_uid){
                    html+='<option value="107">大大独立的</option>';
                }
                if(108!=data.admin_uid){
                    html+='<option value="108">报团--田田</option>';
                }
                if(109!=data.admin_uid){
                    html+='<option value="109">财哥002陈总的</option>';
                }
                if(110!=data.admin_uid){
                    html+='<option value="110">鼎盛测试</option>';
                }
                if(111!=data.admin_uid){
                    html+='<option value="111">Aben独立的</option>';
                }
                if(112!=data.admin_uid){
                    html+='<option value="112">小超陈总的</option>';
                }
                if(113!=data.admin_uid){
                    html+='<option value="113">小男孩陈总的</option>';
                }
                html+='</select></div></div></div></div>';
                layer.open({
                    type: 1
                    ,title: '复制手机号('+data.phone+')给:'
                    ,closeBtn: false
                    ,area: '300px;'
                    ,shade: 0.8
                    ,id: 'LAY_user_move' //设定一个id，防止重复弹出
                    ,btn: ['复制','放弃']
                    ,btnAlign: 'c'
                    ,moveType: 1 //拖拽模式，0或者1
                    ,content: html
                    ,success: function(res){

                    }
                    ,yes: function(){
                        var admin_uid=$('#user_copy_select').val();
                        var flag=true;
                        if(!admin_uid){
                            layer.msg('请选择代理商', {
                                time: 2000,
                                closeBtn: 0
                            });
                            flag=false;
                            return;
                        }
                        if (admin_uid==data.admin_uid){
                            layer.msg('你已经有了!', {
                                time: 2000,
                                closeBtn: 0
                            });
                            flag=false;
                            return;
                        }
                        if (flag){
                            $.post('<?php echo url('pinduoduo/user_copy'); ?>',{
                                id:data.id,
                                admin_uid:admin_uid
                            },function (res) {
                                console.log(res);
                                if(res.status){
                                    layer.msg(res.msg, {
                                        time: 2000,
                                        closeBtn: 0
                                    });
                                    self.location.reload();
                                }else{
                                    layer.msg(res.msg, {
                                        time: 2000,
                                        closeBtn: 0
                                    });
                                }
                            })
                        }
                    }
                });
            }
            if(obj.event === 'user_repeat'){
                var html='<div style="padding: 30px 58px 30px; background-color: #393D49;color: #FFFFFF; line-height: 22px; font-weight: 300;">';
                html+='<p>此操作将删除此手机的其它占用，仅保留当前这一条。</p>';
                html+='</div>';
                layer.open({
                    type: 1
                    ,title:'特别提醒'
                    ,closeBtn: false
                    ,area: '300px;'
                    ,shade: 0.8
                    ,id: 'LAY_user_repeat' //设定一个id，防止重复弹出
                    ,btn: ['去重','放弃']
                    ,btnAlign: 'c'
                    ,moveType: 1 //拖拽模式，0或者1
                    ,content: html
                    ,success: function(res){

                    }
                    ,yes: function(){
                        $.post('<?php echo url('pinduoduo/user_repeat'); ?>',{
                            id:data.id
                        },function (res) {
                            console.log(res);
                            if(res.status){
                                layer.msg(res.msg, {
                                    time: 2000,
                                    closeBtn: 0
                                });
                                self.location.reload();
                            }else{
                                layer.msg(res.msg, {
                                    time: 2000,
                                    closeBtn: 0
                                });
                            }
                        })
                    }
                });
            }
        });
        form.on('switch(StatusSwitch)', function(data){
            let id=data.elem.dataset.id;
            let status=this.checked?1:0;
            $.post('<?php echo url('pinduoduo/users_status'); ?>',{
                id:id,
                val:status
            },function (res) {
                console.log(res);
                layer.msg(res.msg, {
                    time: 2000,
                    closeBtn: 0
                });
                if(res.status==0){
                    $(data.elem).prop("checked", data.elem.defaultChecked);
                    form.render();
                }
            })
        });
    });
    function users_del(id) {
        if (confirm('确认是否删除？')==true){
            self.location='<?php echo url('pinduoduo/users_del'); ?>?id='+id;
        }
    }
</script>
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
        <label class="layui-form-label">手机号：</label>
        <div class="layui-input-inline">
            <input type="text" name="phone" class="layui-input"  placeholder="请填写手机号码">
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
		<label class="layui-form-label">授权状态：</label>
        <div class="layui-input-inline" >
            <select name="expired_limit_noaddr" lay-search="">
                <option value="">选择或搜索授权状态</option>
                <option value="">全部</option>
                <option value="1">正常</option>
                <option value="2">超时</option>
            </select>
        </div>
      	<div class="layui-form-mid layui-word-aux" style="padding: 5px 0!important;">
            <button type="button" id="search" data-type="search" class="layui-btn layui-btn-normal layui-btn-sm" >搜索</button>
        </div>
    </div>  
</div>
<table class="layui-hide" id="users" lay-filter="users"></table>
<script type="text/html" id="toolbar">
    <div class="layui-btn-group fl">
        <a data-href="<?php echo url('users_status?val=1'); ?>" class="layui-btn layui-btn-primary layui-btn-sm hisi-page-btns layui-icon layui-icon-play" data-table="users">&nbsp;启用</a>
        <a data-href="<?php echo url('users_status?val=0'); ?>" class="layui-btn layui-btn-primary layui-btn-sm hisi-page-btns layui-icon layui-icon-pause" data-table="users">&nbsp;禁用</a>
		<a data-href="<?php echo url('users_delall'); ?>" class="layui-btn layui-btn-primary layui-btn-sm hisi-page-btns layui-icon layui-icon-delete" data-table="users">&nbsp;删除</a>
    </div>
</script>
<script type="text/html" id="buttonTpl">
    <form>
        <!---->
        <input type="checkbox" class="layui-btn layui-btn-sm" data-id="{{d.id }}" {{d.status==1?'checked':''}}  lay-skin="switch" lay-filter="StatusSwitch" lay-text="启用|禁用">
    </form>
</script>
<script>
    layui.use(['form','jquery','table'], function(){
        var form = layui.form;
        var table = layui.table;
        var $ = layui.$;
        table.render({
            elem: '#users'
            ,url:'<?php echo url('pinduoduo/users'); ?>'
            ,page: true
            ,cellMinWidth: 80
            ,toolbar: '#toolbar'
            ,cols: [[
                {type:'checkbox'}
                ,{field:'id', title: 'ID',width: 80, sort: true}
                ,{field:'phone', title: '手机号码'}
                ,{field:'admin_name', title: '代理商'}
                ,{field:'expired_limit_noaddr', title: '授权状态'}
                ,{field:'ctime', title: '添加时间', sort: true}
                ,{title: '操作',width: 220, templet: '#buttonTpl'}
            ]]
        });
        //搜索加载--数据表格重载
        var active = {
            search: function () {
                table.reload('users', {
                    method:'GET',
                    page: {
                        curr: 1 //重新从第 1 页开始
                    }
                    , where: {
                        phone: $("input[name=phone]").val(),
                        agent: $("select[name=agent]").val(),
						expired_limit_noaddr: $("select[name=expired_limit_noaddr]").val()
                    }
                });
            }
        };
        $('#search').on('click', function () {
            ids=new Array();
            var type = $(this).data('type');
            active[type] ? active[type].call(this) : '';
        });
        //监听工具条
        table.on('tool(users)', function(obj){
            var data = obj.data;
            console.log(data);
            if(obj.event === 'user_move'){
                var html='<div style="padding: 30px 58px 10px; background-color: #393D49;color: #FFFFFF; line-height: 22px; font-weight: 300;">';
                html+='<div class="layui-form" >';
                html+='<div class="layui-form-item">';
                html+='<div class="layui-input-inline" style="text-align: center" >';
                html+='<select class="layui-input" id="user_move_select" style="display: block">';
                html+='<option value="">选择代理商</option>';
                if(2!=data.admin_uid){
                    html+='<option value="2">lin330</option>';
                }
                if(3!=data.admin_uid){
                    html+='<option value="3">测试号</option>';
                }
                if(5!=data.admin_uid){
                    html+='<option value="5">客服02</option>';
                }
                if(6!=data.admin_uid){
                    html+='<option value="6">客服03</option>';
                }
                if(9!=data.admin_uid){
                    html+='<option value="9">支付平台后台</option>';
                }
                if(11!=data.admin_uid){
                    html+='<option value="11">康总</option>';
                }
                if(13!=data.admin_uid){
                    html+='<option value="13">南安</option>';
                }
                if(14!=data.admin_uid){
                    html+='<option value="14">南安002</option>';
                }
                if(16!=data.admin_uid){
                    html+='<option value="16">创鑫注塑</option>';
                }
                if(17!=data.admin_uid){
                    html+='<option value="17">骆哥008</option>';
                }
                if(18!=data.admin_uid){
                    html+='<option value="18">hwd</option>';
                }
                if(19!=data.admin_uid){
                    html+='<option value="19">福清余</option>';
                }
                if(20!=data.admin_uid){
                    html+='<option value="20">北峰郑</option>';
                }
                if(21!=data.admin_uid){
                    html+='<option value="21">小春1</option>';
                }
                if(22!=data.admin_uid){
                    html+='<option value="22">小春2</option>';
                }
                if(23!=data.admin_uid){
                    html+='<option value="23">小春3</option>';
                }
                if(24!=data.admin_uid){
                    html+='<option value="24">小春4</option>';
                }
                if(25!=data.admin_uid){
                    html+='<option value="25">小春5</option>';
                }
                if(26!=data.admin_uid){
                    html+='<option value="26">爱拼才能赢</option>';
                }
                if(27!=data.admin_uid){
                    html+='<option value="27">内部</option>';
                }
                if(28!=data.admin_uid){
                    html+='<option value="28">店铺交接</option>';
                }
                if(29!=data.admin_uid){
                    html+='<option value="29">江总</option>';
                }
                if(30!=data.admin_uid){
                    html+='<option value="30">小猪</option>';
                }
                if(31!=data.admin_uid){
                    html+='<option value="31">大胜</option>';
                }
                if(32!=data.admin_uid){
                    html+='<option value="32">电商团谢总</option>';
                }
                if(33!=data.admin_uid){
                    html+='<option value="33">cwb123</option>';
                }
                if(34!=data.admin_uid){
                    html+='<option value="34">周武军</option>';
                }
                if(35!=data.admin_uid){
                    html+='<option value="35">jiangyouwang</option>';
                }
                if(37!=data.admin_uid){
                    html+='<option value="37">老贾</option>';
                }
                if(38!=data.admin_uid){
                    html+='<option value="38">老吴</option>';
                }
                if(39!=data.admin_uid){
                    html+='<option value="39">噢賣嘎</option>';
                }
                if(40!=data.admin_uid){
                    html+='<option value="40">小米酒</option>';
                }
                if(41!=data.admin_uid){
                    html+='<option value="41">光哥</option>';
                }
                if(42!=data.admin_uid){
                    html+='<option value="42">3333陈总的</option>';
                }
                if(43!=data.admin_uid){
                    html+='<option value="43">阿锋团队</option>';
                }
                if(44!=data.admin_uid){
                    html+='<option value="44">丫丫</option>';
                }
                if(46!=data.admin_uid){
                    html+='<option value="46">追宝陈总的</option>';
                }
                if(47!=data.admin_uid){
                    html+='<option value="47">大头陈总的</option>';
                }
                if(52!=data.admin_uid){
                    html+='<option value="52">强格陈总的</option>';
                }
                if(54!=data.admin_uid){
                    html+='<option value="54">北方</option>';
                }
                if(57!=data.admin_uid){
                    html+='<option value="57">饼饼陈总的</option>';
                }
                if(58!=data.admin_uid){
                    html+='<option value="58">tankeyuan</option>';
                }
                if(59!=data.admin_uid){
                    html+='<option value="59">虎哥-团队</option>';
                }
                if(61!=data.admin_uid){
                    html+='<option value="61">河马</option>';
                }
                if(63!=data.admin_uid){
                    html+='<option value="63">陈总的财哥</option>';
                }
                if(70!=data.admin_uid){
                    html+='<option value="70">手机002</option>';
                }
                if(71!=data.admin_uid){
                    html+='<option value="71">鼎胜</option>';
                }
                if(73!=data.admin_uid){
                    html+='<option value="73">刚哥</option>';
                }
                if(74!=data.admin_uid){
                    html+='<option value="74">阿成</option>';
                }
                if(75!=data.admin_uid){
                    html+='<option value="75">小小陈总的</option>';
                }
                if(76!=data.admin_uid){
                    html+='<option value="76">阿凯陈总的</option>';
                }
                if(77!=data.admin_uid){
                    html+='<option value="77">安徽团队</option>';
                }
                if(78!=data.admin_uid){
                    html+='<option value="78">露露团队</option>';
                }
                if(79!=data.admin_uid){
                    html+='<option value="79">周哥团队</option>';
                }
                if(80!=data.admin_uid){
                    html+='<option value="80">鼎胜阿态</option>';
                }
                if(81!=data.admin_uid){
                    html+='<option value="81">田田团队</option>';
                }
                if(82!=data.admin_uid){
                    html+='<option value="82">虫二陈总的</option>';
                }
                if(83!=data.admin_uid){
                    html+='<option value="83">鼎胜花轮独立的</option>';
                }
                if(84!=data.admin_uid){
                    html+='<option value="84">王斌-团队</option>';
                }
                if(85!=data.admin_uid){
                    html+='<option value="85">二哥团队</option>';
                }
                if(86!=data.admin_uid){
                    html+='<option value="86">曾总团队</option>';
                }
                if(87!=data.admin_uid){
                    html+='<option value="87">大中华独立</option>';
                }
                if(88!=data.admin_uid){
                    html+='<option value="88">阿洪陈总的</option>';
                }
                if(90!=data.admin_uid){
                    html+='<option value="90">乐堂独立的</option>';
                }
                if(91!=data.admin_uid){
                    html+='<option value="91">多米鸡陈总的</option>';
                }
                if(92!=data.admin_uid){
                    html+='<option value="92">小猪二组陈总的</option>';
                }
                if(93!=data.admin_uid){
                    html+='<option value="93">小星星陈总的</option>';
                }
                if(94!=data.admin_uid){
                    html+='<option value="94">河北黄老吴团队的</option>';
                }
                if(95!=data.admin_uid){
                    html+='<option value="95">小老虎陈总的</option>';
                }
                if(96!=data.admin_uid){
                    html+='<option value="96">老朱-团队</option>';
                }
                if(97!=data.admin_uid){
                    html+='<option value="97">吴亦凡独立的</option>';
                }
                if(98!=data.admin_uid){
                    html+='<option value="98">百度人独立</option>';
                }
                if(99!=data.admin_uid){
                    html+='<option value="99">方老板陈总的</option>';
                }
                if(100!=data.admin_uid){
                    html+='<option value="100">鼎胜迎风独立的</option>';
                }
                if(101!=data.admin_uid){
                    html+='<option value="101">alex陈总的</option>';
                }
                if(102!=data.admin_uid){
                    html+='<option value="102">陀螺陈总的</option>';
                }
                if(103!=data.admin_uid){
                    html+='<option value="103">FZW总-团队</option>';
                }
                if(104!=data.admin_uid){
                    html+='<option value="104">江南陈总的</option>';
                }
                if(105!=data.admin_uid){
                    html+='<option value="105">阿伟团队</option>';
                }
                if(106!=data.admin_uid){
                    html+='<option value="106">小电陈总的</option>';
                }
                if(107!=data.admin_uid){
                    html+='<option value="107">大大独立的</option>';
                }
                if(108!=data.admin_uid){
                    html+='<option value="108">报团--田田</option>';
                }
                if(109!=data.admin_uid){
                    html+='<option value="109">财哥002陈总的</option>';
                }
                if(110!=data.admin_uid){
                    html+='<option value="110">鼎盛测试</option>';
                }
                if(111!=data.admin_uid){
                    html+='<option value="111">Aben独立的</option>';
                }
                if(112!=data.admin_uid){
                    html+='<option value="112">小超陈总的</option>';
                }
                if(113!=data.admin_uid){
                    html+='<option value="113">小男孩陈总的</option>';
                }
                html+='</select></div></div></div></div>';
                layer.open({
                    type: 1
                    ,title: '转移手机号('+data.phone+')给:'
                    ,closeBtn: false
                    ,area: '300px;'
                    ,shade: 0.8
                    ,id: 'LAY_user_move' //设定一个id，防止重复弹出
                    ,btn: ['转移','放弃']
                    ,btnAlign: 'c'
                    ,moveType: 1 //拖拽模式，0或者1
                    ,content: html
                    ,success: function(res){

                    }
                    ,yes: function(){
                        var admin_uid=$('#user_move_select').val();
                        var flag=true;
                        if(!admin_uid){
                            layer.msg('请选择代理商', {
                                time: 2000,
                                closeBtn: 0
                            });
                            flag=false;
                            return;
                        }
                        if (admin_uid==data.admin_uid){
                            layer.msg('别转移给自己', {
                                time: 2000,
                                closeBtn: 0
                            });
                            flag=false;
                            return;
                        }
                        if (flag){
                            $.post('<?php echo url('pinduoduo/user_move'); ?>',{
                                id:data.id,
                                admin_uid:admin_uid
                            },function (res) {
                                console.log(res);
                                if(res.status){
                                    layer.msg(res.msg, {
                                        time: 2000,
                                        closeBtn: 0
                                    });
                                    self.location.reload();
                                }else{
                                    layer.msg(res.msg, {
                                        time: 2000,
                                        closeBtn: 0
                                    });
                                }
                            })
                        }
                    }
                });
            }
            if(obj.event === 'user_copy'){
                var html='<div style="padding: 30px 58px 10px; background-color: #393D49;color: #FFFFFF; line-height: 22px; font-weight: 300;">';
                html+='<div class="layui-form" >';
                html+='<div class="layui-form-item">';
                html+='<div class="layui-input-inline" style="text-align: center" >';
                html+='<select class="layui-input" id="user_copy_select" style="display: block">';
                html+='<option value="">选择代理商</option>';
                if(2!=data.admin_uid){
                    html+='<option value="2">lin330</option>';
                }
                if(3!=data.admin_uid){
                    html+='<option value="3">测试号</option>';
                }
                if(5!=data.admin_uid){
                    html+='<option value="5">客服02</option>';
                }
                if(6!=data.admin_uid){
                    html+='<option value="6">客服03</option>';
                }
                if(9!=data.admin_uid){
                    html+='<option value="9">支付平台后台</option>';
                }
                if(11!=data.admin_uid){
                    html+='<option value="11">康总</option>';
                }
                if(13!=data.admin_uid){
                    html+='<option value="13">南安</option>';
                }
                if(14!=data.admin_uid){
                    html+='<option value="14">南安002</option>';
                }
                if(16!=data.admin_uid){
                    html+='<option value="16">创鑫注塑</option>';
                }
                if(17!=data.admin_uid){
                    html+='<option value="17">骆哥008</option>';
                }
                if(18!=data.admin_uid){
                    html+='<option value="18">hwd</option>';
                }
                if(19!=data.admin_uid){
                    html+='<option value="19">福清余</option>';
                }
                if(20!=data.admin_uid){
                    html+='<option value="20">北峰郑</option>';
                }
                if(21!=data.admin_uid){
                    html+='<option value="21">小春1</option>';
                }
                if(22!=data.admin_uid){
                    html+='<option value="22">小春2</option>';
                }
                if(23!=data.admin_uid){
                    html+='<option value="23">小春3</option>';
                }
                if(24!=data.admin_uid){
                    html+='<option value="24">小春4</option>';
                }
                if(25!=data.admin_uid){
                    html+='<option value="25">小春5</option>';
                }
                if(26!=data.admin_uid){
                    html+='<option value="26">爱拼才能赢</option>';
                }
                if(27!=data.admin_uid){
                    html+='<option value="27">内部</option>';
                }
                if(28!=data.admin_uid){
                    html+='<option value="28">店铺交接</option>';
                }
                if(29!=data.admin_uid){
                    html+='<option value="29">江总</option>';
                }
                if(30!=data.admin_uid){
                    html+='<option value="30">小猪</option>';
                }
                if(31!=data.admin_uid){
                    html+='<option value="31">大胜</option>';
                }
                if(32!=data.admin_uid){
                    html+='<option value="32">电商团谢总</option>';
                }
                if(33!=data.admin_uid){
                    html+='<option value="33">cwb123</option>';
                }
                if(34!=data.admin_uid){
                    html+='<option value="34">周武军</option>';
                }
                if(35!=data.admin_uid){
                    html+='<option value="35">jiangyouwang</option>';
                }
                if(37!=data.admin_uid){
                    html+='<option value="37">老贾</option>';
                }
                if(38!=data.admin_uid){
                    html+='<option value="38">老吴</option>';
                }
                if(39!=data.admin_uid){
                    html+='<option value="39">噢賣嘎</option>';
                }
                if(40!=data.admin_uid){
                    html+='<option value="40">小米酒</option>';
                }
                if(41!=data.admin_uid){
                    html+='<option value="41">光哥</option>';
                }
                if(42!=data.admin_uid){
                    html+='<option value="42">3333陈总的</option>';
                }
                if(43!=data.admin_uid){
                    html+='<option value="43">阿锋团队</option>';
                }
                if(44!=data.admin_uid){
                    html+='<option value="44">丫丫</option>';
                }
                if(46!=data.admin_uid){
                    html+='<option value="46">追宝陈总的</option>';
                }
                if(47!=data.admin_uid){
                    html+='<option value="47">大头陈总的</option>';
                }
                if(52!=data.admin_uid){
                    html+='<option value="52">强格陈总的</option>';
                }
                if(54!=data.admin_uid){
                    html+='<option value="54">北方</option>';
                }
                if(57!=data.admin_uid){
                    html+='<option value="57">饼饼陈总的</option>';
                }
                if(58!=data.admin_uid){
                    html+='<option value="58">tankeyuan</option>';
                }
                if(59!=data.admin_uid){
                    html+='<option value="59">虎哥-团队</option>';
                }
                if(61!=data.admin_uid){
                    html+='<option value="61">河马</option>';
                }
                if(63!=data.admin_uid){
                    html+='<option value="63">陈总的财哥</option>';
                }
                if(70!=data.admin_uid){
                    html+='<option value="70">手机002</option>';
                }
                if(71!=data.admin_uid){
                    html+='<option value="71">鼎胜</option>';
                }
                if(73!=data.admin_uid){
                    html+='<option value="73">刚哥</option>';
                }
                if(74!=data.admin_uid){
                    html+='<option value="74">阿成</option>';
                }
                if(75!=data.admin_uid){
                    html+='<option value="75">小小陈总的</option>';
                }
                if(76!=data.admin_uid){
                    html+='<option value="76">阿凯陈总的</option>';
                }
                if(77!=data.admin_uid){
                    html+='<option value="77">安徽团队</option>';
                }
                if(78!=data.admin_uid){
                    html+='<option value="78">露露团队</option>';
                }
                if(79!=data.admin_uid){
                    html+='<option value="79">周哥团队</option>';
                }
                if(80!=data.admin_uid){
                    html+='<option value="80">鼎胜阿态</option>';
                }
                if(81!=data.admin_uid){
                    html+='<option value="81">田田团队</option>';
                }
                if(82!=data.admin_uid){
                    html+='<option value="82">虫二陈总的</option>';
                }
                if(83!=data.admin_uid){
                    html+='<option value="83">鼎胜花轮独立的</option>';
                }
                if(84!=data.admin_uid){
                    html+='<option value="84">王斌-团队</option>';
                }
                if(85!=data.admin_uid){
                    html+='<option value="85">二哥团队</option>';
                }
                if(86!=data.admin_uid){
                    html+='<option value="86">曾总团队</option>';
                }
                if(87!=data.admin_uid){
                    html+='<option value="87">大中华独立</option>';
                }
                if(88!=data.admin_uid){
                    html+='<option value="88">阿洪陈总的</option>';
                }
                if(90!=data.admin_uid){
                    html+='<option value="90">乐堂独立的</option>';
                }
                if(91!=data.admin_uid){
                    html+='<option value="91">多米鸡陈总的</option>';
                }
                if(92!=data.admin_uid){
                    html+='<option value="92">小猪二组陈总的</option>';
                }
                if(93!=data.admin_uid){
                    html+='<option value="93">小星星陈总的</option>';
                }
                if(94!=data.admin_uid){
                    html+='<option value="94">河北黄老吴团队的</option>';
                }
                if(95!=data.admin_uid){
                    html+='<option value="95">小老虎陈总的</option>';
                }
                if(96!=data.admin_uid){
                    html+='<option value="96">老朱-团队</option>';
                }
                if(97!=data.admin_uid){
                    html+='<option value="97">吴亦凡独立的</option>';
                }
                if(98!=data.admin_uid){
                    html+='<option value="98">百度人独立</option>';
                }
                if(99!=data.admin_uid){
                    html+='<option value="99">方老板陈总的</option>';
                }
                if(100!=data.admin_uid){
                    html+='<option value="100">鼎胜迎风独立的</option>';
                }
                if(101!=data.admin_uid){
                    html+='<option value="101">alex陈总的</option>';
                }
                if(102!=data.admin_uid){
                    html+='<option value="102">陀螺陈总的</option>';
                }
                if(103!=data.admin_uid){
                    html+='<option value="103">FZW总-团队</option>';
                }
                if(104!=data.admin_uid){
                    html+='<option value="104">江南陈总的</option>';
                }
                if(105!=data.admin_uid){
                    html+='<option value="105">阿伟团队</option>';
                }
                if(106!=data.admin_uid){
                    html+='<option value="106">小电陈总的</option>';
                }
                if(107!=data.admin_uid){
                    html+='<option value="107">大大独立的</option>';
                }
                if(108!=data.admin_uid){
                    html+='<option value="108">报团--田田</option>';
                }
                if(109!=data.admin_uid){
                    html+='<option value="109">财哥002陈总的</option>';
                }
                if(110!=data.admin_uid){
                    html+='<option value="110">鼎盛测试</option>';
                }
                if(111!=data.admin_uid){
                    html+='<option value="111">Aben独立的</option>';
                }
                if(112!=data.admin_uid){
                    html+='<option value="112">小超陈总的</option>';
                }
                if(113!=data.admin_uid){
                    html+='<option value="113">小男孩陈总的</option>';
                }
                html+='</select></div></div></div></div>';
                layer.open({
                    type: 1
                    ,title: '复制手机号('+data.phone+')给:'
                    ,closeBtn: false
                    ,area: '300px;'
                    ,shade: 0.8
                    ,id: 'LAY_user_move' //设定一个id，防止重复弹出
                    ,btn: ['复制','放弃']
                    ,btnAlign: 'c'
                    ,moveType: 1 //拖拽模式，0或者1
                    ,content: html
                    ,success: function(res){

                    }
                    ,yes: function(){
                        var admin_uid=$('#user_copy_select').val();
                        var flag=true;
                        if(!admin_uid){
                            layer.msg('请选择代理商', {
                                time: 2000,
                                closeBtn: 0
                            });
                            flag=false;
                            return;
                        }
                        if (admin_uid==data.admin_uid){
                            layer.msg('你已经有了!', {
                                time: 2000,
                                closeBtn: 0
                            });
                            flag=false;
                            return;
                        }
                        if (flag){
                            $.post('<?php echo url('pinduoduo/user_copy'); ?>',{
                                id:data.id,
                                admin_uid:admin_uid
                            },function (res) {
                                console.log(res);
                                if(res.status){
                                    layer.msg(res.msg, {
                                        time: 2000,
                                        closeBtn: 0
                                    });
                                    self.location.reload();
                                }else{
                                    layer.msg(res.msg, {
                                        time: 2000,
                                        closeBtn: 0
                                    });
                                }
                            })
                        }
                    }
                });
            }
            if(obj.event === 'user_repeat'){
                var html='<div style="padding: 30px 58px 30px; background-color: #393D49;color: #FFFFFF; line-height: 22px; font-weight: 300;">';
                html+='<p>此操作将删除此手机的其它占用，仅保留当前这一条。</p>';
                html+='</div>';
                layer.open({
                    type: 1
                    ,title:'特别提醒'
                    ,closeBtn: false
                    ,area: '300px;'
                    ,shade: 0.8
                    ,id: 'LAY_user_repeat' //设定一个id，防止重复弹出
                    ,btn: ['去重','放弃']
                    ,btnAlign: 'c'
                    ,moveType: 1 //拖拽模式，0或者1
                    ,content: html
                    ,success: function(res){

                    }
                    ,yes: function(){
                        $.post('<?php echo url('pinduoduo/user_repeat'); ?>',{
                            id:data.id
                        },function (res) {
                            console.log(res);
                            if(res.status){
                                layer.msg(res.msg, {
                                    time: 2000,
                                    closeBtn: 0
                                });
                                self.location.reload();
                            }else{
                                layer.msg(res.msg, {
                                    time: 2000,
                                    closeBtn: 0
                                });
                            }
                        })
                    }
                });
            }
        });
        form.on('switch(StatusSwitch)', function(data){
            let id=data.elem.dataset.id;
            let status=this.checked?1:0;
            $.post('<?php echo url('pinduoduo/users_status'); ?>',{
                id:id,
                val:status
            },function (res) {
                console.log(res);
                layer.msg(res.msg, {
                    time: 2000,
                    closeBtn: 0
                });
                if(res.status==0){
                    $(data.elem).prop("checked", data.elem.defaultChecked);
                    form.render();
                }
            })
        });
    });
    function users_del(id) {
        if (confirm('确认是否删除？')==true){
            self.location='<?php echo url('pinduoduo/users_del'); ?>?id='+id;
        }
    }
</script>
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
        <label class="layui-form-label">手机号：</label>
        <div class="layui-input-inline">
            <input type="text" name="phone" class="layui-input"  placeholder="请填写手机号码">
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
		<label class="layui-form-label">授权状态：</label>
        <div class="layui-input-inline" >
            <select name="expired_limit_noaddr" lay-search="">
                <option value="">选择或搜索授权状态</option>
                <option value="">全部</option>
                <option value="1">正常</option>
                <option value="2">超时</option>
            </select>
        </div>
      	<div class="layui-form-mid layui-word-aux" style="padding: 5px 0!important;">
            <button type="button" id="search" data-type="search" class="layui-btn layui-btn-normal layui-btn-sm" >搜索</button>
        </div>
    </div>  
</div>
<table class="layui-hide" id="users" lay-filter="users"></table>
<script type="text/html" id="toolbar">
    <div class="layui-btn-group fl">
        <a data-href="<?php echo url('users_status?val=1'); ?>" class="layui-btn layui-btn-primary layui-btn-sm hisi-page-btns layui-icon layui-icon-play" data-table="users">&nbsp;启用</a>
        <a data-href="<?php echo url('users_status?val=0'); ?>" class="layui-btn layui-btn-primary layui-btn-sm hisi-page-btns layui-icon layui-icon-pause" data-table="users">&nbsp;禁用</a>
		<a data-href="<?php echo url('users_delall'); ?>" class="layui-btn layui-btn-primary layui-btn-sm hisi-page-btns layui-icon layui-icon-delete" data-table="users">&nbsp;删除</a>
    </div>
</script>
<script type="text/html" id="buttonTpl">
    <form>
        <!---->
        <input type="checkbox" class="layui-btn layui-btn-sm" data-id="{{d.id }}" {{d.status==1?'checked':''}}  lay-skin="switch" lay-filter="StatusSwitch" lay-text="启用|禁用">
    </form>
</script>
<script>
    layui.use(['form','jquery','table'], function(){
        var form = layui.form;
        var table = layui.table;
        var $ = layui.$;
        table.render({
            elem: '#users'
            ,url:'<?php echo url('pinduoduo/users'); ?>'
            ,page: true
            ,cellMinWidth: 80
            ,toolbar: '#toolbar'
            ,cols: [[
                {type:'checkbox'}
                ,{field:'id', title: 'ID',width: 80, sort: true}
                ,{field:'phone', title: '手机号码'}
                ,{field:'admin_name', title: '代理商'}
                ,{field:'expired_limit_noaddr', title: '授权状态'}
                ,{field:'ctime', title: '添加时间', sort: true}
                ,{title: '操作',width: 220, templet: '#buttonTpl'}
            ]]
        });
        //搜索加载--数据表格重载
        var active = {
            search: function () {
                table.reload('users', {
                    method:'GET',
                    page: {
                        curr: 1 //重新从第 1 页开始
                    }
                    , where: {
                        phone: $("input[name=phone]").val(),
                        agent: $("select[name=agent]").val(),
						expired_limit_noaddr: $("select[name=expired_limit_noaddr]").val()
                    }
                });
            }
        };
        $('#search').on('click', function () {
            ids=new Array();
            var type = $(this).data('type');
            active[type] ? active[type].call(this) : '';
        });
        //监听工具条
        table.on('tool(users)', function(obj){
            var data = obj.data;
            console.log(data);
            if(obj.event === 'user_move'){
                var html='<div style="padding: 30px 58px 10px; background-color: #393D49;color: #FFFFFF; line-height: 22px; font-weight: 300;">';
                html+='<div class="layui-form" >';
                html+='<div class="layui-form-item">';
                html+='<div class="layui-input-inline" style="text-align: center" >';
                html+='<select class="layui-input" id="user_move_select" style="display: block">';
                html+='<option value="">选择代理商</option>';
                if(2!=data.admin_uid){
                    html+='<option value="2">lin330</option>';
                }
                if(3!=data.admin_uid){
                    html+='<option value="3">测试号</option>';
                }
                if(5!=data.admin_uid){
                    html+='<option value="5">客服02</option>';
                }
                if(6!=data.admin_uid){
                    html+='<option value="6">客服03</option>';
                }
                if(9!=data.admin_uid){
                    html+='<option value="9">支付平台后台</option>';
                }
                if(11!=data.admin_uid){
                    html+='<option value="11">康总</option>';
                }
                if(13!=data.admin_uid){
                    html+='<option value="13">南安</option>';
                }
                if(14!=data.admin_uid){
                    html+='<option value="14">南安002</option>';
                }
                if(16!=data.admin_uid){
                    html+='<option value="16">创鑫注塑</option>';
                }
                if(17!=data.admin_uid){
                    html+='<option value="17">骆哥008</option>';
                }
                if(18!=data.admin_uid){
                    html+='<option value="18">hwd</option>';
                }
                if(19!=data.admin_uid){
                    html+='<option value="19">福清余</option>';
                }
                if(20!=data.admin_uid){
                    html+='<option value="20">北峰郑</option>';
                }
                if(21!=data.admin_uid){
                    html+='<option value="21">小春1</option>';
                }
                if(22!=data.admin_uid){
                    html+='<option value="22">小春2</option>';
                }
                if(23!=data.admin_uid){
                    html+='<option value="23">小春3</option>';
                }
                if(24!=data.admin_uid){
                    html+='<option value="24">小春4</option>';
                }
                if(25!=data.admin_uid){
                    html+='<option value="25">小春5</option>';
                }
                if(26!=data.admin_uid){
                    html+='<option value="26">爱拼才能赢</option>';
                }
                if(27!=data.admin_uid){
                    html+='<option value="27">内部</option>';
                }
                if(28!=data.admin_uid){
                    html+='<option value="28">店铺交接</option>';
                }
                if(29!=data.admin_uid){
                    html+='<option value="29">江总</option>';
                }
                if(30!=data.admin_uid){
                    html+='<option value="30">小猪</option>';
                }
                if(31!=data.admin_uid){
                    html+='<option value="31">大胜</option>';
                }
                if(32!=data.admin_uid){
                    html+='<option value="32">电商团谢总</option>';
                }
                if(33!=data.admin_uid){
                    html+='<option value="33">cwb123</option>';
                }
                if(34!=data.admin_uid){
                    html+='<option value="34">周武军</option>';
                }
                if(35!=data.admin_uid){
                    html+='<option value="35">jiangyouwang</option>';
                }
                if(37!=data.admin_uid){
                    html+='<option value="37">老贾</option>';
                }
                if(38!=data.admin_uid){
                    html+='<option value="38">老吴</option>';
                }
                if(39!=data.admin_uid){
                    html+='<option value="39">噢賣嘎</option>';
                }
                if(40!=data.admin_uid){
                    html+='<option value="40">小米酒</option>';
                }
                if(41!=data.admin_uid){
                    html+='<option value="41">光哥</option>';
                }
                if(42!=data.admin_uid){
                    html+='<option value="42">3333陈总的</option>';
                }
                if(43!=data.admin_uid){
                    html+='<option value="43">阿锋团队</option>';
                }
                if(44!=data.admin_uid){
                    html+='<option value="44">丫丫</option>';
                }
                if(46!=data.admin_uid){
                    html+='<option value="46">追宝陈总的</option>';
                }
                if(47!=data.admin_uid){
                    html+='<option value="47">大头陈总的</option>';
                }
                if(52!=data.admin_uid){
                    html+='<option value="52">强格陈总的</option>';
                }
                if(54!=data.admin_uid){
                    html+='<option value="54">北方</option>';
                }
                if(57!=data.admin_uid){
                    html+='<option value="57">饼饼陈总的</option>';
                }
                if(58!=data.admin_uid){
                    html+='<option value="58">tankeyuan</option>';
                }
                if(59!=data.admin_uid){
                    html+='<option value="59">虎哥-团队</option>';
                }
                if(61!=data.admin_uid){
                    html+='<option value="61">河马</option>';
                }
                if(63!=data.admin_uid){
                    html+='<option value="63">陈总的财哥</option>';
                }
                if(70!=data.admin_uid){
                    html+='<option value="70">手机002</option>';
                }
                if(71!=data.admin_uid){
                    html+='<option value="71">鼎胜</option>';
                }
                if(73!=data.admin_uid){
                    html+='<option value="73">刚哥</option>';
                }
                if(74!=data.admin_uid){
                    html+='<option value="74">阿成</option>';
                }
                if(75!=data.admin_uid){
                    html+='<option value="75">小小陈总的</option>';
                }
                if(76!=data.admin_uid){
                    html+='<option value="76">阿凯陈总的</option>';
                }
                if(77!=data.admin_uid){
                    html+='<option value="77">安徽团队</option>';
                }
                if(78!=data.admin_uid){
                    html+='<option value="78">露露团队</option>';
                }
                if(79!=data.admin_uid){
                    html+='<option value="79">周哥团队</option>';
                }
                if(80!=data.admin_uid){
                    html+='<option value="80">鼎胜阿态</option>';
                }
                if(81!=data.admin_uid){
                    html+='<option value="81">田田团队</option>';
                }
                if(82!=data.admin_uid){
                    html+='<option value="82">虫二陈总的</option>';
                }
                if(83!=data.admin_uid){
                    html+='<option value="83">鼎胜花轮独立的</option>';
                }
                if(84!=data.admin_uid){
                    html+='<option value="84">王斌-团队</option>';
                }
                if(85!=data.admin_uid){
                    html+='<option value="85">二哥团队</option>';
                }
                if(86!=data.admin_uid){
                    html+='<option value="86">曾总团队</option>';
                }
                if(87!=data.admin_uid){
                    html+='<option value="87">大中华独立</option>';
                }
                if(88!=data.admin_uid){
                    html+='<option value="88">阿洪陈总的</option>';
                }
                if(90!=data.admin_uid){
                    html+='<option value="90">乐堂独立的</option>';
                }
                if(91!=data.admin_uid){
                    html+='<option value="91">多米鸡陈总的</option>';
                }
                if(92!=data.admin_uid){
                    html+='<option value="92">小猪二组陈总的</option>';
                }
                if(93!=data.admin_uid){
                    html+='<option value="93">小星星陈总的</option>';
                }
                if(94!=data.admin_uid){
                    html+='<option value="94">河北黄老吴团队的</option>';
                }
                if(95!=data.admin_uid){
                    html+='<option value="95">小老虎陈总的</option>';
                }
                if(96!=data.admin_uid){
                    html+='<option value="96">老朱-团队</option>';
                }
                if(97!=data.admin_uid){
                    html+='<option value="97">吴亦凡独立的</option>';
                }
                if(98!=data.admin_uid){
                    html+='<option value="98">百度人独立</option>';
                }
                if(99!=data.admin_uid){
                    html+='<option value="99">方老板陈总的</option>';
                }
                if(100!=data.admin_uid){
                    html+='<option value="100">鼎胜迎风独立的</option>';
                }
                if(101!=data.admin_uid){
                    html+='<option value="101">alex陈总的</option>';
                }
                if(102!=data.admin_uid){
                    html+='<option value="102">陀螺陈总的</option>';
                }
                if(103!=data.admin_uid){
                    html+='<option value="103">FZW总-团队</option>';
                }
                if(104!=data.admin_uid){
                    html+='<option value="104">江南陈总的</option>';
                }
                if(105!=data.admin_uid){
                    html+='<option value="105">阿伟团队</option>';
                }
                if(106!=data.admin_uid){
                    html+='<option value="106">小电陈总的</option>';
                }
                if(107!=data.admin_uid){
                    html+='<option value="107">大大独立的</option>';
                }
                if(108!=data.admin_uid){
                    html+='<option value="108">报团--田田</option>';
                }
                if(109!=data.admin_uid){
                    html+='<option value="109">财哥002陈总的</option>';
                }
                if(110!=data.admin_uid){
                    html+='<option value="110">鼎盛测试</option>';
                }
                if(111!=data.admin_uid){
                    html+='<option value="111">Aben独立的</option>';
                }
                if(112!=data.admin_uid){
                    html+='<option value="112">小超陈总的</option>';
                }
                if(113!=data.admin_uid){
                    html+='<option value="113">小男孩陈总的</option>';
                }
                html+='</select></div></div></div></div>';
                layer.open({
                    type: 1
                    ,title: '转移手机号('+data.phone+')给:'
                    ,closeBtn: false
                    ,area: '300px;'
                    ,shade: 0.8
                    ,id: 'LAY_user_move' //设定一个id，防止重复弹出
                    ,btn: ['转移','放弃']
                    ,btnAlign: 'c'
                    ,moveType: 1 //拖拽模式，0或者1
                    ,content: html
                    ,success: function(res){

                    }
                    ,yes: function(){
                        var admin_uid=$('#user_move_select').val();
                        var flag=true;
                        if(!admin_uid){
                            layer.msg('请选择代理商', {
                                time: 2000,
                                closeBtn: 0
                            });
                            flag=false;
                            return;
                        }
                        if (admin_uid==data.admin_uid){
                            layer.msg('别转移给自己', {
                                time: 2000,
                                closeBtn: 0
                            });
                            flag=false;
                            return;
                        }
                        if (flag){
                            $.post('<?php echo url('pinduoduo/user_move'); ?>',{
                                id:data.id,
                                admin_uid:admin_uid
                            },function (res) {
                                console.log(res);
                                if(res.status){
                                    layer.msg(res.msg, {
                                        time: 2000,
                                        closeBtn: 0
                                    });
                                    self.location.reload();
                                }else{
                                    layer.msg(res.msg, {
                                        time: 2000,
                                        closeBtn: 0
                                    });
                                }
                            })
                        }
                    }
                });
            }
            if(obj.event === 'user_copy'){
                var html='<div style="padding: 30px 58px 10px; background-color: #393D49;color: #FFFFFF; line-height: 22px; font-weight: 300;">';
                html+='<div class="layui-form" >';
                html+='<div class="layui-form-item">';
                html+='<div class="layui-input-inline" style="text-align: center" >';
                html+='<select class="layui-input" id="user_copy_select" style="display: block">';
                html+='<option value="">选择代理商</option>';
                if(2!=data.admin_uid){
                    html+='<option value="2">lin330</option>';
                }
                if(3!=data.admin_uid){
                    html+='<option value="3">测试号</option>';
                }
                if(5!=data.admin_uid){
                    html+='<option value="5">客服02</option>';
                }
                if(6!=data.admin_uid){
                    html+='<option value="6">客服03</option>';
                }
                if(9!=data.admin_uid){
                    html+='<option value="9">支付平台后台</option>';
                }
                if(11!=data.admin_uid){
                    html+='<option value="11">康总</option>';
                }
                if(13!=data.admin_uid){
                    html+='<option value="13">南安</option>';
                }
                if(14!=data.admin_uid){
                    html+='<option value="14">南安002</option>';
                }
                if(16!=data.admin_uid){
                    html+='<option value="16">创鑫注塑</option>';
                }
                if(17!=data.admin_uid){
                    html+='<option value="17">骆哥008</option>';
                }
                if(18!=data.admin_uid){
                    html+='<option value="18">hwd</option>';
                }
                if(19!=data.admin_uid){
                    html+='<option value="19">福清余</option>';
                }
                if(20!=data.admin_uid){
                    html+='<option value="20">北峰郑</option>';
                }
                if(21!=data.admin_uid){
                    html+='<option value="21">小春1</option>';
                }
                if(22!=data.admin_uid){
                    html+='<option value="22">小春2</option>';
                }
                if(23!=data.admin_uid){
                    html+='<option value="23">小春3</option>';
                }
                if(24!=data.admin_uid){
                    html+='<option value="24">小春4</option>';
                }
                if(25!=data.admin_uid){
                    html+='<option value="25">小春5</option>';
                }
                if(26!=data.admin_uid){
                    html+='<option value="26">爱拼才能赢</option>';
                }
                if(27!=data.admin_uid){
                    html+='<option value="27">内部</option>';
                }
                if(28!=data.admin_uid){
                    html+='<option value="28">店铺交接</option>';
                }
                if(29!=data.admin_uid){
                    html+='<option value="29">江总</option>';
                }
                if(30!=data.admin_uid){
                    html+='<option value="30">小猪</option>';
                }
                if(31!=data.admin_uid){
                    html+='<option value="31">大胜</option>';
                }
                if(32!=data.admin_uid){
                    html+='<option value="32">电商团谢总</option>';
                }
                if(33!=data.admin_uid){
                    html+='<option value="33">cwb123</option>';
                }
                if(34!=data.admin_uid){
                    html+='<option value="34">周武军</option>';
                }
                if(35!=data.admin_uid){
                    html+='<option value="35">jiangyouwang</option>';
                }
                if(37!=data.admin_uid){
                    html+='<option value="37">老贾</option>';
                }
                if(38!=data.admin_uid){
                    html+='<option value="38">老吴</option>';
                }
                if(39!=data.admin_uid){
                    html+='<option value="39">噢賣嘎</option>';
                }
                if(40!=data.admin_uid){
                    html+='<option value="40">小米酒</option>';
                }
                if(41!=data.admin_uid){
                    html+='<option value="41">光哥</option>';
                }
                if(42!=data.admin_uid){
                    html+='<option value="42">3333陈总的</option>';
                }
                if(43!=data.admin_uid){
                    html+='<option value="43">阿锋团队</option>';
                }
                if(44!=data.admin_uid){
                    html+='<option value="44">丫丫</option>';
                }
                if(46!=data.admin_uid){
                    html+='<option value="46">追宝陈总的</option>';
                }
                if(47!=data.admin_uid){
                    html+='<option value="47">大头陈总的</option>';
                }
                if(52!=data.admin_uid){
                    html+='<option value="52">强格陈总的</option>';
                }
                if(54!=data.admin_uid){
                    html+='<option value="54">北方</option>';
                }
                if(57!=data.admin_uid){
                    html+='<option value="57">饼饼陈总的</option>';
                }
                if(58!=data.admin_uid){
                    html+='<option value="58">tankeyuan</option>';
                }
                if(59!=data.admin_uid){
                    html+='<option value="59">虎哥-团队</option>';
                }
                if(61!=data.admin_uid){
                    html+='<option value="61">河马</option>';
                }
                if(63!=data.admin_uid){
                    html+='<option value="63">陈总的财哥</option>';
                }
                if(70!=data.admin_uid){
                    html+='<option value="70">手机002</option>';
                }
                if(71!=data.admin_uid){
                    html+='<option value="71">鼎胜</option>';
                }
                if(73!=data.admin_uid){
                    html+='<option value="73">刚哥</option>';
                }
                if(74!=data.admin_uid){
                    html+='<option value="74">阿成</option>';
                }
                if(75!=data.admin_uid){
                    html+='<option value="75">小小陈总的</option>';
                }
                if(76!=data.admin_uid){
                    html+='<option value="76">阿凯陈总的</option>';
                }
                if(77!=data.admin_uid){
                    html+='<option value="77">安徽团队</option>';
                }
                if(78!=data.admin_uid){
                    html+='<option value="78">露露团队</option>';
                }
                if(79!=data.admin_uid){
                    html+='<option value="79">周哥团队</option>';
                }
                if(80!=data.admin_uid){
                    html+='<option value="80">鼎胜阿态</option>';
                }
                if(81!=data.admin_uid){
                    html+='<option value="81">田田团队</option>';
                }
                if(82!=data.admin_uid){
                    html+='<option value="82">虫二陈总的</option>';
                }
                if(83!=data.admin_uid){
                    html+='<option value="83">鼎胜花轮独立的</option>';
                }
                if(84!=data.admin_uid){
                    html+='<option value="84">王斌-团队</option>';
                }
                if(85!=data.admin_uid){
                    html+='<option value="85">二哥团队</option>';
                }
                if(86!=data.admin_uid){
                    html+='<option value="86">曾总团队</option>';
                }
                if(87!=data.admin_uid){
                    html+='<option value="87">大中华独立</option>';
                }
                if(88!=data.admin_uid){
                    html+='<option value="88">阿洪陈总的</option>';
                }
                if(90!=data.admin_uid){
                    html+='<option value="90">乐堂独立的</option>';
                }
                if(91!=data.admin_uid){
                    html+='<option value="91">多米鸡陈总的</option>';
                }
                if(92!=data.admin_uid){
                    html+='<option value="92">小猪二组陈总的</option>';
                }
                if(93!=data.admin_uid){
                    html+='<option value="93">小星星陈总的</option>';
                }
                if(94!=data.admin_uid){
                    html+='<option value="94">河北黄老吴团队的</option>';
                }
                if(95!=data.admin_uid){
                    html+='<option value="95">小老虎陈总的</option>';
                }
                if(96!=data.admin_uid){
                    html+='<option value="96">老朱-团队</option>';
                }
                if(97!=data.admin_uid){
                    html+='<option value="97">吴亦凡独立的</option>';
                }
                if(98!=data.admin_uid){
                    html+='<option value="98">百度人独立</option>';
                }
                if(99!=data.admin_uid){
                    html+='<option value="99">方老板陈总的</option>';
                }
                if(100!=data.admin_uid){
                    html+='<option value="100">鼎胜迎风独立的</option>';
                }
                if(101!=data.admin_uid){
                    html+='<option value="101">alex陈总的</option>';
                }
                if(102!=data.admin_uid){
                    html+='<option value="102">陀螺陈总的</option>';
                }
                if(103!=data.admin_uid){
                    html+='<option value="103">FZW总-团队</option>';
                }
                if(104!=data.admin_uid){
                    html+='<option value="104">江南陈总的</option>';
                }
                if(105!=data.admin_uid){
                    html+='<option value="105">阿伟团队</option>';
                }
                if(106!=data.admin_uid){
                    html+='<option value="106">小电陈总的</option>';
                }
                if(107!=data.admin_uid){
                    html+='<option value="107">大大独立的</option>';
                }
                if(108!=data.admin_uid){
                    html+='<option value="108">报团--田田</option>';
                }
                if(109!=data.admin_uid){
                    html+='<option value="109">财哥002陈总的</option>';
                }
                if(110!=data.admin_uid){
                    html+='<option value="110">鼎盛测试</option>';
                }
                if(111!=data.admin_uid){
                    html+='<option value="111">Aben独立的</option>';
                }
                if(112!=data.admin_uid){
                    html+='<option value="112">小超陈总的</option>';
                }
                if(113!=data.admin_uid){
                    html+='<option value="113">小男孩陈总的</option>';
                }
                html+='</select></div></div></div></div>';
                layer.open({
                    type: 1
                    ,title: '复制手机号('+data.phone+')给:'
                    ,closeBtn: false
                    ,area: '300px;'
                    ,shade: 0.8
                    ,id: 'LAY_user_move' //设定一个id，防止重复弹出
                    ,btn: ['复制','放弃']
                    ,btnAlign: 'c'
                    ,moveType: 1 //拖拽模式，0或者1
                    ,content: html
                    ,success: function(res){

                    }
                    ,yes: function(){
                        var admin_uid=$('#user_copy_select').val();
                        var flag=true;
                        if(!admin_uid){
                            layer.msg('请选择代理商', {
                                time: 2000,
                                closeBtn: 0
                            });
                            flag=false;
                            return;
                        }
                        if (admin_uid==data.admin_uid){
                            layer.msg('你已经有了!', {
                                time: 2000,
                                closeBtn: 0
                            });
                            flag=false;
                            return;
                        }
                        if (flag){
                            $.post('<?php echo url('pinduoduo/user_copy'); ?>',{
                                id:data.id,
                                admin_uid:admin_uid
                            },function (res) {
                                console.log(res);
                                if(res.status){
                                    layer.msg(res.msg, {
                                        time: 2000,
                                        closeBtn: 0
                                    });
                                    self.location.reload();
                                }else{
                                    layer.msg(res.msg, {
                                        time: 2000,
                                        closeBtn: 0
                                    });
                                }
                            })
                        }
                    }
                });
            }
            if(obj.event === 'user_repeat'){
                var html='<div style="padding: 30px 58px 30px; background-color: #393D49;color: #FFFFFF; line-height: 22px; font-weight: 300;">';
                html+='<p>此操作将删除此手机的其它占用，仅保留当前这一条。</p>';
                html+='</div>';
                layer.open({
                    type: 1
                    ,title:'特别提醒'
                    ,closeBtn: false
                    ,area: '300px;'
                    ,shade: 0.8
                    ,id: 'LAY_user_repeat' //设定一个id，防止重复弹出
                    ,btn: ['去重','放弃']
                    ,btnAlign: 'c'
                    ,moveType: 1 //拖拽模式，0或者1
                    ,content: html
                    ,success: function(res){

                    }
                    ,yes: function(){
                        $.post('<?php echo url('pinduoduo/user_repeat'); ?>',{
                            id:data.id
                        },function (res) {
                            console.log(res);
                            if(res.status){
                                layer.msg(res.msg, {
                                    time: 2000,
                                    closeBtn: 0
                                });
                                self.location.reload();
                            }else{
                                layer.msg(res.msg, {
                                    time: 2000,
                                    closeBtn: 0
                                });
                            }
                        })
                    }
                });
            }
        });
        form.on('switch(StatusSwitch)', function(data){
            let id=data.elem.dataset.id;
            let status=this.checked?1:0;
            $.post('<?php echo url('pinduoduo/users_status'); ?>',{
                id:id,
                val:status
            },function (res) {
                console.log(res);
                layer.msg(res.msg, {
                    time: 2000,
                    closeBtn: 0
                });
                if(res.status==0){
                    $(data.elem).prop("checked", data.elem.defaultChecked);
                    form.render();
                }
            })
        });
    });
    function users_del(id) {
        if (confirm('确认是否删除？')==true){
            self.location='<?php echo url('pinduoduo/users_del'); ?>?id='+id;
        }
    }
</script>
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