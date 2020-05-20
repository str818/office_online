<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:3:{s:77:"/opt/lampp/htdocs/dzzoffice/dzzoffice//./dzz/explorer/template/right_menu.htm";i:1589275828;s:84:"/opt/lampp/htdocs/dzzoffice/dzzoffice//./dzz/explorer/template/fileright_dynamic.htm";i:1589275828;s:88:"/opt/lampp/htdocs/dzzoffice/dzzoffice//./dzz/explorer/template/template_dynamic_list.htm";i:1589275828;}*/?>
<!--右侧文件开始-->
<div class="rightBorder" id="rightinfo_content">
    <!--右侧头部开始-->
    <div class="briefMenu clearfix" id="rightfileinfo-<?php echo $fileinfo['rid'];?>">
        <div class="briefMenuimg">
            <img src="<?php echo $_G['siteurl'];?><?php echo $fileinfo['img'];?>" id="detailsimage">
            <p class="right-imgname"><span><?php echo $fileinfo['name'];?></span></p>
            <div class="toggRight toggright-icon">
                <span class="dzz dzz-close"></span>
            </div>
        </div>
    </div>
    <!--右侧头部结束-->
    <input type="hidden" value="<?php echo $fileinfo['rid'];?>" id="fileridinput"/>
    <!--右侧中间部分开始-->
    <div class="right-messagetable scroll-y" data-subtractor="<?php echo ($pfid || $rid)?53:0?>">
        <!--文件详情开始-->
        <div class="right_projectmain">
            <!--属性开始-->
            <div class="right-attribute">
                <div class="ensemble-left">
                    <div class="attribute-basic clearfix">
                        <p class="attribute-position">
                            <span class="attribute-width">类型</span>
                            <span class="detailed_contenter">
