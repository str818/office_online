<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:4:{s:65:"/opt/lampp/htdocs/dzzoffice//./user/login/template/lostpasswd.htm";i:1585620690;s:83:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_simple_start.htm";i:1585620676;s:81:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_simple_end.htm";i:1585620676;s:70:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/footer.htm";i:1585620676;}*/?>
<?php if(empty($_GET['inajax'])) { ?><!DOCTYPE html>
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
<script type="text/javascript" src="./data/template/user_login_lostpasswd_header_zh-cn.js" ></script><script type="text/javascript" src="static/js/header.js?<?php echo VERHASH;?>" ></script>
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
<script type="text/javascript" src="./data/template/user_login_lostpasswd_login_zh-cn.js" ></script><script src="user/scripts/login.js"  type="text/javascript"></script>
<!--[if lt IE 9]>
  <script src="static/js/jquery.placeholder.js"  type="text/javascript"></script>
<![endif]-->	
<style>


.page{
    height: 100%;
    padding: 0;
    margin: 0!important;
    background-color: transparent;
    position: relative;
    text-align: center!important;
overflow:auto;
}
.page:before{
    display: inline-block;
    height: 100%;
    vertical-align: middle;
    content: "";
}
.Mcontent{
    padding: 30px;
    vertical-align: middle;
    display: inline-block;
    max-width:410px;
    font-size: 14px;
}
.Mbody{
padding:20px 0px;
}

p{
    color: #a3afb7;
    margin: 0 0 11px;
}
form{
    width: 350px;
    margin: 30px 0 0 0;
}
.form-group {
    margin-bottom: 20px;
}
.form-group.last{
 	margin-bottom: 0;
margin-top: 30px;
}

.Mcontent{
background-color:#FFF;
}

div.error-msg{
text-align:left;
margin:20px 0;
}
@media (max-width: 380px){
    
.Mcontent{
margin:15px;
}
   .loginForm {
        width: auto;
    }
}
.brand {
   margin:15px 0;
}
.brand img {
max-width:350px;
max-height:350px;
}

</style><script type="text/javascript" src="./data/template/user_login_lostpasswd_common_zh-cn.js" ></script><script type="text/javascript" src="static/js/common.js?<?php echo VERHASH;?>" ></script>
</head>
<body id="nv_<?php echo $_G['basescript'];?>" class="<?php echo $bodyClass;?>" >
<div id="append_parent" style="z-index:99999;"></div>
<div id="ajaxwaitid" style="z-index:99999;"></div><?php $loginhash = 'L'.random(4);?><div id="wrapper_div" style="width: 100%;height:100%;  position: absolute; top: 0px; left: 0px; margin: 0px; padding: 0px; overflow: hidden;z-index:0;  font-size: 0px; background:<?php echo $_G['setting']['loginset']['bcolor']?$_G['setting']['loginset']['bcolor']:'#76838f';?>;"> 
<?php if($_G['setting']['loginset']['img']) { ?>
<img src="<?php echo $_G['setting']['loginset']['img'];?>" name="imgbg" id="imgbg" style="right: 0px; bottom: 0px; top: 0px; left: 0px; z-index:10;margin:0;padding:0;overflow:hidden; position: absolute;width:100%;height:100%" height="100%" width="100%">
<?php } ?>
    <?php if($_G['setting']['loginset']['url']) { ?>
    <iframe id="wrapper_frame" name="wrapper_frame" src="<?php echo $_G['setting']['loginset']['url'];?>" frameborder="0" marginheight="0" marginwidth="0" width="100%" height="100%" allowtransparency="true" style="z-index:20;position:absolute;width:100%;height:100%;background:url(dzz/images/b.gif);"></iframe>
    <?php } ?>
</div>
<div class="page" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display:block;" >

        <div class="Mcontent" id="lostpw_container_<?php echo $loginhash;?>">
            <div class="brand"> <img src="<?php echo $_G['setting']['sitelogo']?'index.php?mod=io&op=thumbnail&size=small&path='.dzzencode('attach::'.$_G['setting']['sitelogo']):'static/image/common/logo.png';?>" /></div>
            <h3 class="Mtitle" ><span >找回密码</span></h3>
            <p>输入注册时邮箱和用户名来找回密码</p>
            <?php if(!empty($_GET['inajax'])) { ?><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><?php } ?>
            <div class="Mbody">
                <form class="loginForm" method="post" autocomplete="off" id="lostpwform_<?php echo $loginhash;?>" role="form"  onsubmit="lostpass('lostpw_container_<?php echo $loginhash;?>','lostpwform_<?php echo $loginhash;?>','returnmessage3_<?php echo $loginhash;?>');return false;" action="user.php?mod=login&amp;op=logging&amp;action=lostpasswd">
                    <input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
                    <input type="hidden" name="lostpwsubmit" value="true" />
                    <input type="hidden" name="handlekey" value="lostpw_<?php echo $loginhash;?>" />
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" id="lostpw_email"  value=""  placeholder="填写您的登录邮箱" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control"  name="username" id="lostpw_username"  value=""  placeholder="填写注册时使用的用户名"  />
                    </div>
                     <div class="error-msg text-danger" id="returnmessage3_<?php echo $loginhash;?>"></div>
                    <div class="form-group last">
                        <button type="submit" class="btn btn-primary btn-block btn-lg" name="lostpwsubmit" value="true">确定找回</button>
                        <a href="user.php?mod=login"  onclick="try{_login.logging();return false}catch(e){return true}" title="返回登录" style="display:inline-block;margin-top:25px;">返回登录</a>
                    </div>
                  
                </form>
  	        </div>
  	       
            <div class="modal-footer" style="display:none;">
            	<button type="button" class="btn btn-primary toMail" >现在去邮箱</button>
                <button type="button" class="btn btn-default toIndex" onclick="location.href='<?php echo $_G['siteurl'];?>'">返回首页</button>
            </div>
            <script type="text/javascript">
             	
            	
            	jQuery(document).ready(function(e) {
            		jQuery('#lostpw_email').focus();
                    if(jQuery('.ie8').length){ //ie8模拟placeholder;
            			jQuery(':input[placeholder]').each(function(){
            				jQuery(this).placeholder();
            			});
            		}
                });
            </script>
        </div>
</div>
<script type="text/javascript">
jQuery('body').addClass('modal-open');
</script>
<script type="text/javascript" src="user/scripts/setbacksize.js?<?php echo VERHASH;?>" ></script>
<script src="static/bootstrap/js/bootstrap.min.js?<?php echo VERHASH;?>" ></script><?php updatesession();?><?php if(debuginfo()) { ?>
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
<?php } if(!isset($_G['cookie']['upgradenotice'] )) { ?>
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
<?php } ?>

