<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:3:{s:71:"/opt/lampp/htdocs/dzzoffice/dzzoffice//./dzz/explorer/template/ajax.htm";i:1589275828;s:85:"/opt/lampp/htdocs/dzzoffice/dzzoffice//./core/template/default/common/header_ajax.htm";i:1589274520;s:85:"/opt/lampp/htdocs/dzzoffice/dzzoffice//./core/template/default/common/footer_ajax.htm";i:1589274520;}*/?>
<?php ob_end_clean();
ob_start();
@header("Expires: -1");
@header("Cache-Control: no-store, private, post-check=0, pre-check=0, max-age=0", FALSE);
@header("Pragma: no-cache");
@header("Content-type: text/xml; charset=".CHARSET);
echo '<?xml version="1.0" encoding="'.CHARSET.'"?>'."\r\n";?><root><![CDATA[<?php if($operation == 'addgroup') { ?>
<!--新建群组-->
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="dzz dzz-close"></span>
    </button>
    <h4 class="modal-title">新建群组</h4>
</div>
<form class="form-horizontal" action="<?php echo MOD_URL;?>&op=ajax&operation=addgroup" method="post"
      onsubmit="return addgroup_submit(this)">
    <input type="hidden" name="arr[aid]" value="" id="defaultcolor"/>
    <div class="modal-body group-top">
        <div class="form-group">
            <div class="input-black input-float col-md-12 col-sm-12">
                <label class="control-label  input-label">名称</label>
                <div class="input-animate">
                    <input type="text" class="form-control" name="arr[orgname]">
                    <p id="name_error" class="input-error"></p>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="input-black input-float col-md-12 col-sm-12">
                <label class="control-label input-label">介绍</label>
                <div class="input-animate">
                    <input type="text" class="form-control" name="arr[desc]">
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">新建</button>
        <button type="button" class="btn btn-default-outline cancel" data-dismiss="modal" aria-label="Close">取消
        </button>
    </div>

</form>
<script type="text/javascript" reload="1">

    //index添加群组弹出框头像
    jQuery(document).ready(function (e) {
        $('.input-black').each(function () {
            InputAnimate.init($(this));
        });
        var colors = ['#6b69d6', '#a966ef', '#e9308d', '#e74856', '#f35b42', '#00cc6a', '#0078d7', '#5290f3', '#00b7c3', '#0099bc', '#018574', '#c77c52', '#ff8c00', '#68768a', '#7083cb', '#26a255'];
        var num = parseInt(Math.random() * 10);
        $('#defaultcolor').val(colors[num]);
    });
    $(document).on('mouseenter', '.head-portrait', function () {
        $(this).addClass('head-hover');

    })
    $(document).on('mouseleave', '.head-portrait', function () {
        $(this).removeClass('head-hover');

    })
    function addgroup_submit(form) {
        var groupname = form['arr[orgname]'].value;
        $.post(form.action, $(form).serialize(), function (data) {
            if (data['success']) {
                $('img_error').html();
                $('name_error').html();
                gid = data['gid'];
                newgroupgid = data['gid'];
                var html = '<li class="document-data" data-href="index.php?mod=explorer&amp;op=group" data-hash="group' + gid + '" data-args="gid_' + gid + '">' + groupname + '</li>';
                if ($('#group_menu').find('.document-data').length < 1) {
                    $('#group_menu').html(html);
                } else {
                    $('#group_menu').append(html);
                }
                hideWindow('newGroup');
                var userhref = 'index.php?mod=system&op=selorguser&callback=adduser_group&stype=2&moderator=0&multiple=1&ids=<?php echo $_G['uid'];?>';
                showWindow('adduser', userhref, 'get', '0')
                //showWindow('adduser', _explorer.appUrl + '&op=group&do=group_ajax&operation=addgroupuser&gid=' + gid);
            } else if (data['error']) {
                $('#' + data['pos'] + '_error').html(data['msg']);
            }
        }, 'json')
        return false;
    }
</script>
<?php } elseif($operation == 'selectperm') { ?>
<!--目录权限-->
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="dzz dzz-close"></span>
    </button>
    <h4 class="modal-title" id="myModalLabel">目录权限</h4>
</div>
<form>
    <div class="modal-body">
        <?php if(!$noperm) { ?>
        <div class="Nfolder-con clearfix">
            <div class="Nfolder-left col-md-4 col-sm-4 col-xs-4 col-lg-4">
                <p>选择权限：</p>
                <ul style="height: 300px;overflow: auto;" id="permgroup">

                    <li <?php if(!$inherit) { ?>class="hide"<?php } ?>>
                    <div class="radio-custom radio-default">
                        <input type="radio" class="inputRadios" name="inputRadios" value="<?php echo $inheritperm;?>"
                               id="<?php echo $inheritperm;?>"
                        <?php if($groupperm == $inheritperm) { ?>checked="checked"<?php } ?>/>
                        <label class="lbook-label" for="<?php echo $inheritperm;?>"><span>继承上级权限</span></label>
                    </div>
                    </li>
                    <?php if($new) { ?>
                    <?php if(is_array($permgroups)) foreach($permgroups as $val) { ?>                    <li>
                        <div class="radio-custom radio-default">
                            <input type="radio" class="inputRadios" name="inputRadios" value="<?php echo $val['perm'];?>"
                                   id="<?php echo $val['perm'];?>" <?php if($val['default']) { ?>checked="checked"<?php } ?>/>
                            <label class="lbook-label" for="<?php echo $val['perm'];?>"><span><?php echo $val['pername'];?></span></label>
                        </div>
                    </li>
                    <?php } ?>
                    <?php } else { ?>
                    <?php if(is_array($permgroups)) foreach($permgroups as $val) { ?>                    <li>
                        <div class="radio-custom radio-default">
                            <input type="radio" class="inputRadios" name="inputRadios" value="<?php echo $val['perm'];?>"
                                   id="<?php echo $val['perm'];?>"
                            <?php if($groupperm && $groupperm == ($val['perm'])) { ?>checked="checked"<?php } ?>/>
                            <label class="lbook-label" for="<?php echo $val['perm'];?>"><span><?php echo $val['pername'];?></span></label>
                        </div>
                    </li>
                    <?php } ?>
                    <?php } ?>

                </ul>
            </div>
            <div class="Nfolder-right col-md-8 col-sm-8 col-xs-8 col-lg-8">
                <p><span>权限说明：</span></p>
                <ul class="select-properties" id="select_perm">
                    <?php if(is_array($perms)) foreach($perms as $k => $v) { ?>                    <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="checkbox-custom checkbox-primary">
                            <input type="checkbox" value="<?php echo $v['1'];?>" name="selectperm[]" id="<?php echo $v['1'];?>"
                            <?php if($v['1'] & $groupperm) { ?>
                            checked="checked" <?php } ?>>
                            <label for="<?php echo $v['1'];?>">
                                <div class="all-yourself">
                                    <span class="<?php echo $v['2'];?> view-eidt perm_chk" data-perm="<?php echo $v['1'];?>"></span><span><?php echo $v['0'];?></span>
                                </div>
                            </label>
                        </div>

                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <?php } ?>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="chk_create(this.form)">确认</button>
        <button type="button" class="btn btn-default-outline" data-dismiss="modal">取消</button>
    </div>
</form>
<script type="text/javascript" reload="1">
    var permval = 0;
    $(function () {
        var perms = $('#permgroup input.inputRadios').filter(':checked').val();
        if (typeof perms != 'undefined') {
            $('#select_perm li input[name="selectperm[]"]').each(function () {
                var perm = $(this).val();
                if (perm & perms) {
                    $(this).prop('checked', true);
                } else {
                    $(this).prop('checked', false);
                }
            })
        }
    })
    $('#permgroup input.inputRadios').change(function () {
        var perms = $(this).val();
        permval = parseInt(perms);
        $('#select_perm li input[name="selectperm[]"]').each(function () {
            var perm = $(this).val();
            if (perm & perms) {
                $(this).prop('checked', true);
            } else {
                $(this).prop('checked', false);
            }
        })
    })

    $('#select_perm li input[name="selectperm[]"]').each(function () {
        $(this).change(function () {
            var perm = $(this).val();
            if ($(this).prop('checked')) {
                permval += parseInt(perm);
            } else {
                permval -= parseInt(perm);
            }
            chk_permgroup();
        })
    })
    function chk_permgroup() {
        $('#permgroup input.inputRadios').each(function () {
            var perm = parseInt($(this).val());
            if (permval == perm) {
                $(this).prop('checked', true);
            } else {
                $(this).prop('checked', false);
            }
        })
    }
    function chk_create(form) {
        $.post('index.php?mod=explorer&op=ajax&operation=selectperm&permsubmit=true&fid=<?php echo $fid;?>&gid=<?php echo $gid;?>&new=<?php echo $new;?>&setting=<?php echo $setting;?>', $(form).serialize(), function (data) {
            if (data['success']) {
                if ('<?php echo $new;?>' == 1) {
                    hideWindow('select_perm');
                    var node = $('#position').jstree(true).get_node('#group');
                    $('#position').jstree('refresh', node);
                    $('#position').jstree('correct_state', node);
                    location.hash = '#group&gid=<?php echo $gid;?>';

                } else if ('<?php echo $setting;?>') {
                    hideWindow('select_perm');
                    location.reload();
                } else {
                    hideWindow('select_perm');
                }
            }

        }, 'json');
    }
</script>
<?php } elseif($operation == 'addsearchcat') { ?>
<!--新建类型-->
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="dzz dzz-close"></span>
    </button>
    <h4 class="modal-title" id="myModalLabel">新建类型</h4>
</div>
<form action="<?php echo MOD_URL;?>&op=ajax&operation=addsearchcat" method="post" onsubmit="addsearchcat(this);return false;">
    <div class="modal-body group-top">
        <div class="custom-label">
            <div class="input-black input-float col-md-12 col-sm-12">
                <label class="control-label input-label">类型名称</label>
                <div class="input-animate">
                    <input type="text" class="form-control" <?php if($cat) { ?>value="<?php echo $cat['catname'];?>"<?php } ?>
                    name="arr[catname]" max="20">
                </div>
            </div>
            <div class="input-black input-float input-select2 col-md-12 col-sm-12">
                <label class="control-label input-label">文件扩展名(多个扩展名用回车分隔)</label>
                <div class="input-animate">
                    <input type="text" class="form-control taginput" name="arr[ext]" reload="1"
                           value="<?php echo $cat['ext'];?>" data-source="">
                </div>
            </div>
            <div class="input-black input-float input-select2 col-md-12 col-sm-12">
                <label class="control-label input-label">标签(多个标签用回车分隔)</label>
                <div class="input-animate">
                    <input type="text" class="form-control taginput" name="arr[tag]" value="<?php echo $cat['tag'];?>">
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <?php if($cat) { ?>
        <?php if(!$cat['default']) { ?>
        <div class="btn-rdedanger pull-left" onclick="delete_searchcat('<?php echo $cat['id'];?>')"><span class="dzz dzz-delete"></span><span>删除类型</span>
        </div>
        <?php } else { ?>
        <div class="btn-gaydanger pull-left"><span class="dzz dzz-info"></span><span>系统预设类型，不允许删除</span>
        </div>
        <?php } ?>
        <input type="hidden" name="editcatsearch" value="<?php echo $cat['id'];?>"/>
        <button type="button" class="btn btn-primary" onclick="editsearchcat(this.form)">保存</button>
        <button type="button" class="btn btn-default-outline" data-dismiss="modal">取消</button>

        <?php } else { ?>
        <input type="hidden" name="addcatsearch" value="true"/>
        <button type="button" class="btn btn-primary" onclick="addsearchcat(this.form)">创建</button>
        <button type="button" class="btn btn-default-outline" data-dismiss="modal">取消</button>
        <?php } ?>
    </div>
</form>

<script type="text/javascript" reload="1">
    //标签input框
    $(document).ready(function () {
        jQuery('input.taginput').each(function () {
            $(this).tagsInput({
                'width': '100%',
                'height': 'auto',
                'interactive': true,
                'defaultText': '',
                'removeWithBackspace': true,
                'minChars': 0,
                'maxChars': 0,
                'placeholderColor': '#666666',
                'typeahead': {
                    source: $(this).data('source')
                }
            });
        });


        $('.input-black').each(function () {
            InputAnimate.init($(this));
        });
    });
    function addsearchcat(form) {
        var formdata = $(form).serialize();
        var dataform = $(form).serializeArray();
        $.post(form.action, formdata, function (data) {
            if (data['success']) {
                var html = ' <p class="pictures document-data" data-href="<?php echo MOD_URL;?>&op=catsearch" id="searchcat_' + data['insertid'] + '" ' +
                    'data-hash="catsearch&do=searchfile&id=' + data['insertid'] + '" data-args="do_searchfile-id_' + data['insertid'] + '"> ' +
                    '<span class="glyphicon glyphicon-file"></span>' + dataform[0]['value'] + '</p>';
                $('.typeaMenu').append(html);
                hideWindow('addsearchcat');
                //showDialog('添加成功','right');
                location.hash = '#catsearch&do=searchfile&id=' + data['insertid'];
            } else {
                hideWindow('addsearchcat');
                showDialog(data['msg']);
            }
        }, 'json')
    }
    function editsearchcat(form) {
        var formdata = $(form).serialize();
        var dataform = $(form).serializeArray();
        var catid = '<?php echo $cat['id'];?>';
        $.post(form.action, formdata, function (data) {
            if (data['success']) {
                var html = ' <p class="pictures document-data" data-href="<?php echo MOD_URL;?>&op=catsearch" id="searchcat_' + catid + '" ' +
                    'data-hash="catsearch" data-args="do_searchfile-id_' + catid + '"> ' +
                    '<span class="glyphicon glyphicon-file"></span>' + dataform[0]['value'] + '</p>';
                $('#searchcat_' + catid).replaceWith(html);
                hideWindow('editcatsearch');
                showDialog('更新成功', 'right');
                setTimeout(function () {
                    location.reload();
                }, 2000);
                return false;
            } else {
                hideWindow('editcatsearch');
                showDialog('保存失败');
            }
            return false;
        }, 'json');
        return false;
    }
    function delete_searchcat(id, msg, title) {
        var msg = '<span class="delect_text_red">' + '删除后将不可恢复！' + '</span>';
        var title = '<span class="delect-title-normal">' + '确定要删除类型' + '<span>';
        showDialog(msg, 'confirm', title, function () {
            $.post('<?php echo MOD_URL;?>&op=ajax&operation=delsearchcat&id=<?php echo $cat['id'];?>', {'delcat': true}, function (data) {
                if (data['success']) {
                    hideWindow('editcatsearch');
                    $('#searchcat_' + data['catid']).remove();
                    showDialog('删除成功！', 'right');
                    location.hash = '#catsearch&do=searchfile&id=' + data['previd'];
                } else {
                    hideWindow('editcatsearch');
                    showDialog('删除失败！');
                }
            }, 'json')
        })


    }
</script>
<?php } elseif($operation == 'newFolder' && $permselect) { if(!isset($arr['error'])) { ?>
<!--新建文件夹-->
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="dzz dzz-close"></span>
    </button>
    <h4 class="modal-title">新建文件夹</h4>
</div>
<form onsubmit=" return chk_create(this);">
    <div class="modal-body group-top">
        <div class="input-black input-float col-md-12 col-sm-12 clearfix">
            <label class="control-label input-label">新建文件夹</label>
            <div class="input-animate">
                <input type="text" class="form-control" name="foldername">
            </div>
        </div>
        <?php if(!$noperm) { ?>
        <div class="Nfolder-con clearfix">
            <div class="Nfolder-left col-md-4 col-sm-4 col-xs-4 col-lg-4">
                <p>选择权限：</p>
                <ul style="height: 300px;overflow: auto;" id="permgroup">
                    <li>
                        <div class="radio-custom radio-primary">
                            <input type="radio" class="inputRadios" name="inputRadios" value="<?php echo $inheritperm;?>"
                                   checked="checked" id="<?php echo $inheritperm;?>"/>
                            <label class="lbook-label" for="<?php echo $inheritperm;?>"><span>继承上级权限</span></label>
                        </div>
                    </li>
                    <?php if(is_array($permgroups)) foreach($permgroups as $val) { ?>                    <li>
                        <div class="radio-custom radio-primary">
                            <input type="radio" class="inputRadios" name="inputRadios" value="<?php echo $val['perm'];?>"
                                   id="<?php echo $val['perm'];?>"
                            <?php if($inheritperm == $val['perm']) { ?>checked="checked"<?php } ?>/>
                            <label class="lbook-label" for="<?php echo $val['perm'];?>"><span><?php echo $val['pername'];?></span></label>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="Nfolder-right col-md-8 col-sm-8 col-xs-8 col-lg-8">
                <p><span>权限说明：</span></p>
                <ul class="properties-Nexplain" id="select_perm">
                    <?php if(is_array($perms)) foreach($perms as $k => $v) { ?>                    <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="checkbox-custom checkbox-primary">
                            <input type="checkbox" <?php if($inheritperm & $v['1']) { ?> checked="checked" <?php } ?>value="<?php echo $v['1'];?>"
                            name="selectperm[]" id="<?php echo $v['1'];?>">
                            <label for="<?php echo $v['1'];?>">
                                <div class="all-yourself">
                                    <span class="<?php echo $v['2'];?> view-eidt perm_chk" data-perm="<?php echo $v['1'];?>"></span><?php echo $v['0'];?>
                                </div>
                            </label>
                        </div>

                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <?php } ?>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">创建</button>
        <button type="button" class="btn btn-default-outline" data-dismiss="modal">取消</button>
    </div>
</form>
<script type="text/javascript" reload="1">
    //名称初始化
    jQuery(document).ready(function (e) {
        $('.input-black').each(function () {
            InputAnimate.init($(this));
        });
    });
    var permval = 0;
    $(function () {
        var perms = $('#permgroup input.inputRadios').filter(':checked').val();
        if (perms) {
            $('#select_perm li input[name="selectperm[]"]').each(function () {
                var perm = $(this).val();
                if (perm & perms) {
                    $(this).prop('checked', true);
                } else {
                    $(this).prop('checked', false);
                }
            })
        }

    })
    $('#permgroup input.inputRadios').change(function () {
        var perms = $(this).val();
        permval = parseInt(perms);
        $('#select_perm li input[name="selectperm[]"]').each(function () {
            var perm = $(this).val();
            if (perm & perms) {
                $(this).prop('checked', true);
            } else {
                $(this).prop('checked', false);
            }
        })
    })

    $('#select_perm li input[name="selectperm[]"]').each(function () {
        $(this).change(function () {
            var perm = $(this).val();
            if ($(this).prop('checked')) {
                permval += parseInt(perm);
            } else {
                permval -= parseInt(perm);
            }
            chk_permgroup();
        })
    })
    function chk_permgroup() {
        $('#permgroup input.inputRadios').each(function () {
            var perm = parseInt($(this).val());
            if (permval == perm) {
                $(this).prop('checked', true);
            } else {
                $(this).prop('checked', false);
            }
        })
    }
    function chk_create(form) {
        $.post('<?php echo MOD_URL;?>&op=ajax&operation=newFolder&createfolder=true&fid=' + '<?php echo $fid;?>', $(form).serialize(), function (data) {
            if (data.msg == 'success') {
                _explorer.sourcedata.icos[data.rid] = data;
                _filemanage.cons['f-' + '<?php echo $fid;?>'].CreateIcos(data);
                var node = jQuery('#u-' + data.pfid + ',#f-' + data.pfid)
                jQuery('#position').jstree('refresh', node);
                jQuery('#position').jstree('correct_state', node);
                hideWindow('newFolder');
            } else {
                showDialog(data.error);
            }

        }, 'json');
        return false;
    }
</script>
<?php } else { ?>
<script>
    showDialog('<?php echo $arr['error'];?>');
</script>
<?php } } elseif($operation == 'property') { ?>
<style>
    @media (min-width: 768px ) {
        #fwin_$ _GET[handlekey] .modal-dialog {
            width: 516px;
        }
    }
</style>
<?php if(!$error) { ?>
<form onsubmit="return editsvae(this);">
    <div class="modal-header email-title">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="dzz dzz-close"></span>
        </button>
        <h4 class="modal-title"><?php if($propertys['name']) { ?><?php echo $propertys['name'];?><?php } ?>属性</h4>
    </div>
    <div class="modal-body nature-body">
        <?php if($propertys['name']) { ?>
        <div class="nature-from clearfix">
            <div class="input-black input-float col-md-12 col-sm-12">
                <label class="control-label input-label">名称</label>
                <div class="input-animate">
                    <input type="hidden" name="path" value="<?php echo $propertys['rid'];?>"/>
                    <input type="text" class="form-control"  <?php if(!$propertys['editperm']) { ?>readonly="readonly"
                    <?php } ?>name="text"
                    value="<?php echo $propertys['name'];?>">
                </div>
            </div>

        </div>
        <?php } ?>
        <div class="custom-from clearfix">
            <div class="file-nature clearfix">
                <label class="col-md-4 col-sm-4 col-xs-4">类型</label>
                <div class="col-md-8 col-sm-8 col-xs-8 label-text"><?php echo $propertys['type'];?></div>
            </div>
            <div class="file-nature clearfix">
                <label class="col-md-4 col-sm-4 col-xs-4">位置</label>
                <div class="col-md-8 col-sm-8 col-xs-8 label-text"><?php echo $propertys['realpath'];?></div>
            </div>
            <div class="file-nature clearfix">
                <label class="col-md-4 col-sm-4 col-xs-4">所有者</label>
                <div class="col-md-8 col-sm-8 col-xs-8 label-text"><?php echo $propertys['username'];?></div>
            </div>
            <?php if($propertys['contain']) { ?>
            <div class="file-nature clearfix">
                <label class="col-md-4 col-sm-4 col-xs-4">包含</label>
                <div class="col-md-8 col-sm-8 col-xs-8 label-text"><?php echo $propertys['contain'];?></div>
            </div>
            <?php } ?>
            <div class="file-nature clearfix">
                <label class="col-md-4 col-sm-4 col-xs-4">大小</label>
                <div class="col-md-8 col-sm-8 col-xs-8 label-text"><?php echo $propertys['fsize'];?></div>
            </div>
            <?php if($propertys['editdateline']) { ?>
            <div class="file-nature clearfix">
                <label class="col-md-4 col-sm-4 col-xs-4">上次修改时间</label>
                <div class="col-md-8 col-sm-8 col-xs-8 label-text"><?php echo $propertys['editdateline'];?></div>
            </div>
            <?php } ?>
            <?php if($propertys['opendateline']) { ?>
            <div class="file-nature clearfix">
                <label class="col-md-4 col-sm-4 col-xs-4">上次打开时间</label>
                <div class="col-md-8 col-sm-8 col-xs-8 label-text"><?php echo $propertys['opendateline'];?></div>
            </div>
            <?php } ?>
            <?php if($propertys['fdateline']) { ?>
            <div class="file-nature clearfix">
                <label class="col-md-4 col-sm-4 col-xs-4">创建时间</label>
                <div class="col-md-8 col-sm-8 col-xs-8 label-text"><?php echo $propertys['fdateline'];?></div>
            </div>
            <?php } ?>

        </div>

    </div>
    <div class="modal-footer">
        <?php if($propertys['editperm'] && $propertys['name']) { ?>
        <button type="submit" class="btn btn-primary">提交</button>
        <?php } ?>
        <button type="button" class="btn btn-default-outline" data-dismiss="modal">关闭</button>
    </div>

</form>
<script type="text/javascript" reload="1">
    jQuery(document).ready(function (e) {
        $('.input-black').each(function () {
            InputAnimate.init($(this));
        });
    });
    function editsvae(form) {
        var text = $(form).find('input[name="text"]').val();
        var path = $(form).find('input[name="path"]').val();
        var ico = _explorer.sourcedata.icos[path];
        filemanage = _filemanage.cons[_filemanage.winid];
        jQuery.ajax({
            type: 'post',
            url: _explorer.appUrl + '&op=dzzcp&do=rename',
            data: {"text": text, "path": ico.dpath, "t": (new Date().getTime())},
            dataType: "json",
            success: function (json) {
                if (json.rid) {
                    _explorer.sourcedata.icos[json.rid].name = json.name;
                    filemanage.data[json.rid].name = json.name;
                    filemanage.CreateIcos(_explorer.sourcedata.icos[json.rid], true);
                    hideWindow('property');
                } else {
                    if (json.error) showmessage(json.error, 'danger', 3000, 1);
                }
            },
            error: function () {
                if (json.error) showmessage(json.error, 'danger', 3000, 1);
                showmessage('网络错误，请稍候重试！', 'danger', 3000, 1);
            }
        });
        return false;
    }
</script>
<?php } else { ?>
<script type="text/javascript" reload="1">
    showDialog('<?php echo $error;?>');
</script>
<?php } } elseif($operation == 'share') { if(!isset($arr['error'])) { ?>
<!--创建分享-->
<form action="<?php echo MOD_URL;?>&op=ajax&operation=share" method="post" onSubmit="return subshare(this);">
    <div class="modal-header email-title">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="dzz dzz-close"></span>
        </button>
        <h4 class="modal-title">创建分享</h4>
    </div>
    <div class="modal-body">
        <div class="form-group share-click clearfix">
            <div class="input-black input-float col-md-12 col-sm-12 share-paddingleft">
                <label class="share-label-bluer">分享标题:</label>
                <div class="input-animate share-input-text">
                    <input type="text" class="form-control" name="share[title]" value="<?php echo $share['title'];?>"/>
                    <input type="hidden" name="rid" value="<?php echo $files;?>"/>
                    <input type="hidden" name="id" value="<?php echo $share['id'];?>" id="shareid"/>
                    <input type="hidden" name="delshare" <?php if($share['id']) { ?> value="1"<?php } else { ?>value="0"
                    <?php } ?> id="delshare" />

                </div>
            </div>
        </div>
        <div class="form-group share-click clearfix">
            <div class="input-black input-float col-sm-7 col-md-7 share-paddingleft">
                <label class="share-label-bluer">到期时间:</label>
                <div class="input-animate share-input-text">
                    <input type="text" class="form-control" placeholder="到期时间" name="share[endtime]"
                           id="selecttime" value="<?php echo $share['endtime'];?>"
                           value="<?php echo  ($share[endtime] && $share[endtime]!= 0)?$share[endtime]:''?>"/>
                </div>
            </div>
            <p class="col-sm-5 leace-blank">留空或0、不设置到期时间</p>
        </div>

        <div class="form-group share-click clearfix">
            <div class="input-black input-float col-sm-7 share-paddingleft">
                <label class="share-label-bluer">分享次数:</label>
                <div class="input-animate share-input-text">
                    <input type="text" class="form-control"
                           placeholder="分享限制次数" name="share[times]" value="<?php echo $share['times'];?>"/>
                </div>
            </div>
            <p class="col-sm-5 leace-blank">留空或0表示不限制</p>
        </div>
        <div class="form-group share-click clearfix">
            <div class="input-black input-float col-sm-7 share-paddingleft">
                <label class="share-label-bluer">提取密码:</label>
                <div class="input-animate share-input-text">
                    <input type="text" class="form-control"
                           placeholder="分享密码" name="share[password]"
                           value="<?php echo $share['password'];?>"/>
                </div>
            </div>
            <p class="col-sm-5 leace-blank">留空表示不设置密码</p>
        </div>

        <div class="form-group share-click clearfix" id="sharurldiv" <?php if(!$share['shareurl']) { ?>style="display:none;"
        <?php } ?>>
        <div class="input-black input-float col-sm-9 share-paddingleft">
            <label class="share-label-bluer">分享地址:</label>
            <div class="input-animate share-input-text">
                <input type="text" class="share-input-text aboutAnimate about-conte-input about-headinput form-control"
                       placeholder="复制地址" value="<?php echo $share['shareurl'];?>" id="shareurl" onfocus="this.select()"
                       style="padding-left: 1px;"/>

            </div>
        </div>
        <div class="share-copybutton col-sm-3">
            <button type="button" class="btn btn-default-outline js_copy" id="share_copy_<?php echo $share['id'];?>"
                    data-clipboard-target="#shareurl" data-clipboard-text="<?php echo $share['shareurl'];?>"
                    data-clipboard-action="copy" style="position: relative;">复制地址
            </button>
            <span class="alert copy-success  alert-success hide ">复制成功,请粘帖到您需要的地方</span>
        </div>
    </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left <?php if(!$share['shareurl']) { ?> hide <?php } ?> delshare"
                onclick="removeshare(this.form)">删除分享
        </button>
        <button type="submit" class="btn btn-primary" data-loading-text="创建中...">
            <?php if($share['id']) { ?>
            编辑分享
            <?php } else { ?>
            创建分享
            <?php } ?>
        </button>
        <button type="button" class="btn btn-default-outline" data-dismiss="modal">关闭</button>
    </div>
</form>
<script type="text/javascript" reload="1">
    jQuery(document).ready(function (e) {
        $('.input-black').each(function () {
            InputAnimate.init($(this));
        });
        jQuery.getScript('static/clipboard/clipboard.min.js?<?php echo VERHASH;?>', function () {
            jQuery('.js_copy').each(function () {
                var clipboard = new Clipboard(this);
                clipboard.on('success', function (e) {
                    jQuery(e.trigger).parent().find('.copy-success').removeClass('hide');
                    window.setTimeout(function () {
                        jQuery(e.trigger).parent().find('.copy-success').addClass('hide');
                    }, 1000);
                });
            });
        });

    });
    $("#selecttime").datepicker({ //添加日期选择功能
        numberOfMonths: 1, //显示几个月
        showButtonPanel: false, //是否显示按钮面板
        dateFormat: 'yy-mm-dd', //日期格式
        clearText: "清除", //清除日期的按钮名称
        closeText: "关闭", //关闭选择框的按钮名称
        yearSuffix: '年', //年的后缀
        showMonthAfterYear: true, //是否把月放在年的后面
        constrainInput: true,
        minDate: new Date(),
        setDate: 'date',
    });
    function subshare(form) {
        var button = $(form).find('button[type=submit]')
        button.text('编辑分享').button('loading');
        $.post(form.action, $(form).serialize(), function (data) {
            if (data['success']) {
                button.button('reset');
                $('#sharurldiv').show();
                $('#shareurl').val(data['shareurl']);
                $('#copyshare').data('clipboard', data['shareurl']);
                $(form).find('.delshare').removeClass('hide');
                $('#shareid').val(data['shareid']);
                $('#delshare').val(1);
                showmessage('分享创建成功', 'success', 3000, 1, 'right-bottom');
                if ('<?php echo $shareid;?>') {
                    _filemanage.getData(_explorer.appUrl + '&op=share&do=filelist&sid=share-list');
                }
            }
        }, 'json');
        return false;
    }
    function removeshare(form) {
        if (!confirm('删除分享后，发出的此分享链接都将失效，无法恢复，您确定要删除次分享吗？')) {
            return false;
        }
        $.post('<?php echo MOD_URL;?>&op=ajax&operation=share&do=del', $(form).serialize(), function (data) {
            if (data['success']) {
                if ($('#filemanage-share-list').length) {
                    var shareid = data['shareid'];
                    $('#filemanage-share-list').find('#Icoblock_detail_' + shareid + ',#shareinfo_' + shareid).remove();
                    filemanage = _filemanage.cons[_filemanage.winid];
                    filemanage.sum--;
                    filemanage.total--;
                    filemanage.selectInfo();
                }
                showmessage('分享删除成功', 'success', 3000, 1, 'right-bottom');
                hideWindow('share');
            }
        }, 'json')
    }


</script>
<?php } else { ?>
<script type="text/javascript">
    hideWindow('share');
    showDialog('<?php echo $arr['error'];?>');
</script>
<?php } } elseif($operation == 'showtips') { ?>
<!--群组创建成功或者失败提示框-->
<div class="modal-body judge"><?php echo $msgtext;?></div>
<div class="modal-footer">
    <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">确定</button>
</div>
<?php } elseif($operation == 'newLink') { if(!isset($arr['error'])) { ?>
<form onsubmit="return false;">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">添加网址</h4>
    </div>
    <div class="modal-body">
        <input type="text" class="form-control focus" value="http://" name="link">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="chk_link(this.form)">提交</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
    </div>
</form>
<script type="text/javascript" reload="1">
    function chk_link(form) {
        $.post(MOD_URL + '&op=ajax&operation=linkadd&createlink=true&fid=' + '<?php echo $fid;?>', $(form).serialize(), function (data) {
            if (data.msg == 'success') {
                _explorer.sourcedata.icos[data.rid] = data;
                _filemanage.cons['f-' + '<?php echo $fid;?>'].CreateIcos(data);
                hideWindow('newLink');
            } else {
                showDialog(data.error);
            }
        }, 'json')
    }
</script>
<?php } else { ?>
<script>
    showDialog('<?php echo $arr['error'];?>');
</script>
<?php } } elseif($operation == 'editFileVersionInfo') { ?>
<!--编辑版本信息-->
<form action="" method="post" onsubmit="return false;">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="dzz dzz-close"></span>
        </button>
        <h4 class="modal-title">编辑版本信息</h4>
    </div>
    <div class="modal-body group-top">
        <div class="col-md-12 col-sm-12 input-float input-black">
            <label class="control-label input-label">编辑版本信息</label>
            <div class="input-animate">
                <textarea class="form-control" id="vnametestarea" name="vname"><?php if(isset($versioninfo['vname'])) { ?> <?php echo $versioninfo['vname'];?>
                    <?php } ?></textarea>
            </div>

        </div>
    </div>
    <div class="modal-footer">
        <input type="hidden" name="rid" value="<?php echo $rid;?>"/>
        <input type="hidden" name="vid" value="<?php echo $vid;?>"/>
        <button type="submit" class="btn btn-primary saveversioninfo">保存</button>
        <button type="button" class="btn btn-default-outline" data-dismiss="modal">取消</button>
    </div>
</form>
<script type="text/javascript" reload="1">
    $(document).ready(function () {
        $('.input-black').each(function () {
            InputAnimate.init($(this));
        });
    });
    //编辑版本信息
    $(document).off('click.versioninfoedit').on('click.versioninfoedit', '.saveversioninfo', function () {
        var obj = $(this);
        var rid = $(this).closest('.modal-footer').find('input[name="rid"]').val();
        var vid = $(this).closest('.modal-footer').find('input[name="vid"]').val();
        var querydata = {};
        //如果未找到版本id,或者版本id为0,即此文件暂无版本,则获取其rid增加版本，并设置版本名称
        querydata['rid'] = rid;
        if (vid && vid != 0) {
            querydata['vid'] = vid;
        }
        var vname = $('#vnametestarea').val();
        var vnamePreg = /^\s*$/;
        if (vnamePreg.test(vname)) {
            showDialog('请输入版本名称');
            return false;
        } else {
            querydata['vname'] = vname;
        }
        $.post('<?php echo MOD_URL;?>&op=dzzcp&do=setversionname', querydata, function (data) {
            if (data['vid']) {
                if (querydata['vid']) {
                    if (querydata['vid'] == data['primaryvid']) {
                        var html = '<span class="nameMenu">' + vname + '</span><p class="versioninfos">' + data['fdateline'] +
                            '<span class="label label-gainsboro">主版本</span></p>';
                    } else {
                        var html = '<span class="nameMenu">' + vname + '</span><p class="versioninfos">' + data['fdateline'] + '</p>';
                    }
                    $('#version_' + data['vid']).find('div.unameMenu-upload').html(html);
                } else {
                    var html = '<span class="nameMenu">' + vname + '</span><p class="versioninfos">' + data['fdateline'] + '</p>';
                    $('#version_0').find('div.unameMenu-upload').html(html);
                }
                obj.data('vid', data['vid']);
                hideWindow('editfileversion');
            } else {
                showDialog(data['error']);
            }
        }, 'json')
        return false;
    })
</script>
<?php } elseif($operation=='tag') { ?>
<!--编辑标签-->
<form action="<?php echo MOD_URL;?>&op=ajax&operation=tag" method="post" onsubmit="save_tag(this);return false;">
    <input type="hidden" name="rid" value="<?php echo $rid;?>"/>
    <input type="hidden" name="addtag" value="1"/>
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="dzz dzz-close"></span>
        </button>
        <h4 class="modal-title">编辑标签</h4>
    </div>
    <div class="modal-body group-top edit-labeltags">
        <div class="col-md-12 col-sm-12">
            <div class="custom-from">
                <div class="input-black input-float col-md-12 col-sm-12">
                    <label class="control-label input-label">添加标签(多个标签用回车分隔)</label>
                    <div class="input-animate">
                        <input type="text" class="form-control taginput_tag" name="tags"
                               data-source="<?php echo $tagstr;?>" value="<?php echo $tagval;?>">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">保存</button>

        <button type="button" class="btn btn-default-outline" data-dismiss="modal">取消</button>
    </div>
</form>

<script type="text/javascript" reload="1">
    //标签input框
    $(document).ready(function () {
        $('.taginput_tag').tagsInput({
            'height': '0px',
            'width': '100%',
            'interactive': true,
            'defaultText': '',
            'removeWithBackspace': true,
            'minChars': 0,
            'maxChars': 0,
            'placeholderColor': '#666666',
            'typeahead': {
                source: $(this).data('source')
            }
        });
        $('.input-black').each(function () {
            InputAnimate.init($(this));
        });
    });
    function save_tag(form) {

        $.post(form.action, jQuery(form).serialize(), function (data) {
            if (data['success']) {
                var html = '';
                for (var o in data['tagsadd']) {
                    html += '<span class="label label-wathet" data-tid="' + data['tagsadd'][o]['tid'] + '" id="' + rid + '-' + data['tagsadd'][o]['tid'] + '">' + data['tagsadd'][o]['tagname'] + '</span>';
                }
                for (var o in data['tagsdel']) {
                    $('#' + rid + '-' + data['tagsdel'][o]['tid']).remove();
                }
                if ($('#taglist-' + rid).children('span').length < 1) {
                    $('#taglist-' + rid).html(html);
                    /* $('#taglist-' + rid).prev('div a.opentagwindow').text('编辑');*/
                } else {
                    $('#taglist-' + rid).append(html);
                }

                hideWindow('<?php echo $_GET['handlekey'];?>');
            } else {
                showDialog(data['error']);
            }
        }, 'json');
        return false;
    }
</script>
<?php } else { if(!isset($arr['error'])) { if($arr['type'] == 'folder') { ?>
<li class="liste typefolder"
    data-href="<?php echo MOD_URL;?>&op=group"
    data-hash="group<?php echo $arr['gid'];?>_file-<?php echo $arr['oid'];?>" data-args="gid_<?php echo $arr['gid'];?>-do_file-fid_<?php echo $arr['oid'];?>" data-fid="<?php echo $arr['oid'];?>"
    id="<?php echo $arr['rid'];?>" data-rid="<?php echo $arr['rid'];?>">
    <?php } else { ?>
<li class="liste typefile"  <?php if($arr['type'] == 'link') { ?>data-href="<?php echo $arr['url'];?>" <?php } else { ?>data-href="<?php echo dzzencode($arr[path]);?>"<?php } ?>
data-rid="<?php echo $arr['rid'];?>" data-ext="<?php echo $arr['ext'];?>" data-type="<?php echo $arr['type'];?>"data-name="<?php echo $arr['name'];?>" id="<?php echo $arr['rid'];?>">
<?php } ?>
<ul class="ul-file-li clearfix">
    <li class="td-file-name clearfix">
        <div class="checkbox-custom checkbox-primary">
            <input type="checkbox" class=" listecheck"/>
            <label></label>
        </div>
        <div class="fileitemMenu">
            <div class="imgMenu">
                <img src="<?php echo $_G['siteurl'];?><?php echo $arr['img'];?>" style="width: 30px;height: 30px;">
            </div>
            <div class="itemMenu clearfix">
                <div class="firstMenu ">
                    <div class="filenameMenu">
                        <?php echo $arr['name'];?>
                    </div>
                </div>
                <div class="iconleft">
                    <i onclick="collectfile(this)"
                       class="mstars <?php if($arr['collect']) { ?> yellowstars <?php } else { ?> fivestarts <?php } ?>"
                       title="加入收藏" data-rid="<?php echo $val['rid'];?>" data-collect="<?php echo $val['collect'];?>"></i>
                    <button type="button" class="mlabel tagmanage" title="标签" data-rid="<?php echo $arr['rid'];?>"></button>
                </div>
            </div>
        </div>
    </li>
    <li class="td-file-size"><span><?php echo $arr['fsize'];?></span></li>
    <li class="td-file-proprietor"><?php echo $arr['username'];?></li>
    <li class="td-file-time"><?php echo dgmdate($arr[dateline],'Y-m-d H:i:s')?></li>
</ul>
</li>

<?php } else { ?>
<script type="text/javascript" reload="1">
    closeModal('#exampleMultipleOne');
    // showWindow('#exampleMultipleOne', 'index.php?mod=explorer&op=ajax&operation=showtips&msg=<?php echo $arr['error'];?>');
    showDialog('<?php echo $arr['error'];?>');

</script>
<?php } } echo output_ajax(); ?>]]></root><?php exit;?>