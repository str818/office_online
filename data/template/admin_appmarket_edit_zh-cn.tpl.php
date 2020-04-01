<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:9:{s:64:"/opt/lampp/htdocs/dzzoffice//./admin/appmarket/template/edit.htm";i:1585620672;s:83:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_simple_start.htm";i:1585620676;s:81:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_simple_end.htm";i:1585620676;s:77:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/commer_header.htm";i:1585620676;s:61:"/opt/lampp/htdocs/dzzoffice//./admin/template/header_left.htm";i:1585620673;s:73:"/opt/lampp/htdocs/dzzoffice//./admin/appmarket/template/header_search.htm";i:1585620672;s:76:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_right.htm";i:1585620676;s:64:"/opt/lampp/htdocs/dzzoffice//./admin/appmarket/template/left.htm";i:1585620672;s:77:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/footer_simple.htm";i:1585620676;}*/?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } ?><?php echo $_G['setting']['sitename'];?> </title>
<meta name="keywords" content="<?php if(!empty($_G['setting']['metakeywords'])) { echo htmlspecialchars($_G['setting']['metakeywords']); } ?>" />
<meta name="description" content="<?php if(!empty($_G['setting']['metadescription'])) { echo htmlspecialchars($_G['setting']['metadescription']); ?> <?php } ?>" />
<meta name="generator" content="DzzOffice" />
<meta name="author" content="DzzOffice" />
<meta name="copyright" content="2012-<?php echo dgmdate(TIMESTAMP,'Y-m-d');?> www.dzzoffice.com" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<meta name="renderer" content="webkit">
<base href="<?php echo $_G['siteurl'];?>" />
<link rel="stylesheet" type="text/css" href="static/bootstrap/css/bootstrap.min.css?<?php echo VERHASH;?>">
<link rel="stylesheet" type="text/css" href="static/css/app_manage.css?<?php echo VERHASH;?>">
<link rel="stylesheet" type="text/css" href="static/dzzicon/icon.css?<?php echo VERHASH;?>"/>
<link rel="stylesheet" href="static/popbox/popbox.css">
<script type="text/javascript" src="static/jquery/jquery.min.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="static/jquery/jquery.json-2.4.min.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript">var DZZSCRIPT='<?php echo DZZSCRIPT;?>',LANG='<?php echo $_G['language'];?>', STATICURL = 'static/', IMGDIR = '<?php echo $_G['setting']['imgdir'];?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', dzz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>',attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>',  REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>',MOD_PATH='<?php echo MOD_PATH;?>',APP_URL='<?php echo MOD_URL;?>',MOD_URL='<?php echo MOD_URL;?>';</script>
<script type="text/javascript" src="./data/template/admin_appmarket_edit_header_zh-cn.js" ></script><script type="text/javascript" src="static/js/header.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="static/popbox/jquery.popbox.js?<?php echo VERHASH;?>" ></script>
<!--[if lt IE 9]>
  <script src="static/bootstrap/js/html5shiv.min.js" ></script>
  <script src="static/bootstrap/js/respond.min.js" ></script>
<![endif]--><?php Hook::listen('header_tpl') ?> <script type="text/javascript">
 if(!!window.ActiveXObject || "ActiveXObject" in window){
 try{$.ajaxSetup({ cache: false });}catch(e){}
 window.MSIE=1;
 } 
</script>
<link rel="stylesheet" type="text/css" href="static/tagsinput/jquery.tagsinput.css" />
<link href="static/css/common.css?<?php echo VERHASH;?>" rel="stylesheet" media="all">

<link rel="stylesheet" href="static/css/checkbox.css">
<script type="text/javascript" src="static/js/jquery.leftDrager.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="./data/template/admin_appmarket_edit_selorg_zh-cn.js" ></script><script type="text/javascript" src="dzz/system/scripts/selorg.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript">
<?php if($openarr) { ?>
selorg.openarr = <?php echo $openarr;?>;
<?php } ?>
</script>
<style>
.img_128_128 {
max-width: 128px;
max-height: 128px;
border: 1px solid #CCC;
padding: 2px;
}

.btn-sorg {
margin: 5px;
}

* html .img_128_128 {
width: expression(this.width > 128 && this.width>=this.height ? 128: true);
height: expression(this.height > 128 && this.width<=this.height ? 128: true);
}
</style><script type="text/javascript" src="./data/template/admin_appmarket_edit_common_zh-cn.js" ></script><script type="text/javascript" src="static/js/common.js?<?php echo VERHASH;?>" ></script>
</head>
<body id="nv_<?php echo $_G['basescript'];?>" class="<?php echo $bodyClass;?>" >
<div id="append_parent" style="z-index:99999;"></div>
<div id="ajaxwaitid" style="z-index:99999;"></div>
<nav class="navbar navbar-inverse resNav bs-top-container" >
<div class="resNav-item resNav-left">     
    <ul class="nav navbar-nav navbar-nav-left" style="min-width:168px"> 
    <li>
       <a class="leftTopmenu" href="index.php?mod=appmanagement" style="padding:8px"><div class="gb_fc"><span class="dzz dzz-chevron-left" style="display:block"></span></div></a>
    </li>
    <li>
        <a href="<?php echo MOD_URL;?>">应用市场</a>
    </li> 
</ul>    </div>
    <div class="resNav-item resNav-center"><?php if($_GET['op']=='extopen') { ?>
 <div class="input-search">
 <form name="search" action="<?php echo BASESCRIPT;?>" method="get">
    <input type="hidden" name="mod" value="appmarket" />
    <input type="hidden" name="op" value="extopen" />
    <i class="input-search-icon glyphicon glyphicon-search" aria-hidden="true" onclick="this.parentNode.submit()"></i>
    <input type="text" class="form-control search  form-search" name="ext" value="<?php echo $_GET['ext'];?>" placeholder="扩展名" id="searchval">
    <span aria-hidden="true" id="emptysearchcondition" class="header-closebutton">×</span>
 </form>
</div>
<?php } elseif(empty($_GET['op'])) { ?>
 <div class="input-search">
 <form name="search" action="<?php echo BASESCRIPT;?>" method="get">
    <input type="hidden" name="mod" value="appmarket" />
    <input type="hidden" name="op" value="" />
    <input type="hidden" name="tagid" value="<?php echo $_GET['tagid'];?>" />
     <input type="hidden" name="group" value="<?php echo $_GET['group'];?>" />
    <i class="input-search-icon glyphicon glyphicon-search" aria-hidden="true" onclick="this.parentNode.submit()"></i>
    <input type="text" class="form-control search  form-search" name="keyword" value="<?php echo $_GET['keyword'];?>" placeholder="应用名称或供应商" id="searchval">
    <span aria-hidden="true" id="emptysearchcondition" class="header-closebutton">×</span>

 </form>
</div>
<?php } elseif($_GET['op']==upgrade) { ?>
 <div class="input-search">
 <form name="search" action="<?php echo BASESCRIPT;?>" method="get">
    <input type="hidden" name="mod" value="<?php echo MOD_NAME;?>" /> 
    <input type="hidden" name="op" value="upgrade" />
    <i class="input-search-icon glyphicon glyphicon-search" aria-hidden="true" onclick="this.parentNode.submit()"></i>
    <input type="text" class="form-control search  form-search" name="keyword" value="<?php echo $_GET['keyword'];?>" placeholder="应用市场" id="searchval">
 <span aria-hidden="true" id="emptysearchcondition" class="header-closebutton">×</span>			
 </form>
</div>
<?php } elseif($_GET['op']=='default') { ?>
 <div class="input-search">
 <form name="search" action="<?php echo BASESCRIPT;?>" method="get">
    <input type="hidden" name="mod" value="<?php echo MOD_NAME;?>" /> 
    <input type="hidden" name="op" value="<?php echo $_GET['op'];?>" />
    <input type="hidden" name="group" value="<?php echo $_GET['group'];?>" />
    <input type="hidden" name="position" value="<?php echo $_GET['position'];?>" />
    <input type="hidden" name="depid" value="<?php echo $_GET['depid'];?>" />
    <i class="input-search-icon glyphicon glyphicon-search" aria-hidden="true" onclick="this.parentNode.submit()"></i>
    <input type="text" class="form-control search  form-search" name="keyword" value="<?php echo $_GET['keyword'];?>" placeholder="应用市场" id="searchval">
     <span aria-hidden="true" id="emptysearchcondition" class="header-closebutton">×</span>

 </form>
</div>
<?php } ?>
<script type="text/javascript">

jQuery('#searchval').focus(function (e) {//头部搜索框变颜色
    jQuery(this).closest('.input-search').addClass('focus');
if(this.value!='') jQuery('#emptysearchcondition').show();
});
jQuery('#searchval').blur(function (e) {//失去焦点时
 jQuery(this).closest('.input-search').removeClass('focus');
 if(this.value=='') jQuery('#emptysearchcondition').hide();
});
jQuery('#searchval').keyup(function (e) {//失去焦点时
if(this.value!='') jQuery('#emptysearchcondition').show();
});
jQuery('#emptysearchcondition').on('click',function(){
jQuery('#searchval').val('');
jQuery('#searchval').closest('form').submit();
jQuery('#emptysearchcondition').hide();
return false;
});
</script>    </div>
     <div class="resNav-item resNav-right">
     <ul class="nav navbar-nav">
<li>
<a href="javascript:;">
<span class="navbar-borderleft"></span>
</a>
</li>
<li class="app_popup-parent">

<a href="javascript:;" id="desktop_app" data-href="index.php?mod=system&amp;op=app_ajax&amp;operation=app" class="app_popup_icon js-popbox" data-placement="bottom" data-trigger="focus" data-auto-adapt="true" data-toggle="popover"><span class="dzz dzz-apps basil"></span></a>
</li>
<li>
<a href="javascript:;" id="dzz_notification" data-href="index.php?mod=system&amp;op=notification&amp;filter=new" class="navbar-notice js-popbox" data-placement="bottom" data-trigger="focus" data-auto-adapt="true" data-toggle="popover">
<span class="dzz dzz-notifications"></span>
<span class="badge hide">&nbsp;</span>
</a>
</li>
<li>
<a href="javascript:;" class="imgHeight js-popbox" data-href="user.php?mod=space&amp;op=navmenu&amp;modname=<?php echo MOD_NAME;?>" data-placement="bottom" data-trigger="focus" data-auto-adapt="true" data-toggle="popover"><?php echo avatar_block($_G[uid]);?></a>
</li>
</ul></div>
</nav>


<script type="text/javascript">
jQuery(document).ready(function(e) {
    _header.init('<?php echo FORMHASH;?>');//初始化头部效果
    //_header.Topcolor();
//_notice.init();
jQuery(".resNav .js-popbox").each(function(){
jQuery(this).popbox();
});
_notice.getNotificationCount();
});
_notice={};
_notice.flashStep=1;
_notice.checkurl='index.php?mod=system&op=notification&filter=checknew';
_notice.normalTitle= document.title;
_notice.getNotificationCount=function(){
jQuery.getJSON(_notice.checkurl,function(json){
var sum=parseInt(json.sum);
_notice.showTips(sum);
if(json.timeout>0) window.setTimeout(_notice.getNotificationCount,json.timeout);
});
}
_notice.showTips=function(sum){
if(sum>0){
jQuery('#dzz_notification>span.badge').html(sum).removeClass('hide');
jQuery('#dzz_notification>span.dzz').hide();
//_notice.flashTitle();
}else{
jQuery('#dzz_notification>span.badge').addClass('hide');
jQuery('#dzz_notification>span.dzz').show();
//_notice.flashTitle(1);
}
}
_notice.flashTitle=function(flag){
//仅窗口不在焦点时闪烁title，回到焦点时停止闪烁并将title恢复正常
if(flag ||　CurrentActive){//当前处于焦点
document.title=_notice.normalTitle;
_notice.flashTitleRun = false;
return;//退出循环
}
_notice.flashTitleRun = true;
_notice.flashStep++;
if (_notice.flashStep==3) {_notice.flashStep=1;}
if (_notice.flashStep==1) {document.title="【您有新的通知】";}
if (_notice.flashStep==2) {document.title="【　　　　　　】";}
setTimeout(function(){_notice.flashTitle();},500);  //循环
}
</script><div class="bs-container clearfix" style="border-top:1px solid #FFF">
<div class="bs-left-container  clearfix"><ul class="nav-stacked">
<li <?php if($op=='index' || ($op=='edit' && $appid)) { ?>class="active"<?php } ?>>
<a href="<?php echo MOD_URL;?>"><i class="glyphicon glyphicon-file"></i> 已安装</a>
</li>
   
    <li <?php if($op=='upgrade_app' || $op=='appupgrade') { ?>class="active"<?php } ?>>
<a href="<?php echo MOD_URL;?>&op=appupgrade&refer=<?php echo $refer;?>"><i class="glyphicon glyphicon-upload"></i> 升级 <span id="update_app_num" class="badge badge-danger <?php if(($upsum=get_update_app_num())<1) { ?>hide<?php } ?>"><?php echo $upsum;?></span></a>
</li>
<li <?php if($op=='cloudappmarket' || $op=='list') { ?>class="active"<?php } ?>>
<a href="<?php echo MOD_URL;?>&op=cloudappmarket"><i class="glyphicon glyphicon-th-large"></i> 应用市场</a>
</li>
<li <?php if($op=='extopen') { ?>class="active"<?php } ?>>
<a href="<?php echo MOD_URL;?>&op=extopen"><i class="glyphicon glyphicon-filter"></i> 打开方式</a>
</li>
<li <?php if($op=='default') { ?>class="active"<?php } ?>>
<a href="<?php echo MOD_URL;?>&op=default"><i class="glyphicon glyphicon-cog"></i> 权限管理</a>
</li>
</ul></div>
<div class="left-drager">
<div class="left-drager-op">
<div class="left-drager-sub"></div>
</div>
</div>	
<div class="bs-main-container">	
<div class="main-header clearfix">
<?php if(!$appid) { ?>
<h4 class="main-header-title navbar-left"><a href="<?php echo MOD_URL;?>">返回</a>&nbsp;&nbsp;&nbsp;/&nbsp;添加应用</h4>			
<?php } else { ?>
<h4 class="main-header-title navbar-left"><a href="<?php echo MOD_URL;?>">返回</a>&nbsp;&nbsp;/&nbsp;&nbsp;编辑应用</h4>
<?php } if(!$appid && $op=='edit') { ?>
<div  class="button_add_content">
<a href="<?php echo MOD_URL;?>&op=edit&do=add&refer=<?php echo $refer;?>" id="button_add1" title="添加应用" class="hide">+</a>				
<a href="<?php echo MOD_URL;?>&op=cp&do=import&refer=<?php echo $refer;?>" id="button_add2" class="hide" title="导入应用" style="font-size:20px ;"><span  class="glyphicon glyphicon-download-alt"></span></a>				
<a href="javascript:;" id="button_add" style="z-index: 10;">+</a>				
</div>
<?php } ?>
</div>
<div class="main-content " style="padding:15px;">
<form id="appform" name="appform" class="form-horizontal-left form-horizontal" action="<?php echo MOD_URL;?>&op=edit&appid=<?php echo $appid;?>" method="post" enctype="multipart/form-data" onsubmit="return validate(this)">
<input type="hidden" name="appsubmit" value="true" />
<input type="hidden" name="appid" value="<?php echo $appid;?>" />
<input type="hidden" name="refer" value="<?php echo $refer;?>" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<div class="form-group">
<label class="control-label " for="appname">应用名称</label>

<input type="text" class="form-control input-sm" id="appname" name="appname" autocomplete="off" value="<?php echo $app['appname'];?>">
<span class="help-inline"></span> 
</div>
<div class="form-group">
<label class="control-label" for="identifier">应用标识</label>
<input type="text" class="form-control input-sm" id="identifier" name="identifier" autocomplete="off" value="<?php echo $app['identifier'];?>">
<ul class="help-block">
<li>应用唯一标识,请输入英文字母字符串,一般取用对应应用的目录名称(英文)。</li>
								<li>如通过在线安装碰到重名时会自动重命名。</li>
</ul>
</div>
<div class="form-group">
<label class="control-label" for="app_path">应用路径</label>
<input type="text" class="form-control input-sm" id="app_path" name="app_path" autocomplete="off" value="<?php echo $app['app_path'];?>">
<ul class="help-block">
<li>相对于站点根目录的路径。如thame应用相对于站点根目录的路径是 ./dzz/thame,则该字段填写 dzz </li>
                                    <li>如应用为链接类型,无路径则填写字符串 link </li>
</ul>
</div>
<div class="form-group">
<label class="control-label" for="appurl">应用地址</label>
<input type="text" class="form-control input-sm" id="appurl" name="appurl" autocomplete="off" value="<?php echo $app['appurl'];?>">
<ul class="help-block">
<li>应用地址，可以是相对地址（相对于站点根目录)或网络地址</li>
									<li>应用的地址可以带有参数如：{dzzscript}?mod=document&op=textviewer&icoid={icoid}</li>
									<li>参数：将地址中的参数用"{}"包裹，dzzscript:为桌面主程序（即index.php),adminscript:为后台管理主程序(即admin.php),添加应用时使用此参数可以增加应用的兼容性和移植性</li>
									<li>dzz_resources表中的字段都可以作为参数带入</li>
