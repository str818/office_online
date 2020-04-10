<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:3:{s:61:"/opt/lampp/htdocs/dzzoffice//./dzz/excel/template/setting.htm";i:1585641099;s:83:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_simple_start.htm";i:1585620676;s:81:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_simple_end.htm";i:1585620676;}*/?>
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
<script type="text/javascript" src="./data/template/dzz_excel_setting_header_zh-cn.js" ></script><script type="text/javascript" src="static/js/header.js?<?php echo VERHASH;?>" ></script>
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
<link href="<?php echo MOD_PATH;?>/images/word.css?<?php echo VERHASH;?>" rel="stylesheet" media="all">
<script type="text/javascript" src="static/js/switchery.js" ></script>
<script type="text/javascript" src="static/bootstrap/js/bootstrap.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="static/js/jquery.leftDrager.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="./data/template/dzz_excel_setting_index_zh-cn.js" ></script><script type="text/javascript" src="<?php echo MOD_PATH;?>/scripts/index.js?<?php echo VERHASH;?>" ></script>
<style>
    body {
        min-width: 520px;
    }
    .navbar-inverse {
        background-color: #4664d2;
    }
    .input-search .input-search-icon, .input-search .header-closebutton {
        left:20px;
    }
</style><script type="text/javascript" src="./data/template/dzz_excel_setting_common_zh-cn.js" ></script><script type="text/javascript" src="static/js/common.js?<?php echo VERHASH;?>" ></script>
</head>
<body id="nv_<?php echo $_G['basescript'];?>" class="<?php echo $bodyClass;?>" >
<div id="append_parent" style="z-index:99999;"></div>
<div id="ajaxwaitid" style="z-index:99999;"></div><nav class="navbar navbar-inverse back-nav">
    <ul class="nav navbar-nav navbar-nav-left view-navbar-nav-left">
        <li>
            <a href="<?php echo MOD_URL;?>" style="padding: 8px;">
                <div class="gb_fc"><span class="dzz dzz-chevron-left" style="width: 24px;height: 24px;display: block;font-size: 36px;position: relative;top: -6px;left: -6px;"></span></div>
            </a>
        </li>
        <li>
            <a href="<?php echo MOD_URL;?>" class="navbar-nav-left-appname"><?php echo lang(settings)?></a>
        </li>
    </ul>
</nav>
<div class="bs-container clearfix" style="height: 100%">
    <div class="bs-main-container">
        <div class="main-content container clearfix" id="itemContainer" style="padding:0;height: 100%;width: 100%;">
                <div class="setting-wrap">
                    <form id="setform" action="<?php echo MOD_URL;?>&op=ajax&do=setting&operation=setbase" method="post">
                        <div class="setting-item save-setting" style="padding-right: 0">
                            <label for=""><?php echo lang(file_save_path)?></label>
                            <input type="button" name="savedir" class="save-btn" data-val="" value="<?php if($setting['dirpath']) { ?><?php echo $setting['dirpath'];?><?php } else { echo lang(chose_file_save_path)?><?php } ?>" onclick="showWindow('savepath_sel', '<?php echo DZZSCRIPT;?>?mod=system&op=selposition&handlekey=seldir&allowcreate=1&callback=seldir&range=1&selhome=1', 'get', 0)">
                            <input type="hidden" name="savepath" value="<?php echo $setting['savepath'];?>">
                            <b class="caret save-caret"></b>
                        </div>
                        <div class="setting-item">
                            <label for=""><?php echo lang(open_type)?></label>
                            <div class="setting-info"><?php echo lang(chose_open_type)?></div>
                            <select class="form-control toogle" name="appid" style="width: 160px;">
                                   <option value="0">使用默认设置</option>
                                   <?php if(is_array($apps)) foreach($apps as $value) { ?>                                    <option value="<?php echo $value['appid'];?>" <?php if($setting['appid'] == $value['appid']) { ?> selected <?php } ?> ><?php echo $value['appname'];?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="setting-item">
                            <label for=""><?php echo lang(open_now)?></label>
                            <div class="setting-info"><?php echo lang(created_open_now)?></div>
                            <div class="toogle">
                                <input type="checkbox" name="createtype" class="js-switch-primary primary2" <?php if($setting['createtype']) { ?>checked<?php } ?> />
                                <script type="text/javascript">
                                    var elem = document.querySelector('.primary2');
                                    Switchery(elem, {
                                        color: '#4c89fb'
                                    });
                                </script>
                            </div>
                        </div>

                        <div class="setting-item">
                            <label for=""><?php echo lang(template)?></label>
                            <div class="setting-info"><?php echo lang(show_nearly_use)?></div>
                            <div class="toogle">
                                <input type="checkbox" name="tplhide" class="js-switch-primary primary1" <?php if($setting['tplhide']) { ?>checked<?php } ?> />
                                <script type="text/javascript">
                                    var elem = document.querySelector('.primary1');
                                    Switchery(elem, {
                                        color: '#4c89fb'
                                    });
                                </script>
                            </div>
                        </div>
                    </form>
                    <div class="setting-btnwrap">
                        <button class="btn btn-primary" style="margin-top: 10px" onclick="savesetting();"><?php echo lang(save)?></button>
                    </div>
                </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    
    function savesetting(){
        var form = jQuery("#setform").serializeArray();
        console.log(form);
        var data = {};
        form.forEach(function(e){
            data[e.name] = e.value;
        });
        data.createtype = data.createtype == 'on' ? 1 : 0;
        data.tplhide = data.tplhide == 'on' ? 1 : 0;
        jQuery.post('<?php echo MOD_URL;?>&op=ajax&do=setting&operation=setbase', data, function(json){
            if (json.code == 200) {
                showmessage(json.message, 'success', 1000, 1);
            } else {
                showmessage(json.message, 'error', 1000, 1);
            }
        },'json')
    }

    function seldir(fid, data){
        jQuery("input[name='savepath']").val(fid);
        jQuery("input[name='savedir']").val(data.relativepath);
    }
</script>