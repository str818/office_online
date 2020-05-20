<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:9:{s:67:"/opt/lampp/htdocs/dzzoffice//./admin/member/template/profileset.htm";i:1585620673;s:83:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_simple_start.htm";i:1585620676;s:81:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_simple_end.htm";i:1585620676;s:77:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/commer_header.htm";i:1585620676;s:61:"/opt/lampp/htdocs/dzzoffice//./admin/template/header_left.htm";i:1585620673;s:0:"";b:0;s:76:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_right.htm";i:1585620676;s:61:"/opt/lampp/htdocs/dzzoffice//./admin/member/template/left.htm";i:1585620673;s:77:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/footer_simple.htm";i:1585620676;}*/?>
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
<script type="text/javascript" src="./data/template/admin_member_profileset_header_zh-cn.js" ></script><script type="text/javascript" src="static/js/header.js?<?php echo VERHASH;?>" ></script>
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
<script type="text/javascript" src="static/js/jquery.leftDrager.js?<?php echo VERHASH;?>" ></script>
<style>
html,
body {
overflow: hidden;
background: #FBFBFB;
}

.bs-left-container {
width: 150px;
top: 0;
}

.bs-main-container {
margin-left: 150px;
overflow: hidden;
padding:0;
}

.form-horizontal-left .radio-inline {
margin: 0;
}

.itemContainer {
overflow: auto;
}
#table-header th:nth-child(6),#table-header th:nth-child(7){
display:none;
}
.itemContainer td:nth-child(6),.itemContainer td:nth-child(7){
display:none;
}
</style><script type="text/javascript" src="./data/template/admin_member_profileset_common_zh-cn.js" ></script><script type="text/javascript" src="static/js/common.js?<?php echo VERHASH;?>" ></script>
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
        <a href="<?php echo MOD_URL;?>">用户资料管理</a>
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
</script><div class="bs-container clearfix" style="padding-top:0px;">
<div class="bs-left-container  clearfix"><ul class="nav nav-pills nav-stacked nav-pills-leftguide">

<?php if($_G['adminid']==1 || $_G['member']['grid']==5) { ?>
<li <?php if($op=='verify' && !$vid) { ?>class="active"<?php } ?>>
<a href="<?php echo MOD_URL;?>&op=verify">资料审核</a>
</li>
<?php } if($_G['adminid']==1) { ?>
<li <?php if($op=='profileset' ) { ?>class="active"<?php } ?>>
<a href="<?php echo MOD_URL;?>&op=profileset">资料设置</a>
</li>
<li <?php if($op=='verifyset' ) { ?>class="active"<?php } ?>>
<a href="<?php echo MOD_URL;?>&op=verifyset">认证设置</a>
</li>
<?php } if(is_array($_G['setting']['verify'])) foreach($_G['setting']['verify'] as $key => $value) { if($value['available']) { if($key==1 && ($_G['adminid']==1 || $_G['member']['grid']==4)) { ?>
<li <?php if($op=='verify' && $vid==$key) { ?>class="active"<?php } ?>>
<a href="<?php echo MOD_URL;?>&op=verify&vid=<?php echo $key;?>"><?php echo $value['title'];?></a>
</li>
<?php } elseif($_G['adminid']==1) { ?>
<li <?php if($op=='verify' && $vid==$key) { ?>class="active"<?php } ?>>
<a href="<?php echo MOD_URL;?>&op=verify&vid=<?php echo $key;?>"><?php echo $value['title'];?></a>
</li>
<?php } } } ?>
</ul></div>
<div class="left-drager">
<div class="left-drager-op">
</div>
</div>

<div class="bs-main-container  clearfix" >
<div class="main-header">
<ul class="nav nav-pills nav-pills-bottomguide">
<li <?php if(!$fieldid) { ?>class="active"<?php } ?>>
<a href="<?php echo MOD_URL;?>&op=profileset">资料项列表</a>
</li>
<?php if($fieldid) { ?>
<li class="active">
<a href="<?php echo MOD_URL;?>&op=profileset&fieldid=<?php echo $fieldid;?>">资料项编辑</a>
</li>
<?php } ?>
</ul>
</div>
<table id="table-header" class="table" style="margin:0;font-size:12px;">

<thead>
<th width="60">排序</th>
<th width="120">标识符</th>
<th>名称</th>
<th width="60">启用</th>
<th width="60">资料页显示</th>
<th width="60">名片中显示</th>
<th width="60">注册页显示</th>
<th width="120">操作</th>
</thead>

