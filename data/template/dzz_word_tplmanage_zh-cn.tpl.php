<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:3:{s:62:"/opt/lampp/htdocs/dzzoffice//./dzz/word/template/tplmanage.htm";i:1585640819;s:83:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_simple_start.htm";i:1585620676;s:81:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_simple_end.htm";i:1585620676;}*/?>
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
<script type="text/javascript" src="./data/template/dzz_word_tplmanage_header_zh-cn.js" ></script><script type="text/javascript" src="static/js/header.js?<?php echo VERHASH;?>" ></script>
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
<link rel="stylesheet" href="static/popbox/popbox.css?<?php echo VERHASH;?>">
<link href="static/css/common.css?<?php echo VERHASH;?>" rel="stylesheet" media="all">
<link href="<?php echo MOD_PATH;?>/images/word.css?<?php echo VERHASH;?>" rel="stylesheet" media="all">
<script type="text/javascript" src="static/bootstrap/js/bootstrap.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="static/js/jquery.leftDrager.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="static/popbox/jquery.popbox.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="./data/template/dzz_word_tplmanage_index_zh-cn.js" ></script><script type="text/javascript" src="<?php echo MOD_PATH;?>/scripts/index.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="static/js/input_field.js" ></script>
<script type="text/javascript" src="<?php echo MOD_PATH;?>/scripts/jquery-ui.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="<?php echo MOD_PATH;?>/scripts/image_resize.js?<?php echo VERHASH;?>" ></script>
<style>
    body {
        background-color: #eee;
        min-width: 520px;
        padding-right: 0px !important;
    }
    .navbar-inverse {
        background-color: #396dcc;
    }
    .input-search .input-search-icon, .input-search .header-closebutton {
        left:20px;
    }
    .bs-container {
        background-color: rgb(66, 66, 73);
    }
</style><script type="text/javascript" src="./data/template/dzz_word_tplmanage_common_zh-cn.js" ></script><script type="text/javascript" src="static/js/common.js?<?php echo VERHASH;?>" ></script>
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
            <a href="<?php echo MOD_URL;?>" class="navbar-nav-left-appname"><?php echo lang(tpl_manage)?></a>
        </li>
    </ul>
