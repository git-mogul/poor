<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('content','head'); ?>

    <!--top End-->
    <!--ban-->
    <div class="H_ban">
        <div class="box">
            <div class="Menu">
                <h4>刊物中心</h4>
                <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=71f377e680e1f0bd3c3f3434a82d4a01&action=category&catid=14&num=20&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'14','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $res) { ?>
                        <li id="menu53">
                            <a href="<?php echo $res['url'];?>"><?php echo $res['catname'];?></a>
                        </li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
            <div class="ban02">
                <a href=''><img src="<?php echo WEB_PATH;?>statics/home/uploadfiles/2013/09/201309171046504651.jpg" /></a>
            </div>
            <dl class="Current"><span>书籍刊物</span></dl>
        </div>
    </div>
    <!--ban End-->
    <!--Star-->
    <div class="Content">
        <!--Sidebar-->
        <div class="Sidebar">
            <div class="Sub">
                <h4>斗破苍穹</h4>
                <div class="box">
                    <p> <span style="font-family:微软雅黑, 'MS Sans Serif', sans-serif;font-size:13px;line-height:normal;white-space:normal;background-color:#FFEDC4;"> 简介</span></p>
                    <p class="MsoNormal"> <?php echo $rs['content'];?><span lang="EN-US">
                            <o:p></o:p>
                        </span> </p>
                    
                </div>
            </div>
        </div>
        <!--Sidebar End-->
        <!--Right-->
        <div class="RightSidebar">
            <div class="MainContent">
                <!--Star-->
                   <div style="text-align:center;">
                       <img src="<?php echo $rs['thumb'];?>" alt="">
                    </div>
                    <h5 class="Info_back"><a target='_blank' href="<?php echo  string2array($rs['downfiles'])[0]['fileurl'] ?>">下载</a></h5>
                    <dl class="Info_page"></dl>
                   
                <!--End-->
            </div>
        </div>
        <!--Right End-->
        <div class="Space45"></div>
    </div>
    <!--End-->
    <!--bottom-->
<?php include template('content','foot'); ?>