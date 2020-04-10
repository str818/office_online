<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:9:{s:64:"/opt/lampp/htdocs/dzzoffice//./admin/system/template/upgrade.htm";i:1585620673;s:83:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_simple_start.htm";i:1585620676;s:81:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_simple_end.htm";i:1585620676;s:77:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/commer_header.htm";i:1585620676;s:61:"/opt/lampp/htdocs/dzzoffice//./admin/template/header_left.htm";i:1585620673;s:0:"";b:0;s:76:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_right.htm";i:1585620676;s:61:"/opt/lampp/htdocs/dzzoffice//./admin/system/template/left.htm";i:1585620673;s:77:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/footer_simple.htm";i:1585620676;}*/?>
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
<script type="text/javascript" src="./data/template/admin_system_upgrade_header_zh-cn.js" ></script><script type="text/javascript" src="static/js/header.js?<?php echo VERHASH;?>" ></script>
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
<script src="admin/scripts/admin.js?<?php echo VERHASH;?>" ></script>
<style>

.progress.active .progress-bar {
-webkit-animation: none;
animation: none;
transition: none;
-webkit-box-shadow: none;
box-shadow: none;
}
</style><script type="text/javascript" src="./data/template/admin_system_upgrade_common_zh-cn.js" ></script><script type="text/javascript" src="static/js/common.js?<?php echo VERHASH;?>" ></script>
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
        <a href="<?php echo MOD_URL;?>">系统工具</a>
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
<div class="bs-left-container  clearfix"><?php $oparr=array('updatecache','database','cron','systemupgrade' );?><?php $leftmenu=array();?><?php foreach($oparr as $key => $value){?><?php $leftmenu[$value]=array('title'=>lang($value),'active'=>'');?><?php if($value==$op) $leftmenu[$value]['active']='class="active"';?><?php }?><ul class="nav-stacked">
   <?php if(is_array($leftmenu)) foreach($leftmenu as $key => $value) { ?>        <li <?php echo $value['active'];?>><a hidefocus="true" href="<?php echo MOD_URL;?>&op=<?php echo $key;?>"><?php echo $value['title'];?></a></li>
    <?php } ?> 
</ul></div>
<div class="left-drager">

</div>

<div class="bs-main-container  clearfix">

<?php if($operation == 'patch' || $operation == 'cross') { ?>		
<div class="main-header">
<div class="clearfix" style="line-height:40px;padding:0 10px;font-size:12px;">
<strong style="font-size:14px;">在线升级</strong><?php if(is_array($steplang)) foreach($steplang as $key => $value) { if($key>0 && $key<=5) { ?>
<span class="text-muted" <?php if($key==$step) { ?>style="color:green"<?php } ?>><?php echo $key;?>.<?php echo $value;?></span>
<?php } } ?>				
</div>
</div>
<?php } if($operation=='check') { ?>
<div class="main-content" style="border-top:1px solid #FFF">
<?php if($msg) { ?>
<div id="step4" style="padding:20px;height:450px">
<div class="alert alert-warning text-center">
<?php echo $msg;?>
</div>
</div>
<?php } else { ?>
<div style="padding:20px;">
<div class="text-center" style="width:300px;margin:0 auto">
<p style="margin:20px 0;">正在检测新的升级版本</p>
<div class="progress progress-striped active" style="border:1px solid #5bc0de">
<div class="progress-bar progress-bar-info " role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%"><span class="sr-only">100% Complete</span></div>
</div>

</div>
<script type="text/javascript">
jQuery('.progress-bar').animate({ width: '100%' }, 3000, function() {
window.location.href = '<?php echo MOD_URL;?>&op=systemupgrade&operation=check&checking=1';
});
</script>
</div>

<?php } ?>
</div>
<?php } elseif($operation=='showupgrade') { ?>
<div class="main-content" style="border-top:1px solid #FFF">
<?php if($msg) { ?>
<div id="step4" style="padding:20px;height:450px">
<div class="alert alert-warning">
<?php echo $msg;?>
</div>
</div>
<?php } else { ?>
<table class="table table-hover">
<thead>
<th colspan="5">检测到有新的版本可供升级，您可以选择自动升级或者下载安装包手动升级。</th>
</thead><?php if(is_array($list)) foreach($list as $value) { ?><tr>
<td><?php echo $value['title'];?></td>
<td><?php echo $value['btn1'];?></td>
<?php if($value['official']) { ?>
<td><?php echo $value['official'];?></td>
<?php } ?>
</tr>
<?php } ?>

</table>
<?php } ?>
</div>
<?php } elseif($operation=='patch' || $operation=='cross' ) { ?>

<div class="main-content" style="border-top:1px solid #FFF;">
<?php if(!$_G['setting']['bbclosed']) { ?>
<div style="padding:20px;height:450px">
<div class="alert alert-warning text-center">
<?php echo $msg;?>
</div>
</div>
<?php } elseif($step==1) { ?>
<table class="table table-hover">
<thead>
<th colspan="5">待更新文件列表</th>
</thead><?php if(is_array($updatefilelist)) foreach($updatefilelist as $value) { ?><tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-file"></i> <?php echo $value;?></td>
</tr>
<?php } ?>
<thead>
<th colspan="5">&nbsp;<b>文件存放目录:</b>  ./data/update/dzzoffice<?php echo $version;?></th>
</thead>
<thead>
<th colspan="5">&nbsp;<input type="button" class="btn btn-primary" onclick="window.location.href='<?php echo $linkurl;?>'" value="下载更新"><?php echo upgradeinformation(0)?></th>
</thead>

</table>

<?php } elseif($step==2) { ?>
<div style="padding:20px;"><?php echo $msg;?></div>

<?php } elseif($step==3) { if($msg) { ?>
<div id="step4" style="padding:20px;">
<div class="alert alert-warning text-center">
<?php echo $msg;?>
</div>
</div>
<?php } else { ?>
<table class="table table-hover">
<thead>
<th colspan="5">与本地文件的比对结果，状态 <span style="color:red;">差异</span> 表示该本地文件被修改过<br />注意：如果您的源文件是通过 <span style="color:red;">非二进制</span> 方式上传到服务器，可能导致对比结果不准确</th>
</thead><?php if(is_array($updatefilelist)) foreach($updatefilelist as $v) { if(isset($ignorelist[$v])) { } elseif(isset($modifylist[$v])) { ?>
<tr>
<td class="text-danger">&nbsp;&nbsp;&nbsp;&nbsp;差异 &nbsp;<i class="glyphicon glyphicon-exclamation-sign"></i> <?php echo $v;?></td>
</tr>
<?php } elseif(isset($showlist[$v])) { ?>
<tr>
<td class="text-success">&nbsp;&nbsp;&nbsp;&nbsp;正常 &nbsp;<i class="glyphicon glyphicon-ok"></i> <?php echo $v;?></td>
</tr>
<?php } elseif(isset($newlist[$v])) { ?>
<tr>
<td class="text-info">&nbsp;&nbsp;&nbsp;&nbsp;新增 &nbsp;<i class="glyphicon glyphicon-plus"></i> <?php echo $v;?></td>
</tr>
<?php } } ?>
<thead>
<th colspan="5">升级文件已经全部下载完毕，并存储到服务器目录:  ./data/update/dzzoffice<?php echo $version;?></th>
</thead>
<thead>
<th colspan="5">&nbsp;继续升级，将会把现有的旧文件备份到目录:  ./data/back/dzzoffice<?php echo CORE_VERSION;?> ，并用新的文件进行覆盖 </th>
</thead>
<thead>
<th colspan="5">&nbsp;<input type="button" class="btn btn-primary" onclick="window.location.href='<?php echo $linkurl;?>';" value="<?php if(!empty($modifylist)) { ?>强制升级<?php } else { ?>正常升级<?php } ?>" /> <?php echo upgradeinformation(0)?></th>
</thead>

</table>
<?php } } elseif($step==4) { if($msg) { ?>
<div id="step4" style="padding:20px;height:450px">
<div class="alert alert-warning text-center">
<?php echo $msg;?>
</div>
</div>
<?php } elseif($_GET['siteftpsetting']) { ?>
<form name="aliform" class="form-horizontal form-horizontal-left" action="<?php echo $action;?>" method="post" style="padding:20px;">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
<p style="padding-left:20px;font-weight:bold;font-size:16px;padding-bottom:20px;">站点 FTP 设置</p>
<div class="form-group">
<label class="control-label">FTP 服务器地址</label>
<input type="text" class="form-control required" name="siteftp[host]" value="" placeholder="主机IP地址">
<span class="help-inline">可以是 FTP 服务器的 IP 地址或域名</span>
</div>
<div class="form-group">
<label class="control-label">FTP 服务器端口</label>
<input type="text" class="form-control required" name="siteftp[port]" value="21" placeholder="端口">
<span class="help-inline">默认为 21</span>
</div>
<div class="form-group">
<label class="control-label">FTP 帐号</label>
<input type="text" class="form-control required" name="siteftp[username]" value="" placeholder="FTP帐号用户名称">
<span class="help-inline">该帐号必需具有以下权限：读取文件、写入文件、删除文件、创建目录、子目录继承</span>
</div>
<div class="form-group">
<label class="control-label">FTP 密码</label>
<input type="password" class="form-control required" name="siteftp[password]" value="" placeholder="FTP帐号用户密码">

</div>
<!--<div class="form-group">
                    <label class="control-label">编码</label>
                      <select class="form-control" name="siteftp[charset]">
                      <option value="GBK" selected="selected">GBK</option>
                      <option value="UTF-8">UTF-8</option>
                      <option value="BIG5">BIG5</option>
                      </select>
                    <span class="help-inline">根据FTP服务器的编码设置，不一致会导致乱码</span>
                    
                  </div>-->

<div class="form-group">
<label class="control-label">站点根目录</label>
<input type="text" class="form-control required" name="siteftp[attachdir]" value="">
<span class="help-inline">站点根目录的绝对路径或相对于 FTP 主目录的相对路径，结尾不要加斜杠“/”，“.”表示 FTP 主目录</span>
</div>
<div class="form-group">
<label class="control-label"></label>
<label class="checkbox-inline" style="width:180px;"><input type="checkbox" name="siteftp[pasv]" value="1">使用被动模式</label>
<span class="help-inline">一般情况下非被动模式即可，如果存在上传失败问题，可尝试打开此设置</span>
</div>
<div class="form-group">
<label class="control-label"></label>
<label class="checkbox-inline" style="width:180px;"><input type="checkbox" name="siteftp[ssl]" value="1">启用安全链接</label>
<span class="help-inline">注意：FTP 服务器必需开启了 SSL</span>
</div>
<div class="form-group">
<label class="control-label"></label>
<input type="submit" class="btn btn-primary" style="padding:6px 25px" value="确定">
</div>
</form>
<?php } } elseif($step==5) { ?>
<div style="padding:20px;">
<div class="alert alert-success text-center">
<?php echo $msg;?>
</div>
</div>
<?php } ?>
</div>

<?php } ?>

</div>
</div>
<script type="text/javascript">
jQuery('.left-drager').leftDrager_layout();

function createIframe(src) {
document.getElementById('step4').innerHTML = '<iframe  marginheight="0" marginwidth="0" allowtransparency="true" frameborder="0"  src="' + src + '" style="width:100%;height:100%;"></iframe>';
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