</nav>
<div class="bs-container clearfix" style="height: 100%">
    <div class="bs-left-container  clearfix" style="height: 100%;">
        <div class="app-name"><a href=""><?php echo lang(docs)?></a></div>
        <div class="leftItem">
            <ul class="left-ul">
                <li><a href="index.php?mod=word&amp;op=setting"><i class="dzz dzz-settings"></i> <?php echo lang(settings)?></a></li>
            </ul>
        </div>
    </div>
    <div class="bs-main-container">
        <div class="main-content container clearfix" id="itemContainer" style="padding:0;height: 100%;width: 100%;margin-top: -64px;padding-top: 64px;">
            <div class="temptype-wrap">
                <div class="tempmanage">
                    <?php if(is_array($data)) foreach($data as $key => $value) { ?>                    <div class="temp-type clearfix" data-cid="<?php echo $key;?>">
                        <div class="temp-top1 clearfix">
                            <div class="type-name"><?php echo $tpl_cat[$key]['name'];?></div>
                            <div class="type-more dropdown">
                                <button class="btn btn-more dropdown-toggle" style="opacity: 1;" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="dzz dzz-more"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu1" aria-labelledby="dropdownMenu">
                                    <li><a style="cursor: pointer;" onclick="showWindow('rename-window','<?php echo MOD_URL;?>&op=ajax&do=showwindow&operation=rename&renametype=catrename&id=<?php echo $key;?>')"><?php echo lang(rename)?></a></li>
                                    <li><a style="cursor: pointer;" onclick="cat_delete(this)"><?php echo lang(delete_tpl)?></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tmpWrap temo clearfix">
                            <?php if(is_array($value)) foreach($value as $val) { ?>                            <div class="temp-item temp-item-type" data-tid="<?php echo $val['tid'];?>">
                                <div class="temp-img" onclick="opendoc('<?php if($setting['openurl']) { ?><?php echo $setting['openurl'];?>&path=<?php echo $val['path'];?><?php } ?>', 0, 1)"><img <?php if(!$val['cover_aid']) { ?>class="icon_img"<?php } ?> onload="image_resize(this)" src="<?php echo $val['img'];?>" alt=""></div>
                                <div class="temp-info">
                                    <div class="temp-name temp-name1"><?php echo $val['title'];?></div>
                                    <div class="temp-item-more dropdown">
                                        <button class="btn btn-more btn-more1 dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="dzz dzz-more"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu3" style="margin-top: 0;">
                                            <li><a style="cursor: pointer;" onclick="showWindow('rename-window','<?php echo MOD_URL;?>&op=ajax&do=showwindow&operation=rename&renametype=tplrename&id=<?php echo $val['tid'];?>')"><?php echo lang(rename)?></a></li>
                                            <li><a style="cursor: pointer;" onclick="tpl_delete(this)"><?php echo lang(delete_tpl)?></a></li>
                                            <li><a style="cursor: pointer;" class="ccover"><?php echo lang(change_cover)?>                                                <input type="file" name="files[]" class="upload uploadbg" multiple="multiple" title="<?php echo lang('recommended_size')?>" accept="image/png,image/gif,image/jpeg" />
                                            </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <!--添加模板-->
                            <a class="add-temp add-temp-type temp-item-type">
                                <i class="dzz dzz-add-circle add-btn"></i>
                                <div class="add-info"><?php echo lang(add_tpl)?></div>
                                <input type="file" name="files[]" class="upload uploadtpl" multiple="multiple" title=" " accept="application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document" />
                            </a>
                        </div>
                        <div class="line"></div>
                    </div>
                    <?php } ?>
                    <div class="addtype">
                        <a class="addBtn" style="cursor: pointer;" onclick="showWindow('addtype-window','<?php echo MOD_URL;?>&op=ajax&do=showwindow&operation=addtype')"><i class="dzz dzz-add-circle"></i> <?php echo lang(add_cat)?></a>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(document).ready(function(){
                init_upload();
                file_init_upload();
                jQuery(document).on('click','#fwin_rename-window',function (event) {
                    event.stopPropagation();
                })

            })
            function file_init_upload() {
                jQuery('.tmpWrap').sortable({
                    connectWith: ".temo",
                    items: ".temp-item-type",
                    cancel:'.add-temp-type',
//            排序完成后ajax 保存顺序
                    stop: function (event, ui) {
                        var cid=ui.item.closest('.temp-type').data('cid');
                        var tid=ui.item.data('tid');
                        jQuery.post('<?php echo MOD_URL;?>&op=tplmanage&do=movetpl', {"cid": cid,"tid":tid});
                    }
                }).disableSelection();

                //模板文件上传
                jQuery('.uploadtpl').fileupload({
                    url: '<?php echo MOD_URL;?>&op=tplmanage&do=uploadtpl',
                    dataType: 'json',
                    autoUpload: true,
                    maxChunkSize: (parseInt('<?php echo $_G['setting']['maxChunkSize'];?>') || 2000000), //2M
                    maxFileSize: parseInt('<?php echo $space['maxattachsize'];?>')>0?parseInt('<?php echo $space['maxattachsize'];?>'):null, // 5 MB
                    acceptFileTypes:new RegExp("(\.|\/)([doc|docx])$",'i'),
                    sequentialUploads:true

                }).on('fileuploadadd', function (e, data) {
                    data.context = jQuery('<div class="temp-item temp-item-type"></div>').insertBefore(jQuery(e.target).parent().parent().children(":first-child"));

                    jQuery.each(data.files, function (index, file) {
                        if(!file.name) file.name='new.doc';
                        var type_arr = new Array('application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document');
                        if(jQuery.inArray(file.type, type_arr) < 0){
                            showmessage('<?php echo lang(chose_doc_file)?>', 'error', 1000, 1);
                            jQuery(e.target).parent().parent().children(':first-child').remove();
                            return;
                        }
                        var html='<img src="<?php echo MOD_PATH;?>/images/loading.svg" alt="" width="50" style="margin: 59px 44px 121px;">';
                        jQuery(html).appendTo(data.context);
                    });
                }).on('fileuploadfail', function (e, data) {
                    showmessage('<?php echo lang(tpl_upload_failed)?>', 'error', 1000, 1);
                }).on('fileuploaddone', function (e, data) {
                    jQuery.each(data.result.files, function (index, file) {
                        if(file.error){
                            showmessage('<?php echo lang(tpl_upload_failed)?>', 'error', 1000, 1);
                        }else{
                            var name = file.data.filename;
                            var name = name.slice(0, name.lastIndexOf("."));
                            var aid = file.data.aid;
                            var cid = jQuery(e.target).parent().parent().parent().data('cid');
                            jQuery.post('<?php echo MOD_URL;?>&op=tplmanage&do=addtpl',
                                {
                                    'addtpl': true,
                                    'formhash': "<?php echo FORMHASH;?>",
                                    'cid': cid,
                                    'name': name,
                                    'aid': aid,
                                },
                                function(json){
                                    if(json.code == 200) {
                                        data.context.attr('data-tid', json.data.tid);
                                        var html =      '<div class="temp-img" onclick="opendoc(\''+json.openurl+'\', 0, 1)"><img class="icon_img" onload="image_resize(this)" src="'+json.data.img+'" alt=""></div>'
                                            + '<div class="temp-info">'
                                            + '<div class="temp-name temp-name1">'+name+'</div>'
                                            + '<div class="temp-item-more dropdown">'
                                            + '<button class="btn btn-more btn-more1 dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="dzz dzz-more"></i></button>'
                                            + '<ul class="dropdown-menu" aria-labelledby="dropdownMenu3"><li><a style="cursor: pointer;" onclick="showWindow(\'rename-window\',\'<?php echo MOD_URL;?>&op=ajax&do=showwindow&operation=rename&renametype=tplrename&id='+json.data.tid+'\')"><?php echo lang(rename)?></a></li><li><a style="cursor: pointer;" onclick="tpl_delete(this)"><?php echo lang(delete_tpl)?></a></li><li><a style="cursor: pointer;" class="ccover"><?php echo lang(change_cover)?><input type="file" name="files[]" class="upload uploadbg" multiple="multiple" title="<?php echo lang(recommended_size)?>" accept="image/png,image/gif,image/jpeg" /></a></li></ul>'
                                            + '</div> </div>';
                                        data.context.html(html);
                                        init_upload();
                                    } else {
                                        showmessage(json.message, 'error', 2000, 1);
                                        jQuery(e.target).parent().parent().children(':first-child').fadeOut(function(){jQuery(this).remove()});
                                    }
                                },
                                'json'
                            );
                        }
                    });
                });
            }

            function  init_upload() {

                //背景图片上传
                jQuery('.uploadbg').fileupload({
                    url: '<?php echo MOD_URL;?>&op=tplmanage&do=uploadbg',
                    dataType: 'json',
                    autoUpload: true,
                    maxChunkSize: (parseInt('<?php echo $_G['setting']['maxChunkSize'];?>') || 2000000), //2M
                    maxFileSize: parseInt('<?php echo $space['maxattachsize'];?>')>0?parseInt('<?php echo $space['maxattachsize'];?>'):null, // 5 MB
                    acceptFileTypes:new RegExp("(\.|\/)([jpeg|jpg|gif|png|bmp])$",'i'),
                    sequentialUploads:true

                }).on('fileuploadadd', function (e, data) {
                    jQuery.each(data.files, function (index, file) {
                        if(!file.name) file.name='new.jpg';
                        var type_arr = new Array('image/gif', 'image/png', 'image/jpg', 'image/jpeg');
                        if(jQuery.inArray(file.type, type_arr) < 0){
                            showmessage('<?php echo lang(chose_image_file)?>', 'error', 1000, 1);
                            return;
                        }
                    });
                }).on('fileuploadfail', function (e, data) {
                    showmessage('<?php echo lang(upload_failed)?>', 'error', 1000, 1);
                }).on('fileuploaddone', function (e, data) {
                    jQuery.each(data.result.files, function (index, file) {
                        if(file.error){
                            showmessage('<?php echo lang(upload_failed)?>', 'error', 1000, 1);
                        }else{
                            var tid = jQuery(e.target).parents(".temp-item").data("tid");
                            var aid = file.data.aid;
                            jQuery.post('<?php echo MOD_URL;?>&op=tplmanage&do=savebg',
                                {
                                    'savebg': true,
                                    'formhash': "<?php echo FORMHASH;?>",
                                    'tid': tid,
                                    'aid': aid,
                                },
                                function(json){
                                    if(json.code == 200) {
                                        jQuery(e.target).parents(".temp-item").find("img").removeClass('icon_img').attr('src', json.src);
                                    } else {
                                        showmessage(json.message, 'error', 2000, 1);
                                    }
                                },
                                'json'
                            );
                        }
                    });
                });
                //背景图片上传END
            }


            function tpl_delete(t) {
                showDialog('<?php echo lang(true_delete_tpl)?>','confirm','',function () {
                    var tid = jQuery(t).parents(".temp-item").data("tid");
                    jQuery.post("<?php echo MOD_URL;?>&op=tplmanage&do=tpl_delete", {'tid': tid}, function(data){
                        if(data.code == 200){
                            jQuery(t).parents(".temp-item").remove();
                        } else {
                            showmessage(data.message, 'danger', 1000, 1);
                        }
                    }, 'json')
                })

            }

            function cat_delete(t) {
                showDialog('<?php echo lang(true_delete_cat_tpl)?>','confirm','',function () {
                    var cid = jQuery(t).parents(".temp-type").data("cid");
                    jQuery.post("<?php echo MOD_URL;?>&op=tplmanage&do=cat_delete", {'cid': cid}, function(data){
                        jQuery(t).parents(".temp-type").remove();
                        showmessage(data.message, 'success', 1000, 1);
                    }, 'json')
                })
            }

        </script>
    </div>
</div>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script type="text/javascript" src="static/jquery_file_upload/jquery.ui.widget.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="static/jquery_file_upload/jquery.iframe-transport.js?<?php echo VERHASH;?>" ></script>
<!-- The basic File Upload plugin -->
<script type="text/javascript" src="static/jquery_file_upload/jquery.fileupload.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="static/jquery_file_upload/jquery.fileupload-process.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" src="./data/template/dzz_word_tplmanage_jquery_fileupload-validate_zh-cn.js" ></script><script type="text/javascript" src="static/jquery_file_upload/jquery.fileupload-validate.js?<?php echo VERHASH;?>" ></script>