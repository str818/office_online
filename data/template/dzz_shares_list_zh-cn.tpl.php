<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:8:{s:69:"/opt/lampp/htdocs/dzzoffice/dzzoffice//./dzz/shares/template/list.htm";i:1589274523;s:93:"/opt/lampp/htdocs/dzzoffice/dzzoffice//./core/template/default/common/header_simple_start.htm";i:1589274520;s:91:"/opt/lampp/htdocs/dzzoffice/dzzoffice//./core/template/default/common/header_simple_end.htm";i:1589274520;s:87:"/opt/lampp/htdocs/dzzoffice/dzzoffice//./core/template/default/common/commer_header.htm";i:1589274520;s:76:"/opt/lampp/htdocs/dzzoffice/dzzoffice//./dzz/shares/template/header_left.htm";i:1589274523;s:78:"/opt/lampp/htdocs/dzzoffice/dzzoffice//./dzz/shares/template/header_search.htm";i:1589274523;s:77:"/opt/lampp/htdocs/dzzoffice/dzzoffice//./dzz/shares/template/header_right.htm";i:1589274523;s:87:"/opt/lampp/htdocs/dzzoffice/dzzoffice//./core/template/default/common/footer_simple.htm";i:1589274520;}*/?>
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
<script type="text/javascript" src="./data/template/dzz_shares_list_header_zh-cn.js" ></script><script type="text/javascript" src="static/js/header.js?<?php echo VERHASH;?>" ></script>
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
<link href="<?php echo MOD_PATH;?>/images/folder.css?<?php echo VERHASH;?>" rel="stylesheet" media="all">
<link href="static/dzzthumb/jquery.dzzthumb.css?<?php echo VERHASH;?>" rel="stylesheet" media="all">
<script type="text/javascript" src="static/js/jquery.leftDrager.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="./data/template/dzz_shares_list_jquery_dzzthumb_zh-cn.js" ></script><script type="text/javascript" src="static/dzzthumb/jquery.dzzthumb.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="dzz/vapp/js/_hotkey.js?<?php echo VERHASH;?>" ></script><script type="text/javascript" src="./data/template/dzz_shares_list_common_zh-cn.js" ></script><script type="text/javascript" src="static/js/common.js?<?php echo VERHASH;?>" ></script>
</head>
<body id="nv_<?php echo $_G['basescript'];?>" class="<?php echo $bodyClass;?>" >
<div id="append_parent" style="z-index:99999;"></div>
<div id="ajaxwaitid" style="z-index:99999;"></div><!--头部信息框-->
<div class="navtopheader">
    <div class="navtoperate">
        <div class="select-toperate">
            <div class="select-toperate select-toperate-left selectall-box">
                <span class="dzz dzz-chevron-left dzz-backing-out"></span>
                <!--选中后的效果-->
                <div class="col sharepame-selected">
                    <span>已选择<span class="ex-number"></span>项</span>
                    <!--<button type="button" class="btn btn-primary" style="padding:4px 20px ;" onclick="downmorefile();return false;">下载</button>-->
                </div>
            </div>
            <div class="select-toperate select-toperate-center  toolButtons">
                <div class="btns">
                   <!-- <a node-type="btn-item" href="javascript:void(0);" class="shares-topbtns share_save">
                        <span class="dzz dzz-save" data-key="save" data-toggle="tooltip" data-placement="bottom"
                              data-original-title="保存"></span>
                    </a>-->
                    <a node-type="btn-item" href="javascript:void(0);" onclick="downfileselect();return false;"
                       class="shares-topbtns">
                        <span class="dzz dzz-download" data-key="download" data-toggle="tooltip" data-placement="bottom"
                              data-original-title="下载"></span>
                    </a>
                </div>
            </div>
            <div class="select-toperate select-toperate-right">
                <div class="btn-group pull-right" role="group">
                    <a type="button" class="btn btn-group-list" onclick="viewSwitch(this,'.module-list-view')"><i
                            class="dzz dzz-view-list" data-toggle="tooltip" data-placement="bottom"
                            data-original-title="切换列表"></i></a>
                    <a type="button" class="btn btn-group-thumbnail" onclick="viewSwitch(this,'.module-grid-view')"
                       data-toggle="tooltip" data-placement="bottom" data-original-title="切换缩略图"><i
                            class="dzz dzz-view-module"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="contains_content">
    <!--固定的头部-->
    
