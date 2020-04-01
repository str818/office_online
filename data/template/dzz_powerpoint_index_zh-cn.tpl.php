<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:7:{s:64:"/opt/lampp/htdocs/dzzoffice//./dzz/powerpoint/template/index.htm";i:1585641102;s:83:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_simple_start.htm";i:1585620676;s:81:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_simple_end.htm";i:1585620676;s:77:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/commer_header.htm";i:1585620676;s:70:"/opt/lampp/htdocs/dzzoffice//./dzz/powerpoint/template/header_left.htm";i:1585641102;s:72:"/opt/lampp/htdocs/dzzoffice//./dzz/powerpoint/template/header_search.htm";i:1585641102;s:76:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_right.htm";i:1585620676;}*/?>
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
<script type="text/javascript" src="./data/template/dzz_powerpoint_index_header_zh-cn.js" ></script><script type="text/javascript" src="static/js/header.js?<?php echo VERHASH;?>" ></script>
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
<script type="text/javascript" src="static/bootstrap/js/bootstrap.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="static/js/jquery.leftDrager.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="static/js/input_field.js" ></script>
<script type="text/javascript" src="./data/template/dzz_powerpoint_index_index_zh-cn.js" ></script><script type="text/javascript" src="<?php echo MOD_PATH;?>/scripts/index.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="<?php echo MOD_PATH;?>/scripts/image_resize.js?<?php echo VERHASH;?>" ></script>
<style>
    body {
        background-color: #eee;
        min-width: 520px;
        padding-right: 0px !important;
    }
    .navbar-inverse {
        background-color: #d24f37;
    }
    .input-search .input-search-icon, .input-search .header-closebutton {
        left:20px;
    }
</style><script type="text/javascript" src="./data/template/dzz_powerpoint_index_common_zh-cn.js" ></script><script type="text/javascript" src="static/js/common.js?<?php echo VERHASH;?>" ></script>
</head>
<body id="nv_<?php echo $_G['basescript'];?>" class="<?php echo $bodyClass;?>" >
<div id="append_parent" style="z-index:99999;"></div>
<div id="ajaxwaitid" style="z-index:99999;"></div>
<nav class="navbar navbar-inverse resNav bs-top-container" >
<div class="resNav-item resNav-left">     
    <ul class="nav navbar-nav navbar-nav-left" style="min-width:168px">
    <li>
        <a class="leftTopmenu" onclick="" style="padding:8px;cursor: pointer;">
            <div class="gb_fc"><span class="dzz dzz-menu" style="width:24px;height:24px;display:block;"></span></div>
        </a>
    </li>
    <li>
        <a href="<?php echo MOD_URL;?>"><?php echo lang(docs)?></a>
    </li>
</ul>    </div>
    <div class="resNav-item resNav-center"><style>
    .input-search .search_top .header-closebutton1 {
        display: none;
        right:20px;
        color: #FFFFFF;
        opacity: 0.5;
        line-height: 46px;
        top:0;
        font-size: 22px;
        width: 36px;
        height: 46px;
        text-align: center;
        position: absolute;
        cursor: pointer;
    }
    .input-search.focus .header-closebutton1 {
        color: #666;
    }
</style>
<div class="input-search">
 <form name="search" action="<?php echo BASESCRIPT;?>" method="get" class="search_top">
    <input type="hidden" name="mod" value="<?php echo MOD_NAME;?>" />
    <input type="hidden" name="op" value="<?php echo OP_NAME;?>" />
    <input type="hidden" name="do" value="" />

    <i class="input-search-icon glyphicon glyphicon-search" aria-hidden="true" onclick="jQuery('form').submit()"></i>
    
    <input id="searchval" class="form-control search form-search" name="keyword" placeholder="<?php echo lang(search)?>" type="text" value="<?php echo $_GET['keyword'];?>" placeholder=""/>
    <span aria-hidden="true" id="emptysearchcondition" class="header-closebutton1">×</span>

 </form>
</div>
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
</script><nav class="navbar navbar-inverse back-nav" style="display: none;">
    <ul class="nav navbar-nav navbar-nav-left view-navbar-nav-left">
        <li>
            <a href="<?php echo MOD_URL;?>" style="padding: 8px;">
                <div class="gb_fc"><span class="dzz dzz-chevron-left" style="width: 24px;height: 24px;display: block;font-size: 36px;position: relative;top: -6px;left: -6px;"></span></div>
            </a>
        </li>
        <li>
            <a href="<?php echo MOD_URL;?>" class="navbar-nav-left-appname"><?php echo lang('tpl_bank')?></a>
        </li>
    </ul>
</nav>
<div class="bs-container clearfix" style="height: 100%">
    <div class="bs-left-container  clearfix" style="height: 100%;z-index: 1000;">
        <div class="app-name"><a style="cursor: pointer;"><?php echo lang('docs')?></a></div>
        <div class="leftItem">
            <ul class="left-ul">
                <li><a class="setting" href="<?php echo MOD_URL;?>&op=ajax&do=setting"><i class="dzz dzz-settings"></i> <?php echo lang('settings')?></a></li>
            </ul>
        </div>
    </div>
    <div class="bs-main-container" style="padding-top: 64px;<?php if(!$setting['tplhide']) { ?>padding-bottom: 64px;<?php } ?>">
        <div class="main-content container clearfix" id="itemContainer" style="padding:0;height: 100%;width: 100%;overflow: auto;<?php if($setting['tplhide']) { ?>margin-top: -64px;<?php } ?>position: relative;">
            <div class="template-wrap" style="<?php if(!$setting['tplhide']) { ?>height: 0px;position:fixed;top: 64px;<?php } ?>">
                <div class="temp-top clearfix">
                    <div class="topwrap clearfix">
                        <div class="new"><?php echo lang('create_file')?></div>
                        <div class="list" onclick="showTemp(this)"><?php echo lang('tpl_bank')?> <i class="dzz dzz-expand-more"></i></div>
                        <?php if($_G['adminid']) { ?><a href="<?php echo MOD_URL;?>&op=tplmanage" class="manage"><i class="dzz dzz-create"></i> <?php echo lang('tpl_manage')?></a><?php } ?>
                    </div>
                    <div class="temp-container clearfix">
                        <div class="all-temp clearfix">
                            <div class="use clearfix">
                                <a class="temp-item add-temp" style="cursor: pointer;" onclick="showWindow('addemptydoc-window','<?php echo MOD_URL;?>&op=ajax&do=showwindow&operation=addemptydoc')">
                                    <div class="add-img"><i class="dzz dzz-add"></i></div>
                                    <div class="temp-info null">
                                        <div class="temp-name"><?php echo lang('null')?></div>
                                    </div>
                                </a>
                                <?php if(is_array($lately_tpl)) foreach($lately_tpl as $value) { ?>                                    <a class="temp-item" style="cursor: pointer;" onclick="showWindow('addbytpl-window','<?php echo MOD_URL;?>&op=ajax&do=showwindow&operation=addbytpl&tid=<?php echo $value['tid'];?>')">
                                        <div class="temp-img"><img onload="image_resize(this)" src="<?php echo $value['img'];?>" alt=""></div>
                                        <div class="temp-info">
                                            <div class="temp-name"><?php echo $value['title'];?></div>
                                        </div>
                                    </a>
                                <?php } ?>
                            </div>
                            <?php if(is_array($data)) foreach($data as $key => $value) { ?>                                <div class="resume clearfix">
                                    <div class="resume-title"><?php echo $tpl_cat[$key]['name'];?></div>
                                    <?php if(is_array($value)) foreach($value as $val) { ?>                                        <a class="temp-item" style="cursor: pointer;" onclick="showWindow('addbytpl-window','<?php echo MOD_URL;?>&op=ajax&do=showwindow&operation=addbytpl&tid=<?php echo $val['tid'];?>')">
                                            <div class="temp-img"><img onload="image_resize(this)" src="<?php echo $val['img'];?>" alt=""></div>
                                            <div class="temp-info">
                                                <div class="temp-name"><?php echo $val['title'];?></div>
                                            </div>
                                        </a>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-file-wrap clearfix <?php if(!$setting['tplhide']) { ?>fix-nav<?php } ?>" style="<?php if(!$setting['tplhide']) { ?>top: 64px; position: fixed;<?php } ?>">
                <div class="btn-file clearfix">
                    <div class="btnGroup">
                        <a href='javascript:;' onclick="switchShowType(this)"><i class="dzz <?php if($showtype == 'list') { ?>dzz-view-list<?php } else { ?>dzz-view-module<?php } ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo lang('view_tab')?>"></i></a>
                        <div class="dropdown" style="display: inline-block;">
                            <a class="btn btn-more dropdown-toggle" style="padding: 12px;display: inline-block;vertical-align: 0px;opacity:1;border: none;" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="dzz dzz-paixu" data-toggle="tooltip" data-placement="bottom" title="<?php echo lang('tpl_sort')?>"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu4" style="margin-top: 0;left:-70px;">
                                <li><a style="cursor: pointer;" onclick="loadmore('&keyword=<?php echo $_GET['keyword'];?>&order=open')"><?php echo lang('open_time')?></a></li>
                                <li><a style="cursor: pointer;" onclick="loadmore('&keyword=<?php echo $_GET['keyword'];?>&order=edit')"><?php echo lang('edit_time')?></a></li>
                                <li><a style="cursor: pointer;" onclick="loadmore('&keyword=<?php echo $_GET['keyword'];?>&order=name')"><?php echo lang('tpl_title')?></a></li>
                            </ul>
                        </div>

                        <a style="cursor: pointer;" class="sel-folder" data-toggle="tooltip" data-placement="bottom" title="<?php echo lang('open_file_selection')?>"><i class="dzz dzz-folder"></i>
                            <input type="file" name="files[]"  class="upload" multiple="multiple" title=" "  accept="application/vnd.ms-powerpoint,application/vnd.openxmlformats-officedocument.presentationml.presentation" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="edit-wrap" style="<?php if(!$setting['tplhide']) { ?>padding-top: 20px<?php } ?>">
                <div class="edit-scroll">
                    <div class="edit">

                        <div class="edit-use">
                            <div class="loader" data-turl="&keyword=<?php echo $_GET['keyword'];?>&order=<?php echo $_GET['order'];?>" data-next="0"> <div class="loader-inner ball-beat"> <div></div> <div></div> <div></div> </div> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="publish_stick" class="m-g H" style="<?php if(!$setting['tplhide']) { ?>display: block;<?php } ?>">
        <div class="ax"></div>
        <div class="vc">
            <?php if($_G['adminid']) { ?>
                <div class="V">
                    <a class="r nX file-btn" href="<?php echo MOD_URL;?>&op=tplmanage"><i class="dzz dzz-dashboard" style="opacity: 1"></i></a>
                    <label class="bA lN">
                        <div class="rv"><?php echo lang('tpl_manage')?></div>
                    </label>
                </div>
            <?php } ?>
            <div class="V">
                <div class="r nX file-btn" onclick="showTemp(this)"><i class="dzz dzz-file-text"></i></div>
                <label class="bA lN">
                    <div class="rv"><?php echo lang('choose_tpl')?></div>
                </label>
            </div>
        </div>
        <div class="gY">
            <button class="r gw" onclick="showWindow('addemptydoc-window','<?php echo MOD_URL;?>&op=ajax&do=showwindow&operation=addemptydoc')">
                <div class="no aL"></div>
                <div class="no a9"></div>
            </button>
            <label class="bA lF">
                <div class="rv"><?php echo lang('create_file')?></div>
            </label>
        </div>
    </div>
</div>
<script type="text/javascript">
    var mod_url = '<?php echo MOD_URL;?>';
    function showTemp(el) {
        jQuery(el).hide();
        jQuery(el).parents('#publish_stick').hide();
        jQuery('.list').hide();
        var hei=jQuery(window).height()-jQuery('.navbar').height();
        jQuery('.template-wrap').css({
            'overflow':'auto',
            <?php if($setting['tplhide']) { ?>
            'position':'fixed',
            'top':'64px'
            <?php } ?>
        });
        jQuery('.main-content').css('overflow','hidden');
        jQuery('.template-wrap').animate({height:hei},'slow');
        jQuery('.resNav').hide();
        jQuery('.back-nav').show();
    }
    jQuery(document).ready(function(){
        jQuery('.main-content').scroll(function () {
            var hei=jQuery('.template-wrap').height();
            if(jQuery(this).scrollTop()>hei) {
                jQuery('.btn-file-wrap').addClass('fix-nav').css({
                    'position':'fixed',
                    'top':'64px',
                    'margin-top':'0',
                    'margin-right':'12px'
                })
                jQuery('#publish_stick').show();
            }else {
                <?php if($setting['tplhide']) { ?>
                jQuery('.btn-file-wrap').removeClass('fix-nav').css({
                    'position':'absolute',
                    'top':'250px'
                })
                jQuery('#publish_stick').hide();
                <?php } ?>
            }

        });
        loadmore();
        jQuery("#itemContainer").scroll(function(e) {//滚动加载
            var p_height = jQuery("#itemContainer").height();
            var height = jQuery(".edit-wrap").innerHeight();
            var scroll_top = jQuery("#itemContainer").scrollTop();
            if(scroll_top+p_height>=height-20){
                 jQuery('.loader').click();
            }
        });

    })

   function loadmore(turl){
       var load = jQuery(".loader");
       if(load.attr('uploaded')) return;
       load.attr('uploaded', 1);
       var start = load.data("next");
       var data_turl = load.data("turl");
       if(turl){
            start = 0;
            data_turl = turl;
            jQuery('.edit-use').html('<div class="loader" data-turl="'+data_turl+'" data-next="0"> <div class="loader-inner ball-beat"> <div></div> <div></div> <div></div> </div> </div>');
       }
       jQuery.get('<?php echo MOD_URL;?>&op=ajax&do=mydoc'+data_turl, {'start':start}, function(html){
            var time = jQuery(".edit-use").children(".temp-table:last").data("time");
            if (time && time == jQuery(html).first().data("time")) {
                jQuery(".edit-use").children(".temp-table:last").find("tr:last").after(jQuery(html).first().find("tr"));
                jQuery(".loader").replaceWith(jQuery(html).filter(':gt(0)'));
            } else {
                jQuery(".loader").replaceWith(html);  
            }
       })
   }

   function switchShowType(t){
        jQuery.get('<?php echo MOD_URL;?>&op=ajax&do=setting&operation=switchshowtype',{},function(data){
            var c = data.type == 'list' ? 'dzz-view-list' : 'dzz-view-module';
            jQuery(t).find('i').removeClass('dzz-view-list dzz-view-module').addClass(c);
            var loaderhtml = '<div class="loader" data-turl="&keyword=<?php echo $_GET["keyword"];?>&order=<?php echo $_GET["order"];?>" data-next="0"> <div class="loader-inner ball-beat"> <div></div> <div></div> <div></div> </div> </div>';
            jQuery('.edit-use').html(loaderhtml);
            loadmore();
        },'json');
   }

   function docdelete(t){
       showDialog('<?php echo lang(true_remove_file)?>','confirm','',function () {
           var dpath = [jQuery(t).parents(".item").data('dpath')];
           var rid =jQuery(t).parents(".item").data('rid');
           jQuery.post('<?php echo MOD_URL;?>&op=ajax&do=deletedoc', {'rids': dpath}, function(data){
               if (data.sucessicoids) {
                   jQuery(t).parents(".item").remove();
               } else {
                    showmessage(data.msg[rid], 'error', 1000, 1);
               }
           }, 'json')
       })
   }

jQuery(document).ready(function(){
    jQuery('.upload').fileupload({
        url: '<?php echo MOD_URL;?>&op=ajax&do=uploads&container=<?php echo $setting['savepath'];?>',
        dataType: 'json',
        autoUpload: true,
        maxChunkSize: (parseInt('<?php echo $_G['setting']['maxChunkSize'];?>') || 2000000), //2M
        maxFileSize: parseInt('<?php echo $space['maxattachsize'];?>')>0?parseInt('<?php echo $space['maxattachsize'];?>'):null, // 5 MB
        acceptFileTypes:new RegExp("(\.|\/)([ppt|pptx])$",'i'),
        sequentialUploads:true
        
    }).on('fileuploadadd', function (e, data) {
            jQuery.each(data.files, function (index, file) {
                if(!file.name) file.name='new.ppt';
                    var type_arr = new Array('application/vnd.ms-powerpoint', 'application/vnd.openxmlformats-officedocument.presentationml.presentation');
                    if(jQuery.inArray(file.type, type_arr) < 0){
                        showmessage('<?php echo lang(chose_ppt_file)?>', 'error', 1000, 1);
                        return;
                    }
            });
        }).on('fileuploadfail', function (e, data) {
            showmessage('<?php echo lang(upload_failed)?>', 'error', 1000, 1);
        }).on('fileuploaddone', function (e, data) {
            jQuery.each(data.result.files, function (index, file) {
                if(file.error){
                        showmessage(file.error, 'error', 1000, 1);
                    }else{
                        var rid = file.data.icoarr[0]['rid'];
                        jQuery.get('<?php echo MOD_URL;?>&op=ajax&do=getitem', {'rid': rid}, function(html){
                            if (jQuery(".edit-use").find('.temp-table').first().data('time') == 'today') {
                                jQuery(".edit-use").find('tr:eq(0)').before(jQuery(html).find('.item'));
                            } else {
                                jQuery('.edit-use').prepend(html);
                            }
                            showmessage('<?php echo lang(add_success)?>', 'success', 1000, 1);
                            jQuery(".edit-use").find('.item:eq(0)').animate({opacity:1}, 1000);
                        })
                        if ('<?php echo $setting["createtype"];?>' == '1') {
                            opendoc('<?php if($setting['openurl']) { ?><?php echo $setting['openurl'];?>&path='+file.data.icoarr[0]['apath']+'<?php } ?>', rid,1);
                        }
                    }
            });
        });
})


</script>

<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script type="text/javascript" src="static/jquery_file_upload/jquery.ui.widget.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="static/jquery_file_upload/jquery.iframe-transport.js?<?php echo VERHASH;?>" ></script>
<!-- The basic File Upload plugin -->
<script type="text/javascript" src="static/jquery_file_upload/jquery.fileupload.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="static/jquery_file_upload/jquery.fileupload-process.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="./data/template/dzz_powerpoint_index_jquery_fileupload-validate_zh-cn.js" ></script><script type="text/javascript" src="static/jquery_file_upload/jquery.fileupload-validate.js?<?php echo VERHASH;?>" ></script>