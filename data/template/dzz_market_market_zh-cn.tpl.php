<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:8:{s:61:"/opt/lampp/htdocs/dzzoffice//./dzz/market/template/market.htm";i:1585620678;s:83:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_simple_start.htm";i:1585620676;s:81:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_simple_end.htm";i:1585620676;s:77:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/commer_header.htm";i:1585620676;s:66:"/opt/lampp/htdocs/dzzoffice//./dzz/market/template/header_left.htm";i:1585620678;s:68:"/opt/lampp/htdocs/dzzoffice//./dzz/market/template/header_search.htm";i:1585620678;s:76:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_right.htm";i:1585620676;s:77:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/footer_simple.htm";i:1585620676;}*/?>
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
<script type="text/javascript" src="./data/template/dzz_market_market_header_zh-cn.js" ></script><script type="text/javascript" src="static/js/header.js?<?php echo VERHASH;?>" ></script>
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
<link href="static/css/common.css?<?php echo VERHASH;?>" rel="stylesheet" media="all">
<script type="text/javascript" src="static/js/jquery.leftDrager.js?<?php echo VERHASH;?>" ></script>
<style>
html,
body {
overflow: hidden;
background: #FBFBFB;
}

.table td {
vertical-align: middle;
}
.bs-main-container {
margin:0;
}
</style><script type="text/javascript" src="./data/template/dzz_market_market_common_zh-cn.js" ></script><script type="text/javascript" src="static/js/common.js?<?php echo VERHASH;?>" ></script>
</head>
<body id="nv_<?php echo $_G['basescript'];?>" class="<?php echo $bodyClass;?>" >
<div id="append_parent" style="z-index:99999;"></div>
<div id="ajaxwaitid" style="z-index:99999;"></div>
<nav class="navbar navbar-inverse resNav bs-top-container" >
<div class="resNav-item resNav-left">     
    <ul class="nav navbar-nav navbar-nav-left" style="min-width:168px"> 

    <li>
        <a href="<?php echo MOD_URL;?>">应用库</a>
    </li> 
</ul>    </div>
    <div class="resNav-item resNav-center"><div class="input-search">
<form name="search" action="<?php echo DZZSCRIPT;?>" method="get">
    <input type="hidden" name="mod" value="market" />
    <i class="input-search-icon glyphicon glyphicon-search" aria-hidden="true" onclick="this.parentNode.submit()"></i>
    <input type="text" class="form-control search  form-search" name="keyword" value="<?php echo $_GET['keyword'];?>" placeholder="应用名称或供应商" id="searchval">
    </div>
</form>
</div>
<script type="text/javascript">
jQuery('#searchval').focus(function (e) {//头部搜索框变颜色
    jQuery(this).parent().parent().addClass('focus');
});
jQuery('#searchval').blur(function (e) {//失去焦点时
 jQuery(this).parent().parent().removeClass('focus');
})
</script>
    </div>
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
</script><div class="bs-container clearfix">
<div class="bs-main-container">
<div class="main-header clearfix">
<ul class="nav navbar-nav nav-pills-bottomguide">
<li <?php if(!$tagid) { ?>class="active"<?php } ?>>
<a href="<?php echo DZZSCRIPT;?>?mod=market">全部</a>
</li><?php if(is_array($tags)) foreach($tags as $value) { ?><li <?php if($tagid==$value['tagid']) { ?>class="active"<?php } ?>>
<a href="<?php echo DZZSCRIPT;?>?mod=market&tagid=<?php echo $value['tagid'];?>"><?php echo $value['tagname'];?></a>
</li>
<?php } ?>	
               
</ul>
</div> 

<div class="main-content clearfix">
<table class="table table-hover">
<thead>
<tr>
<th>应用库</th>
<th>供应商</th>
<th>标签</th>
<th>编辑</th>
</tr>
</thead><?php if(is_array($list)) foreach($list as $value) { ?><tr>
<td>
<a href="<?php echo $value['url'];?>" target="_blank" isinstall="<?php echo $value['isinstall'];?>" onclick="return Preview('<?php echo $value['appid'];?>');" title="预览"><img src="<?php echo $value['appico'];?>" /><?php echo $value['appname'];?></a>
</td>
<td><?php echo $value['vendor'];?></td>
<td><?php if(is_array($value['tags'])) foreach($value['tags'] as $key => $value1) { ?><a href="<?php echo DZZSCRIPT;?>?mod=market&tagid=<?php echo $value1['tagid'];?>"><?php echo $value1['tagname'];?></a>
<?php } ?>
</td>
<td>
<?php if($value['isinstall']) { ?>
<span>已安装</span>
<?php if($value['notdelete'] == 0) { ?>												
<a href="javascript:;"  data-notdelete="<?php echo $value['notdelete'];?>" onclick="appUninstall(this,'<?php echo $value['appid'];?>')">&nbsp;卸载</a>
<?php } } else { ?>
<a id="app_<?php echo $value['appid'];?>" href="javascript:;" data-notdelete="<?php echo $value['notdelete'];?>" isinstall="<?php echo $value['isinstall'];?>" onclick="Install(this,'<?php echo $value['appid'];?>')"><span>安装</span></a>
<?php } ?>
</td>
</tr>
<?php } if($multi) { ?>
<tr>
<td colspan="20"> <?php echo $multi;?></td>
</tr>
<?php } ?>
</table>
</div>
</div>
</div>
<script type="text/javascript">
jQuery('.left-drager').leftDrager_layout();
var appdata = <?php echo $jsondata;?>;

function Preview(appid) {
try {
if(appdata[appid]) parent._config.sourcedata.app[appid] = appdata[appid];
parent.OpenApp(appid);
return false
} catch(e) {
return true;
}
}
function appUninstall(obj,appid){
var parent = jQuery(obj).closest('td');
var notdelete = jQuery(obj).data('notdelete');
jQuery.getJSON(DZZSCRIPT+'?mod=system&op=dzzcp&do=appuninstall&appid='+appid,function(json){
if(json.error){
showmessage(json.error,'error',3000,1,'right-bottom');
}else{
var html = '<a id="app_'+appid+'" href="javascript:;" data-notdelete="'+notdelete+'" onclick="Install(this,'+appid+')"><span>安装</span></a>'
parent.html(html);
}
});
};
function Install(obj,appid) {	
try {
var a = obj;
var td = jQuery(a).closest('td');
if(appdata[appid]){
var uid = '<?php echo $_G["uid"];?>';
if(parent._config){
parent._config.sourcedata.app[appid] = appdata[appid];
}else if(uid){

}else{
alert('请在桌面内使用');
}

}else{
return;
} 
parent.showmessage('正在安装"' + appdata[appid].appname + '"，请稍候', 'info', 0, 1, 'right-bottom');
jQuery.getJSON('<?php echo DZZSCRIPT;?>?mod=market&do=install&appid=' + appid, function(json) {
if(json.msg == 'success') {
if(parent._config){
parent._config.appList.push(appid);
parent._start.refreshlist();
parent._start.setStartTip(1);
}
var notdelete = jQuery(a).data('notdelete');
var html = '<span>已安装</span>';
if(notdelete == 0){																	
html +='<a href="javascript:;"  data-notdelete="'+notdelete+'" onclick="appUninstall(this,'+appid+')">&nbsp;&nbsp;卸载</a>';
}
td.html(html);
parent.showmessage(appdata[appid].appname + '已安装到开始菜单', 'success', 3, 1, 'right-bottom');

} else if(json.error) {
parent.showmessage(json.error, 'info', 3, 1, 'right-bottom');
}
});
} catch(e) {
alert('请在桌面内使用');
}
}
</script>
<script src="static/bootstrap/js/bootstrap.min.js?<?php echo VERHASH;?>" ></script><?php output();?><?php updatesession();?><?php if(debuginfo()) { ?>
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