</table>
<div class="itemContainer">
<div class="main-content">
<form id="cpform" action="<?php echo MOD_URL;?>&op=profileset" method="post" name="cpform">
<input type="hidden" value="<?php echo FORMHASH;?>" name="formhash">
<input type="hidden" value="true" name="ordersubmit">
<table class="table table-hover"><?php if(is_array($list)) foreach($list as $fieldid => $value) { ?><tr>

<td width="60"><input type="text" class="form-control input-sm" name="displayorder[<?php echo $fieldid;?>]" value="<?php echo $value['displayorder'];?>"></td>
<td class="fieldid <?php if(!$value['customable']) { ?>gray<?php } ?>" width="120"><?php echo $fieldid;?></td>
<td><?php echo $value['title'];?> </td>
<td width="60"><input type="checkbox" class="checkbox" name="available[<?php echo $fieldid;?>]" <?php if($value['available']) { ?>checked="checked"<?php } ?>value="1"></td>
<td width="60"><input type="checkbox" class="checkbox" name="invisible[<?php echo $fieldid;?>]" <?php if(!$value['invisible']) { ?>checked="checked"<?php } ?>value="1"></td>
<td width="60"><input type="checkbox" class="checkbox" name="showincard[<?php echo $fieldid;?>]" <?php if($value['showincard']) { ?>checked="checked"<?php } ?>value="1"></td>
<td width="60"><input type="checkbox" class="checkbox" name="showinregister[<?php echo $fieldid;?>]" <?php if($value['showinregister']) { ?>checked="checked"<?php } ?>value="1"></td>
<td width="100">
<a href="<?php echo MOD_URL;?>&op=profileset&fieldid=<?php echo $fieldid;?>" class="ibtn glyphicon glyphicon-edit " title="编辑"></a>
<?php if($value['customable']) { ?>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="<?php echo MOD_URL;?>&op=profileset&do=delete&fieldid=<?php echo $fieldid;?>" onclick="return confirm('确定要删除此资料项？此操作无法恢复')" class="ibtn glyphicon glyphicon-trash " title="删除"></a>
<?php } ?>
</td>
</tr>
<?php } ?>
<tr>
<td colspan="20"><button type="button" class="btn btn-default btn-width" onclick="addRow(this)"><i class="glyphicon glyphicon-plus"></i>添加资料项</button></td>
</tr>

<tr>
<td colspan="20"><input class="btn btn-primary btn-width" type="submit" value="保存设置" /></td>
</tr>
</table>

</form>
</div>
</div>
</div>
</div>
<script type="text/javascript">
jQuery('.left-drager').leftDrager_layout(initHeight);
var url = '<?php echo MOD_URL;?>';

jQuery(document).ready(function(e) {
jQuery('input').iCheck({
checkboxClass: 'icheckbox_minimal-blue',
radioClass: 'iradio_minimal-blue',
});
jQuery('input').on('ifChecked', function(e) {
jQuery(this).trigger('click');
});

jQuery(document).on('blur', 'input[required]', function() {
var self = this;
var val = this.value;
if(this.value == '') {
jQuery(this).addClass('input-error');
} else if(jQuery(this).hasClass('fieldid')) {
jQuery('.fieldid').not(this).each(function() {
if(jQuery(this).is('td') && this.innerHTML == val) {
jQuery(self).addClass('input-error');
showmessage('标志符已经被使用，请更换', 'danger', 3000, 1);
return;
} else if(jQuery(this).is('input') && this.value == val) {
jQuery(self).addClass('input-error');
showmessage('标志符已经被使用，请更换', 'danger', 3000, 1);
return;
}
});
} else {
jQuery(this).removeClass('input-error');
}
});
jQuery(document).on('change', 'input[required]', function() {
if(this.value == '') { jQuery(this).addClass('input-error') } else { jQuery(this).removeClass('input-error'); }
});
});

function initHeight() {
jQuery('.itemContainer').css('height', document.documentElement.clientHeight-jQuery('.navbar').outerHeight(true)- jQuery('.main-header').outerHeight(true) - jQuery('#table-header').outerHeight(true));
}

function addRow(obj) {
var html = '<tr class="add">' +
'<td  width="60"><input type="text" class="form-control input-sm" name="add[displayorder][]" value="0" ></td>' +
'<td  width="120"><input type="text" class="form-control input-sm fieldid" name="add[fieldid][]" value="" placeholder="不能重复" required="true"></td>' +
'<td ><input type="text" class="form-control input-sm" name="add[title][]" value="" style="max-width:150px;" placeholder="资料项名称"></td>' +
'<td width="60"><input type="checkbox" class="checkbox" name="add[available][]" value="1"></td>' +
'<td width="60"><input type="checkbox" class="checkbox" name="add[invisible][]" value="1"></td>' +
'<td width="60"><input type="checkbox" class="checkbox" name="add[showincard][]" value="1"></td>' +
'<td width="60"><input type="checkbox" class="checkbox" name="add[showinregister][]" value="1"></td>' +
'<td width="120"><a href="javascript:;" onclick="jQuery(this).parent().parent().remove()"><i class="ibtn glyphicon glyphicon-trash"></i></a></td>';
jQuery(html).insertBefore(jQuery(obj).parent().parent());
jQuery('.add input').iCheck({
checkboxClass: 'icheckbox_minimal-blue',
radioClass: 'iradio_minimal-blue',
});

}
</script>
<script src="static/bootstrap/js/bootstrap.min.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="static/icheck/icheck.min.js?<?php echo VERHASH;?>" ></script><?php output();?><?php updatesession();?><?php if(debuginfo()) { ?>
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