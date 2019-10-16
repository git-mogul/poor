<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=7" />
    <meta name="Author" content="������">
    <meta name="Author" content="万户网络设计制作" />
    <title>广东华凯科技股份有限公司</title>
    <meta name="keywords" content="广东华凯科技股份有限公司" />
    <meta name="Description" content="广东华凯科技股份有限公司" />
    <link href="<?php echo WEB_PATH;?>statics/home/cn/css/css_whir.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo WEB_PATH;?>statics/home/cn/Script/jquery-1.4.2.min.js" type="text/javascript"></script>
    <!--[if IE 6]>
<script src="/cn/Script/pngAlaph.js"></script>
<script>DD_belatedPNG.fix('.H_Mibble ul li .bg,.Product_list li .bg,.ProInfo_photo span');</script>
<![endif]-->
</head>

<body>
    <!--top-->
    <div class="header">
        <h3 class="logo"><a href="<?php echo APP_PATH;?>"></a></h3>
        <!-- <div class="language"><a href='/index_en.html'>English</a></div>
        <div class="search">
            <input name="" type="text" class="text" id="key" value="请输入关键字" onblur="if(this.value=='')this.value='请输入关键字';" onfocus="this.value='';" onkeydown="entersearch()" /><input type="submit" name="button" id="button" value="" class="btn" onclick="return GoSearchUrl();">
        </div> -->
        <div class="mainnav">
            
            <ul>
                 <li style="text-align:center;"><span><a href="<?php echo APP_PATH;?>">首页</a></span></li>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d4b9fcce1375cacb7ce5e1c6ac8f3432&action=category&catid=0&num=20&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        
                        
                    <li style="text-align:center;"><span><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></span></li>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

            </ul>
        </div>
    </div>
    <script type="text/javascript">
    //this function do not use jquery for honner page?
    function GoSearchUrl() {
        var searchinput = document.getElementById("key");
        if (searchinput.value == "" || searchinput.value == "请输入关键字") {
            alert("请输入关键字！");
            searchinput.focus();
            return false;
        }
        if (searchinput.value.length > 50) {
            alert("输入的关键字字数不要过多！");
            searchinput.focus();
            return false;
        }


        var pattern = new RegExp("[`~!@#$^&*()=|{}':;',\\[\\].<>/?~！@#￥……&*（）—|{}【】‘；：”“'。，、？]")

        if (pattern.test(searchinput.value)) {
            alert("您输入的内容存在特殊字符!");
            return false;
        }

        //var cid ='0';


        //alert(window.location.href);
        //window.location.href = "/search/search.aspx?key=" + escape(searchinput.value);
        window.location = "/search/search2.aspx?key=" + escape(stripscript(searchinput.value));
        return true;
    }

    function entersearch() {
        //alert(dd);
        var event = window.event || arguments.callee.caller.arguments[0];
        if (event.keyCode == 13) {
            GoSearchUrl();
        }
    }

    function checkComments() {
        var event = window.event || arguments.callee.caller.arguments[0];
        //alert(event.keyCode);
        if ((event.keyCode > 32 && event.keyCode < 48) ||
            (event.keyCode > 57 && event.keyCode < 65) ||
            (event.keyCode > 90 && event.keyCode < 97)
        ) {
            event.returnValue = false;
        }
    }


    function stripscript(s) {

        var pattern = new RegExp("[`~!@#$^&*()=|{}':;',\\[\\].<>/?~！@#￥……&*（）&mdash;—|{}【】‘；：”“'。，、？]")
        var rs = "";
        for (var i = 0; i < s.length; i++) {
            rs = rs + s.substr(i, 1).replace(pattern, '');
        }

        return rs;
    }
    </script>