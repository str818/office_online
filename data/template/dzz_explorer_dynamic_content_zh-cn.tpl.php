<?php if(!defined('IN_DZZ')) exit('Access Denied'); /*a:2:{s:82:"/opt/lampp/htdocs/dzzoffice/dzzoffice//./dzz/explorer/template/dynamic_content.htm";i:1589275828;s:85:"/opt/lampp/htdocs/dzzoffice/dzzoffice//./dzz/explorer/template/noFilePage-dynamic.htm";i:1589275828;}*/?>
<div class="padding-left-1 scroll-y">
        <div class="middletopMenu recycle-top clearfix">               
                <div class="form-control-group clearfix">
                    <div class="group-input">
                        <select class="js-example-basic-multiple js-states" id="id_label_multiple"
                                multiple="multiple">
                            <?php if(is_array($users)) foreach($users as $v) { ?>                            <option value="<?php echo $v['uid'];?>"><?php echo $v['username'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
 <div class="group-time form-control-group">
                    <div class="group-time-animate input-black input-float">
    					<div class="input-animate">
    	<input type="text"  class="form-control selectDate" id="selectDate"  placeholder="创建时间">	
    </div>						                             
                   </div>
                    <label>到</label>
                    <div class="group-time-animate input-black input-float">
                    	<div class="input-animate">
    	<input type="text" id="selectDate1"  class="form-control selectDate"  placeholder="创建时间">	
    </div>
                    </div>
                </div>

        </div>
        <div class="group-tableword"><em class="scree-term">附加筛选条件：</em></div>
        <!--文件列表开始-->
        <div class="group-filemember " id="group-filemember">
            <div class="group-filemember-header">
                <table class="table" width="100%" border="0">
                    <thead>
                    <tr>
                        <th class="member_header_0" width="20%">
                            <div class="member_header_td_div">
                                <span class="member_header_title">时间</span>
                                <a class="detail_header_icon" data-val="0"><span
                                        class="dzz dzz-expand-more"></span></a>
                            </div>
                        </th>
                        <th class="member_header_1" width="20%">
                            <div class="member_header_td_div">
                                <span class="member_header_type">操作者</span>
                                <a class="detail_header_icon" data-val="1"><span
                                        class="dzz dzz-expand-more"></span></a>
                            </div>
                        </th>
                        <th class="member_header_2" width="20%">
                            <div class="member_header_td_div">
                                <span class="member_header_type">操作</span>
                                <a class="detail_header_icon" data-val="2"><span
                                        class="dzz dzz-expand-more"></span></a>
                            </div>
                        </th>
                        <th class="member_header_2" width="20%">
                            <div class="member_header_td_div">
                                <span class="member_header_type">对象</span>
                                <a class="detail_header_icon" data-val="3"><span
                                        class="dzz dzz-expand-more"></span></a>
                            </div>
                        </th>
                        <th class="member_header_2" width="20%">
                            <div class="member_header_td_div">
                                <span class="member_header_type">详情</span>
                                <a class="detail_header_icon" data-val="4"><span
                                        class="dzz dzz-expand-more"></span></a>
                            </div>
                        </th>
                    </tr>
                    </thead>
                </table>
            </div>

            <div class="recent-con">
                <table class="table" width="100%" border="0">
                    <tbody id="event_list">
                    <?php if($events) { ?>
                    <?php if(is_array($events)) foreach($events as $val) { ?>                    <tr id="" class="member_tr Icoblock" data-uid="<?php echo $val['uid'];?>">
                        <td class="member_item_td" valign="middle" width="20%" style="position: relative;">
                            <span><?php echo dgmdate($val[dateline],'Y-m-d H:i:s');?></span>
                        </td>
                        <td class="member_item_td" valign="middle" width="20%">
                            <span><?php echo $val['username'];?></span>
                        </td>
                        <td class="member_item_td  member_header_color" valign="middle" width="20%">
                            <span onclick="search_do(this)" data-val="<?php echo $val['do'];?>"><?php echo $val['do_lang'];?></span>
                        </td>
                        <td class="member_item_td  member_header_color" valign="middle" width="20%">
                            <span onclick="search_obj(this)" data-val="<?php echo $val['do_obj'];?>"><?php if($val['do_obj']) { ?><?php echo $val['do_obj'];?>
                                <?php } ?></span>
                        </td>
                        <td class="member_item_td" valign="middle" width="20%">
                            <span><?php echo $val['details'];?></span>
                        </td>
                    </tr>
                    <?php } ?>
                    <?php } ?>
                    <?php if($eventnumbers == 0) { ?>
                    <tr class="emptyshare">
                        <td colspan="6" style="border: none;">
                            <div class="middle-padding-left scroll-y">
<div class="emptyPage">
    	<img src="<?php echo MOD_PATH;?>/img/noFilePage-dynamic.png">
    	<p class="emptyPage-text">暂无动态</p>
    </div>
</div>                        </td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td style="border: none;">
                        <?php if($next) { ?>
                        <a href="javascript:;" class="btn_button_more btn btn-link btn-block"
                               onclick="loading(this,'<?php echo $next;?>');">加载更多</a>
                        <?php } ?>
                        </td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
        <!--文件列表结束-->

    </div>


<script type="text/javascript">
    jQuery(document).ready(function (e) {
        $('.input-black').each(function() {			
InputAnimate.init($(this));			
});
    });

    //自动加载内容
    jQuery('.scroll-y').scroll(function (e) {
        var clientHeight = jQuery('.scroll-y').height();
        var scrollHeight = jQuery('#group-filemember').outerHeight(true);
        var scrollTop = jQuery('.scroll-y').scrollTop();
        if (scrollTop + clientHeight > scrollHeight - 60) {
            $('.btn_button_more').trigger('click');
        }
    })
    var search_data = {
        'doobj': '',
        'doevent': '',
        'uids': '',
        'startdate': '',
        'enddate': '',
        'disp': '',
        'asc': '',
        'page': 0
    };
    function loading(obj, next) {
        search_data.page = next;
        $.post(MOD_URL+'&op=dynamic&do=filelist', search_data, function (data) {
            $(obj).closest('tr').replaceWith(data);
        })

    }
    //添加上下图标
    $(document).off('click.dynamiscdisp').on('click.dynamiscdisp','.group-filemember-header th',function () {
        $(this).closest('.group-filemember-header tr').children('.group-filemember-header th').find('.detail_header_icon').hide();
        $(this).find('.detail_header_icon').css('display', 'inline-block');
        if ($(this).find('.dzz').hasClass('dzz-expand-more')) {
            $(this).find('.dzz').removeClass('dzz-expand-more').addClass('dzz-expand-less');
            search_data.asc = 1;
        } else {
            $(this).find('.dzz').addClass('dzz-expand-more').removeClass('dzz-expand-less');
            search_data.asc = 0;
        }
        var dispval = $(this).find('.detail_header_icon').data('val');
        search_data.disp = dispval;

        executedynamisc_search();

    })

    $("#selectDate,#selectDate1").datepicker({ //添加日期选择功能
        numberOfMonths: 1, //显示几个月
        showButtonPanel: false, //是否显示按钮面板
        dateFormat: 'yy-mm-dd', //日期格式
        clearText: "清除", //清除日期的按钮名称
        closeText: "关闭", //关闭选择框的按钮名称
        yearSuffix: '年', //年的后缀
        showMonthAfterYear: true, //是否把月放在年的后面
        constrainInput: true,
        maxDate: new Date(),
        setDate: 'date',

    });
    function search_do(obj) {
        var doval = $(obj).data('val');
        var dotext = $(obj).html();
        search_data.doevent = doval;
        search_data.page = 0;
        $.post(MOD_URL+'&op=dynamic&do=filelist', search_data, function (data) {
            $('#event_list').html(data);
            jQuery('.scroll-y').scrollTop(0);
            $('.group-tableword').show();
            if($('.group-tableword .docondition').length > 0){
                $('.group-tableword .docondition').remove();
            }
            $('.group-tableword').append('<span class="label  label-text docondition">操作：' + dotext + '<i class="dzz dzz-close group-closeicon" onclick="empty_do(this)" data-val="' + doval + '"></i></span>');
        })
    }
    function search_obj(obj) {
        var doval = $(obj).data('val');
        var objtext = $(obj).html();
        search_data.doobj = doval;
        search_data.page = 0;
        $.post(MOD_URL+'&op=dynamic&do=filelist', search_data, function (data) {
            $('#event_list').html(data);
            jQuery('.scroll-y').scrollTop(0);
            $('.group-tableword').show();
            if($('.group-tableword .objcondition').length > 0){
                $('.group-tableword .objcondition').remove();
            }
            $('.group-tableword').append('<span class="label label-text objcondition">' + objtext + '<i class="dzz dzz-close group-closeicon" onclick="empty_do(this)" data-val="' + doval + '"></i></span>');
        })
    }
    function empty_do(obj) {
        var val = $(obj).data('val');
        for (var o in search_data) {
            if (search_data[o] == val) {
                search_data[o] = '';
            }
        }
        search_data.page = 0;
        $.post(MOD_URL+'&op=dynamic&do=filelist', search_data, function (data) {
            $('#event_list').html(data);
            jQuery('.scroll-y').scrollTop(0);
            $(obj).parents('span').remove();
            if ($('.group-tableword').find('span').length < 1) {
                $('.group-tableword').hide();
            }
        })
    }
$.getScript('static/select2/select2.min.js',function(){
$("#id_label_multiple").select2({
placeholder: '筛选操作者',
}).on('change', function () {
search_data.uids = $(this).val();
            executedynamisc_search();
})
});
    $('#selectDate').change(function () {
        search_data.startdate = $('#selectDate').val();
        search_data.enddate = $('#selectDate1').val();
        if (search_data.startdate && search_data.enddate) {
            var start = new Date(search_data.startdate);
            var end = new Date(search_data.enddate);
            if (start.getTime() > end.getTime()) {
                showDialog('请选择正确的时间区间');
                return false;
            }
        }
        search_data.page = 0;
        executedynamisc_search();
    })
    $('#selectDate1').change(function () {
        search_data.startdate = $('#selectDate').val();
        search_data.enddate = $('#selectDate1').val();
        if (search_data.startdate && search_data.enddate) {
            var start = new Date(search_data.startdate);
            var end = new Date(search_data.enddate);
            if (start.getTime() > end.getTime()) {
                showDialog('请选择正确的时间区间');
                return false;
            }
        }
        search_data.page = 0;
        executedynamisc_search();
    })
    function executedynamisc_search() {
        $.post(MOD_URL+'&op=dynamic&do=filelist', search_data, function (data) {
            $('#event_list').html(data);
            jQuery('.scroll-y').scrollTop(0);
        })
    }
</script>