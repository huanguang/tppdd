<?php /*a:6:{s:58:"/vagrant/pdd/application/system/view/pinduoduo/qq_add.html";i:1572453610;s:48:"/vagrant/pdd/application/system/view/layout.html";i:1572453610;s:54:"/vagrant/pdd/application/system/view/block/header.html";i:1572453610;s:52:"/vagrant/pdd/application/system/view/block/menu.html";i:1572453610;s:53:"/vagrant/pdd/application/system/view/block/layui.html";i:1572453610;s:54:"/vagrant/pdd/application/system/view/block/footer.html";i:1572453610;}*/ ?>
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
<div class="layui-tab layui-tab-brief" lay-filter="user_add">
    <ul class="layui-tab-title">
        <li class="layui-this" lay-id="1">添加手机号码</li>
        <li lay-id="2">填写收货地址</li>
    </ul>
    <div class="layui-tab-content" style="height: 100px;">
        <div class="layui-tab-item layui-show layui-form">
            <div class="layui-form-item">
                <label class="layui-form-label">第一步：</label>
                <div class="layui-input-inline">
                    <input type="text" class="layui-input" name="qq"  placeholder="请填写QQ号码"/>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">第二步：</label>
                <div class="layui-input-inline">
                    <input type="text" class="layui-input" name="uid"  placeholder="请填写uid"/>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">第三步：</label>
                <div class="layui-input-inline">
                    <input type="text" class="layui-input" name="token"  placeholder="请填写token"/>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label"> </label>
                <div class="layui-input-block">
                    <button type="button" id="nextForm" class="layui-btn tab-btn-active" >保存QQ，下一步：填写收货地址</button>
                </div>
            </div>
        </div>
        <div class="layui-tab-item layui-form" lay-filter="address_form">
            <fieldset class="layui-elem-field" style="margin-top: -20px;margin-bottom: 20px;">
                <legend>提醒</legend>
                <div class="layui-field-box" style="color: red;">一、收货地址不要选偏远地区，如新疆、西藏、内蒙、甘肃、宁夏、青海</div>
                <div class="layui-field-box" style="color: red;">二、刚添加的号码要1分钟后才会被调用到</div>
            </fieldset>
            <div class="layui-form-item">
                <label class="layui-form-label">收货人：</label>
                <div class="layui-input-inline">
                    <input type="text" class="layui-input" name="address_name"  placeholder="请填写收货人姓名"/>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">收货地址：</label>
                <div class="layui-input-inline" style="width: 150px;">
                    <select name="address_province" lay-filter="address_province">
                        <option value="">请选择省</option>
                        <option value="2" >北京市</option>
                        <option value="27" >天津市</option>
                        <option value="10" >河北省</option>
                        <option value="23" >山西省</option>
                        <option value="19" >内蒙古自治区</option>
                        <option value="18" >辽宁省</option>
                        <option value="15" >吉林省</option>
                        <option value="12" >黑龙江省</option>
                        <option value="25" >上海市</option>
                        <option value="16" >江苏省</option>
                        <option value="31">浙江省</option>
                        <option value="3">安徽省</option>
                        <option value="4" >福建省</option>
                        <option value="17" >江西省</option>
                        <option value="22" >山东省</option>
                        <option value="11" >河南省</option>
                        <option value="13" >湖北省</option>
                        <option value="14" >湖南省</option>
                        <option value="6" >广东省</option>
                        <option value="7" >广西壮族自治区</option>
                        <option value="9" >海南省</option>
                        <option value="32" >重庆市</option>
                        <option value="26" >四川省</option>
                        <option value="8" >贵州省</option>
                        <option value="30" >云南省</option>
                        <option value="28" >西藏自治区</option>
                        <option value="24" >陕西省</option>
                        <option value="5" >甘肃省</option>
                        <option value="21" >青海省</option>
                        <option value="20" >宁夏回族自治区</option>
                        <option value="29" >新疆维吾尔自治区</option>
                    </select>
                </div>
                <div class="layui-input-inline" style="width: 150px;">
                    <select name="address_city">
                        <option value="">请选择市</option>
                    </select>
                </div>
                <div class="layui-input-inline" style="width: 150px;">
                    <select name="address_district">
                        <option value="">请选择县/区</option>
                    </select>
                </div>
                <div class="layui-input-inline">
                    <input type="text" class="layui-input" name="address_concret"  placeholder="请填写楼栋或小区具体位置"/>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label"> </label>
                <div class="layui-input-block">
                    <button type="button" id="submitForm" class="layui-btn tab-btn-active" >保存收货地址</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    layui.use(['jquery','layer','element','form'], function() {
        var $ = layui.$;
        var element = layui.element;
        var form = layui.form;
        // layer.open({
        //     type: 1
        //     ,title: '特别提醒' //不显示标题栏
        //     ,closeBtn: false
        //     ,area: '300px;'
        //     ,shade: 0.8
        //     ,id: 'LAY_layuipro' //设定一个id，防止重复弹出
        //     ,btn: ['确定']
        //     ,btnAlign: 'c'
        //     ,moveType: 1 //拖拽模式，0或者1
        //     ,content: '<div style="padding: 20px; line-height: 22px; background-color: #393D49; color: #fff; font-weight: 300;">一、拼多多上收货地址是否填写完整;</div>'
        //     ,success: function(layero){
        //
        //     }
        // });
        $("#sendCode").on('click',function () {
            let phone=$("input[name='phone']").val();
            if (!phone) {
                layer.msg('请填写手机号码！', {
                    time: 3000, //20s后自动关闭
                    btn: ['知道了'],
                    btnAlign: 'c',
                    anim: 6
                });
                return;
            }
            var msg =layer.msg('发送中...', {
                time: 10000,
                closeBtn: 0
            });
            $.post('<?php echo url('pinduoduo/send_code'); ?>',{
                phone:phone
            },function (res) {
                layer.close(msg);
                console.log(res);
                if (res.status){
                    layer.msg('请查看短信', {
                        time: 2000,
                        closeBtn: 0
                    });
                }else{
                    layer.msg(res.msg, {
                        time: 2000,
                        btn: ['知道了'],
                        btnAlign: 'c',
                        anim: 6
                    });
                }
            })
        });
        $("#nextForm").on('click',function () {
            let qq=$("input[name='qq']").val();
            let token=$("input[name='token']").val();
            let uid=$("input[name='uid']").val();
            if (!qq) {
                layer.msg('请填写QQ号码！', {
                    time: 3000, //20s后自动关闭
                    btn: ['知道了'],
                    btnAlign: 'c',
                    anim: 6
                });
                return;
            }
            if (!token) {
                layer.msg('请填写token！', {
                    time: 3000, //20s后自动关闭
                    btn: ['知道了'],
                    btnAlign: 'c',
                    anim: 6
                });
                return;
            }
            if (!uid) {
                layer.msg('请填写uid！', {
                    time: 3000, //20s后自动关闭
                    btn: ['知道了'],
                    btnAlign: 'c',
                    anim: 6
                });
                return;
            }
            var msg =layer.msg('模拟登陆中...', {
                time: 10000,
                closeBtn: 0
            });
            $.post('<?php echo url('pinduoduo/qq_add'); ?>',{
                qq:qq,
                token:token,
                uid:uid
            },function (res) {
                layer.close(msg);
                console.log(res);
                if (res.status){
                    layer.msg(res.msg, {
                        time: 2000,
                        closeBtn: 0
                    });
                    element.tabChange('user_add', '2');
                }else{
                    layer.msg(res.msg, {
                        time: 2000,
                        btn: ['知道了'],
                        btnAlign: 'c',
                        anim: 6
                    });
                }
            })
        });
        form.on('select', function(data){
            var select_name=data.elem.name;
            var phone=$("input[name='qq']").val();
            if (select_name=='address_province'){
                $("select[name='address_city']").html('');
            }
            if (select_name=='address_city'){
                $("select[name='address_district']").html('');
            }
            if (phone){
                var region_id=data.value;
                if (region_id){
                    $.ajax({
                        type:"POST",
                        url: "<?php echo url('pinduoduo/getaddresstpl'); ?>",
                        data:{
                            phone:phone
                            ,region_id:region_id
                        },
                        success: function(res){
                            if (res.status){
                                var regions=res.data.regions;
                                if (regions){
                                    var html='';
                                    if (select_name=='address_province'){
                                        html+='<option value="">请选择市</option>';
                                    }
                                    if (select_name=='address_city'){
                                        html+='<option value="">请选择区域</option>';
                                    }
                                    regions.forEach(function (val,key) {
                                        html+='<option value="'+val.region_id+'">'+val.region_name+'</option>';
                                    });
                                    if (select_name=='address_province'){
                                        $("select[name='address_city']").html(html);
                                    }
                                    if (select_name=='address_city'){
                                        $("select[name='address_district']").html(html);
                                    }
                                    form.render('select','address_form');
                                }
                            }else{
                                layer.msg(res.msg);
                            }
                        }
                    });
                }
            } else{
                layer.msg('请先填写手机');
            }
        });
        $("#submitForm").on('click',function () {
            var address_name=$("input[name='address_name']").val();
            var phone=$("input[name='qq']").val();
            var address_province=$("select[name='address_province']").val();
            var address_city=$("select[name='address_city']").val();
            var address_district=$("select[name='address_district']").val();
            var address_concret=$("input[name='address_concret']").val();

            var flag=true;
            if (!phone) {
                layer.msg('手机号不能为空');
                flag=false;
                return;
            }
            if (!address_name) {
                layer.msg('收货人不能为空');
                flag=false;
                return;
            }
            if (!address_province) {
                layer.msg('请选择省份');
                flag=false;
                return;
            }
            if (!address_city) {
                layer.msg('请选择城市');
                flag=false;
                return;
            }
            if (!address_district) {
                layer.msg('请选择县/区');
                flag=false;
                return;
            }
            if (!address_concret) {
                layer.msg('具体位置不能为空');
                flag=false;
                return;
            }
            if (flag) {
                layer.msg('提交中...',{time:10000});
                $.ajax({
                    type:"POST",
                    url: "<?php echo url('pinduoduo/saveaddress'); ?>",
                    data:{
                        phone:phone
                        ,address_name:address_name
                        ,address_province:address_province
                        ,address_city:address_city
                        ,address_district:address_district
                        ,address_concret:address_concret
                    },
                    success: function(res){
                        layer.msg(res.msg);
                        if (res.status){
                            self.location='<?php echo url('pinduoduo/users'); ?>';
                        }
                    }
                });
            }
        });
    });