<nav class="navbar navbar-inverse resNav bs-top-container" >
<div class="resNav-item resNav-left">     
    <div class="sharepame-title pull-left" style="padding-left:30px;"><?php echo $share['username'];?>的文件分享</div>
    </div>
    <div class="resNav-item resNav-center">    <div class="button-share-group" style="width: 100%;">
    	<div class="pull-right">
        <a type="button" class="btn" data-allrids="<?php echo $allrids;?>" onclick="allsave();" id="allsave">
            <span class="dzz dzz-save" data-toggle="tooltip" data-placement="bottom"
                  title="全部保存"></span>
        </a>
        <a type="button" class="btn" data-allrids="<?php echo $allrids;?>" onclick="downAll(this);">
            <span class="dzz dzz-download dzz-textdecoration" data-toggle="tooltip" data-placement="bottom"
                  title="全部下载"></span>
        </a>
        <div class="btn-group" role="group">
            <a type="button" class="btn btn-group-list" onclick="viewSwitch(this,'.module-list-view')"><i
                    class="dzz dzz-view-list" data-toggle="tooltip" data-placement="bottom" 
                    title="切换列表"></i></a>
            <a type="button" class="btn btn-group-thumbnail" onclick="viewSwitch(this,'.module-grid-view')"><i
                    class="dzz dzz-view-module" data-toggle="tooltip" data-placement="bottom" title="切换缩略图"></i></a>
        </div>
    </div>
</div>       </div>
     <div class="resNav-item resNav-right">
     <div class="pull-right">
    <!--<div class="button-share-group pull-left">
        <a type="button" class="btn" data-allrids="<?php echo $allrids;?>" onclick="allsave();" id="allsave">
            <span class="dzz dzz-save" data-toggle="tooltip" data-placement="bottom"
                  title="全部保存"></span>
        </a>
        <a type="button" class="btn" data-allrids="<?php echo $allrids;?>" onclick="downAll(this);">
            <span class="dzz dzz-download dzz-textdecoration" data-toggle="tooltip" data-placement="bottom"
                  title="全部下载"></span>
        </a>
        <div class="btn-group" role="group">
            <a type="button" class="btn btn-group-list" onclick="viewSwitch(this,'.module-list-view')"><i
                    class="dzz dzz-view-list" data-toggle="tooltip" data-placement="bottom" 
                    title="切换列表"></i></a>
            <a type="button" class="btn btn-group-thumbnail" onclick="viewSwitch(this,'.module-grid-view')"><i
                    class="dzz dzz-view-module" data-toggle="tooltip" data-placement="bottom" title="切换缩略图"></i></a>
        </div>
    </div>-->
    <?php if($_G['uid']) { ?>
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
            <a href="javascript:;" class="imgHeight js-popbox"  data-href="user.php?mod=space&amp;op=navmenu" data-placement="bottom" data-trigger="focus" data-auto-adapt="true" data-toggle="popover">
                <?php echo avatar_block($_G[uid]);?>            </a>

        </li>
    </ul>
    <?php } else { ?>
    <ul class="nav navbar-nav">
        <li>
            <a href="javascript:;">
                <span class="navbar-borderleft"></span>
            </a>
        </li>
        <!--<li class="app_popup-parent">

            <a href="javascript:;" id="desktop_app" data-href="index.php?mod=system&amp;op=app_ajax&amp;operation=app" class="app_popup_icon js-popbox" data-placement="bottom" data-trigger="focus" data-auto-adapt="true" data-toggle="popover"><span class="dzz dzz-apps basil"></span></a>
        </li>-->
        <li>

            <a href="javascript:;" onclick="location.href='<?php echo $_G['siteurl'];?>user.php?mod=login';return false;"><span>登录</span></a>
        </li>
        <?php if($_G['setting']['regstatus']) { ?>
        <li>
            <a href="javascript:;" onclick="location.href='<?php echo $_G['siteurl'];?>user.php?mod=register';return false;">
                <span >注册</span>
            </a>
        </li>
        <?php } ?>

    </ul>
    <?php } ?>