<?php echo $fileinfo['type'];?>
</span>
                        </p>
                        <p class="attribute-position">
                            <span class="attribute-width">位置</span>
                            <span class="detailed_contenter"><?php echo $fileinfo['realpath'];?></span></p>
                        <p class="attribute-position">
                            <span class="attribute-width">所有者</span>
                            <span class="detailed_contenter"><?php echo $fileinfo['username'];?></span></p>
                        <p class="attribute-position">
                            <span class="attribute-width">大小</span>
                            <span class="detailed_contenter"><?php echo $fileinfo['fsize'];?></span></p>
                        <p class="attribute-position">
                            <span class="attribute-width">上次修改时间</span>
                            <span class="detailed_contenter"><?php echo $fileinfo['editdateline'];?></span></p>
                        <p class="attribute-position">
                            <span class="attribute-width">上次打开时间</span>
                            <span class="detailed_contenter"><?php echo $fileinfo['opendateline'];?></span></p>
                        <p class="attribute-position">
                            <span class="attribute-width">创建时间</span>
                            <span class="detailed_contenter"><?php echo $fileinfo['fdateline'];?></span></p>
                    </div>
                </div>
            </div>
            <!--属性结束-->
            <!--标签开始-->
            <div class="right-label clearfix">
                <div class="ensemble-left">
                    <div class="right-newlabel clearfix">
                        <p class="right-labelname">标签</p>
                        <p class="right-addlabel">
                            <a href="javascript:;" class="opentagwindow"
                               onclick="showWindow('addTag','<?php echo MOD_URL;?>&op=ajax&operation=tag&rid=<?php echo $rid;?>','get',0)">
                                <span class="dzz dzz-create dzz-edit-button"></span>
                            </a>
                        </p>
                    </div>
                    <div class="right-morelabel" id="taglist-<?php echo $rid;?>">
                        <?php if($tags) { ?>
                        <?php if(is_array($tags)) foreach($tags as $v) { ?>                        <span class="label label-wathet" daat-tid="<?php echo $v['tid'];?>" id="<?php echo $rid;?>-<?php echo $v['tid'];?>"><?php echo $v['tagname'];?></span>
                        <?php } ?>
                        <?php } else { ?>
                        还未设置标签
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!--标签结束-->
            <?php if($fileinfo['isdelete'] < 1) { ?>
            <!--历史版本开始-->
            <div class="historyMenu historyedall">
                <div class="historyedition clearfix">
                    <p class="editionMenu">历史版本</p>
                    <?php if($editperm && $explorer_setting['fileVersion'] && ($explorer_setting['fileVersionNumber'] == 0 || $explorer_setting['fileVersionNumber'] > $versionnums )) { ?>
                    <p class="upload">
                        <a href="javascript:;">
                            <span>上传更新</span>
                            <input type="file" name="files[]" class="version_upload_file"/>
                        </a>
                    </p>
                    <?php } ?>
                </div>
                <ul class="unameMenu" id="versionmenulist">
                    <?php if($versions) { ?>
                    <?php if(is_array($versions)) foreach($versions as $v) { ?>                    <li class="unameMenu-list version_menu" id="version_<?php echo $v['vid'];?>">
                        <i class="round-drop"></i>
                        <div class="unameMenuicon-icons">
                            <div class="unameMenu-upload">
                                <?php if(!$v['vname']) { ?>
                                <span class="nameMenu"><?php echo $v['username'];?>上传于</span>
                                <p class="versioninfos"><?php echo dgmdate($v[dateline],'Y-m-d H:i:s');?>                                    <?php if($fileinfo['vid'] == $v['vid']) { ?><span class="label label-gainsboro">主版本</span>
                                    <?php } ?></p>
                                <?php } else { ?>
                                <span class="nameMenu"><?php echo $v['vname'];?></span>
                                <p class="versioninfos"><span class="versioninfo-dateline"><?php echo dgmdate($v[dateline],'Y-m-d H:i:s');?></span>
                                    <?php if($fileinfo['vid'] == $v['vid']) { ?><span class="label label-gainsboro">主版本</span>
                                    <?php } ?>
                                </p>
                                <?php } ?>
                            </div>
                            <p class="editMenu"><?php echo formatsize($v[size]);?></p>

                            <a href="javascript:;" class="group-editMenu dropdown-toggle" data-toggle="dropdown"><span
                                    class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-version">
                                <div class="h3-title">版本信息</div>
                                <li class="listedit-title">
                                    <a href="javascript:;" class="view_versions" data-dpath="<?php echo $fileinfo['dpath'];?>"
                                       data-vid="<?php echo $v['vid'];?>" onclick="viewversion(this)">
                                        <span class="dzz dzz-visibility"></span>预览
                                    </a>
                                </li>
                                <?php if($fileinfo['editperm']) { ?>
                                <li class="listedit-title">
                                    <a href="javascript:;" class="primary_versions" data-vid="<?php echo $v['vid'];?>"
                                    <?php if($fileinfo['vid'] == $v['vid']) { ?>data-primary="yes"<?php } else { ?>
                                    data-primary="no"<?php } ?> onclick="primaryVersion(this)"><span
                                        class="glyphicon glyphicon-screenshot"></span>标记为主版本</a>
                                </li>
                                <li class="listedit-title listedit-edit">
                                    <a href="javascript:;" class="edit_versions" data-rid="<?php echo $fileinfo['rid'];?>"
                                       data-vid="<?php echo $v['vid'];?>" onclick="editVersionName(this)">
                                        <span class="glyphicon glyphicon-pencil"></span>编辑版本信息
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </li>
                    <?php } ?>
                    <?php } else { ?>
                    <li class="unameMenu-list" id="unnameMenu-olddata-noversion_<?php echo $fileinfo['rid'];?>">
                        <i class="glyphicon glyphicon-record"></i>
                        <div class="unameMenuicon-icons">
                            <div class="unameMenu-upload">
                                <span class="nameMenu"><?php echo $fileinfo['username'];?>上传于</span>
                                <p class="versioninfos"><?php echo $fileinfo['fdateline'];?>
                                    <span class="label label-gainsboro">主版本</span>
                                </p>
                            </div>
                            <a href="javascript:;" class="group-editMenu dropdown-toggle" data-toggle="dropdown"><span
                                    class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-version">
                                <div class="h3-title">版本信息</div>
                                <li class="listedit-title">
                                    <a href="javascript:;" class="view_versions" data-path="<?php echo $fileinfo['dpath'];?>"
                                       data-vid="<?php echo $fileinfo['vid'];?>" onclick="viewversion(this)">
                                        <span class="dzz dzz-visibility"></span>预览
                                    </a>
                                </li>
                                <li class="listedit-title">
                                    <a href="javascript:;" class="primary_version" data-rid="<?php echo $fileinfo['rid'];?>"
                                       data-vid="<?php echo $fileinfo['vid'];?>" data-primary="yes" onclick="primaryVersion(this)">
                                        <span class="glyphicon glyphicon-screenshot"></span>标记为主版本
                                    </a>
                                </li>
                                <li class="listedit-title listedit-edit">
                                    <a href="javascript:;" data-rid="<?php echo $fileinfo['rid'];?>" class="edit_versions"
                                       data-vid="<?php echo $fileinfo['vid'];?>" onclick="editVersionName(this)">
                                        <span class="glyphicon glyphicon-pencil"></span>编辑版本信息
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </li>
                    <?php } ?>

                </ul>
                <!-- <?php if($vnext) { ?>-->
                <a href="javascript:;" class="btn_button_more btn btn-link"
                   onclick="loadingMoreVersion(this,0);" data-rid="<?php echo $rid;?>">加载更多</a>
                <?php } ?>
            </div>
            <?php } ?>
            <!--历史版本结束-->
        </div>
        <!--文件详情结束-->
        <!--动态开始-->
        <div class="right_projectmain" id="filerightdynamic">
            <div class="dynconMenu" id="dynconMenu">
    <div class="just-now" id="just-now"></div>
    <div class="toadyTime">
        <?php if(!isset($tplmore)) { if($events) { $today=strtotime(dgmdate(TIMESTAMP,'Y-m-d'))?><?php $timearr=array();?><?php if(is_array($events)) foreach($events as $eventval) { $t=strtotime(dgmdate($eventval[dateline],'Y-m-d'));?><?php if($t==$today && !in_array($t,$timearr)) { ?>
<p class="toadytitle">今天</p><?php $timearr[]=$t;?><?php } elseif($t==$today-24*60*60 && !in_array($t,$timearr)) { ?>
<p class="toadytitle">昨天</p><?php $timearr[]=$t;?><?php } elseif($t==$today-24*60*60*2 && !in_array($t,$timearr)) { ?>
<p class="toadytitle">前天</p><?php $timearr[]=$t;?><?php } elseif($t<$today-24*60*60*2 && !in_array($t,$timearr)) { ?>
<p class="toadytitle"><?php echo dgmdate($t,'Y-m-d');?></p><?php $timearr[]=$t;?><?php } if($eventval['type'] == 0) { ?>
<div class="dynameic-comment">
    <div class="toadysmalltime"><span><?php echo dgmdate($eventval[dateline],'H:i');?></span></div>
    <div class="toadycon">
        <div class="toadycon-img"><?php echo
            avatar_block($eventval[uid],array($eventval[uid]=>$eventval[headerColor]));?>        </div>
        <p class="activity-content"><span class="activity-name"><?php echo $eventval['username'];?></span>
            <span><?php echo $eventval['details'];?></span></p>
    </div>
</div>
<?php } elseif($eventval['type'] == 1 ) { ?>
<div class="dynameic-comment">
    <div class="toadysmalltime"><span><?php echo dgmdate($eventval[dateline],'H:i');?></span></div>
    <div class="toadycon">
        <div class="toadycon-img"><?php echo
            avatar_block($eventval[uid],array($eventval[uid]=>$eventval[headerColor]));?>        </div>
        <p class="activity-content"><span class="activity-name"><?php echo $eventval['username'];?></span>
            <span><?php echo $eventval['details'];?></span>
            <span class="delete-comment dzz dzz-delete" data-commentid="<?php echo $eventval['id'];?>"></span></p>
    </div>
</div>
<?php } } if($next) { ?>
<a href="javascript:;"
   class="<?php if(!isset($tplmore)) { ?>btn_dynamic_more <?php } else { ?>btn_dynamic_more_less<?php } ?>btn-link btn-block <?php if(isset($tplmore) && $tplmore) { ?> hide <?php } ?>"
   onclick="load_dynamic(this,'<?php echo ($next-3)?>','<?php echo implode(',',$rids);?>','<?php echo $_GET['fid'];?>',0);">加载更多</a>
<?php } } } else { if($events) { $today=strtotime(dgmdate(TIMESTAMP,'Y-m-d'))?><?php $timearr=array();?><?php if(is_array($events)) foreach($events as $eventval) { $t=strtotime(dgmdate($eventval[dateline],'Y-m-d'));?><?php if($t==$today && !in_array($t,$timearr)) { ?>
<p class="toadytitle">今天</p><?php $timearr[]=$t;?><?php } elseif($t==$today-24*60*60 && !in_array($t,$timearr)) { ?>
<p class="toadytitle">昨天</p><?php $timearr[]=$t;?><?php } elseif($t==$today-24*60*60*2 && !in_array($t,$timearr)) { ?>
<p class="toadytitle">前天</p><?php $timearr[]=$t;?><?php } elseif($t<$today-24*60*60*2 && !in_array($t,$timearr)) { ?>
<p class="toadytitle"><?php echo dgmdate($t,'Y-m-d');?></p><?php $timearr[]=$t;?><?php } if($eventval['type'] == 0) { ?>
<div class="dynameic-comment">
    <div class="toadysmalltime"><span><?php echo dgmdate($eventval[dateline],'H:i');?></span></div>
    <div class="toadycon">
        <div class="toadycon-img"><?php echo
            avatar_block($eventval[uid],array($eventval[uid]=>$eventval[headerColor]));?>        </div>
        <p class="activity-content"><span class="activity-name"><?php echo $eventval['username'];?></span>
            <span><?php echo $eventval['details'];?></span></p>
    </div>
</div>
<?php } elseif($eventval['type'] == 1 ) { ?>
<div class="dynameic-comment">
    <div class="toadysmalltime"><span><?php echo dgmdate($eventval[dateline],'H:i');?></span></div>
    <div class="toadycon">
        <div class="toadycon-img"><?php echo
            avatar_block($eventval[uid],array($eventval[uid]=>$eventval[headerColor]));?>        </div>
        <p class="activity-content"><span class="activity-name"><?php echo $eventval['username'];?></span>
            <span><?php echo $eventval['details'];?></span>
            <span class="delete-comment dzz dzz-delete" data-commentid="<?php echo $eventval['id'];?>"></span></p>
    </div>
</div>
<?php } } if($next) { ?>
<a href="javascript:;" class="btn_dynamic_more_less btn-link btn-block <?php if(isset($tplmore) && $tplmore) { ?> hide <?php } ?>"
   onclick="load_dynamic(this,<?php echo $next;?>,'<?php echo implode(',',$rids);?>',<?php echo $pfid;?>,1);">加载更多</a>
<?php } } } ?>
<script type="text/javascript" src="static/atwho/js/jquery.atwho.js" ></script>
<script type="text/javascript" src="static/atwho/js/jquery.caret.js" ></script>
<script type="text/javascript">
    var gid = '<?php echo $gid;?>';
    var commentfid = '';
    var commentrid='';
    jQuery(document).on('click', '.btn_dynamic_more', function () {
        jQuery('.rightbasic').hide();
        jQuery('#more_dynameic').show();
    });

    function load_dynamic(obj, next, rid, fid, tplmore) {
        var queryObj = {'next': next};
        if (rid) {
            queryObj.rid = rid;
        } else {
            queryObj.rid = fid;
        }
        
        var adddynamisc = '';
        if (tplmore) adddynamisc = '&adddynamisc=1';
        jQuery.get(DZZSCRIPT + '?mod=<?php echo MOD_NAME;?>&op=dynamic&do=loadmoredynamic&gid=' + gid + adddynamisc, queryObj, function (html) {
            if (tplmore) {
                jQuery(obj).replaceWith(html);
            } else {
                jQuery('#rightinfo_content').replaceWith(html);
            }
            _explorer.Scroll();
            jQuery('#leave_message').off("input.commet propertychange.comment").on("input.comment propertychange.comment", function (e) {
                var el = jQuery(this);
                var msg = el.val();
                var disbutton = el.closest('.comment-area').find('button');
                if (msg.length <= 0) {
                    disbutton.addClass("disabled");
                    disbutton.css({'color': 'rgba(55,121,255,0.3)'});
                } else {
                    disbutton.removeClass("disabled");
                    disbutton.css({'color': 'rgba(55,121,255,1)'});
                }
            });
            jQuery('#leave_message').focus(function () {
                var el = jQuery(this);
                var msg = el.val();
                var disbutton = el.closest('.comment-area').find('button');
                if (msg.length <= 0) {
                    disbutton.addClass("disabled");
                    disbutton.css({'color': 'rgba(55,121,255,0.3)'});
                } else {
                    disbutton.removeClass("disabled");
                    disbutton.css({'color': 'rgba(55,121,255,1)'});
                }
            })

        });
    }
   jQuery(function(){
        if (gid > 0 && jQuery('#commentid').length > 0) {
            commentfid = jQuery('#commentid').find('input[name=fid]').val();
            commentrid = jQuery('#commentid').find('input[name=rid]').val();
            var cachequeryMentions = [], itemsMentions;
            var querystr = '';
            if(commentfid){
                querystr = '&fid='+commentfid;
            }else{
                querystr = '&rid='+commentrid;
            }
            jQuery('#leave_message').atwho({
                at: "@",
                data: '<?php echo DZZSCRIPT;?>?mod=explorer&op=group&do=group_ajax&operation=getAtData&gid=' + gid+querystr,
                callbacks: {
                    remote_filter: function (query, render_view) {
//                        console.log(query);
                        var thisVal = query,
                            self = jQuery(this);
                        if (!self.data('active') && thisVal.length >= 1) {
                            self.data('active', true);
                            itemsMentions = cachequeryMentions[thisVal]
                            if (typeof itemsMentions == "object") {
                                render_view(itemsMentions);
                            } else {
                                if (self.xhr) {
                                    self.xhr.abort();
                                }
                                self.xhr = jQuery.getJSON('<?php echo DZZSCRIPT;?>?mod=explorer&op=group&do=group_ajax&operation=getAtData&gid=' + gid+querystr,{
                                    term: thisVal
                                }, function (data) {
                                    cachequeryMentions[thisVal] = data
                                    render_view(data);
                                });
                            }
                            self.data('active', false);
                        }
                    }
                },
                tpl: "<li data-value='@[${name}:${id}]' title='${title}'>${avatar}&nbsp;${name}</li>",
                search_key: "searchkey",
                start_with_space: false,
                limit: 5,
                max_len: 20,
                display_timeout: 300
            });
        }

    })
/*    jQuery('#leave_message').on('keydown',function(){
       var obj = $(this);
        if(obj.val().indexOf('@') == 0)
        textarea.caret('pos',textarea.val().length);
        //textarea.focus().atwho('run');
        //return false;
    });*/
    jQuery(document).off('click.commentdelete').on('click.commentdelete','.delete-comment',function(){
        var obj = $(this);
        var commentid = obj.data('commentid');
        var msg = '<span class="delect_text_red">'+'删除后将不可恢复！'+'</span>';
        var title = '<span class="delect-title-normal">'+'确定要删除评论？'+'<span>';
        if(typeof commentid == 'undefined' || commentid < 0){
            showDialog("删除失败");
        }
        showDialog(msg,'confirm',title,function(){
            $.post('<?php echo MOD_URL;?>&op=dynamic&do=deletecomment',{'id':commentid},function(data){
                if(data['success']){
                    obj.parents('.dynameic-comment').html('');
                }else if(data['error']){
                    showDialog(data['error']);
                }
            },'json');
        })

    })
</script>
    </div>
</div>

<script type="text/javascript" reload="1">
    //滚动条滚动，头部加阴影
    $('.right-messagetable').scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('.briefMenu').css({'box-shadow': '0px 0px 10px 0px rgba(0,0,0,0.15)'});
        } else {
            $('.briefMenu').css({'box-shadow': 'none'});
        }
    })


    jQuery(document).ready(function (e) {
        jcLoader().load({
            type: 'js',
            ids: 'js_textareaexplander',
            url: 'static/js/jquery.textareaexplander.js?<?php echo VERHASH;?>'
        }, function () {
            jQuery('#leave_message').TextAreaExpander(32, 300);
        });
        jcLoader().load({
            type: 'js',
            ids: 'js_smilies',
            url: 'static/js/smilies.js?<?php echo VERHASH;?>'
        }, function () {
            smilies_show('leave_message_sml_div', '<?php echo $_G['setting']['smcols'];?>', 'leave_message');
        });
        _explorer.Scroll();
        jQuery('#leave_message').off("input.commet propertychange.comment").on("input.comment propertychange.comment", function (e) {
            var el = jQuery(this);
            var msg = el.val();
            var disbutton = el.closest('.comment-area').find('button');
            if (msg.length <= 0) {
                disbutton.addClass("disabled");
                disbutton.css({'color': 'rgba(55,121,255,0.3)'});
            } else {
                disbutton.removeClass("disabled");
                disbutton.css({'color': 'rgba(55,121,255,1)'});
            }
        });
        jQuery('#leave_message').focus(function () {
            var el = jQuery(this);
            var msg = el.val();
            var disbutton = el.closest('.comment-area').find('button');
            if (msg.length <= 0) {
                disbutton.addClass("disabled");
                disbutton.css({'color': 'rgba(55,121,255,0.3)'});
            } else {
                disbutton.removeClass("disabled");
                disbutton.css({'color': 'rgba(55,121,255,1)'});
            }
        })

    });

    function comment_file(form) {

        if ($('#leave_message').val().length < 1) {
            $('#leave_message').focus();
            return false;
        }
        $.post(form.action, jQuery(form).serialize(), function (data) {
            if (data['success']) {
                if (data['return']['headerColor']) {
                    var usericon = ' <span  class="Topcarousel" style="margin-top:8px; background:' + data['return']['headerColor'] + '">' +
                        ' <span title="<?php echo $eventval['username'];?>" >' + data['return']['userfirst'] + '</span> </span>';
                } else {

                    var usericon = '<img src="avatar.php?uid=' + data['return']['uid'] + '" class="img-circle avatar" style="width: 25px;height: 25px;">';
                }
                var html = '';
                html += '<div class="dynameic-comment">';
                html += '<div class="toadysmalltime">';
                html += '<span class="dynameic-times">' + data['return']['dateline'] + '</span>';
                html += '</div>';
                html += '<div class="toadycon">';
                html += usericon;
                html += '<p class="activity-content">'
                html += '<span class="activity-name">' + data['return']['username'] + '</span>';
                html += '<span>' + data['return']['msg'] + '</span>';
                html += '<span class="delete-comment dzz dzz-delete" data-commentid="' + data['return']['commentid'] + '"></span>'
                html += '</p>';
                html += '</div> ';
                html += '</div>';
                $('#just-now').prepend(html);
                $('.scroll-y').animate({scrollTop: '0px'}, 200);
                var Now = $('#just-now').children();
                if (Now.length < 1) {
                    $('#just-now').css('margin-bottom', '0px');
                } else {
                    $('#just-now').css('margin-bottom', '10px');
                }
            }
            $('#leave_message').val('').trigger('input');
        }, 'json');
        return false;
    }