</script>
<style>
    .layui-form{
        padding-top: 15px;
    }
    .layui-form-item .layui-input-inline{
        width:300px;
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
<div class="layui-tab layui-tab-brief" lay-filter="user_add">
    <ul class="layui-tab-title">
        <li class="layui-this" lay-id="1">添加手机号码</li>
        <li lay-id="2">填写收货地址</li>
    </ul>
    <div class="layui-tab-content" style="height: 100px;">
        <div class="layui-tab-item layui-show layui-form">
            <div class="layui-form-item">
                <label class="layui-form-label">第一步：</label>
                <div class="layui-input-inline">
                    <input type="text" class="layui-input" name="qq"  placeholder="请填写QQ号码"/>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">第二步：</label>
                <div class="layui-input-inline">
                    <input type="text" class="layui-input" name="uid"  placeholder="请填写uid"/>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">第三步：</label>
                <div class="layui-input-inline">
                    <input type="text" class="layui-input" name="token"  placeholder="请填写token"/>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label"> </label>
                <div class="layui-input-block">
                    <button type="button" id="nextForm" class="layui-btn tab-btn-active" >保存QQ，下一步：填写收货地址</button>
                </div>
            </div>
        </div>
        <div class="layui-tab-item layui-form" lay-filter="address_form">
            <fieldset class="layui-elem-field" style="margin-top: -20px;margin-bottom: 20px;">
                <legend>提醒</legend>
                <div class="layui-field-box" style="color: red;">一、收货地址不要选偏远地区，如新疆、西藏、内蒙、甘肃、宁夏、青海</div>
                <div class="layui-field-box" style="color: red;">二、刚添加的号码要1分钟后才会被调用到</div>
            </fieldset>
            <div class="layui-form-item">
                <label class="layui-form-label">收货人：</label>
                <div class="layui-input-inline">
                    <input type="text" class="layui-input" name="address_name"  placeholder="请填写收货人姓名"/>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">收货地址：</label>
                <div class="layui-input-inline" style="width: 150px;">
                    <select name="address_province" lay-filter="address_province">
                        <option value="">请选择省</option>
                        <option value="2" >北京市</option>
                        <option value="27" >天津市</option>
                        <option value="10" >河北省</option>
                        <option value="23" >山西省</option>
                        <option value="19" >内蒙古自治区</option>
                        <option value="18" >辽宁省</option>
                        <option value="15" >吉林省</option>
                        <option value="12" >黑龙江省</option>
                        <option value="25" >上海市</option>
                        <option value="16" >江苏省</option>
                        <option value="31">浙江省</option>
                        <option value="3">安徽省</option>
                        <option value="4" >福建省</option>
                        <option value="17" >江西省</option>
                        <option value="22" >山东省</option>
                        <option value="11" >河南省</option>
                        <option value="13" >湖北省</option>
                        <option value="14" >湖南省</option>
                        <option value="6" >广东省</option>
                        <option value="7" >广西壮族自治区</option>
                        <option value="9" >海南省</option>
                        <option value="32" >重庆市</option>
                        <option value="26" >四川省</option>
                        <option value="8" >贵州省</option>
                        <option value="30" >云南省</option>
                        <option value="28" >西藏自治区</option>
                        <option value="24" >陕西省</option>
                        <option value="5" >甘肃省</option>
                        <option value="21" >青海省</option>
                        <option value="20" >宁夏回族自治区</option>
                        <option value="29" >新疆维吾尔自治区</option>
                    </select>
                </div>
                <div class="layui-input-inline" style="width: 150px;">
                    <select name="address_city">
                        <option value="">请选择市</option>
                    </select>
                </div>
                <div class="layui-input-inline" style="width: 150px;">
                    <select name="address_district">
                        <option value="">请选择县/区</option>
                    </select>
                </div>
                <div class="layui-input-inline">
                    <input type="text" class="layui-input" name="address_concret"  placeholder="请填写楼栋或小区具体位置"/>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label"> </label>
                <div class="layui-input-block">
                    <button type="button" id="submitForm" class="layui-btn tab-btn-active" >保存收货地址</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    layui.use(['jquery','layer','element','form'], function() {
        var $ = layui.$;
        var element = layui.element;
        var form = layui.form;
        // layer.open({
        //     type: 1
        //     ,title: '特别提醒' //不显示标题栏
        //     ,closeBtn: false
        //     ,area: '300px;'
        //     ,shade: 0.8
        //     ,id: 'LAY_layuipro' //设定一个id，防止重复弹出
        //     ,btn: ['确定']
        //     ,btnAlign: 'c'
        //     ,moveType: 1 //拖拽模式，0或者1
        //     ,content: '<div style="padding: 20px; line-height: 22px; background-color: #393D49; color: #fff; font-weight: 300;">一、拼多多上收货地址是否填写完整;</div>'
        //     ,success: function(layero){
        //
        //     }
        // });
        $("#sendCode").on('click',function () {
            let phone=$("input[name='phone']").val();
            if (!phone) {
                layer.msg('请填写手机号码！', {
                    time: 3000, //20s后自动关闭
                    btn: ['知道了'],
                    btnAlign: 'c',
                    anim: 6
                });
                return;
            }
            var msg =layer.msg('发送中...', {
                time: 10000,
                closeBtn: 0
            });
            $.post('<?php echo url('pinduoduo/send_code'); ?>',{
                phone:phone
            },function (res) {
                layer.close(msg);
                console.log(res);
                if (res.status){
                    layer.msg('请查看短信', {
                        time: 2000,
                        closeBtn: 0
                    });
                }else{
                    layer.msg(res.msg, {
                        time: 2000,
                        btn: ['知道了'],
                        btnAlign: 'c',
                        anim: 6
                    });
                }
            })
        });
        $("#nextForm").on('click',function () {
            let qq=$("input[name='qq']").val();
            let token=$("input[name='token']").val();
            let uid=$("input[name='uid']").val();
            if (!qq) {
                layer.msg('请填写QQ号码！', {
                    time: 3000, //20s后自动关闭
                    btn: ['知道了'],
                    btnAlign: 'c',
                    anim: 6
                });
                return;
            }
            if (!token) {
                layer.msg('请填写token！', {
                    time: 3000, //20s后自动关闭
                    btn: ['知道了'],
                    btnAlign: 'c',
                    anim: 6
                });
                return;
            }
            if (!uid) {
                layer.msg('请填写uid！', {
                    time: 3000, //20s后自动关闭
                    btn: ['知道了'],
                    btnAlign: 'c',
                    anim: 6
                });
                return;
            }
            var msg =layer.msg('模拟登陆中...', {
                time: 10000,
                closeBtn: 0
            });
            $.post('<?php echo url('pinduoduo/qq_add'); ?>',{
                qq:qq,
                token:token,
                uid:uid
            },function (res) {
                layer.close(msg);
                console.log(res);
                if (res.status){
                    layer.msg(res.msg, {
                        time: 2000,
                        closeBtn: 0
                    });
                    element.tabChange('user_add', '2');
                }else{
                    layer.msg(res.msg, {
                        time: 2000,
                        btn: ['知道了'],
                        btnAlign: 'c',
                        anim: 6
                    });
                }
            })
        });
        form.on('select', function(data){
            var select_name=data.elem.name;
            var phone=$("input[name='qq']").val();
            if (select_name=='address_province'){
                $("select[name='address_city']").html('');
            }
            if (select_name=='address_city'){
                $("select[name='address_district']").html('');
            }
            if (phone){
                var region_id=data.value;
                if (region_id){
                    $.ajax({
                        type:"POST",
                        url: "<?php echo url('pinduoduo/getaddresstpl'); ?>",
                        data:{
                            phone:phone
                            ,region_id:region_id
                        },
                        success: function(res){
                            if (res.status){
                                var regions=res.data.regions;
                                if (regions){
                                    var html='';
                                    if (select_name=='address_province'){
                                        html+='<option value="">请选择市</option>';
                                    }
                                    if (select_name=='address_city'){
                                        html+='<option value="">请选择区域</option>';
                                    }
                                    regions.forEach(function (val,key) {
                                        html+='<option value="'+val.region_id+'">'+val.region_name+'</option>';
                                    });
                                    if (select_name=='address_province'){
                                        $("select[name='address_city']").html(html);
                                    }
                                    if (select_name=='address_city'){
                                        $("select[name='address_district']").html(html);
                                    }
                                    form.render('select','address_form');
                                }
                            }else{
                                layer.msg(res.msg);
                            }
                        }
                    });
                }
            } else{
                layer.msg('请先填写手机');
            }
        });
        $("#submitForm").on('click',function () {
            var address_name=$("input[name='address_name']").val();
            var phone=$("input[name='qq']").val();
            var address_province=$("select[name='address_province']").val();
            var address_city=$("select[name='address_city']").val();
            var address_district=$("select[name='address_district']").val();
            var address_concret=$("input[name='address_concret']").val();

            var flag=true;
            if (!phone) {
                layer.msg('手机号不能为空');
                flag=false;
                return;
            }
            if (!address_name) {
                layer.msg('收货人不能为空');
                flag=false;
                return;
            }
            if (!address_province) {
                layer.msg('请选择省份');
                flag=false;
                return;
            }
            if (!address_city) {
                layer.msg('请选择城市');
                flag=false;
                return;
            }
            if (!address_district) {
                layer.msg('请选择县/区');
                flag=false;
                return;
            }
            if (!address_concret) {
                layer.msg('具体位置不能为空');
                flag=false;
                return;
            }
            if (flag) {
                layer.msg('提交中...',{time:10000});
                $.ajax({
                    type:"POST",
                    url: "<?php echo url('pinduoduo/saveaddress'); ?>",
                    data:{
                        phone:phone
                        ,address_name:address_name
                        ,address_province:address_province
                        ,address_city:address_city
                        ,address_district:address_district
                        ,address_concret:address_concret
                    },
                    success: function(res){
                        layer.msg(res.msg);
                        if (res.status){
                            self.location='<?php echo url('pinduoduo/users'); ?>';
                        }
                    }
                });
            }
        });
    });
</script>
<style>
    .layui-form{
        padding-top: 15px;
    }
    .layui-form-item .layui-input-inline{
        width:300px;
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
<div class="layui-tab layui-tab-brief" lay-filter="user_add">
    <ul class="layui-tab-title">
        <li class="layui-this" lay-id="1">添加手机号码</li>
        <li lay-id="2">填写收货地址</li>
    </ul>
    <div class="layui-tab-content" style="height: 100px;">
        <div class="layui-tab-item layui-show layui-form">
            <div class="layui-form-item">
                <label class="layui-form-label">第一步：</label>
                <div class="layui-input-inline">
                    <input type="text" class="layui-input" name="qq"  placeholder="请填写QQ号码"/>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">第二步：</label>
                <div class="layui-input-inline">
                    <input type="text" class="layui-input" name="uid"  placeholder="请填写uid"/>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">第三步：</label>
                <div class="layui-input-inline">
                    <input type="text" class="layui-input" name="token"  placeholder="请填写token"/>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label"> </label>
                <div class="layui-input-block">
                    <button type="button" id="nextForm" class="layui-btn tab-btn-active" >保存QQ，下一步：填写收货地址</button>
                </div>
            </div>
        </div>
        <div class="layui-tab-item layui-form" lay-filter="address_form">
            <fieldset class="layui-elem-field" style="margin-top: -20px;margin-bottom: 20px;">
                <legend>提醒</legend>
                <div class="layui-field-box" style="color: red;">一、收货地址不要选偏远地区，如新疆、西藏、内蒙、甘肃、宁夏、青海</div>
                <div class="layui-field-box" style="color: red;">二、刚添加的号码要1分钟后才会被调用到</div>
            </fieldset>
            <div class="layui-form-item">
                <label class="layui-form-label">收货人：</label>
                <div class="layui-input-inline">
                    <input type="text" class="layui-input" name="address_name"  placeholder="请填写收货人姓名"/>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">收货地址：</label>
                <div class="layui-input-inline" style="width: 150px;">
                    <select name="address_province" lay-filter="address_province">
                        <option value="">请选择省</option>
                        <option value="2" >北京市</option>
                        <option value="27" >天津市</option>
                        <option value="10" >河北省</option>
                        <option value="23" >山西省</option>
                        <option value="19" >内蒙古自治区</option>
                        <option value="18" >辽宁省</option>
                        <option value="15" >吉林省</option>
                        <option value="12" >黑龙江省</option>
                        <option value="25" >上海市</option>
                        <option value="16" >江苏省</option>
                        <option value="31">浙江省</option>
                        <option value="3">安徽省</option>
                        <option value="4" >福建省</option>
                        <option value="17" >江西省</option>
                        <option value="22" >山东省</option>
                        <option value="11" >河南省</option>
                        <option value="13" >湖北省</option>
                        <option value="14" >湖南省</option>
                        <option value="6" >广东省</option>
                        <option value="7" >广西壮族自治区</option>
                        <option value="9" >海南省</option>
                        <option value="32" >重庆市</option>
                        <option value="26" >四川省</option>
                        <option value="8" >贵州省</option>
                        <option value="30" >云南省</option>
                        <option value="28" >西藏自治区</option>
                        <option value="24" >陕西省</option>
                        <option value="5" >甘肃省</option>
                        <option value="21" >青海省</option>
                        <option value="20" >宁夏回族自治区</option>
                        <option value="29" >新疆维吾尔自治区</option>
                    </select>
                </div>
                <div class="layui-input-inline" style="width: 150px;">
                    <select name="address_city">
                        <option value="">请选择市</option>
                    </select>
                </div>
                <div class="layui-input-inline" style="width: 150px;">
                    <select name="address_district">
                        <option value="">请选择县/区</option>
                    </select>
                </div>
                <div class="layui-input-inline">
                    <input type="text" class="layui-input" name="address_concret"  placeholder="请填写楼栋或小区具体位置"/>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label"> </label>
                <div class="layui-input-block">
                    <button type="button" id="submitForm" class="layui-btn tab-btn-active" >保存收货地址</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    layui.use(['jquery','layer','element','form'], function() {
        var $ = layui.$;
        var element = layui.element;
        var form = layui.form;
        // layer.open({
        //     type: 1
        //     ,title: '特别提醒' //不显示标题栏
        //     ,closeBtn: false
        //     ,area: '300px;'
        //     ,shade: 0.8
        //     ,id: 'LAY_layuipro' //设定一个id，防止重复弹出
        //     ,btn: ['确定']
        //     ,btnAlign: 'c'
        //     ,moveType: 1 //拖拽模式，0或者1
        //     ,content: '<div style="padding: 20px; line-height: 22px; background-color: #393D49; color: #fff; font-weight: 300;">一、拼多多上收货地址是否填写完整;</div>'
        //     ,success: function(layero){
        //
        //     }
        // });
        $("#sendCode").on('click',function () {
            let phone=$("input[name='phone']").val();
            if (!phone) {
                layer.msg('请填写手机号码！', {
                    time: 3000, //20s后自动关闭
                    btn: ['知道了'],
                    btnAlign: 'c',
                    anim: 6
                });
                return;
            }
            var msg =layer.msg('发送中...', {
                time: 10000,
                closeBtn: 0
            });
            $.post('<?php echo url('pinduoduo/send_code'); ?>',{
                phone:phone
            },function (res) {
                layer.close(msg);
                console.log(res);
                if (res.status){
                    layer.msg('请查看短信', {
                        time: 2000,
                        closeBtn: 0
                    });
                }else{
                    layer.msg(res.msg, {
                        time: 2000,
                        btn: ['知道了'],
                        btnAlign: 'c',
                        anim: 6
                    });
                }
            })
        });
        $("#nextForm").on('click',function () {
            let qq=$("input[name='qq']").val();
            let token=$("input[name='token']").val();
            let uid=$("input[name='uid']").val();
            if (!qq) {
                layer.msg('请填写QQ号码！', {
                    time: 3000, //20s后自动关闭
                    btn: ['知道了'],
                    btnAlign: 'c',
                    anim: 6
                });
                return;
            }
            if (!token) {
                layer.msg('请填写token！', {
                    time: 3000, //20s后自动关闭
                    btn: ['知道了'],
                    btnAlign: 'c',
                    anim: 6
                });
                return;
            }
            if (!uid) {
                layer.msg('请填写uid！', {
                    time: 3000, //20s后自动关闭
                    btn: ['知道了'],
                    btnAlign: 'c',
                    anim: 6
                });
                return;
            }
            var msg =layer.msg('模拟登陆中...', {
                time: 10000,
                closeBtn: 0
            });
            $.post('<?php echo url('pinduoduo/qq_add'); ?>',{
                qq:qq,
                token:token,
                uid:uid
            },function (res) {
                layer.close(msg);
                console.log(res);
                if (res.status){
                    layer.msg(res.msg, {
                        time: 2000,
                        closeBtn: 0
                    });
                    element.tabChange('user_add', '2');
                }else{
                    layer.msg(res.msg, {
                        time: 2000,
                        btn: ['知道了'],
                        btnAlign: 'c',
                        anim: 6
                    });
                }
            })
        });
        form.on('select', function(data){
            var select_name=data.elem.name;
            var phone=$("input[name='qq']").val();
            if (select_name=='address_province'){
                $("select[name='address_city']").html('');
            }
            if (select_name=='address_city'){
                $("select[name='address_district']").html('');
            }
            if (phone){
                var region_id=data.value;
                if (region_id){
                    $.ajax({
                        type:"POST",
                        url: "<?php echo url('pinduoduo/getaddresstpl'); ?>",
                        data:{
                            phone:phone
                            ,region_id:region_id
                        },
                        success: function(res){
                            if (res.status){
                                var regions=res.data.regions;
                                if (regions){
                                    var html='';
                                    if (select_name=='address_province'){
                                        html+='<option value="">请选择市</option>';
                                    }
                                    if (select_name=='address_city'){
                                        html+='<option value="">请选择区域</option>';
                                    }
                                    regions.forEach(function (val,key) {
                                        html+='<option value="'+val.region_id+'">'+val.region_name+'</option>';
                                    });
                                    if (select_name=='address_province'){
                                        $("select[name='address_city']").html(html);
                                    }
                                    if (select_name=='address_city'){
                                        $("select[name='address_district']").html(html);
                                    }
                                    form.render('select','address_form');
                                }
                            }else{
                                layer.msg(res.msg);
                            }
                        }
                    });
                }
            } else{
                layer.msg('请先填写手机');
            }
        });
        $("#submitForm").on('click',function () {
            var address_name=$("input[name='address_name']").val();
            var phone=$("input[name='qq']").val();
            var address_province=$("select[name='address_province']").val();
            var address_city=$("select[name='address_city']").val();
            var address_district=$("select[name='address_district']").val();
            var address_concret=$("input[name='address_concret']").val();

            var flag=true;
            if (!phone) {
                layer.msg('手机号不能为空');
                flag=false;
                return;
            }
            if (!address_name) {
                layer.msg('收货人不能为空');
                flag=false;
                return;
            }
            if (!address_province) {
                layer.msg('请选择省份');
                flag=false;
                return;
            }
            if (!address_city) {
                layer.msg('请选择城市');
                flag=false;
                return;
            }
            if (!address_district) {
                layer.msg('请选择县/区');
                flag=false;
                return;
            }
            if (!address_concret) {
                layer.msg('具体位置不能为空');
                flag=false;
                return;
            }
            if (flag) {
                layer.msg('提交中...',{time:10000});
                $.ajax({
                    type:"POST",
                    url: "<?php echo url('pinduoduo/saveaddress'); ?>",
                    data:{
                        phone:phone
                        ,address_name:address_name
                        ,address_province:address_province
                        ,address_city:address_city
                        ,address_district:address_district
                        ,address_concret:address_concret
                    },
                    success: function(res){
                        layer.msg(res.msg);
                        if (res.status){
                            self.location='<?php echo url('pinduoduo/users'); ?>';
                        }
                    }
                });
            }
        });
    });
</script>
<style>
    .layui-form{
        padding-top: 15px;
    }
    .layui-form-item .layui-input-inline{
        width:300px;
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
<div class="layui-tab layui-tab-brief" lay-filter="user_add">
    <ul class="layui-tab-title">
        <li class="layui-this" lay-id="1">添加手机号码</li>
        <li lay-id="2">填写收货地址</li>
    </ul>
    <div class="layui-tab-content" style="height: 100px;">
        <div class="layui-tab-item layui-show layui-form">
            <div class="layui-form-item">
                <label class="layui-form-label">第一步：</label>
                <div class="layui-input-inline">
                    <input type="text" class="layui-input" name="qq"  placeholder="请填写QQ号码"/>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">第二步：</label>
                <div class="layui-input-inline">
                    <input type="text" class="layui-input" name="uid"  placeholder="请填写uid"/>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">第三步：</label>
                <div class="layui-input-inline">
                    <input type="text" class="layui-input" name="token"  placeholder="请填写token"/>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label"> </label>
                <div class="layui-input-block">
                    <button type="button" id="nextForm" class="layui-btn tab-btn-active" >保存QQ，下一步：填写收货地址</button>
                </div>
            </div>
        </div>
        <div class="layui-tab-item layui-form" lay-filter="address_form">
            <fieldset class="layui-elem-field" style="margin-top: -20px;margin-bottom: 20px;">
                <legend>提醒</legend>
                <div class="layui-field-box" style="color: red;">一、收货地址不要选偏远地区，如新疆、西藏、内蒙、甘肃、宁夏、青海</div>
                <div class="layui-field-box" style="color: red;">二、刚添加的号码要1分钟后才会被调用到</div>
            </fieldset>
            <div class="layui-form-item">
                <label class="layui-form-label">收货人：</label>
                <div class="layui-input-inline">
                    <input type="text" class="layui-input" name="address_name"  placeholder="请填写收货人姓名"/>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">收货地址：</label>
                <div class="layui-input-inline" style="width: 150px;">
                    <select name="address_province" lay-filter="address_province">
                        <option value="">请选择省</option>
                        <option value="2" >北京市</option>
                        <option value="27" >天津市</option>
                        <option value="10" >河北省</option>
                        <option value="23" >山西省</option>
                        <option value="19" >内蒙古自治区</option>
                        <option value="18" >辽宁省</option>
                        <option value="15" >吉林省</option>
                        <option value="12" >黑龙江省</option>
                        <option value="25" >上海市</option>
                        <option value="16" >江苏省</option>
                        <option value="31">浙江省</option>
                        <option value="3">安徽省</option>
                        <option value="4" >福建省</option>
                        <option value="17" >江西省</option>
                        <option value="22" >山东省</option>
                        <option value="11" >河南省</option>
                        <option value="13" >湖北省</option>
                        <option value="14" >湖南省</option>
                        <option value="6" >广东省</option>
                        <option value="7" >广西壮族自治区</option>
                        <option value="9" >海南省</option>
                        <option value="32" >重庆市</option>
                        <option value="26" >四川省</option>
                        <option value="8" >贵州省</option>
                        <option value="30" >云南省</option>
                        <option value="28" >西藏自治区</option>
                        <option value="24" >陕西省</option>
                        <option value="5" >甘肃省</option>
                        <option value="21" >青海省</option>
                        <option value="20" >宁夏回族自治区</option>
                        <option value="29" >新疆维吾尔自治区</option>
                    </select>
                </div>
                <div class="layui-input-inline" style="width: 150px;">
                    <select name="address_city">
                        <option value="">请选择市</option>
                    </select>
                </div>
                <div class="layui-input-inline" style="width: 150px;">
                    <select name="address_district">
                        <option value="">请选择县/区</option>
                    </select>
                </div>
                <div class="layui-input-inline">
                    <input type="text" class="layui-input" name="address_concret"  placeholder="请填写楼栋或小区具体位置"/>
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label"> </label>
                <div class="layui-input-block">
                    <button type="button" id="submitForm" class="layui-btn tab-btn-active" >保存收货地址</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    layui.use(['jquery','layer','element','form'], function() {
        var $ = layui.$;
        var element = layui.element;
        var form = layui.form;
        // layer.open({
        //     type: 1
        //     ,title: '特别提醒' //不显示标题栏
        //     ,closeBtn: false
        //     ,area: '300px;'
        //     ,shade: 0.8
        //     ,id: 'LAY_layuipro' //设定一个id，防止重复弹出
        //     ,btn: ['确定']
        //     ,btnAlign: 'c'
        //     ,moveType: 1 //拖拽模式，0或者1
        //     ,content: '<div style="padding: 20px; line-height: 22px; background-color: #393D49; color: #fff; font-weight: 300;">一、拼多多上收货地址是否填写完整;</div>'
        //     ,success: function(layero){
        //
        //     }
        // });
        $("#sendCode").on('click',function () {
            let phone=$("input[name='phone']").val();
            if (!phone) {
                layer.msg('请填写手机号码！', {
                    time: 3000, //20s后自动关闭
                    btn: ['知道了'],
                    btnAlign: 'c',
                    anim: 6
                });
                return;
            }
            var msg =layer.msg('发送中...', {
                time: 10000,
                closeBtn: 0
            });
            $.post('<?php echo url('pinduoduo/send_code'); ?>',{
                phone:phone
            },function (res) {
                layer.close(msg);
                console.log(res);
                if (res.status){
                    layer.msg('请查看短信', {
                        time: 2000,
                        closeBtn: 0
                    });
                }else{
                    layer.msg(res.msg, {
                        time: 2000,
                        btn: ['知道了'],
                        btnAlign: 'c',
                        anim: 6
                    });
                }
            })
        });
        $("#nextForm").on('click',function () {
            let qq=$("input[name='qq']").val();
            let token=$("input[name='token']").val();
            let uid=$("input[name='uid']").val();
            if (!qq) {
                layer.msg('请填写QQ号码！', {
                    time: 3000, //20s后自动关闭
                    btn: ['知道了'],
                    btnAlign: 'c',
                    anim: 6
                });
                return;
            }
            if (!token) {
                layer.msg('请填写token！', {
                    time: 3000, //20s后自动关闭
                    btn: ['知道了'],
                    btnAlign: 'c',
                    anim: 6
                });
                return;
            }
            if (!uid) {
                layer.msg('请填写uid！', {
                    time: 3000, //20s后自动关闭
                    btn: ['知道了'],
                    btnAlign: 'c',
                    anim: 6
                });
                return;
            }
            var msg =layer.msg('模拟登陆中...', {
                time: 10000,
                closeBtn: 0
            });
            $.post('<?php echo url('pinduoduo/qq_add'); ?>',{
                qq:qq,
                token:token,
                uid:uid
            },function (res) {
                layer.close(msg);
                console.log(res);
                if (res.status){
                    layer.msg(res.msg, {
                        time: 2000,
                        closeBtn: 0
                    });
                    element.tabChange('user_add', '2');
                }else{
                    layer.msg(res.msg, {
                        time: 2000,
                        btn: ['知道了'],
                        btnAlign: 'c',
                        anim: 6
                    });
                }
            })
        });
        form.on('select', function(data){
            var select_name=data.elem.name;
            var phone=$("input[name='qq']").val();
            if (select_name=='address_province'){
                $("select[name='address_city']").html('');
            }
            if (select_name=='address_city'){
                $("select[name='address_district']").html('');
            }
            if (phone){
                var region_id=data.value;
                if (region_id){
                    $.ajax({
                        type:"POST",
                        url: "<?php echo url('pinduoduo/getaddresstpl'); ?>",
                        data:{
                            phone:phone
                            ,region_id:region_id
                        },
                        success: function(res){
                            if (res.status){
                                var regions=res.data.regions;
                                if (regions){
                                    var html='';
                                    if (select_name=='address_province'){
                                        html+='<option value="">请选择市</option>';
                                    }
                                    if (select_name=='address_city'){
                                        html+='<option value="">请选择区域</option>';
                                    }
                                    regions.forEach(function (val,key) {
                                        html+='<option value="'+val.region_id+'">'+val.region_name+'</option>';
                                    });
                                    if (select_name=='address_province'){
                                        $("select[name='address_city']").html(html);
                                    }
                                    if (select_name=='address_city'){
                                        $("select[name='address_district']").html(html);
                                    }
                                    form.render('select','address_form');
                                }
                            }else{
                                layer.msg(res.msg);
                            }
                        }
                    });
                }
            } else{
                layer.msg('请先填写手机');
            }
        });
        $("#submitForm").on('click',function () {
            var address_name=$("input[name='address_name']").val();
            var phone=$("input[name='qq']").val();
            var address_province=$("select[name='address_province']").val();
            var address_city=$("select[name='address_city']").val();
            var address_district=$("select[name='address_district']").val();
            var address_concret=$("input[name='address_concret']").val();

            var flag=true;
            if (!phone) {
                layer.msg('手机号不能为空');
                flag=false;
                return;
            }
            if (!address_name) {
                layer.msg('收货人不能为空');
                flag=false;
                return;
            }
            if (!address_province) {
                layer.msg('请选择省份');
                flag=false;
                return;
            }
            if (!address_city) {
                layer.msg('请选择城市');
                flag=false;
                return;
            }
            if (!address_district) {
                layer.msg('请选择县/区');
                flag=false;
                return;
            }
            if (!address_concret) {
                layer.msg('具体位置不能为空');
                flag=false;
                return;
            }
            if (flag) {
                layer.msg('提交中...',{time:10000});
                $.ajax({
                    type:"POST",
                    url: "<?php echo url('pinduoduo/saveaddress'); ?>",
                    data:{
                        phone:phone
                        ,address_name:address_name
                        ,address_province:address_province
                        ,address_city:address_city
                        ,address_district:address_district
                        ,address_concret:address_concret
                    },
                    success: function(res){
                        layer.msg(res.msg);
                        if (res.status){
                            self.location='<?php echo url('pinduoduo/users'); ?>';
                        }
                    }
                });
            }
        });
    });
</script>
<style>
    .layui-form{
        padding-top: 15px;
    }
    .layui-form-item .layui-input-inline{
        width:300px;
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