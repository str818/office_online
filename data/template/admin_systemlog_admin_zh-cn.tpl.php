<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:9:{s:65:"/opt/lampp/htdocs/dzzoffice//./admin/systemlog/template/admin.htm";i:1585620673;s:83:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_simple_start.htm";i:1585620676;s:81:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_simple_end.htm";i:1585620676;s:77:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/commer_header.htm";i:1585620676;s:61:"/opt/lampp/htdocs/dzzoffice//./admin/template/header_left.htm";i:1585620673;s:0:"";b:0;s:76:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_right.htm";i:1585620676;s:64:"/opt/lampp/htdocs/dzzoffice//./admin/systemlog/template/left.htm";i:1585620673;s:77:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/footer_simple.htm";i:1585620676;}*/?>
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
<script type="text/javascript" src="./data/template/admin_systemlog_admin_header_zh-cn.js" ></script><script type="text/javascript" src="static/js/header.js?<?php echo VERHASH;?>" ></script>
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
<link href="static/icheck/skins/minimal/blue.css?<?php echo VERHASH;?>" rel="stylesheet" media="all">
<link rel="stylesheet" href="static/css/checkbox.css">
<script type="text/javascript" src="static/js/jquery.leftDrager.js?<?php echo VERHASH;?>" ></script>
<style>
html,  body {
overflow: hidden;
background: #FFF;
color: #4B4B4B;
}
.form-horizontal-left .radio-inline {
padding: 5px 20px;
margin: 0;
}
.loginset-template{
width: 100px;
height: 100px;
overflow: hidden;
float: left;
margin-right: 10px;
display: block;
position: relative;
}
.loginset-template .loginset-template-icon{
    width: 20px;
    height: 20px;
    border: 1px solid #AAB479;
    position: absolute;
    right: 1px;
    top: 1px;
    color: #DD4B39;
    font-size: 15px;
    display: none;
}
.loginset-template:hover  .loginset-template-icon{
display: block;
}
.loginset-template:hover  .loginset-template-icon>span{
display: none;
}
.loginset-template .loginset-template-icon1{
    display: block!important;
}
.loginset-template .loginset-template-icon1>span{
    display: block!important;
}
#cpform{
margin-top: 15px;
}
</style><script type="text/javascript" src="./data/template/admin_systemlog_admin_common_zh-cn.js" ></script><script type="text/javascript" src="static/js/common.js?<?php echo VERHASH;?>" ></script>
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
        <a href="<?php echo MOD_URL;?>">系统日志</a>
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
</script><div class="bs-container clearfix">
  <div class="bs-left-container  clearfix">  <ul class="nav-stacked">
    <li <?php if($_GET['op']!="admin" ) { ?>  class="active" <?php } ?>><a hidefocus="true" href="<?php echo MOD_URL;?>">日志列表</a></li> 
    <li <?php if($_GET['op']=="admin" ) { ?>  class="active" <?php } ?>><a hidefocus="true" href="<?php echo MOD_URL;?>&op=admin">设置</a></li> 
</ul> 
  </div>
  <div class="left-drager">
    <div class="left-drager-op">
      <div class="left-drager-sub"></div>
    </div>
  </div>
  <div class="bs-main-container  clearfix">  
 	<div class="main-title clearfix"> 
</div>

    <div class="main-content">  
    <form id="cpform" action="<?php echo MOD_URL;?>&op=admin" class="form-horizontal-left" method="post" name="cpform">
<input type="hidden" value="<?php echo FORMHASH;?>" name="formhash">
<input type="hidden" value="basic" name="operation">
       
<dl>
<dt>日志开关:</dt>
<dd class="clearfix">
  <label class="radio-inline "><input type="radio" name="systemlog_open" value="1"<?php if($_G['setting']['systemlog_open']==1) { ?>checked<?php } ?>  onclick="document.getElementById('hidden1').style.display='block';">启用</label>
  <label class="radio radio-inline"><input type="radio" name="systemlog_open" value="0"<?php if($_G['setting']['systemlog_open']==0) { ?>checked<?php } ?> onclick="document.getElementById('hidden1').style.display='none';">禁用</label>
