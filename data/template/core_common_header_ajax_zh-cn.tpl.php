<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:1:{s:75:"/opt/lampp/htdocs/dzzoffice//./core/template/default/common/header_ajax.htm";i:1585620676;}*/?>
<?php ob_end_clean();
ob_start();
@header("Expires: -1");
@header("Cache-Control: no-store, private, post-check=0, pre-check=0, max-age=0", FALSE);
@header("Pragma: no-cache");
@header("Content-type: text/xml; charset=".CHARSET);
echo '<?xml version="1.0" encoding="'.CHARSET.'"?>'."\r\n";?><root><![CDATA[