</ul>
</div>
<div class="form-group">
<label class="control-label" for="appadminurl">管理设置地址</label>
<input type="text" class="form-control input-sm" id="appadminurl" name="appadminurl" autocomplete="off" value="<?php echo $app['appadminurl'];?>">
<ul class="help-block">
<li>管理设置地址，可以是相对地址（相对于站点根目录)或网络地址</li>
									<li>应用的地址可以带有参数如：{dzzscript}?mod=document&op=textviewer&icoid={icoid}</li>
									<li>参数：将地址中的参数用"{}"包裹，dzzscript:为主程序（即index.php),adminscript:为后台管理主程序(即admin.php),添加应用时使用此参数可以增加应用的兼容性和移植性</li>
									<li>dzz_resources表中的字段都可以作为参数带入</li>
</ul>
</div>
<!--<div class="form-group">
<label class="control-label" for="noticeurl">通知接口</label>
<input type="text" class="form-control input-sm" id="noticeurl" name="noticeurl" autocomplete="off" value="<?php echo $app['noticeurl'];?>">
<ul class="help-block">
<li>应用通知接口地址，可以是相对地址（相对于站点根目录)或网络地址</li>
										<li>留空为不启用此应用的通知，设置了地址后，前端将会定时的查询此接口，将结果反映到界面上</li>
										<li>接口返回数据格式如：{sum:10,timeout:0,notice:[]}表示： sum:新消息数量；timeout:轮询时间，前端查询到此数据后，相应的应用的右上角会出现10的提醒</li>
										<li>参数：将地址中的参数用"{}"包裹，dzzscript:为桌面主程序（即index.php),adminscript:为后台管理主程序(即admin.php),添加应用时使用此参数可以增加应用的兼容性和移植性</li>