</div></div>
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
</script>    <div class="bs-container1 clearfix">
        <div class="bs-main-container" style="padding: 0px;">
            <div class="container">
                <div class="sharepame-pictitle clearfix">
                    <img src="<?php echo $share['img'];?>" class="sharepame-images">
                    <div class="sharepame-right">
                        <div class="sharepame-name"><?php echo $share['title'];?></div>
                        <div class="sharepame-detailed">
                            <span class="sharepame-time"><?php echo $share['fdateline'];?></span>
                            <span>失效时间：<?php echo $share['expireday'];?></span>
                        </div>
                    </div>
                </div>
                <!--地址栏开始-->
                <div class="sharepame-bread clearfix">
                    <ol class="breadcrumb">
                        <li class="home" data-href="<?php echo DZZSCRIPT;?>?mod=shares&sid=<?php echo $osid;?>">
                            <a href="javascript:;">全部文件<span>></span></a>
                        </li>
                        <!--<li><a href="javascript:;">分享<span>></span></a></li>
              <li class="active">文件</li>-->
                    </ol>

                </div>
                <!--地址栏结束-->
                <div class="main-content clearfix">

                    <div node-type="module" class="module-grid-view data-list" style="display: none;">
                        <div node-type="list" class="wrapper window clearfix" style="z-index:1000">
                            <!--选中后的效果-->
                            <div class="list-wrapper clearfix">
                                <?php if(is_array($list)) foreach($list as $value) { ?>                                <div node-type="item" data-dpath="<?php echo $value['dpath'];?>"
                                <?php if($value['type']=='folder' && $value['dhpath']) { ?> data-containpath="<?php echo $value['dhpath'];?>"
                                <?php } ?> data-type="<?php echo $value['type'];?>" class="item data-list-col file-icoitem bigicon
                                Icoblock ">
                                <table width="180" height="180" style="table-layout:fixed;">
                                    <tbody>
                                    <tr>
                                        <td align="center" valign="middle" style="" height="142">
                                            <div class="icoimgContainer icoimgContainer_<?php echo $value['type'];?>">
                                                <table width="100%" height="100%" cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                    <tr>
                                                        <td align="center" valign="middle">
                                                            <img title="<?php echo $value['name'];?>"
                                                                 class="<?php if($value['type']=='video') { ?>videoclass100_100<?php } elseif($value['type']=='image') { ?>imageclass<?php } else { ?>radius<?php } ?>"
                                                                 src="<?php echo $value['img'];?>" title="<?php echo $value['name'];?>"
                                                            <?php if($value['type']=='image' ) { ?>
                                                            data-original="<?php echo $value['url'];?>" data-dpath="<?php echo $value['dpath'];?>"
                                                            <?php } ?>/>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="IcoFont_text">
                                        <td align="center" valign="middle">
                                            <div class="IcoText_div" style="width:135px;max-height:40px;"
                                                 title="<?php echo $value['name'];?>">
                                                <a class="ico_item ico_item_name IcoText_folder"
                                                   style="width:135px;height:40px;overflow:hidden" title="<?php echo $value['name'];?>"><?php echo $value['name'];?></a>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="backgound_radius"
                                     style="position: absolute; left: 0px; top: 0px; z-index: -5;"></div>
                            </div>
                            <?php } ?>
                            <?php if($nextpage) { ?>
                            <div class="more text-center pull-left"
                                 onclick="getMore(this,'<?php echo DZZSCRIPT;?>?mod=shares&op=ajax&morepath=<?php echo $morepath;?>&page=<?php echo $nextpage;?>&rander=grid&marker=<?php echo $marker;?>')">
                                <table width="150" height="120" style="table-layout:fixed;">
                                    <tbody>
                                    <tr>
                                        <td align="center" valign="middle" style=""><span
                                                style="">加载更多</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div node-type="module" class="module-list-view data-list" style="display:block;">
                    <div node-type="wrapper" class="list-view-home">
                        <div node-type="title" class="title">
                            <div class="item  col-first clearfix">
                                <!--选框-->
                                <!-- 第一列 -->
                                <div node-type="title-col" data-key="name" class="col c1" style="width: 50%">
                                    <div class="name"><span>文件名</span> <span node-type="order-status"
                                                                                         class="asc desc"
                                                                                         style="visibility: hidden;"></span>
                                    </div>
                                </div>
                                <!-- 其他列 -->

                                <div node-type="title-col" data-key="size" class="col" style="width: 12%;"> 文件大小 <span node-type="order-status" class="asc desc"
                                                     style="visibility: hidden;"></span></div>
                                <div node-type="title-col" data-key="type" class="col"
                                     style="width: 15%;border-right: none;"> 文件类型 <span
                                        node-type="order-status" class="asc desc" style="visibility: hidden;"></span>
                                </div>
                                <div node-type="title-col" data-key="dateline" class="col" style="width: 20%;"> 修改时间 <span node-type="order-status" class="asc desc"
                                                     style="visibility: visible;"></span></div>
                            </div>
                        </div>
                        <div node-type="list" class="list list-share">
                            <div class="list-wrapper clearfix">
                                <?php if(is_array($list)) foreach($list as $value) { ?>                                <div data-value="true" node-type="item" data-dpath="<?php echo $value['dpath'];?>"
                                <?php if($value['type']=='folder' && $value['dhpath']) { ?> data-containpath="<?php echo $value['dhpath'];?>"
                                <?php } ?>data-type="<?php echo $value['type'];?>" class="item shareitem clearfix Icoblock"
                                id="<?php echo $value['rid'];?>">
                                <!-- 第一列 -->
                                <div class="col c1 name" style="width: 50%;" data-name="<?php echo $value['name'];?>">
                                    <div node-type="name" class="name" title="<?php echo $value['name'];?>">
                                        <?php if($value['img']) { ?><img class="icon" title="<?php echo $value['name'];?>" src="<?php echo $value['img'];?>"
                                        <?php if($value['type']=='image' ) { ?> data-original="<?php echo $value['url'];?>"
                                        data-dpath="<?php echo $value['dpath'];?>"
                                        <?php } ?>/>
                                        <?php } ?>
                                        <span class="name-text-wrapper"> <span node-type="name-text"
                                                                               data-href="<?php echo $value['shareurl'];?>"
                                                                               class="enabled"><?php echo $value['name'];?></span> </span>
                                    </div>
                                    <div class="btns">
                                        <a node-type="btn-item" data-key="download" class="dzz dzz-download"
                                           href="javascript:void(0);"></a>
                                    </div>
                                </div>
                                <!-- 其他列 -->
                                <div class="col size" style="width: 12%" data-size="<?php echo $value['size'];?>"><?php echo $value['fsize'];?></div>
                                <div class="col type" style="width:15%" data-type="<?php echo $value['ftype'];?>"><?php echo $value['ftype'];?></div>
                                <div class="col dateline" style="width: 20%" data-dateline="<?php echo $value['dateline'];?>">
                                    <?php echo $value['fdateline'];?>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if($nextpage) { ?>
                            <div class="more text-center clearfix"
                                 onclick="getMore(this,'<?php echo DZZSCRIPT;?>?mod=shares&op=ajax&morepath=<?php echo $morepath;?>&page=<?php echo $nextpage;?>&rander=list&marker=<?php echo $marker;?>')"
                                 style="padding-top: 10px;padding-bottom: 10px;">加载更多
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<iframe id="hideframe" name="hideframe" src="about:blank" frameBorder="0" marginHeight="0" marginWidth="0" width="0"
        height="0" allowtransparency="true" style="display:none;z-index:-99999"></iframe>
<div id="dataContainer" class="hide"></div>
</div>
<script type="text/javascript">
    var share = [];
    var uid = '<?php echo $_G['uid'];?>';
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
        share = [];
        sharelength();
    });
    //头部信息返回操作
    jQuery(document).off('click.backing').on('click.backing', '.select-toperate .dzz-backing-out', function () {
        jQuery(this).parents('.navtopheader').hide();
        jQuery('.item').removeClass('item-block');
        share.length = 0;
    });
    //页面高度js
    var page_loading = false;
    jQuery('.left-drager').leftDrager_layout();
  /*  jQuery('.module-list-view:visible .list-share').scroll(function (e) {
        var clientHeight = jQuery('.list-share').height();
        var scrollHeight = jQuery('.list-share .list-wrapper').height();
        if (jQuery('.list-share').scrollTop() + clientHeight >= (scrollHeight - 5) && !page_loading) jQuery('.list-share .more').trigger('click');
    });*/
    jQuery('.bs-main-container').scroll(function (e) {
        var clientHeight = jQuery('.bs-main-container').height();
        var scrollHeight = jQuery('.bs-main-container > .container').height();
        if (jQuery('.bs-main-container').scrollTop() + clientHeight >= (scrollHeight - 50) && !page_loading) jQuery('.module-grid-view .more').trigger('click');
    });

    function getMore(obj, href) {
        page_loading = true;
        jQuery(obj).html('<table width="100%" height="100%"><tr><td><img src="dzz/images/loading.gif">正在加载...</td></tr></table>');
        jQuery.get(href, function (html) {
            page_loading = false;
            jQuery('#dataContainer').html(html);
            jQuery('.module-list-view .list-wrapper .more').replaceWith(jQuery('#dataContainer').find('.module-list').html());
            jQuery('.module-grid-view .list-wrapper .more').replaceWith(jQuery('#dataContainer').find('.module-grid').html());
            jQuery('#dataContainer').empty();
            jQuery('img[data-original]').dzzthumb();
            setLoadedNum();
        });
    }

    function setLoadedNum() {
        jQuery('.loaded-num').html(jQuery('.list-share .item').length);
        if (!jQuery('.list-share .more').length) {
            jQuery('.total-num').html('已全部加载');
        } else {
            jQuery('.total-num').html('');
        }
    }

    function list_sub(obj, url, data) {

        obj.html('<p class="text-center" style="padding-top:30px;"><img src="dzz/images/loading.gif">正在加载...</p>');
        for (var o in data) {
            url += '&' + o + '=' + data[o];
        }
        if (url.indexOf('?') < 0) {
            url = url.replace(/&/, '?');
        }

        jQuery.get(url, function (html) {

//			jQuery('.bs-container').css('height', Height);
            jQuery('#dataContainer').html(html);
            var Height = jQuery(document).height();
            jQuery('.bs-container').css({'height': Height - 60 + 'px', 'overflow': 'auto'});
            jQuery('.module-list-view .list-wrapper').html(jQuery('#dataContainer').find('.module-list').html());
            jQuery('.module-grid-view .list-wrapper').html(jQuery('#dataContainer').find('.module-grid').html());
            setLoadedNum();
            jQuery(jQuery('#dataContainer').find('.breadcrumb-data:first').html()).insertAfter(jQuery('.breadcrumb li').last());
            jQuery('.breadcrumb li:not(:last)').each(function () {
                jQuery(this).removeClass('active');
                jQuery(this).html('<a href="javascript:;">' + jQuery(this).html() + '</a>');
            });
            jQuery('#dataContainer').empty();
            jQuery('img[data-original]').dzzthumb();
        });
    }

    jQuery(document).ready(function (e) {
        //鼠标滑过缩略图
        jQuery(document).on('mouseenter', 'div[node-type=item]', function () {
            jQuery(this).addClass('item-hover');
        });
        jQuery(document).on('mouseleave', 'div[node-type=item]', function () {
            jQuery(this).removeClass('item-hover');
        });
        //地址栏
        jQuery(document).on('click', '.breadcrumb li a', function () {
            var li = jQuery(this).parent();

            var url = li.data('href');
            if (li.hasClass('home')) {
                location.href = url;
                return false;
            }
            list_sub(jQuery('[node-type="module"]:visible').find('.list-wrapper'), url);
            li.nextAll('li').remove();
            li.remove();

            return false;
        });
        //缩略图文字部分操作
        jQuery(document).on('dblclick', '.name,.module-grid-view .item', function () {
            var item = jQuery(this).closest('.item');
            var type = item.data('type');
            if (item.closest('.module-grid-view').length) {
                var rander = 'grid';
            } else {
                var rander = 'list';
            }
            if (type == 'folder') {
                var containpath = item.data('containpath');
                var currentfolder = 0;
                jQuery('.navtopheader').hide();
                jQuery('.ex-number').empty();
                share.length = 0;
                if (!containpath) {
                    containpath = item.data('dpath');
                    currentfolder = 1;
                }
                list_sub(item.parent(), '<?php echo MOD_URL;?>&op=ajax', {
                    path: containpath,
                    rander: rander,
                    currentfolder: currentfolder
                });
                return false;
            } else {
                if (type == 'image' && item.find('img[data-original]').trigger('click.dzzthumb')) {
                } else {
                    var preurl = 'share.php?a=view&s=' + item.data('dpath');
                    if (top._config) {
                        top.OpenWindow('url', preurl, item.find('img').attr('title'), null, {
                            img: item.find('img').attr('src'),
                            name: item.find('img').attr('title')
                        });
                    } else {
                        window.open(preurl, jQuery(this).html());
                    }
                }
            }

            return false;
        });
        //点击列表的操作
        jQuery('.title .item .col[node-type=title-col]').on('click', function () {
            var el = jQuery(this);
            el.find('.asc').css('visibility', 'visible').toggleClass('desc');
            el.siblings().find('.asc').css('visibility', 'hidden');
            item_sort(el.data('key'), el.find('.asc').hasClass('desc') ? 'desc' : 'asc');
        });
        jQuery(document).on('click', 'a[data-key=download]', function () {
            share_download(this);
            return false;
        });
        jQuery('img[data-original]').dzzthumb();
    });

    function item_sort(key, order) {

        var sarr = new Array();
        jQuery('.list-share .item').each(function (index) {
            sarr.push((jQuery(this).find('.col.' + key).data(key)) + '____' + index);
        });
        if (key == 'dateline' || key == 'size') {
            sarr = sarr.sort(function (a, b) {
                return parseInt(a) - parseInt(b);
            });
        } else {
            sarr = sarr.sort();
        }
        var frage = document.createDocumentFragment();
        var list = jQuery('.list-share .item');
        if (order == 'desc') {
            for (var i = sarr.length - 1; i >= 0; i--) {
                var index = sarr[i].split('____')[1];
                frage.appendChild(list.get(index));
            }
        } else {
            for (var i = 0; i < sarr.length; i++) {
                var index = parseInt(sarr[i].split('____')[1]);
                frage.appendChild(list.get(index));
            }
        }
        var page = jQuery('.list-wrapper .more').clone();
        jQuery(frage).appendTo(jQuery('.list .list-wrapper').empty());
        page.appendTo('.list .list-wrapper');
    }

    function share_download(obj) {
        var li = jQuery(obj).closest('.item');
        jQuery.post('<?php echo MOD_URL;?>&do=adddowns', {'sid':'<?php echo $_GET['sid'];?>'},function (data) {
            if (data['success']) {
                var url = DZZSCRIPT + '?mod=io&op=download&checkperm=false&path=' + li.data('dpath');
                if (BROWSER.ie) {
                    window.open(url);
                } else {
                    window.frames['hideframe'].location = url;
                }
            }
        }, 'json');
        return false;
    }

    function downmorefile() {
        var dpath = share.join(',');
        jQuery.post('<?php echo MOD_URL;?>&do=adddowns',{'sid':'<?php echo $_GET['sid'];?>'}, function (data) {
            if (data['success']) {
                var url = DZZSCRIPT + '?mod=io&op=download&checkperm=false&path=' + dpath;
                if (BROWSER.ie) {
                    window.open(url);
                } else {
                    window.frames['hideframe'].location = url;
                }
            }
        }, 'json');
        return false;
    }

    //列表和缩略图的切换
    function viewSwitch(obj, tclass) {
        if (share.length > 0) {
            if (tclass == '.module-grid-view') {
                jQuery(".list-wrapper").each(function () {
                    var Icoblock = jQuery(this).find('.Icoblock');
                    if (Icoblock.hasClass('item-block')) {
                        jQuery(this).closest('.Icoblock').removeClass('item-block');
                    }
                });
                for (var o in share) {
                    var inputobj = jQuery(".list-wrapper div[data-dpath='" + share[o] + "']");
                    inputobj.prop('checked', true);
                    inputobj.closest('.Icoblock').addClass('item-block');
                }
            } else {
                jQuery(".list-view-home").each(function () {
                    jQuery(this).prop('checked', false);
                })
                for (var o in share) {
                    var inputobj = jQuery(".list-view-home div[data-dpath='" + share[o] + "']");
                    inputobj.prop('checked', true);
                }
            }
        } else {
            if (tclass == '.module-grid-view') {
                jQuery(".list-wrapper").each(function () {
                    var Icoblock = jQuery(this).find('.Icoblock');
                    if (Icoblock.hasClass('item-block')) {
                        jQuery(this).closest('.Icoblock').removeClass('item-block');
                    }

                })
            } else {
                jQuery(".list-view-home").each(function () {
                    var Icoblock = jQuery(this).find('.Icoblock');
                    if (Icoblock.hasClass('item-block')) {
                        jQuery(this).closest('.shareitem').removeClass('item-block');
                    }
                })
            }
        }
        jQuery('div[node-type="module"]').hide();
        jQuery(tclass).show();

    }

    //下载选中项
    function downfileselect() {
        var sharids = share;
        jQuery.post('<?php echo MOD_URL;?>&do=adddowns',{'sid':'<?php echo $_GET['sid'];?>'}, function (data) {
            if (data['success']) {
                var url = DZZSCRIPT + '?mod=io&op=download&checkperm=false&path=' + share;
                if (BROWSER.ie) {
                    window.open(url);
                } else {
                    window.frames['hideframe'].location = url;
                }
            }
        }, 'json');
        return false;
    }
    //缩略图好列表选中操作
    jQuery(document).off('click.sharesclick').on('click.sharesclick', '.Icoblock', function (e) {
        if (_hotkey.ctrl > 0) {

            if (jQuery(this).hasClass('item-block')) {
                var rid = jQuery(this).closest('.Icoblock').data('dpath');
                var index = jQuery.inArray(rid, share);
                if (index != -1) {
                    share.splice(index, 1);
                }
                jQuery(this).removeClass('item-block');
            } else {
                var rid = jQuery(this).closest('.Icoblock').data('dpath');
                if (jQuery.inArray(rid, share) == -1) {
                    share.push(rid);
                }
                jQuery(this).closest('.Icoblock').addClass('item-block');
            }
        } else {
            if (jQuery(this).hasClass('item-block')) {
                var rid = jQuery(this).closest('.Icoblock').data('dpath');
                var index = jQuery.inArray(rid, share);
                if (index != -1) {
                    share.splice(index, 1);
                }
                jQuery(this).removeClass('item-block');
            } else {
                var rid = jQuery(this).closest('.Icoblock').data('dpath');
                if (jQuery.inArray(rid, share) == -1) {
                    share = [rid];
                }
                jQuery(this).closest('.Icoblock').addClass('item-block').siblings().removeClass('item-block');
            }
        }
        e.stopPropagation();
        sharelength();
    });
    //选中数量
    function sharelength() {
        if (share.length > 0) {
            jQuery('.sharepame-selected').show();
            jQuery('.navtopheader').show();
        } else {
            jQuery('.sharepame-selected').hide();
            jQuery('.navtopheader').hide();
        }
        jQuery('.ex-number').html(share.length);
    }
    function downAll(obj) {
        //var rids = $(obj).data('allrids');
        //var ridarr = rids.split(',');
        var rids = [];
        jQuery('div[data-value="true"]').each(function () {
            rids.push(jQuery(this).data('dpath'));
        });
        jQuery.post('<?php echo MOD_URL;?>&do=adddowns',{'sid':'<?php echo $_GET['sid'];?>'}, function (data) {
            if (data['success']) {
                var url = DZZSCRIPT + '?mod=io&op=download&checkperm=false&path=' + rids;
                if (BROWSER.ie) {
                    window.open(url);
                } else {
                    window.frames['hideframe'].location = url;
                }
            }
        }, 'json');
        return false;
    }

    /* function savefile(){
     if(uid == 0){
     location.href='<?php echo $_G['siteurl'];?>user.php?mod=login';
     return false;
     }
     jQuery.post('<?php echo MOD_URL;?>&do=adddowns&sid=<?php echo $_GET['sid'];?>', function(data) {
     if(data['success']) {
     var userhref = 'index.php?mod=system&op=selposition&handlekey=seldir&allowcreate=1&callback=save_file';
     showWindow('seldir',userhref,'get','0');
     }
     }, 'json');
     return false;
     }*/
    $(document).off('click.sharesave').on('click.sharesave', '.share_save', function () {
        if (uid == 0) {
            location.href = '<?php echo $_G['siteurl'];?>user.php?mod=login';
            return false;
        }
        jQuery.post('<?php echo MOD_URL;?>&do=adddowns',{'sid':'<?php echo $_GET['sid'];?>'}, function(data) {
         if(data['success']) {
             var userhref = 'index.php?mod=system&op=filewindow&handlekey=svaefile&type=2&perm=write&allowcreate=1&callback=save_file';
             showWindow('seldir', userhref, 'get', '0');
        	}
         }, 'json');
        return false;
    })
    //点击空白处，取消全选
    $(document).off('click.main-content').on('click.main-content', '#contains_content', function (e) {
        var target = $(e.target);
        if (target.closest('.main-content').length == 0) {
            $('.main-content').find('.item').removeClass('item-block');
            jQuery('.navtopheader').hide();
            jQuery('.ex-number').empty();
            share.length = 0;
        }
    })

    function allsave(obj) {
        if (uid == 0) {
            location.href = '<?php echo $_G['siteurl'];?>user.php?mod=login';
            return false;
        }
        var userhref = 'index.php?mod=system&op=filewindow&type=2&perm=write&allowcreate=1&callback=saveall_file';
        showWindow('seldir', userhref, 'get', '0');
    }
    function saveall_file(fid) {
        var rids = [];
        jQuery('div[data-value="true"]').each(function () {
            rids.push(jQuery(this).data('dpath'));
        });
        var rids = rids.join(',');
        $.post('<?php echo MOD_URL;?>&op=save', {'fid': fid, 'dzzrids': rids}, function (data) {
            var msg = '';
            for (var i in data.msg) {
                if (data.msg[i] === 'success') {
                    msg += '<p class="text-success">' + data.name[i] + '保存成功' + '</p>';
                } else {
                    msg += '<p class="text-danger">' + ((data.name[i]) ? data.name[i] : '') + data.error[i] + '</p>';
                }
            }
            showmessage(msg, 'info', 3000, 1, 'right-bottom');
        }, 'json');
    }
    function save_file(fid) {
        var rids = share.join(',');
        $.post('<?php echo MOD_URL;?>&op=save', {'fid': fid, 'dzzrids': rids}, function (data) {
            var msg = '';
            for (var i in data.msg) {
                if (data.msg[i] === 'success') {
                    msg += '<p class="text-success">' + data.name[i] + '保存成功' + '</p>';
                } else {
                    msg += '<p class="text-danger">' + ((data.name[i]) ? data.name[i] : '') + data.error[i] + '</p>';
                }
            }
            showmessage(msg, 'info', 3000, 1, 'right-bottom');
        }, 'json');
    }

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
</html><script src="static/bootstrap/js/bootstrap.min.js?<?php echo VERHASH;?>" ></script>