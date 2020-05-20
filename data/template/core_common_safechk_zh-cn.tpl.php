<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:2:{s:71:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/safechk.htm";i:1585620676;s:72:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/seccheck.htm";i:1585620676;}*/?>
<div class="form-group" id="verify-type">
    <label class="control-label" for="chktype" required>验证方式</label>
    <select name="chktype" id="chktype" class="form-control input-sm " >
        <?php if($chkarr['emailstatus'] && $chkarr['email']) { ?>
        <option value="email"><?php echo $hideemail;?> 验证</option>
        <?php } ?>
        <?php if($chkarr['phonestatus'] && $chkarr['phone']) { ?>
        <option value="phone"><?php echo $hidephone;?> 验证</option>
        <?php } ?>
       <?php if(!$chkarr['phonestatus'] && !$chkarr['emailstatus']) { ?>
        <option value="pass">密码验证</option>
        <?php } ?>
    </select>
</div>
<div id="emailchk_show"  class="showchktype" style="display:none;">
<div class="form-group">
    <label class="control-label"></label>
    <div class="controls"><input type="button" class="btn btn-primary return_chk" value="发送验证邮件" onclick="chkemail_verify()"></div>
</div>
</div>
<div id="passchk_show"   class="showchktype" style="display:none;">
<div class="form-group">
    <label class="control-label" for="chkpassword" required>密码</label>
    <input type="password" name="chkpassword" class="form-control" autocomplete="off" id="chkpassword" placeholder="请输入密码">
    <span id="chk_chkpassword" class="help-inline"><span id="suc_chkpassword"></span> <kbd  class="p_chk"></kbd> </span>
</div>
<div class="form-group" id="codeverify" <?php if($sessionerrornum > 2) { ?>style="display:block;"<?php } else { ?>style="display:none;"<?php } ?>>
    <?php
$sectpl = <<<EOF

    <sec>
        <sec>
            <sec>
                
EOF;
?>
                <div class="form-group">
                    <label class="control-label">验证码</label>
                    <div class="controls">
                        <?php $_G['sechashi'] = !empty($_G['cookie']['sechashi']) ? $_G['sechash'] + 1 : 0;
$sechash = 'S'.($_G['inajax'] ? 'A' : '').$_G['sid'].$_G['sechashi'];
$sectpl = !empty($sectpl) ? explode("<sec>", $sectpl) : array('',': ','','');
$sectpldefault = $sectpl;
$sectplqaa = str_replace('<hash>', 'qaa'.$sechash, $sectpldefault);
$sectplcode = str_replace('<hash>', 'code'.$sechash, $sectpldefault);
$secshow = !isset($secshow) ? 1 : $secshow;
$sectabindex = !isset($sectabindex) ? 1 : $sectabindex;?><?php
$seccheckhtml = <<<EOF

<input name="sechash" type="hidden" value="{$sechash}" />

EOF;
 if($sectpl) { if($seccodecheck) { 
$seccheckhtml .= <<<EOF

   			<div class="seccode-wrapper seccode_type_{$_G['setting']['seccodedata']['type']}">
    			<div class="input-group seccode-input">
                  <input name="seccodeverify" class="form-control" id="seccodeverify_{$sechash}" type="text" autocomplete="off" style="
EOF;
 if($_G['setting']['seccodedata']['type'] != 1) { 
$seccheckhtml .= <<<EOF
ime-mode:disabled;
EOF;
 } 
$seccheckhtml .= <<<EOF
"  onblur="checksec('code', '{$sechash}')"  placeholder="验证码" />
<span class="input-group-addon" id="checkseccodeverify_{$sechash}"></span>
                </div> 
                <div  class="seccode-show" >
{$sectplcode['2']}
<span id="seccode_{$sechash}"></span>
<a tabindex="-1" href="javascript:;" onclick="updateseccode('{$sechash}');doane(event);" class="seccode-refresh-guide"><span class="dzz dzz-refresh"></span></a>

EOF;
 if($secshow) { 
$seccheckhtml .= <<<EOF
<script type="text/javascript" reload="1">updateseccode('{$sechash}');</script>
EOF;
 } 
$seccheckhtml .= <<<EOF

{$sectplcode['3']}
                </div>
<span class="help-msg"></span>
</div>    


EOF;
 } } 
$seccheckhtml .= <<<EOF


EOF;
?><?php unset($secshow);?><?php if(empty($secreturn)) { ?><?php echo $seccheckhtml;?><?php } ?>                    </div>
                </div>
</div>

<div class="form-group">
    <label class="control-label"></label>
    <div class="controls"><input type="button" class="btn btn-primary return_chk" value="确定" onclick="pass_chk()"></div>
</div>
</div>
<div id="phonechk_show"   class="showchktype" style="display:none;">
<div class="form-group">
    <label class="control-label" for="pcode" required>短信验证码</label>
    <input type="text" name="pcode" class="form-control" autocomplete="off" id="pcode" placeholder="请输入验证码">
    <input type="button" class="btn btn-primary" value="获取验证码"  onclick="get_pcode()"/>
    <span id="chk_pcode" class="help-inline"><span id="suc_pcode"></span> <kbd  class="p_chk"></kbd> </span>