</ul>
</div>-->
<div class="form-group">
<label class="control-label" for="vendor">供应商</label>
<input type="text" class="form-control input-sm" id="vendor" name="vendor" autocomplete="off" value="<?php echo $app['vendor'];?>">
<span class="help-inline">应用提供商名称</span>
</div>
<div class="form-group">
<label class="control-label">应用图标</label>
<div class="controls">
<?php if($appid>0) { ?>
<p><input id="fileiz_0" class="form-control input-sm" name="TMPiconnew" value="" style="display: none;" type="file">
<input id="fileiz_1" class="form-control input-sm" style="" name="iconnew" value="<?php echo $app['appico'];?>" type="text"></p>
<p>
<a id="fileiz_0a" style="" href="javascript:;" onclick="document.getElementById('fileiz_1a').style.fontWeight = '';this.style.fontWeight = 'bold';document.getElementById('fileiz_1').name = 'TMPiconnew';document.getElementById('fileiz_0').name = 'iconnew';document.getElementById('fileiz_0').style.display = '';document.getElementById('fileiz_1').style.display = 'none'">新建和上传</a>&nbsp;
<a id="fileiz_1a" style="font-weight: bold;" href="javascript:;" onclick="document.getElementById('fileiz_0a').style.fontWeight = '';this.style.fontWeight = 'bold';document.getElementById('fileiz_0').name = 'TMPiconnew';document.getElementById('fileiz_1').name = 'iconnew';document.getElementById('fileiz_1').style.display = '';document.getElementById('fileiz_0').style.display = 'none'">网址</a>
</p>
<?php } else { ?>
<p><input id="fileiz_0" class="form-control input-sm" name="iconnew" value="" type="file">
<input id="fileiz_1" class="form-control input-sm" style="display: none;" name="TMPiconnew" value="<?php echo $app['appico'];?>" type="text"></p>
<p>
<a id="fileiz_0a" style="font-weight: bold;" href="javascript:;" onclick="document.getElementById('fileiz_1a').style.fontWeight = '';this.style.fontWeight = 'bold';document.getElementById('fileiz_1').name = 'TMPiconnew';document.getElementById('fileiz_0').name = 'iconnew';document.getElementById('fileiz_0').style.display = '';document.getElementById('fileiz_1').style.display = 'none'">新建和上传</a>&nbsp;
<a id="fileiz_1a" style="" href="javascript:;" onclick="document.getElementById('fileiz_0a').style.fontWeight = '';this.style.fontWeight = 'bold';document.getElementById('fileiz_0').name = 'TMPiconnew';document.getElementById('fileiz_1').name = 'iconnew';document.getElementById('fileiz_1').style.display = '';document.getElementById('fileiz_0').style.display = 'none'">网址</a>
</p>
<?php } ?>
<p class="text-muted">建议图片大小128X128 px</p>
</div>
<span class="help-inline">
                <?php if($appid) { ?><img class="img_128_128" src="<?php echo $app['appico'];?>?t=<?php echo $_G['timestamp'];?>" >
                <?php } else { ?> <img class="img_128_128" src="dzz/images/default/icodefault.png" >
                <?php } ?>
                </span>
