<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:9:{s:64:"/opt/lampp/htdocs/dzzoffice//./admin/setting/template/smiley.htm";i:1585620673;s:83:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_simple_start.htm";i:1585620676;s:81:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_simple_end.htm";i:1585620676;s:77:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/commer_header.htm";i:1585620676;s:69:"/opt/lampp/htdocs/dzzoffice//./admin/setting/template/header_left.htm";i:1585620673;s:0:"";b:0;s:76:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_right.htm";i:1585620676;s:62:"/opt/lampp/htdocs/dzzoffice//./admin/setting/template/left.htm";i:1585620673;s:77:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/footer_simple.htm";i:1585620676;}*/?>
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
<script type="text/javascript" src="./data/template/admin_setting_smiley_header_zh-cn.js" ></script><script type="text/javascript" src="static/js/header.js?<?php echo VERHASH;?>" ></script>
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
<script src="admin/scripts/admin.js?<?php echo VERHASH;?>" ></script><script type="text/javascript" src="./data/template/admin_setting_smiley_common_zh-cn.js" ></script><script type="text/javascript" src="static/js/common.js?<?php echo VERHASH;?>" ></script>
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
    padding: 20px 0;
}
.table>tbody>tr>td:nth-child(1), .table>tbody>tr>th:nth-child(1), .table>tfoot>tr>td:nth-child(1), .table>tfoot>tr>th:nth-child(1), .table>thead>tr>td:nth-child(1), .table>thead>tr>th:nth-child(1) {
    padding: 8px 0px;
}*/
</style>
<div class="bs-container clearfix">
  <div class="bs-left-container  clearfix"> 
    <ul class="nav-stacked">
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
</ul> 
  </div>
  <div class="left-drager">
    <div class="left-drager-op">
      <div class="left-drager-sub"></div>
    </div>
  </div>
  <div class="bs-main-container  clearfix" style="min-width:350px">
    <div class="main-header clearfix">
<ul class="nav navbar-nav nav-pills-bottomguide">
<li> <a href="<?php echo BASESCRIPT;?>?mod=setting&operation=smiley">表情设置</a> </li>
        	<li class="active"> <a href="<?php echo BASESCRIPT;?>?mod=setting&op=smiley">表情分类</a> </li>
</ul>
</div>
    <div class="main-content clearfix table-responsive" style="border-top:1px solid #FFF">
      <form id="appform" name="appform" action="<?php echo BASESCRIPT;?>?mod=setting&op=smiley" method="post">
        <input type="hidden" name="smileysubmit" value="true" />
        <input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
        <table class="table table-hover">
          <thead>
          	<th width="50">&nbsp;</th>
            <th>排序</th>
            <th>启用</th>
            <th>分类</th>
            <th>目录</th>
            <th>数量</th>
            <th></th>
           </thead>
          <?php if(is_array($list)) foreach($list as $value) { ?>          <tr>
            <td align="center"><label><input type="checkbox"  name="delete[]" value="<?php echo $value['typeid'];?>" <?php if($value['smiliesnum']) { ?>disabled<?php } ?> /></label></td>
            <td><input type="text" class="form-control" name="displayordernew[<?php echo $value['typeid'];?>]" value="<?php echo $value['displayorder'];?>" style="width:45px;" /></td>
            <td><label><input type="checkbox"  name="availablenew[<?php echo $value['typeid'];?>]" value="1" <?php if($value['available']) { ?>checked<?php } ?> /></label></td>
            <td><input type="text" class="form-control " name="namenew[<?php echo $value['typeid'];?>]" value="<?php echo $value['name'];?>" /></td>
            <td valign="middle">./static/image/smiley/<?php echo $value['directory'];?></td>
            <td><?php echo $value['smiliesnum'];?>
              <input type="hidden" name="smiliesnum[<?php echo $value['typeid'];?>]" value="<?php echo $value['smiliesnum'];?>" /></td>
            <td valign="middle"><a href="<?php echo ADMINSCRIPT;?>?mod=setting&op=smiley&operation=update&id=<?php echo $value['typeid'];?>" class="" onclick="return confirm('此操作将自动搜索 static/image/smiley/<?php echo $value['directory'];?> 目录 目录下尚未启用的表情，并自动添加到表情分类“<?php echo $value['name'];?>”，请确认！')">更新</a>&nbsp;&nbsp; <a href="<?php echo ADMINSCRIPT;?>?mod=setting&op=smiley&operation=edit&id=<?php echo $value['typeid'];?>" class="">详细</a></td>
          </tr>
          <?php } ?> 
          <?php if($list_no) { ?> 
          <?php if(is_array($list_no)) foreach($list_no as $key => $value1) { ?>          <tr>
            <td align="center">新增</td>
            <td><input type="text" class="form-control " style="width:45px" name="newdisplayorder[<?php echo $key;?>]" value="<?php echo $value1['displayorder'];?>" /></td>
            <td><label><input type="checkbox"  name="newavailable[<?php echo $key;?>]" value="1" <?php if($value1['available']) { ?>checked<?php } ?>></label></td>
            <td><input type="text" class="form-control " name="newname[<?php echo $key;?>]" value="" /></td>
            <td>./static/image/smiley/<?php echo $value1['entry'];?>
              <input type="hidden" name="newdirectory[<?php echo $key;?>]" value="<?php echo $value1['entry'];?>"></td>
            <td><?php echo $value1['smnums'];?>
              <input type="hidden" name="smnums[<?php echo $key;?>]" value="<?php echo $value1['smnums'];?>" /></td>
            <td><?php echo $value1['smilies'];?></td>
          </tr>
          <?php } ?> 
          <?php } else { ?>
          <tr>
            <td align="center">新增</td>
            <td colspan="15"><span class="help-inline">没有找到尚未使用的表情分类，您可以通过 FTP 在 static/image/smiley/ 目录中创建表情分类目录并上传表情图片，然后刷新本页。表情分类目录名只允许数字、26 个英文字母及下划线</span></td>
          </tr>
          <?php } ?>
          <thead>
          <th colspan="15" valign="middle"  style="border:none"><label for="chkall" class="checkbox-inline">
                <input type="checkbox" name="chkall" id="chkall"  onclick="checkAll('prefix', this.form, 'delete')">
                &nbsp;删？</label>
              &nbsp;&nbsp;
              <input type="submit" class="btn btn-primary" value="提交" />
          </th>
          </thead>
        </table>
      </form>
      <div class="tip" style="margin: 20px;color: #444;text-shadow: 1px 1px 1px #FFF;line-height: 1.8;">
        <div class="alert alert-warning">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <h5>提示信息</h5>
          <ul>
            <li>表情导出包含表情分类信息及表情代码信息，表情图片文件请通过 FTP 下载。</li>
						<li>请不要同时启用过多的表情分类，并控制好表情分类的名称长度，以免表情窗口无法完全显示所有表情分类。</li>
						<li>删除表情分类请先删除该分类下所有表情。</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
jQuery('.left-drager').leftDrager_layout();
</script> <?php output();?><?php updatesession();?><?php if(debuginfo()) { ?>
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