</div>
<div class="form-group">
    <label class="control-label"></label>
    <div class="controls"><input type="button" class="btn btn-primary return_chk" value="确定" onclick="pcode_chk()"></div>
</div>
</div>
<div class="conTent" id="email_sendmsg" style="display:none;">
    <div class="success">
        <span class="glyphicon glyphicon-ok"></span>
        <span class="msgobj">验证邮件已发送</span>
    </div>
    <div class="theme">
        <p><span class="msgobj">验证邮件</span>已发送至您的邮箱 <span class="phone"><a  href="" id="return_email" target="_blank">1861111@163.com</a></span>,点击邮件中的链接完成操作。</p>
        <p>验证邮件24小时内有效，请尽快验证。</p>
        <p>邮件可能会进入推广邮件或垃圾邮件中，请注意查收。</p>
    </div>
    <div class="email">
        <button type="button" class="btn btn-success" id="reffer_email">立即进入邮箱</button>
        <span><span id="sendstart">已发送</span><span id="sendstatus" style="display:none;"><b class="time" id="down_time">3</b>秒后<span id="false_resend">重新发送</span><span id="resend_true" style="display:none"><input type="button" class="btn btn-success"  value="重新发送" onclick="chkemail_verify()" ></span></span></span>
    </div>
</div>
<script>
    var verifyresult = false;
    jQuery('#chktype').change(function(){
        var val = jQuery(this).val();
        jQuery('.showchktype').hide();
        jQuery("#"+val+"chk_show").show();
    });
    jQuery('#chktype').change();
    function pass_chk(){
        var val = jQuery('#chkpassword').val();
        var chkcode = (jQuery("#codeverify").is(":visible"))?1:0;
        var form = jQuery('#chkpassword').parents('form').get(0);
        var seccode = form.seccodeverify.value ? form.seccodeverify.value:'';
        var sech = form.sechash.value ? form.sechash.value:'';
        var url = 'user.php?mod=profile&op=safeverify&do=chkpass&returnType=json';
        jQuery.post(url,{chkpassword:val,chkcodeverify:chkcode,seccodeverify:seccode,sechash:sech},function(json){
                if(json['success']){
                    jQuery('#chk_chkpassword .p_chk').html('');
                    verifyresult = true;
                    if(verifyresult){
                        safeverifystep(1);
                    }
                }else if(json['error']){
                    if(json['codeerror']){
                        showmessage(json['error'],'danger',1000,1)
                    }else{
                        jQuery('#chk_chkpassword .p_chk').html(json['error']);
                        if(json['errornum'] > 2 && jQuery("#codeverify").is(":hidden")){
                            jQuery('#codeverify').show();
                        }
                    }
                }
        },'json');
        return false;
    }
    function getEmailPath(email){
        var hash={
            'qq.com': 'http://mail.qq.com',
            'gmail.com': 'http://mail.google.com',
            'sina.com': 'http://mail.sina.com.cn',
            '163.com': 'http://mail.163.com',
            '126.com': 'http://mail.126.com',
            'yeah.net': 'http://www.yeah.net/',
            'sohu.com': 'http://mail.sohu.com/',
            'tom.com': 'http://mail.tom.com/',
            'sogou.com': 'http://mail.sogou.com/',
            '139.com': 'http://mail.10086.cn/',
            'hotmail.com': 'http://www.hotmail.com',
            'live.com': 'http://login.live.com/',
            'live.cn': 'http://login.live.cn/',
            'live.com.cn': 'http://login.live.com.cn',
            '189.com': 'http://webmail16.189.cn/webmail/',
            'yahoo.com.cn': 'http://mail.cn.yahoo.com/',
            'yahoo.cn': 'http://mail.cn.yahoo.com/',
            'eyou.com': 'http://www.eyou.com/',
            '21cn.com': 'http://mail.21cn.com/',
            '188.com': 'http://www.188.com/',
            'foxmail.coom': 'http://www.foxmail.com'
        };
        var url =email.split('@')[1];
        var emailpath = hash[url];
        return emailpath;
    }
    function chkemail_verify(){
        jQuery('#sendstatus').hide();
        jQuery('#down_time').html(3);
        jQuery('#resend_true').hide();
        jQuery('#sendstart').html('发送中，请稍后...');
        var url = 'user.php?mod=profile&op=safeverify&do=chkemail&returnType=json';
        jQuery.post(url,{email_verify:1},function(json){
            if(json['success']){
                jQuery('#emailchk_show').hide();
                jQuery('#verify-type').hide();
                jQuery('#sendstart').html('已发送');
                jQuery('#sendstatus').show();
                jQuery('#false_resend').show();
               // jQuery('#emailform').hide();
                jQuery('#email_sendmsg').show();
                var path = getEmailPath(json['success']['email']);
                jQuery('#return_email').html(json['success']['email']).attr('href',path);
                jQuery('#reffer_email').click(function(){
                    window.location.href = path;
                });
                var sum = 3;
                var timer = setInterval(function(){
                    if(sum <= 0) {
                        sum = 0;
                        jQuery('#false_resend').hide();
                        jQuery('#resend_true').show();
                        clearTimeout(timer);
                    }
                    jQuery('#down_time').html(sum);
                    sum--;
                },1000);
            }else if(json['error']){
                showmessage(json['error'],'danger',3000,1);
            }
        },'json')

    }
</script>