</div>
<div class="form-group">
<label class="control-label">组权限</label>
<div class="controls ml20"><?php if(is_array($grouptitle)) foreach($grouptitle as $key => $value) { ?><label class="radio wd120"><input type="radio" name="group" value="<?php echo $key;?>" <?php if($app['group']==$key) { ?>checked<?php } ?> onclick="<?php if($key==1) { ?>jQuery('#perm_depart').show();<?php } else { ?>jQuery('#perm_depart').hide();<?php } ?>"><?php echo $value;?> </label>
<?php } ?>
</div>
<span class="help-block">组权限限定此应用使用范围</span>
</div>
<div class="form-group" id="perm_depart" <?php if($app[ 'group']!=1) { ?>style="display:none"
<?php } ?>>
<label class="control-label">部门权限</label>
<div class="controls-adapt">
<div class="dropdown controls_adapt">
<button class="btn btn-default dropdown-toggle" id="orgids_Menu" data-toggle="dropdown">请选择机构或部门<span class="caret"></span></button>
<div id="orgids_dropdown_menu" class="dropdown-menu org-sel-box" role="menu" aria-labelledby="orgids_Menu">
<iframe name="orgids_iframe" class="org-sel-box-iframe" src="index.php?mod=system&amp;op=orgtree&amp;ctrlid=orgids&amp;multiple=1&amp;nouser=1" frameborder="0" marginheight="0" marginwidth="0" width="100%" height="100%" allowtransparency="true"></iframe>
</div>
</div>
<div id="orgids"><?php if(is_array($sel_org)) foreach($sel_org as $value) { ?><button id="orgids_sl_<?php echo $value['orgid'];?>" type="button" class="btn btn-simple btn-sorg" data-val="<?php echo $value['orgid'];?>"><?php echo avatar_group($value['orgid']);?> <?php echo $value['orgname'];?> 
<a href="javascript:;" class="ibtn dzz dzz-close"  title="删除" onclick="selorg.remove('orgids',this);"></a>
</button>
<?php } ?>
</div>

