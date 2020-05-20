<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:1:{s:88:"/opt/lampp/htdocs/dzzoffice/dzzoffice//./dzz/explorer/template/template_right_popbox.htm";i:1589275828;}*/?>
<ul class="right_popbox_header member_details_infos">
<li class="rightdropdown_top">
<?php if($userinfos['avatarstatus']) { ?>
<img src="avatar.php?uid=<?php echo $userinfos['uid'];?>" class="img-circle avatar" style="width: 25px;height: 25px;">
<?php } else { ?>
<span class="rightdropdown-first" style="background:<?php echo $userinfos['headerColor'];?>"><?php echo new_strsubstr(ucfirst($userinfos[username]),1,'');?></span>
<?php } ?>
<div class="rightdropdown_title">
<span class="rightdropdown_name"><?php echo $userinfos['username'];?></span>
<p class="numer_admin">
<span class="dzz dzz-manager dzz-admin"></span>
<span class="rightdropdown_admin permgrouptextspan">
<?php if($userinfos['perm'] == 0) { ?>
协作成员
<?php } elseif($userinfos['perm'] == 1) { ?>
管理员
<?php } elseif($userinfos['perm'] == 2) { ?>
创建人
<?php } ?>

</span>
</p>
</div>
</li>
<?php if($perm >1 && $userinfos['perm'] != 2 && $group['type']) { ?>
<li class="popbox_li doperm">
<a href="javascript:;">
<span class="popbox-text">权限更改</span>
<span class="dzz dzz-arrow-dropright dropdown-dropright"></span>
</a>
<ul class="right_popbox_header popbox-header-twomenu">
<?php if($group['type'] == 1) { ?>
<li class="popbox_li permedit" data-perm="2">
<a href="javascript:;">
<span class="dzz dzz-done dzz-fit"></span>
<span class="popbox-text">创建人</span>
</a>
</li >
<?php } ?>
<li class="popbox_li permedit"  data-perm="1">
<a href="javascript:;">
<?php if($userinfos['perm'] == 1) { ?>
<span class="dzz dzz-done dzz-fit dzz-color"></span>
<span class="popbox-text" style="color:#4c89fb;">管理员</span>
<?php } else { ?>
<span class="dzz dzz-done dzz-fit"></span>
<span class="popbox-text" >管理员</span>
<?php } ?>
</a>
</li>
<li class="popbox_li permedit"  data-perm="0">
<a href="javascript:;">
<?php if($userinfos['perm'] == 0) { ?>
<span class="dzz dzz-done dzz-fit dzz-color"></span>
<span class="popbox-text" style="color:#4c89fb;">协作成员</span>
<?php } else { ?>
<span class="dzz dzz-done dzz-fit"></span>
<span class="popbox-text" >协作成员</span>
<?php } ?>
</a>
</li>
</ul>
</li>
<?php } if(($perm > $userinfos['perm'] || ($_G['adminid'] == 1 && $userinfos['perm'] != 2)) && $group['type']) { ?>
<li class="popbox_li removeuser">
<a href="javascript:;"><span class="popbox-text">删除成员</span></a>
</li>
<?php } ?>
</ul>
    			
<script>
var gid = '<?php echo $gid;?>';
var orgtype = '<?php echo $group['type'];?>';
    jQuery(document).off('click.editgroupperm').on('click.editgroupperm','.popbox-header-twomenu .permedit',function(){
       var currentUid = '<?php echo $userinfos['uid'];?>';
       var obj = jQuery(this);
       var perm = obj.data('perm');
      if (perm == 2) {
         if(!confirm('您确定要更改创建者用户身份吗？更改后当前创建者身份将成为协作成员')){
         	return false;
         }
      }
       var text = obj.find('.popbox-text').text();
       jQuery.post(MOD_URL+'&op=group&do=right_popbox&operation=setmemberperm&gid='+gid,{'guid':currentUid,'perm':perm},function(data){
if(data['success']){
    var permicocontainer = jQuery('#'+currentUid+'_delete').find('a');
                var permiconum = permicocontainer.find('.dzz-right-first').length;
                console.log(permiconum);
    if(perm > 1  && orgtype == 1){
                    permicocontainer.closest('#memberlist').find('li a span.creator').remove();
                    var html = '<span class="dzz-right-first creator"><img src="<?php echo MOD_PATH;?>/img/ic-creator.png"></span>';
}else if(perm > 0){
                    var html = '<span class="dzz-right-first"><img src="<?php echo MOD_PATH;?>/img/ic-manager.png"></span>';
}else{
    var html = '';
}
                if(permiconum > 0){
                    permicocontainer.find('.dzz-right-first').replaceWith(html);
                }else{
                    permicocontainer.append(html);
                }
                var dzzFit=obj.find('.dzz-fit');                           
                dzzFit.addClass('dzz-color').closest('.popbox_li').siblings().find('.dzz-fit').removeClass('dzz-color');
                if(dzzFit.hasClass('dzz-color')){
                    obj.find('.popbox-text').css({'color':'#4c89fb'}).closest('.popbox_li').siblings().find('.popbox-text').css({'color':'#333'});
                    obj.closest('.doperm').siblings('.rightdropdown_top').find('.permgrouptextspan').text(text);
                }
}else {
                showDetail(data['error']);
            }
   },'json')
})

    jQuery(document).off('click.removeuser').on('click.removeuser','.right_popbox_header .removeuser',function(){
        var obj = jQuery(this);
        var msg ='您确定要删除当前所选成员吗？';
         showDialog(msg,'confirm','',function(){
             var currentdouid = '<?php echo $_G['uid'];?>';
             var currentUid = '<?php echo $userinfos['uid'];?>';
             jQuery.post(MOD_URL+'&op=group&do=right_popbox&operation=deletemember', {
                 'gid': gid,
                 'uids': currentUid
             }, function (data) {
                 if (data['success']) {
                     var useridsarr = userids.split(',');
                     for (var o in data['uids']) {
                         var index = $.inArray(data['uids'][o],useridsarr);
                         useridsarr.splice(index,1);
                         userids = useridsarr.join(',');
                         if (data['uids'][o] == currentdouid) {
                             jQuery('#' + data['uids'][o] + '_delete').remove();
                             location.hash = "#recent";
                         } else {
                             jQuery('#' + data['uids'][o] + '_delete').remove();
                         }
                         jQuery('.member_details_info').popbox('close');
                     }
                 } else {
                     showDetail(data['error']);
                 }

                 return false;
             }, 'json');
 })
})
</script>