</script>        </div>
        <!--动态结束-->

    </div>
</div>
<!--右侧中间部分结束-->
<!--右侧底部评论开始-->
<?php if($fileinfo['isdelete'] < 1) { ?>
<div class="comment-area">
    <div class="messageMenu">
        <form action="<?php echo MOD_URL;?>&op=ajax&operation=comment" method="post" onsubmit="return comment_file(this)"
              id="commentid">
            <input type="hidden" name="rid" value="<?php echo $rid;?>"/>
            <input type="hidden" name="fid" value="<?php echo $fid;?>"/>
            <div class="discuss-content">
                    <textarea type="text" id="leave_message" name="msg" rows="1" placeholder="输入评论..."
                              class="form-control comment-input"></textarea>
                <div class="comment-file">
                    <ul class="list_acpsw">
                        <li class="emotion_lacpsw"><a href="javascript:;" class="item_lacpsw" id="leave_messagesml"
                                                      onclick="showMenu({'ctrlid':this.id,'evt':'click','layer':2});return false;"><span
                                class="dzz dzz-smile"></span></a>
                        </li>

                    </ul>
                </div>

            </div>
            <div class="activity-handler clearfix">
                <button type="submit" class="dzz dzz-send pull-right disabled input-search-drop dzz-submit-send"
                        style="color:rgba(55,121,255,0.3);"></button>
            </div>
        </form>
    </div>
</div>
<?php } ?>
<!--右侧底部评论结束-->
</div>
<!--右侧文件结束-->
<div id="old_rightinfo" class="hide"></div>
<script type="text/javascript" src="./data/template/dzz_explorer_right_menu_uplodfile_zh-cn.js" ></script><script type="text/javascript" src="<?php echo MOD_PATH;?>/js/uplodfile.js?<?php echo VERHASH;?>" ></script>
<script type="text/javascript" reload="1">
    //滚动条滚动，头部加阴影
    $('.right-messagetable').scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('.briefMenu').css({'box-shadow': '0px 0px 10px 0px rgba(0,0,0,0.15)'});
        } else {
            $('.briefMenu').css({'box-shadow': 'none'});
        }
    })
    $('.dynconMenu').scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('.righttop_title').css({'box-shadow': '0px 0px 10px 0px rgba(0,0,0,0.15)'});
        } else {
            $('.righttop_title').css({'box-shadow': 'none'});
        }
    });

    function primaryVersion(obj) {
        var el = $(obj);
        var vid = el.data('vid');
        var primaryVersion = el.data('primary');
        //如果当前版本已经是主版本或者只有当前版本
        if (typeof vid == 'undefined' || !vid || primaryVersion == 'yes') {
            return false;
        }
        $.post('<?php echo MOD_URL;?>&op=dzzcp&do=setpramiryversion', {'vid': vid}, function (data) {
            if (data['success']) {
                var datas = data['data'];
                $('.version_menu').each(function () {
                    $(this).find('.label-gainsboro').remove().end().find('.dropdown-menu-version .primary_versions').data('primary', 'no');
                })
                $('#version_' + vid).find('p.versioninfos').append('<span class="label label-gainsboro">主版本</span>').end().find('.dropdown-menu-version .pramiry_version').data('primary', 'yes');
                ;
                var src = '<?php echo $_G['siteurl'];?>' + datas.img;
                var rid = '<?php echo $fileinfo['rid'];?>';
                $('#rightfileinfo-' + rid).find('img').attr('src', src);
                $('#rightfileinfo-' + rid).find('p.right-imgname').html(datas.name);
                _explorer.sourcedata.icos[datas.rid] = datas;
                datas.vid = 0;
                _filemanage.addIndex(datas);
                _filemanage.cons['f-' + datas.pfid].CreateIcos(datas, true);

            } else {
                showDialog(data['msg']);
            }
        }, 'json');

    };

    function editVersionName(obj) {
        var rid = $(obj).data('rid');
        var vid = $(obj).data('vid');
        var querystr = '';
        if (rid) {
            querystr += '&rid=' + rid;
        }
        if (vid) {
            querystr += '&vid=' + vid;
        }
        showWindow('editfileversion', MOD_URL + '&op=ajax&operation=editFileVersionInfo' + querystr, 'get', 0);
        return false;
    };
    //右侧上传版本结束
    var rid = $('#fileridinput').val();
    $('.version_upload_file').fileupload({
        url: MOD_URL + '&op=ajax&operation=uploadfiles',
        dataType: 'json',
        autoUpload: true,
        maxChunkSize: parseInt(_explorer.space.maxChunkSize), //2M
        //dropZone: '#middleconMenu',
        dropZone: '.historyMenu',
        //pasteZone: '#middleconMenu',
        pasteZone: '.historyMenu',
        maxFileSize: parseInt(_explorer.space.maxattachsize) > 0 ? parseInt(_explorer.space.maxattachsize) : null, // 5 MB
        acceptFileTypes: new RegExp(attachextensions, 'i'),
        sequentialUploads: true
    }).on('fileuploadadd', function (e, data) {
        data.context = $('<li class="dialog-file-list"></li>').appendTo(_upload.el);
        $.each(data.files, function (index, file) {
            $(getItemTpl(file)).appendTo(data.context);
            uploadadd();
            _uploadheight();
        });
    }).on('fileuploadsubmit', function (e, data) {
        data.context.find('.upload-cancel').off('click').on('click', function () {
            data.abort();
            data.files = '';
            uploaddone();
            $(this).parents('.dialog-info').find('.upload-cancel').hide();
            $(this).parents('.dialog-info').find('.upload-file-status').html('<span class="cancel show_uploading_status"><em></em><i>' + '已取消' + '</i></span>');
        });
        uploadsubmit();
        $.each(data.files, function (index, file) {
            var relativePath = (file.webkitRelativePath ? file.webkitRelativePath : '');
            data.formData = {relativePath: relativePath};
            return;
        });
    }).on('fileuploadprocessalways', function (e, data) {
        var index = data.index,
            file = data.files[index];
        if (file.error) {
            uploaddone();
            data.context.find('.upload-item.percent').html('<span class="danger" title="' + file.error + '">' + file.error + '</span>');
        }
    }).on('fileuploadprogress', function (e, data) {
        var index = data.index;
        _upload.bitrate = formatSize(data.bitrate / 8);
        var progre = parseInt(data.loaded / data.total * 100, 10);
        data.context.find('.upload-file-status .speed').html(_upload.bitrate + '/s');
        data.context.find('.upload-file-status .precent').html(progre + '%');
    }).on('fileuploadprogressall', function (e, data) {
        _upload.bitrate = formatSize(data.bitrate / 8);
        var progre = parseInt(data.loaded / data.total * 100, 10);
        uploadprogress(_upload.bitrate + '/s', progre + '%');
        _upload.el.find('.panel-heading .upload-progress-mask').css('width', progre + '%');
    }).on('fileuploaddone', function (e, data) {
        uploaddone();
        data.context.find('.upload-progress-mask').css('width', '0%');
        data.context.find('.upload-cancel').hide();
        $.each(data.result.files, function (index, file) {
            if (file.error) {
                var relativePath = (file.relativePath ? file.relativePath : '');
                data.context.find('.upload-item.percent').html('<span class="danger" title="' + file.error + '">' + file.error + '</span>');
            } else {
                var filedata = file.data;
                _upload.tips.find('.dialog-body-text').html(_upload.completed + '/' + _upload.total);
                data.context.find('.upload-file-status .speed').html('');
                data.context.find('.upload-file-operate').html('完成');
                $.post('<?php echo MOD_URL;?>&op=dzzcp&do=uploadnewVersion', {
                    'rid': rid,
                    'aid': filedata.aid,
                    'name': filedata.filename,
                    'ext': filedata.filetype,
                    'size': filedata.filesize,
                }, function (data) {
                    if (data['success']) {
                        var resourcesdata = data['filedata'];
                        var versiontdata = data['data'];
                        // _filemanage.updateIndex(updatedata);
                        var html = '<li class="unameMenu-list version_menu" id="version_' + versiontdata['vid'] + '"> ' +
                            '<div class="unameMenuicon-icons"> ' +
                            '<div class="unameMenu-upload"> ' +
                            '<span class="nameMenu">' + versiontdata['username'] + '上传于</span> ' +
                            '<p class="versioninfos">' + versiontdata['fdateline'] + '<span class="label label-gainsboro">主版本</span></p> ' +
                            '</div> <p class="editMenu">' + versiontdata['size'] + '</p> <a href="javascript:;" class="group-editMenu dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>' +
                            '<ul class="dropdown-menu dropdown-menu-version"> ' +
                            '<div class="h3-title" >版本信息</div> ' + '<li class="listedit-title">' + '<a href="javascript:;" class="view_version" data-dpath="' + versiontdata['dpath'] + '" data-vid="' + versiontdata['vid'] + '" onclick="viewversion(this)"><span class="dzz dzz-visibility"></span>' + '预览' + '</a></li>' +
                            '<li class="listedit-title"><a href="javascript:;" class="primary_version"' +
                            'data-vid="' + versiontdata['vid'] + '" data-pramiry="yes"><span class="glyphicon glyphicon-screenshot"></span>标记为主版本</a></li> ' +
                            '<li class="listedit-title listedit-edit"><a href="javascript:;"  data-vid="' + versiontdata['vid'] + ' data-rid="' + rid + ' onclick="editVersionName(this)"><span class="glyphicon glyphicon-pencil" ></span>编辑版本信息</a></li> ' +
                            '</ul> </div> <div class="editMenu-input clearfix"> ' +
                            '</div> </div> </li>';
                        $('.version_menu').each(function () {
                            $(this).find('p.versioninfos .label-gainsboro').remove().end().find('.dropdown-menu-version .primary_version').data('primary', 'no');
                            ;
                        })
                        if (typeof versiontdata.olddatavid != 'undefined' && versiontdata.olddatavid) {
                            $('#version_0').find('.primary_versions').data('vid', versiontdata.olddatavid);
                            $('#version_0').find('.view_versions').data('vid', versiontdata.olddatavid);
                            $('#version_0').find('.edit_versions').data('vid', versiontdata.olddatavid);
                            $('#version_0').attr('id', 'version_' + versiontdata.olddatavid);
                        }
                        $('#versionmenulist').prepend(html);

                        $('#detailsimage').attr('src', '<?php echo $_G['siteurl'];?>' + resourcesdata['img']);
                        _explorer.sourcedata.icos[data['filedata'].rid] = data['filedata'];
                        _filemanage.cons['f-' + data['filedata'].pfid].CreateIcos(data['filedata'], true);
                        resourcesdata.vid = 0;
                        _filemanage.addIndex(resourcesdata);
                    } else if (data['error']) {
                        showDialog(data['error']);
                    }
                }, 'json')


            }
        });

    }).on('fileuploadfail', function (e, data) {
        $.each(data.files, function (index, file) {
            uploaddone();
            data.context.find('.upload-item.percent').html('<span class="danger" title="' + file.error + '">' + file.error + '</span>');
        });

    });
    function getItemTpl(file) {
        var relativePath = (file.webkitRelativePath ? file.webkitRelativePath : (file.relativePath ? file.relativePath : file.name));
        var filearr = file.name.split('.');
        var ext = filearr.pop();
        var imgicon = '<img src="dzz/images/extimg/' + ext + '.png" onerror="replace_img(this)" style="width:24px;height:24px;position:absolute;left:0;"/>';
        var html =
            '<div class="process" style="position:absolute;z-index:-1;height:100%;background-color:#e8f5e9;-webkit-transition:width 0.6s ease;-o-transition:width 0.6s ease;transition:width 0.6s ease;width:0%;"></div> <div class="dialog-info"> <div class="upload-file-name">' +
            '<div class="dialog-file-icon" align="center">' + imgicon + '</div> <span class="name-text">' + file.name + '</span> ' +
            '</div> <div class="upload-file-size">' + (file.size ? formatSize(file.size) : '') + '</div> <div class="upload-file-path">' +
            '<a title="" class="" href="javascript:;">' + relativePath + '</a> </div> <div class="upload-file-status"> <span class="uploading"><em class="precent"></em><em class="speed">排队中</em>' +
            '</span> <span class="success"><em></em><i></i></span> </div> <div class="upload-file-operate"> ' +
            '<em class="operate-pause"></em> <em class="operate-continue"></em> <em class="operate-retry"></em> <em class="operate-remove"></em> ' +
            '<a class="error-link upload-cancel" href="javascript:void(0);">取消</a> </div> </div>';
        return html;
    }
    function uploadadd() {
        _upload.total++;
        _upload.tips.show();
        _upload.tips.find('.dialog-body-text').html(_upload.completed + '/' + _upload.total);
    }
    function _uploadheight() {
        var winHeight = $('#uploading_file_list').height();
        if (winHeight > 441) {
            _upload.el.animate({scrollTop: winHeight});//滚动条跟着滚动
            _upload.el.css({'overflow-y': 'auto', 'overflow-x': 'hidden', 'max-height': '460px'});
        }
    }
    ;
    function uploadsubmit() {
        _upload.el.find('.upload-sum-title').show().html(_upload.completed + '/' + _upload.total);
    }
    function uploaddone() {
        _upload.completed++;
        if (_upload.completed > _upload.total) {
            _upload.el.find('.upload-sum-title').html('上传完成' + ':');
            _upload.el.find('.panel').addClass('ismin');
            _upload.ismin = 1;
        } else {
            _upload.el.find('.upload-sum-completed').show().html(_upload.completed + '/' + _upload.total);
        }
    }

    function uploadprogress(speed, per) {
        _upload.el.find('.upload-speed').show().find('.upload-speed-value').html(speed);
        if (_upload.speedTimer) window.clearTimeout(_upload.speedTimer);
        _upload.speedTimer = window.setTimeout(function () {
            _upload.el.find('.upload-speed').hide();
        }, 2000);
    }
    function viewversion(obj) {
        var path = $(obj).data('dpath');
        var viewhref = '<?php echo $_G['siteurl'];?>share.php?a=view&s=' + path;
        var vid = $(obj).data('vid');
        if (vid) {
            viewhref += '&vid=' + vid;
        }
        window.open(viewhref);

    }
    function loadingMoreVersion(obj) {
        var rid = $(obj).data('rid');
        $.post(MOD_URL + '&op=dynamic&do=loadmoreversion', {'rid': rid, 'next': 0}, function (html) {
            jQuery('#rightinfo_content').replaceWith(html);
            _explorer.Scroll();
        })
    }
</script>