<input id="sel_orgids" name="orgids" type="hidden" value="<?php echo $sel;?>" />
</div>
<span class="help-block">设定应用的部门使用权限，一般应用于某些特殊的应用只允许特定部门的成员使用的情况</span>
</div>
<div class="form-group ">
<label class="control-label" for="tag">应用标签</label>
<div class="controls">
<input type="text" name="tag" autocomplete="off" id="tag" data-source="<?php echo $tag_source;?>" data-items="5" value="<?php echo $app['tags'];?>" style="margin: 0 auto;">
</div>
<ul class="help-block">
<li>此项为多项输入框，输入标签按回车或","确认</li>
<li>清晰、明确的标签方便用户查找添加应用</li>
</ul>
</div>
<div class="form-group">
<label class="control-label" for="fileext">支持扩展名</label>
<div class="controls" style="position:relative;overflow:visible">
<input type="text" name="fileext" autocomplete="off" id="fileext" data-source="<?php echo $fileext_source;?>" value="<?php echo $app['fileext'];?>" style="margin: 0 auto;">
</div>

<ul class="help-block">
<li>填写此应用可以打开的扩展名</li>
									<li>特殊扩展名：image：图片；link：网址；video：网络视频</li>
									<li>此项为多项输入框，输入标签按回车或","确认</li>									
									<li>对于不允许多开的应用，只会打开应用的一个窗体（如：带播放列表的播放器）</li>
