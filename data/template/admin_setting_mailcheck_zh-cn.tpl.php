<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:9:{s:67:"/opt/lampp/htdocs/dzzoffice//./admin/setting/template/mailcheck.htm";i:1585620673;s:83:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_simple_start.htm";i:1585620676;s:81:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_simple_end.htm";i:1585620676;s:77:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/commer_header.htm";i:1585620676;s:69:"/opt/lampp/htdocs/dzzoffice//./admin/setting/template/header_left.htm";i:1585620673;s:0:"";b:0;s:76:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_right.htm";i:1585620676;s:62:"/opt/lampp/htdocs/dzzoffice//./admin/setting/template/left.htm";i:1585620673;s:77:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/footer_simple.htm";i:1585620676;}*/?>
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
<script type="text/javascript" src="./data/template/admin_setting_mailcheck_header_zh-cn.js" ></script><script type="text/javascript" src="static/js/header.js?<?php echo VERHASH;?>" ></script>
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
<link href="static/css/app_manage.css?<?php echo VERHASH;?>" rel="stylesheet" media="all">
<script type="text/javascript" src="static/js/jquery.leftDrager.js?<?php echo VERHASH;?>" ></script>
<script src="admin/scripts/admin.js?<?php echo VERHASH;?>" ></script><script type="text/javascript" src="./data/template/admin_setting_mailcheck_common_zh-cn.js" ></script><script type="text/javascript" src="static/js/common.js?<?php echo VERHASH;?>" ></script>
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
        <a href="<?php echo MOD_URL;?>">系统设置</a>
    </li> 
</ul>    </div>
    <div class="resNav-item resNav-center">    </div>
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
</script><style type="text/css">
/*.bs-main-container{
padding: 15px 30px;
}
.nav-pills-bottomguide>li:nth-child(1){
margin-left: 0px;
}
.nav-pills-bottomguide>li>a{
padding: 5px 0px;
margin-right: 30px;
}
.bs-main-container .main-content{
padding: 20px 0px;
}

.form-horizontal-left .control-label{
text-align: left;
}
.form-horizontal-left label{
padding-left: 0px;
}*/
#cpform {
margin-top: 15px;
}
</style>
<div class="bs-container clearfix">
<div class="bs-left-container  clearfix"><ul class="nav-stacked">
<li <?php if($operation=='basic' || $operation=='datetime' || $operation=='upload' || $operation=='desktop' || $operation=='at' ) { ?>class="active"<?php } ?>>
<a href="<?php echo BASESCRIPT;?>?mod=<?php echo MOD_NAME;?>&operation=basic">基本设置</a>
</li>

<li <?php if($operation=='access' || $operation=='sec' || $operation=='qqlogin' || $operation=='loginset' ) { ?>class="active"<?php } ?>>
<a href="<?php echo BASESCRIPT;?>?mod=<?php echo MOD_NAME;?>&operation=access">登录设置</a>
</li>
<li <?php if($operation=='space') { ?>class="active"<?php } ?>>
<a href="<?php echo BASESCRIPT;?>?mod=<?php echo MOD_NAME;?>&operation=space">空间设置</a>
</li>
<li <?php if($operation=='mail' || $op=='mailcheck' ) { ?>class="active"<?php } ?>>
<a href="<?php echo BASESCRIPT;?>?mod=<?php echo MOD_NAME;?>&operation=mail">邮件设置</a>
</li>
<li <?php if($operation=='smiley' || $op=='smiley' ) { ?>class="active"<?php } ?>>
<a href="<?php echo BASESCRIPT;?>?mod=<?php echo MOD_NAME;?>&operation=smiley">表情管理</a>
</li>
<li <?php if($operation=='permgroup') { ?>class="active"<?php } ?>>
<a href="<?php echo BASESCRIPT;?>?mod=<?php echo MOD_NAME;?>&operation=permgroup">权限包设置</a>
</li>
<li <?php if($operation=='censor' ) { ?>class="active"<?php } ?>>
<a href="<?php echo BASESCRIPT;?>?mod=<?php echo MOD_NAME;?>&operation=censor">敏感词管理</a>
</li>
<!--<li <?php if($operation=='qywechat' || $op=='assistant' || $op=='wxsyn' ) { ?>class="active"<?php } ?>>
<a href="<?php echo BASESCRIPT;?>?mod=<?php echo MOD_NAME;?>&operation=qywechat">微信企业号</a>
</li>-->
</ul></div>
<div class="left-drager">
<div class="left-drager-op">
<div class="left-drager-sub"></div>
</div>
</div>

<div class="bs-main-container  clearfix">
<div class="main-header clearfix">
<ul class="nav navbar-nav nav-pills-bottomguide">
<li> <a href="<?php echo BASESCRIPT;?>?mod=setting&operation=mail">设置</a> </li>
        <li class="active"> <a href="<?php echo BASESCRIPT;?>?mod=setting&op=mailcheck">检测</a> </li>
</ul>
</div>
<div class="main-content">

<form id="cpform" action="<?php echo BASESCRIPT;?>?mod=setting&op=mailcheck" class="form-horizontal form-horizontal-left" autocomplete="off" method="post" name="cpform" target="mailcheckiframe">
<input type="hidden" value="<?php echo FORMHASH;?>" name="formhash">
<input type="hidden" value="true" name="mailchecksubmit">
<div class="form-group">
<label class="control-label" style="">测试发件人:</label>
<input type="text" class="form-control" name="test_from" autocomplete="off" value="">
</div>
<div class="form-group">
<label class="control-label">测试收件人:</label>
<textarea type="textarea" class="form-control" name="test_to" autocomplete="off"></textarea>
<span class="help-block text-muted">如果要测试包含用户名的邮件地址，格式为“username &lt;user@domain.com&gt;” 。多个邮件地址用逗号分隔</span>
</div>
<div class="form-group">
<label class="control-label"></label>
<input class="btn btn-primary" id="submit_mailchecksubmit" name="mailchecksubmit" value="检测邮件发送设置" type="submit">
<iframe style="display: none" name="mailcheckiframe"> </iframe>
</div>
</form>

</div>
</div>
</div>
<script type="text/javascript">
jQuery('.left-drager').leftDrager_layout();
</script><?php output();?><?php updatesession();?><?php if(debuginfo()) { ?>
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