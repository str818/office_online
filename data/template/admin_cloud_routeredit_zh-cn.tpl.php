<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:9:{s:66:"/opt/lampp/htdocs/dzzoffice//./admin/cloud/template/routeredit.htm";i:1585620672;s:83:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_simple_start.htm";i:1585620676;s:81:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_simple_end.htm";i:1585620676;s:77:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/commer_header.htm";i:1585620676;s:67:"/opt/lampp/htdocs/dzzoffice//./admin/cloud/template/header_left.htm";i:1585620672;s:0:"";b:0;s:76:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_right.htm";i:1585620676;s:60:"/opt/lampp/htdocs/dzzoffice//./admin/cloud/template/left.htm";i:1585620672;s:77:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/footer_simple.htm";i:1585620676;}*/?>
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
<script type="text/javascript" src="./data/template/admin_cloud_routeredit_header_zh-cn.js" ></script><script type="text/javascript" src="static/js/header.js?<?php echo VERHASH;?>" ></script>
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
<script type="text/javascript" src="static/js/jquery.leftDrager.js?<?php echo VERHASH;?>" ></script><script type="text/javascript" src="./data/template/admin_cloud_routeredit_common_zh-cn.js" ></script><script type="text/javascript" src="static/js/common.js?<?php echo VERHASH;?>" ></script>
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
        <a href="<?php echo MOD_URL;?>">云设置和管理</a>
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
  <div class="bs-left-container  clearfix"> 
    <?php $bz=$bz?$bz:'dzz';?><?php $clouds=DB::fetch_all("select * from ".DB::table('connect')." where 1 order by disp");?><ul class="nav-stacked">
  <li <?php if($operation=='setting') { ?>class="active"<?php } ?>> <a href="<?php echo BASESCRIPT;?>?mod=cloud&operation=setting">云设置</a>
  </li>
  <?php if(is_array($clouds)) foreach($clouds as $value) { ?> 
  <li <?php if($operation!='setting' && $bz==$value['bz']) { ?>class="active"<?php } ?>> <a href="<?php echo BASESCRIPT;?>?mod=cloud&op=edit&bz=<?php echo $value['bz'];?>"><?php echo $value['name'];?></a>
  </li>
  <?php } ?>
</ul>
 
  </div>
  <div class="left-drager">
    <div class="left-drager-op">
      <div class="left-drager-sub"></div>
    </div>
  </div>
  <div class="bs-main-container  clearfix">
    <div class="main-header clearfix"> 
      <ul class="nav nav-pills nav-pills-bottomguide"  >
        <li> <a href="<?php echo BASESCRIPT;?>?mod=cloud&op=edit&bz=dzz"> 设置</a> </li>
        <li> <a href="<?php echo BASESCRIPT;?>?mod=cloud&op=router">路由管理</a> </li>
        <li class="active"> <a href="<?php echo BASESCRIPT;?>?mod=cloud&op=rootedit">添加路由</a> </li>
      </ul>
    </div>
    <div class="main-content" style="padding:15px;border-top:1px solid #FFF">
      <form id="cpform" action="<?php echo BASESCRIPT;?>?mod=cloud&op=routeredit" class="form-horizontal form-horizontal-left" method="post" name="cpform">
        <input type="hidden" value="<?php echo FORMHASH;?>" name="formhash">
        <input type="hidden" name="routerid" value="<?php echo $routerid;?>">
        <input type="hidden" value="addroutersubmit" name="true">
        <dl>
          <dt>路由名称:</dt>
          <dd class="clearfix">
            <input type="text" name="router[name]" class="form-control" value="<?php echo $router['name'];?>">
          </dd>
        </dl>
        <dl>
          <dt>优先级:</dt>
          <dd class="clearfix">
            <input type="text" name="router[priority]" class="form-control" value="<?php echo $router['priority'];?>">
          </dd>
        </dl>
        <dl>
          <dt>存储位置:</dt>
          <dd class="clearfix">
            <select name="router[remoteid]" class="form-control">
              <?php if(is_array($spaces)) foreach($spaces as $value) { ?> 
              <option value="<?php echo $value['remoteid'];?>" <?php if($router['remoteid']==$value['remoteid']) { ?>selected="selected"<?php } ?>> <?php echo $value['name'];?>
<?php if($value['available']<1) { ?>（由于云"<?php echo $value['bz'];?>"停用，此路由暂时失效）<?php } ?>
              </option>
              <?php } ?>
            </select>
            <ul class="help-block ">
              <li>标志符：此类的唯一标志，全站唯一,注意区分大小写</li>
            </ul>
          </dd>
        </dl>
        <dl>
          <dt>文件类型:</dt>
          <dd class="clearfix">
            <textarea type="textarea" id="exts" class="form-control" name="router[router][exts]" row="6" cols="6" style="width:300px;height:60px"><?php echo implode(',',$router[router][exts])?></textarea>
          </dd>
          <dd class="clearfix mt10"> 
          	<a href="javascript:;" onclick="setExts('jpg,jpeg,png,gif')">图片类</a> 
            &nbsp;&nbsp; <a href="javascript:;" onclick="setExts('doc,docx,rtf,odt,htm,html,txt')">word文档</a> 
            &nbsp;&nbsp; <a href="javascript:;" onclick="setExts('xls,xlsx,ods,sxc,csv,tsv')">excel文档</a> 
            &nbsp;&nbsp; <a href="javascript:;" onclick="setExts('ppt,pptx,pps,ppsx,odp,sxi')">ppt文档</a> 
            &nbsp;&nbsp; <a href="javascript:;" onclick="setExts('mp4,avi,wmv,mkv,rmvb,rm,asf,mpg,mpeg,mov')">视频文件</a> &nbsp;&nbsp; <a href="javascript:;" onclick="setExts('txt,ini,conf,log,bat,sql,js,css,htm,html,xml,asp,aspx,php,jsp,json,py,h,c')">文本类</a> 
          </dd>
          <dd class="clearfix mt10">
            <ul class="help-inline ">
              <li>请填写文件的后缀名，多个请使用半角逗号隔开</li>
								<li>留空，不限制</li>
            </ul>
          </dd>
        </dl>
        <dl>
          <dt>文件大小:</dt>
          <dd class="clearfix ">
            <div class="input-group pull-left" style="width:100px"> <span class="input-group-addon">文件小于</span>
              <input type="text" class="form-control" name="router[router][size][lt]" style="width:60px;" value="<?php echo $router['router']['size']['lt'];?>" />
              <span class="input-group-addon">M</span> </div>
            <div class="pull-left ml20 mr20" style="line-height:30px;"> AND</div>
            <div class="input-group pull-left" style="width:100px"> <span class="input-group-addon">文件大于</span>
              <input type="text" class="form-control" name="router[router][size][gt]" value="<?php echo $router['router']['size']['gt'];?>" style="width:60px;" />
              <span class="input-group-addon">M</span> </div>
          </dd>
          <dd class="clearfix ">
            <ul class="help-block ">
              <li>留空，则此项不限制</li>
								<li>大于和小于都填写时 是“and”的关系，如果只想一项起作用，另外一项留空</li>
            </ul>
          </dd>
        </dl>
        <input class="btn btn-primary" name="addroutersubmit" value="<?php if($routerid) { ?>编辑<?php } else { ?>添加<?php } ?>" type="submit">
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
jQuery('.left-drager').leftDrager_layout();
function setExts(str) {
var old = trim(document.getElementById('exts').value).replace(/，{1,}/g, ',').replace(/,{1,}/g, ',').replace(/^\,/g, '');
var arr = old ? old.split(',') : [];
var newarr = str.split(',');
for(var i = 0; i < newarr.length; i++) {
if(jQuery.inArray(newarr[i], arr) < 0) {
arr.push(newarr[i]);
}
}
document.getElementById('exts').value = arr.join(',');
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