</ul>
</div>
<div class="form-group">
<label class="control-label">打开方式</label>
<div class="controls ml20">
<label class="radio radio-inline"><input type="radio" name="open" value="0" <?php if($app['open']<1) { ?>checked<?php } ?> onclick="jQuery('#feature').show();">内部窗口 </label>
<label class="radio radio-inline"><input type="radio" name="open" value="1" <?php if($app['open']>0) { ?>checked<?php } ?> onclick="jQuery('#feature').hide();">新窗口</label>
</div>

<ul class="help-block">
<li>默认内部窗口打开，有些应用不适合内部打开时，可以选择在新窗口打开</li>
								<li>当应用地址为类似dzzjs:时，只能内部打开，这里的设置不起作用</li>
</ul>
</div>




<div class="form-group">
<label class="control-label">在应用库中</label>
<div class="controls ml20">
<label class="radio radio-inline"><input type="radio" name="hideInMarket" value="0" <?php if($app['hideInMarket']<1) { ?>checked<?php } ?>>显示 </label>
<label class="radio radio-inline"><input type="radio" name="hideInMarket" value="1" <?php if($app['hideInMarket']>0) { ?>checked<?php } ?>>隐藏 </label>
</div>

<span class="help-block">不在应用库中显示后，用户将无法添加此应用，一般适应于系统默认安装的应用</span>
</div>
<div class="form-group">
<label class="control-label">显示图标</label>
<div class="controls ml20">
<label class="radio radio-inline"><input type="radio" name="isshow" value="1" <?php if($app['isshow']>0) { ?>checked<?php } ?>>显示 </label>
<label class="radio radio-inline"><input type="radio" name="isshow" value="0" <?php if($app['isshow']<1) { ?>checked<?php } ?>>隐藏 </label>
</div>
<span class="help-block">选择"隐藏"时此应用将不会在应用库，用户桌面或开始菜单等位置显示，一般用于内置的默认安装的且不用点击应用打开的应用</span>
</div>





