<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:1:{s:63:"/opt/lampp/htdocs/dzzoffice//./dzz/powerpoint/template/list.htm";i:1585641102;}*/?>
<?php if($setting['showtype'] != 'list') { ?>
    <?php if(is_array($data)) foreach($data as $value) { ?>        <div class="edit-item item" data-rid="<?php echo $value['rid'];?>" data-dpath="<?php echo $value['dpath'];?>" <?php if($do == 'getitem') { ?>style="opacity:0"<?php } ?>>
            <div class="edit-img" onclick="opendoc('<?php if($setting['openurl']) { ?><?php echo $setting['openurl'];?>&path=<?php echo $value['dpath'];?><?php } ?>', '<?php echo $value['rid'];?>', 1)"><img onload="image_resize(this)" src="<?php echo $value['img'];?>" style="width: 96px !important;" alt=""></div>
            <div class="edit-info clearfix">
                <div class="edit-infoWrap">
                    <div class="edit-name" title="<?php echo $value['name'];?>"><?php echo $value['name'];?></div>
                    <div class="edit-date" title="<?php echo dgmdate($value['dateline'])?>"><i class="dzz dzz-file-ppt"></i><?php if($order == 'edit') { echo dgmdate($value['dateline'])?><?php } elseif($order == 'open') { if($value['opendateline']) { echo dgmdate($value['opendateline'])?><?php } else { echo lang(no_opened)?><?php } } else { echo dgmdate($value['dateline'])?><?php } ?></div>
                </div>
                <div class="edit-more dropdown">
                    <button class="btn btn-more dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="dzz dzz-more"  data-toggle="tooltip" data-placement="bottom" title="<?php echo lang(more)?>"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu3">
                        <li><a style="cursor: pointer;" onclick="showWindow('rename-window','<?php echo MOD_URL;?>&op=ajax&do=showwindow&operation=rename&renametype=rename&id=<?php echo $value['dpath'];?>')"><?php echo lang(rename)?></a></li>
                        <li><a style="cursor:pointer;" onclick="attach_down(this)" ><?php echo lang('download')?></a></li>
                        <li><a style="cursor: pointer;" onclick="docdelete(this)" ><?php echo lang('remove')?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    <?php } } else { ?>
    <?php if(is_array($data)) foreach($data as $key => $value) { ?>        <div class="temp-table" data-time="<?php echo $key;?>">
            <?php if($order != 'name') { ?><div class="table-date"><?php if($key == 'today') { echo lang(today)?><?php } elseif($key == 'ytoday') { echo lang(ytoday)?><?php } elseif($key == 'nearly_week') { echo lang('7_nearly')?><?php } elseif($key == 'nearly_month') { echo lang('30_nearly')?><?php } else { echo lang('30_again')?><?php } ?></div><?php } ?>
            <table class="temp-ul table" style="width: 100%;">
                <?php if(is_array($value)) foreach($value as $val) { ?>                    <tr class="item" data-rid="<?php echo $val['rid'];?>" data-dpath="<?php echo $val['dpath'];?>" <?php if($do == 'getitem') { ?>style="opacity:0"<?php } ?>>
                        <td class="td-i" onclick="opendoc('<?php if($setting['openurl']) { ?><?php echo $setting['openurl'];?>&path=<?php echo $val['dpath'];?><?php } ?>', '<?php echo $val['rid'];?>', 1)"><i class="dzz dzz-file-ppt table-icon"></i>  <span class="edit-name" title="<?php echo $val['name'];?>"><?php echo $val['name'];?></span></td>
                        <td class="td-user"><?php echo $val['username'];?></td>
                        <td class="td-date"><?php if($order == 'edit') { echo dgmdate($val['dateline'])?><?php } elseif($order == 'open') { if($val['opendateline']) { echo dgmdate($val['opendateline'])?><?php } else { echo lang(no_opened)?><?php } } else { echo dgmdate($val['dateline'])?><?php } ?></td>
                        <td class="td-more dropdown">
                            <button class="btn btn-more dropdown-toggle" type="button" id="dropdownMenu5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="dzz dzz-more"  data-toggle="tooltip" data-placement="bottom" title="<?php echo lang(more)?>"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu5" style="margin-top: -10px;left: -130px;">
                                <li><a style="cursor: pointer;" onclick="showWindow('rename-window','<?php echo MOD_URL;?>&op=ajax&do=showwindow&operation=rename&renametype=rename&id=<?php echo $val['dpath'];?>')"><?php echo lang(rename)?></a></li>
                                <li><a style="cursor:pointer;" onclick="attach_down(this)" ><?php echo lang('download')?></a></li>
                                <li><a style="cursor: pointer;" onclick="docdelete(this)" ><?php echo lang('remove')?></a></li>
                            </ul>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    <?php } } if($next) { ?>
    <div class="loader" data-turl="<?php echo $turl;?>" data-next="<?php echo $nextStart;?>" onclick="loadmore()"> <div class="loader-inner ball-beat"> <div></div> <div></div> <div></div> </div> </div>
<?php } ?>