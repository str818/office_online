<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:3:{s:75:"/opt/lampp/htdocs/dzzoffice/dzzoffice//./dzz/system/template/selorguser.htm";i:1589274525;s:85:"/opt/lampp/htdocs/dzzoffice/dzzoffice//./core/template/default/common/header_ajax.htm";i:1589274520;s:85:"/opt/lampp/htdocs/dzzoffice/dzzoffice//./core/template/default/common/footer_ajax.htm";i:1589274520;}*/?>
<?php ob_end_clean();
ob_start();
@header("Expires: -1");
@header("Cache-Control: no-store, private, post-check=0, pre-check=0, max-age=0", FALSE);
@header("Pragma: no-cache");
@header("Content-type: text/xml; charset=".CHARSET);
echo '<?xml version="1.0" encoding="'.CHARSET.'"?>'."\r\n";?><root><![CDATA[<style>
.user-select-search .input-black {
margin-bottom: 0;
}
.user-select-body {
padding-top: 20px!important;
}
.user-select-body .user-select-content {
margin-top: 0;
border-bottom: 1px solid #e1e1e1;
}
.user-select-body .user-select-content .user-select-content-left {
float: left;
height: 300px;
oveflow: hidden;
width: 50%;
height: 300px;
border-right: 1px solid #e1e1e1;
}
.user-select-body .user-select-content .user-select-content-right {
height: 300px;
overflow: auto;
float: left;
width: 50%
}
.user-select-content-right .sele-right-classa {
list-style: none;
padding: 0;
margin: 0;
}
.user-select-content-right .sele-right-classa li {
padding-left: 15px;
line-height: 40px;
margin-left: 5px;
position: relative;
height: 40px;
padding-right: 30px;
white-space: nowrap;
overflow: hidden;
text-overflow: ellipsis;
}
.user-select-content-right .sele-right-classa li img {
max-width: 24px;
max-height: 24px;
}
.user-select-content-right .sele-right-classa li .ti-close {
position: absolute;
right: 0;
top: 0;
width: 30px;
height: 30px;
margin: 5px 0;
line-height: 30px;
text-align: center;
display: none;
cursor: pointer;
padding: 0;
background-color: #f2f2f2;
}
.user-select-content-right .sele-right-classa li:hover {
background-color: #f2f2f2;
border-radius: 3px;
}
.user-select-content-right .sele-right-classa li:hover .ti-close {
display: block;
}
#seluser_dropdown_menu {
height: 299px;
}
.user-select-body .Topcarousel{
width: 24px;
height: 24px;
border-radius: 50%;
display: inline-block;
line-height: 24px;
    text-align: center;
    margin-right: 2px;
    color: #FFFFFF;
font-size:14px;
}
.user-select-body .iconFirstWord{
width: 24px;
height: 24px;
border-radius: 50%;
display: inline-block;
line-height: 24px;
    text-align: center;
    margin-right: 2px;
    color: #FFFFFF;
font-size:14px;
}
.user-select-search .dzz-search-icon{
position: absolute;
    left: 0;
    top: 5px;
    font-size: 18px;
    color:#bbb ;
}
</style>
<script type="text/javascript" src="<?php echo MOD_PATH;?>/scripts/selorguser.js" ></script>
<script type="text/javascript" reload="1">
    if ('<?php echo $openarr_length;?>') {
        var openarr = [];
        openarr['seluser'] = <?php echo $openarr;?>; 
    }
</script>
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
  <h4 class="modal-title">成员选择</h4>
</div>
<form onsubmit="return seluser_submit(this);">
  <input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
  <input type="hidden" name="selectsubmit" value="true">
  <div class="modal-body user-select-body">
    <div class="user-select-search" >
      <div class="input-black">
        <label class="control-label">选择需要添加的用户</label>
        <div class="input-animate">
        	<i class="dzz dzz-search dzz-search-icon"></i>
          <input id="user_select_search_input" type="text" class="form-control" placeholder="搜索" style="padding-left: 1.42rem;"/>
        </div>
      </div>
    </div>
    <div class="user-select-content">
      <div class="user-select-content-left">
        <div class="group-content" id="seluser_dropdown_menu" style="overflow:hidden">
          <iframe name="seluser_iframe" class="org-sel-box-iframe"
                                src="<?php echo $theurl;?>"
                                frameborder="0" marginheight="0" marginwidth="0" width="100%" height="100%"
                                allowtransparency="true"></iframe>
          <input id="sel_seluser" type="hidden" name="uids"
                               value="<?php echo implode(',',array_keys($selects));?>"/>
        </div>
      </div>
      <div class="user-select-content-right">
        <div class="selected-member">已选择<b class="selected_sum" style="padding:0 5px;"><?php echo count($selects);?></b>个用户</div>
        <div class="group-content" id="group-contents">
          <ul class="sele-right-classa" id="seluser">
            <?php if(is_array($selects)) foreach($selects as $key => $value) { ?>            <li id="seluser_sl_<?php echo $key;?>" class="right-classa-depart avatar avatar-xs" data-val="<?php echo $key;?>"> <?php echo avatar_block($value[uid]);?>              <?php echo $value['username'];?> <i class="ti-close dzz dzz-close"></i> </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer">
 
    <button type="submit" class="btn btn-primary">确定</button>
    <button type="button" class="btn btn-default-outline cancel" data-dismiss="modal" aria-label="Close">取消 </button>
  </div>
</form>
<script type="text/javascript" reload="1">
    //名称初始化
    jQuery.getScript('static/js/input_field.js?<?php echo VERHASH;?>',function(){
        jQuery('.input-black').each(function () {
            InputAnimate.init(jQuery(this));
        });
    });
    jQuery(document).ready(function (e) {
/*jQuery('#user_select_search_input').off('blur').on('blur',function(){
try{
selorg.search('seluser',this);
}catch(e){}
return false;
});*/
jQuery('#user_select_search_input').off('keypress').on('keypress',function(event){
var self=this;

if(event.keyCode==13){ 
if(window.seluser_timer){
window.clearTimeout(window.seluser_timer);
}
window.seluser_timer=window.setTimeout(function(){
selorg.search('seluser',self);
},300);
return false;
}

});
jQuery('#user_select_search_input').off('keyup').on('keyup',function(event){
var self=this;
if(window.seluser_timer){
 	window.clearTimeout(window.seluser_timer);
}
window.seluser_timer=window.setTimeout(function(){
selorg.search('seluser',self);
},300);
return false;
});
        jQuery(document).on('mouseenter', '.user-item', function () {
            jQuery(this).addClass('hover');
        });
        jQuery(document).on('mouseleave', '.user-item', function () {
            jQuery(this).removeClass('hover');
        });
        jQuery(document).on('click', '#seluser .ti-close', function () {
            selorg.remove('seluser', this);
update_selected_sum()
        });
    });

 function seluser_submit(form){
 var vals=jQuery('#sel_seluser').val();
 var data={};
 var ids=[];
 jQuery('#seluser>li').each(function(){
 var val=jQuery(this).data('val');
 var title='';
 var innerhtml=this.innerHTML;
 innerhtml=innerhtml.replace(/<i class=\"ti-close dzz dzz-close\"><\/i>/i,'');
 innerhtml=innerhtml.replace(/<em.*?>.+?<\/em>/ig,'');
 var regx=new RegExp("<.+>",'i');
 var regx1=new RegExp("title=\"(.+?)\"");
 var matches;
 var matches1;
 if(matches=innerhtml.match(regx)){
 innerhtml=matches[0];
 }
if(matches=innerhtml.match(regx1)){
 title=matches[1];
 }
 if(val && val.indexOf('uid_')===0){//是用户
 val=val.replace('uid_','');
 ids.push(val);
 data[val]={'id':val,'html':innerhtml,'title':title};
 
 }else{//是机构或部门
 val='g_'+val;
 ids.push(val);
 data[val]={'id':val,'html':innerhtml,'title':title};
 }
 });
 try{
<?php echo $callback;?>(ids,data,'<?php echo $token;?>');//ids:选中的id列表如：[g_1,125,g_32...],g_开头的标识是机构部门或群组 
 }catch(e){};
 hideWindow("<?php echo $_GET['handlekey'];?>");
 return false;
 }
 function update_selected_sum(){
 jQuery('.selected_sum').html($('#seluser>li').length);
 }
</script> <?php echo output_ajax(); ?>]]></root><?php exit;?>