<div class="form-group">
<label class="control-label" for="appdesc">应用介绍</label>
<textarea rows="3" class="form-control" name="appdesc" id="appdesc" style="width:350px;"><?php echo $app['appdesc'];?></textarea>
</div>
<div id="pic_delete"></div>
<input id="editbutton" name="appbutton" value="提交" onclick="validate(this);" style="display: none;" type="button" />
</form>

<div class="form-horizontal-left form-horizontal">
<div class="form-group">
<label class="control-label">应用介绍图片</label>
<div class="controls">
<?php if($piclist) { ?>
<ul id="pic_container" class="thumbnails list-unstyled ml20"><?php if(is_array($piclist)) foreach($piclist as $key => $value) { ?><li class="wd120" style="margin:10px;width:90px;" id="pic_<?php echo $value['picid'];?>">
<div class="thumbnail text-center" style="margin-bottom:10px;">
<img data_src="<?php echo $value['pic'];?>" src="<?php echo $value['pic'];?>" />
</div>
<p class="text-center">
<a class="btn btn-link" href="javascript:;" onclick="delete_pic(this,<?php echo $value['picid'];?>)">删除</a>
</p>
</li>
<?php } ?>
</ul>

<?php } ?>

<table class="tb tb2 ">
<tbody id="attachbodyhidden" style="display:none">
<tr class="noborder">
<td class="tb27">
<form method="post" autocomplete="off" id="upload" action="<?php echo MOD_URL;?>&op=<?php echo $op;?>&do=upload" enctype="multipart/form-data" target="uploadframe">
<input type="file" name="attach" class="pf" size="0" />
<span id="localfile"></span>
<input type="hidden" name="uploadsubmit" id="uploadsubmit" value="true" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
</form>
</td>
</tr>
</tbody>
<tbody id="attachbody"></tbody>
</table>

<script type="text/javascript" src="./data/template/admin_appmarket_edit_uploadpic_zh-cn.js" ></script><script src="admin/scripts/uploadpic.js?<?php echo VERHASH;?>"  type="text/javascript"></script>
<iframe id="uploadframe" name="uploadframe" width="0" height="0" marginwidth="0" frameborder="0" src="about:blank"></iframe>
</div>
</div>
<div class="form-group">
<label></label>
<input class="btn btn-primary" id="submit_editsubmit" name="appsubmit" value="提交" type="button" onclick="document.getElementById('editbutton').click();">
</div>
</div>
</div>
</div>
</div>

<script type="text/javascript">
jQuery('.left-drager').leftDrager_layout();
function screen_app(tagid,group){	
var url = '<?php echo MOD_URL;?>';
if(tagid){
url += '&tagid='+tagid;
}
if(group){
url += '&group='+group;
}
var inputval = jQuery('#screen_keyword').val();
if(inputval){
url += '&keyword='+inputval;
}
console.log(url);
//		return false;
window.location.href =url;	 
}
jQuery('#button_add').click(function(){
if(jQuery("#button_add1").hasClass('hide')){
jQuery("#button_add").html("×");
jQuery("#button_add1").removeClass("hide");
jQuery("#button_add2").removeClass("hide");
jQuery("#button_add1").stop().animate({top:"-124px"},500);
jQuery("#button_add2").stop().animate({top:"-62px"},500);
}else{
jQuery("#button_add").html("＋");
jQuery("#button_add1").stop().animate({top:"0px"},500);
jQuery("#button_add2").stop().animate({top:"0px"},500);
setTimeout(function(){
jQuery("#button_add1").addClass("hide");
jQuery("#button_add2").addClass("hide");
},500)

}
});
jQuery(document).ready(function(e) {

jQuery('#fileext').tagsInput({
'height': '0px',
'width': '300px',
'interactive': true,
'defaultText': '',
//'onAddTag':callback_function,
//'onRemoveTag':callback_function,
//'onChange' : callback_function,
'removeWithBackspace': true,
'minChars': 0,
'maxChars': 0, //if not provided there is no limit,
'placeholderColor': '#666666',
'typeahead': {
source: jQuery('#fileext').data('source')
}
});

jQuery('#tag').tagsInput({
'height': '0px',
'width': '300px',
'interactive': true,
'defaultText': '',
//'onAddTag':callback_function,
//'onRemoveTag':callback_function,
//'onChange' : callback_function,
'removeWithBackspace': true,
'minChars': 0,
'maxChars': 0, //if not provided there is no limit,
'placeholderColor': '#666666',
'typeahead': {
source: jQuery('#tag').data('source')
}
});
});

