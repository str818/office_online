<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:3:{s:57:"/opt/lampp/htdocs/dzzoffice//./dzz/word/template/ajax.htm";i:1585640819;s:75:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_ajax.htm";i:1585620676;s:75:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/footer_ajax.htm";i:1585620676;}*/?>
<?php if($operation == rename) { ?>
<!--重命名弹框--><?php ob_end_clean();
ob_start();
@header("Expires: -1");
@header("Cache-Control: no-store, private, post-check=0, pre-check=0, max-age=0", FALSE);
@header("Pragma: no-cache");
@header("Content-type: text/xml; charset=".CHARSET);
echo '<?xml version="1.0" encoding="'.CHARSET.'"?>'."\r\n";?><root><![CDATA[<div class="rename-wrap">
    <div class="modal-header">
        <button class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4><?php echo lang(rename)?></h4>
    </div>
    <div class="modal-body">
        <div class="input-black input-float" style="margin: 30px 0 20px 0">
            <label class="control-label input-label"><?php echo lang(input_file_name)?></label>
            <div class="input-animate">
                <input type="text" class="form-control rename-input" name="newname">
                <input type="hidden" name="renameid" value="<?php echo $id;?>">
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn btn-primary" onclick="rename()"><?php echo lang(confirms)?></button>
        <button class="btn btn-primary-outline" onclick="hideWindow('rename-window')"><?php echo lang(cancel)?></button>
    </div>
</div>
<script reload="1">
    jQuery(function () {
        jQuery('#fwin_rename-window .input-black').each(function(){
            InputAnimate.init(jQuery(this));
        })
        var id = jQuery("input[name='renameid']").val();
        var type = '<?php echo $_GET['renametype'];?>';
        if(type == 'tplrename') {
            var val = jQuery('.temp-item[data-tid="' + id + '"]').find(".temp-name").text();
        }else if(type == 'catrename') {
            var val=jQuery('.temp-type[data-cid="'+id+'"]').find(".type-name").text();

        }else if (type == 'rename') {
            var val=jQuery('.item[data-dpath="'+id+'"]').find(".edit-name").text();
        }

        if (val.lastIndexOf(".") >= 0) {
            val = val.substring(0, val.lastIndexOf("."));
        }
        jQuery('.rename-input').focus().val(val);
    })
    function rename(){
        var type = '<?php echo $_GET['renametype'];?>';
        var newname = jQuery("input[name='newname']").val();
        var id = jQuery("input[name='renameid']").val();
        if(type == 'tplrename'){
            var url = '<?php echo MOD_URL;?>&op=tplmanage&do=tpl_rename';
            var data = {'tid': id, 'title': newname, 'cid': '<?php echo $_GET["cid"];?>'};
        } else if (type == 'catrename') {
            var url = '<?php echo MOD_URL;?>&op=tplmanage&do=cat_rename';
            var data = {'cid': id, 'name': newname};
        } else if (type == 'rename') {
            var url = '<?php echo MOD_URL;?>&op=ajax&do=rename';
            var data = {'text': newname, 'path': id}
        }
        jQuery.post(url, data, function(data){
            if (type == 'tplrename') {
                jQuery('.temp-item[data-tid="'+id+'"]').find(".temp-name").html(newname);
            } else if (type == 'catrename') {
                jQuery('.temp-type[data-cid="'+id+'"]').find(".type-name").html(newname);
            } else if (type == 'rename') {
                jQuery('.item[data-dpath="'+id+'"]').find(".edit-name").html(data.name);
            }
            hideWindow("rename-window");
        }, 'json')
    }
</script><?php echo output_ajax(); ?>]]></root><?php exit;?><?php } elseif($operation == addtype) { ?>
<!--添加新类弹框--><?php ob_end_clean();
ob_start();
@header("Expires: -1");
@header("Cache-Control: no-store, private, post-check=0, pre-check=0, max-age=0", FALSE);
@header("Pragma: no-cache");
@header("Content-type: text/xml; charset=".CHARSET);
echo '<?xml version="1.0" encoding="'.CHARSET.'"?>'."\r\n";?><root><![CDATA[<div class="rename-wrap">
    <div class="modal-header">
        <button class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4><?php echo lang(add_cat)?></h4>
    </div>
    <div class="modal-body">
        <div class="input-black input-float" style="margin: 30px 0 20px 0">
            <label class="control-label input-label"><?php echo lang(input_cat_name)?></label>
            <div class="input-animate">
                <input type="text" class="form-control" name="newcatname">
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn btn-primary" onclick="create()"><?php echo lang(confirms)?></button>
        <button class="btn btn-primary-outline" onclick="hideWindow('addtype-window')"><?php echo lang(cancel)?></button>
    </div>
</div>
<script reload="1">
    jQuery(function () {
        jQuery('#fwin_addtype-window .input-black').each(function(){
            InputAnimate.init(jQuery(this));
        })
    })

    function create(){
        var name = jQuery("input[name='newcatname']").val();
        jQuery.post("<?php echo MOD_URL;?>&op=tplmanage&do=addtplcat", {'name': name}, function(data){
            var html = '<div class="temp-type" data-cid="'+data.data.cid+'">'
                        + '<div class="temp-top1 clearfix">'
                        + '<div class="type-name">'+data.data.name+'</div>'
                        + '<div class="type-more dropdown"><button class="btn btn-more dropdown-toggle" style="opacity: 1;" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="dzz dzz-more"></i></button>'
                        + '<ul class="dropdown-menu dropdown-menu1" aria-labelledby="dropdownMenu">'
                        + '<li><a style="cursor: pointer;" onclick="showWindow(\'rename-window\',\'<?php echo MOD_URL;?>&op=ajax&do=showwindow&operation=rename&renametype=catrename&id='+data.data.cid+'\')"><?php echo lang(rename)?></a></li>'
                        + '<li><a style="cursor: pointer;" onclick="cat_delete(this)"><?php echo lang(delete_tpl)?></a></li>'
                        + '</ul>'
                        + '</div>'
                        + '</div>'
                        + '<div class="tmpWrap temo clearfix">'
                        + '<a class="add-temp add-temp-type"><i class="dzz dzz-add-circle add-btn"></i><div class="add-info"><?php echo lang(add_tpl)?></div><input type="file" name="files[]" class="upload uploadtpl" multiple="multiple" title=" " accept="application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document" /></a></div><div class="line"></div>'
                        + '</div>';
                jQuery(".tempmanage").prepend(html);
            file_init_upload();
        }, 'json')
        hideWindow('addtype-window');
    }
</script><?php echo output_ajax(); ?>]]></root><?php exit;?><?php } elseif($operation == addemptydoc) { ob_end_clean();
ob_start();
@header("Expires: -1");
@header("Cache-Control: no-store, private, post-check=0, pre-check=0, max-age=0", FALSE);
@header("Pragma: no-cache");
@header("Content-type: text/xml; charset=".CHARSET);
echo '<?xml version="1.0" encoding="'.CHARSET.'"?>'."\r\n";?><root><![CDATA[<div class="rename-wrap">
    <div class="modal-header">
        <button class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4><?php echo lang(create_file)?></h4>
    </div>
    <div class="modal-body">
        <div class="input-black input-float" style="margin: 30px 0 20px 0">
            <label class="control-label input-label"><?php echo lang(input_doc_name)?></label>
            <div class="input-animate">
                <input type="text" class="form-control" name="newtpl_name">
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn btn-primary" onclick="create()"><?php echo lang(confirms)?></button>
        <button class="btn btn-primary-outline" onclick="hideWindow('addemptydoc-window')"><?php echo lang(cancel)?></button>
    </div>
</div>
<script reload="1">
    jQuery(function () {
        jQuery('#fwin_addemptydoc-window .input-black').each(function(){
            InputAnimate.init(jQuery(this));
        })
    })
   function create(){
    var name = jQuery("input[name='newtpl_name']").val();
    jQuery.ajax({
        type: 'post',
        dataType: 'json',
        url: '<?php echo MOD_URL;?>&op=ajax&do=createnew',
        data: {'fid' : '<?php echo $setting['savepath'];?>', 'name' : name},
        async : false,
        success: function(data){
            if (data.code == 200) {
                jQuery.get('<?php echo MOD_URL;?>&op=ajax&do=getitem', {'rid': data.rid}, function(html){
                    if (jQuery(".edit-use").find('.temp-table').first().data('time') == 'today') {
                        jQuery(".edit-use").find('tr:eq(0)').before(jQuery(html).find('.item'));
                    } else {
                        jQuery('.edit-use').prepend(html);
                    }
                    showmessage('<?php echo lang(add_success)?>', 'success', 1000, 1);
                    jQuery(".edit-use").find('.item:eq(0)').animate({opacity:1}, 1000);
                })
            } else {
                showmessage(data.message, 'error', 1000, 1);
            }
            if ('<?php echo $setting["createtype"];?>' == '1') {
                opendoc('<?php if($setting['openurl']) { ?><?php echo $setting['openurl'];?>&path='+data.dpath+'<?php } ?>', data.rid, 1);
            }
        }
    })

    hideWindow('addemptydoc-window');
   }
</script><?php echo output_ajax(); ?>]]></root><?php exit;?><?php } elseif($operation == addbytpl) { ?>
    <?php ob_end_clean();
ob_start();
@header("Expires: -1");
@header("Cache-Control: no-store, private, post-check=0, pre-check=0, max-age=0", FALSE);
@header("Pragma: no-cache");
@header("Content-type: text/xml; charset=".CHARSET);
echo '<?xml version="1.0" encoding="'.CHARSET.'"?>'."\r\n";?><root><![CDATA[    <div class="rename-wrap">
        <div class="modal-header">
            <button class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4><?php echo lang(create_file)?></h4>
        </div>
        <div class="modal-body">
            <div class="input-black input-float" style="margin: 30px 0 20px 0">
                <label class="control-label input-label"><?php echo lang(input_doc_name)?></label>
                <div class="input-animate">
                    <input type="text" class="form-control" name="addbytpl_name">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" onclick="create()"><?php echo lang(confirms)?></button>
            <button class="btn btn-primary-outline" onclick="hideWindow('addbytpl-window')"><?php echo lang(cancel)?></button>
        </div>
    </div>
    <script reload="1">
        jQuery(function () {
            jQuery('#fwin_addbytpl-window .input-black').each(function(){
                InputAnimate.init(jQuery(this));
            })
        })
       function create(){
        var name = jQuery("input[name='addbytpl_name']").val();
        jQuery.ajax({
            type: 'post',
            dataType: 'json',
            url: '<?php echo MOD_URL;?>&op=ajax&do=addbytpl',
            data: {'tid': '<?php echo $_GET['tid'];?>', 'name': name},
            async : false,
            success: function(data){
                if (data.code == 200) {
                    jQuery.get('<?php echo MOD_URL;?>&op=ajax&do=getitem', {'rid': data.rid}, function(html){
                        if (jQuery(".edit-use").find('.temp-table').first().data('time') == 'today') {
                                jQuery(".edit-use").find('tr:eq(0)').before(jQuery(html).find('.item'));
                            } else {
                                jQuery('.edit-use').prepend(html);
                            }
                            showmessage('<?php echo lang(add_success)?>', 'success', 1000, 1);
                            jQuery(".edit-use").find('.item:eq(0)').animate({opacity:1}, 1000);
                    })
                    if ('<?php echo $setting["createtype"];?>' == '1') {
                        opendoc('<?php if($setting['openurl']) { ?><?php echo $setting['openurl'];?>&path='+data.dpath+'<?php } ?>', data.rid, 1);
                    }
                } else {
                    showmessage(data.message, 'error', 1000, 1);
                }
            }
        })

        hideWindow('addbytpl-window');
       }
    </script>
    <?php echo output_ajax(); ?>]]></root><?php exit;?><?php } ?>