</dd>
</dl>
<dl id="hidden1">
<dt>日志类型:</dt>
<dd class="clearfix">
 
<table id="systemlogtable" class="table text-center" style="width: auto;margin-bottom:0; <?php if($_G['setting']['systemlog_open']==0) { ?>display:none<?php } ?>">
  <thead>
<tr>
<th>日志类型名称</th>
<th>日志标识</th>
<th>日志开关</th>
<th>&nbsp;</th>
</tr>
  </thead>
  <?php $i=0;?><?php if(is_array($systemlog_setting)) foreach($systemlog_setting as $mark => $info) { ?> 
  <tr> 
<td>
<input type="hidden" name="settingnew[issystem][<?php echo $i;?>]" value="<?php echo $info['issystem'];?>" />
<input class="form-control" style="width:120px;" <?php if($info['issystem']==1) { ?>readonly="readonly"<?php } ?> type="text" name="settingnew[title][<?php echo $i;?>]" value="<?php echo $info['title'];?>" />
</td>
<td><input class="form-control" style="width:100px;" <?php if($info['issystem']==1) { ?>readonly="readonly"<?php } ?> type="text" name="settingnew[mark][<?php echo $i;?>]" value="<?php echo $mark;?>" /></td>
<td><input type="checkbox" name="settingnew[is_open][<?php echo $i;?>]" value="1" <?php if($info['is_open']==1) { ?>checked<?php } ?>  /></td>
<td>
<?php if($info['issystem']!=1) { ?>
<a href="javascript:;" class="col-xs-2 img_delete" onclick="deletesystem(this);"><span class="dzz dzz-delete" style="font-size:22px;"></span></a>
<?php } ?> 
</td>
  </tr>
  <?php $i++;?>  <?php } ?> 
  <tr>
<td colspan="4" align="left"><a href="javascript:;" onclick="addsystemtype(this);"><i class="glyphicon glyphicon-plus"></i>添加</a></td>
  </tr>
</table>
</dd>
</dl>
<dl>
   
  <dd>
  <input class="btn btn-primary" id="submit_editsubmit" name="settingsubmit" value="保存更改" type="submit">
  </dd>
</dl>

    </form> 
  </div>
</div>
</div>
<script type="text/javascript">
jQuery('.left-drager').leftDrager_layout();
jQuery(document).ready(function(e) {
jQuery('input').iCheck({
checkboxClass: 'icheckbox_minimal-blue',
radioClass: 'iradio_minimal-blue',
});
jQuery('input').on('ifChecked', function(e) {
jQuery(this).trigger('click');
});
 
jQuery('input[required]').on('blur', function() {
if(this.value == '') { jQuery(this).addClass('input-error') } else { jQuery(this).removeClass('input-error'); }
});
});
function addsystemtype( obj ){
var num=jQuery("#systemlogtable").find("tr").length-1; 
var html='<tr><td><input  type="hidden" name="settingnew[issystem]['+num+']" value="0" /><input class="form-control" style="width:120px;" type="text" name="settingnew[title]['+num+']" value="" /></td><td><input class="form-control" style="width:100px;" type="text" name="settingnew[mark]['+num+']" value="" /></td><td><input type="checkbox" name="settingnew[is_open]['+num+']" value="1" checked /></td><td><a class="col-xs-2 img_delete" onclick="deletesystem(this);"  href="javascript:;"><span class="dzz dzz-delete" style="font-size:22px;"></span></a></td></tr>';
jQuery(obj).parents("tr").before(html);

jQuery("#systemlogtable").iCheck({
checkboxClass: 'icheckbox_minimal-blue',
radioClass: 'iradio_minimal-blue',
});
return false;
}

function deletesystem( obj ){
jQuery(obj).parents("tr").remove();
return false;
}
</script> 
<script src="static/bootstrap/js/bootstrap.min.js?<?php echo VERHASH;?>" ></script> 
<script type="text/javascript" src="static/icheck/icheck.min.js?<?php echo VERHASH;?>" ></script> <?php output();?><?php updatesession();?><?php if(debuginfo()) { ?>
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