jQuery('#un_selector_tag,#un_selector_fileext').on('click', function(e) {
document.getElementById(this.id.replace('un_selector_', '')).focus();
});

function addtaginput(key, id) {
var html = '<span>';
html += '<button data-dismiss="alert" class="close" type="button">×</button>';
html += '<em title="' + key + '" class="pull-left">' + key + '</em><input type="hidden"  value="' + key + '" name="' + id + '[]">';
html += '</span>';
jQuery('#' + id).val('').before(html).focus();
}

function validate(obj) {
//获取用户部门 并添加到form中

var appname = document.getElementById('appname');
var appurl = document.getElementById('appurl');
var identifier = document.getElementById('identifier');
var app_path = document.getElementById('app_path');
var notempty = '不能为空'; 
if(appname) {
var slen = strlen(appname.value);
if(slen < 1 || slen > 80) {
showmessage('应用名称'+notempty, 'danger', 3000, 1);
appname.focus();
return false;
}
}
if(strlen(appurl.value) < 1) {
showmessage('应用地址'+notempty, 'danger', 3000, 1);
appurl.focus();
return false;
}
if(strlen(identifier.value) < 1) {
showmessage('应用标识'+notempty, 'danger', 3000, 1);
appurl.focus();
return false;
}
if(strlen(app_path.value) < 1) {
showmessage('应用路径'+notempty, 'danger', 3000, 1);
appurl.focus();
return false;
}
uploadSubmit(obj);
return true;
}
</script>
<script src="static/bootstrap/js/bootstrap.min.js" ></script>
<script src="static/tagsinput/jquery.tagsinput.js" ></script>
<script src="static/bootstrap/js/bootstrap-typeahead.js" ></script><?php output();?><?php updatesession();?><?php if(debuginfo()) { ?>
<script type="text/javascript">
try{
if(console && console.log){
console.log('Processed in <?php echo $_G['debuginfo']['time'];?> second(s), <?php echo $_G['debuginfo']['queries'];?> queries <?php if($_G['gzipcompress']) { ?>, Gzip On<?php } if(C::memory()->type) { ?>, <?php echo ucwords(C::memory()->type); ?> On<?php } ?>.');
}
}catch(e){}
</script>
<?php } ?>	
<?php if(!$_G['setting']['bbclosed']) { if(!isset($_G['cookie']['sendmail'])) { ?>
<script type="text/javascript" src="misc.php?mod=sendmail&rand=<?php echo $_G['timestamp'];?>" ></script>
<?php } ?>
     <script type="text/javascript" src="misc.php?mod=sendwx&rand=<?php echo $_G['timestamp'];?>" ></script>
<?php } if($_G['uid'] && $_G['adminid'] == 1) { if(!isset($_G['cookie']['checkupgrade'])) { ?>
<script type="text/javascript">jQuery.getScript('misc.php?mod=upgrade&action=checkupgrade&rand=<?php echo $_G['timestamp'];?>');</script>
<?php } if(!isset($_G['cookie']['checkappupgrade'])) { ?>
<script type="text/javascript">jQuery.getScript('misc.php?mod=upgrade&action=checkappupgrade&rand=<?php echo $_G['timestamp'];?>');</script>
<?php } if(!isset($_G['cookie']['upgradenotice'])) { ?>
<script type="text/javascript">
jQuery(document).ready(function(){
try{jQuery('#systemNotice').load('misc.php?mod=upgrade&action=upgradenotice');}catch(e){};	
});
</script>
<div id="systemNotice" class="systemNotice" style="position: fixed;right:10px;bottom:10px;max-width:50%;box-shadow:0px 5px 10px RGBA(0,0,0,0.3);z-index:999999"></div>
<?php } } if($_G['setting']['statcode']) { ?>
<?php echo $_G['setting']['statcode'];?>
<?php } ?> 
</body>
</html>