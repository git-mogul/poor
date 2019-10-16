<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('content','head'); ?>
    <!--top End-->
    <!--ban-->
    <div class="H_ban">
        <div class="box">
            <div class="Menu">
                <h4>公司旅游</h4>
                <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b51f3eae29d014264736fdc4676b7264&action=category&catid=19&num=20&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'19','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $res) { ?>
                        <li id="menu53">
                            <a href="<?php echo $res['url'];?>"><?php echo $res['catname'];?></a>
                        </li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
            <div class="ban02">
                <a href=''><img src="<?php echo WEB_PATH;?>statics/home/uploadfiles/2013/10/201310211048304830.jpg" /></a>
            </div>
            <dl class="Current"><span>我们的足迹</span></dl>
        </div>
    </div>
    <!--ban End-->
    <!--Star-->
    <div class="Content">
        <!--Sidebar-->
        <div class="Sidebar">
            <div class="Sub">
                <h4>走过的山河</h4>
                <div class="box">
                    
                    <p class="MsoNormal"> 读万卷书不如行万里路,劳逸结合,方为上策.<span lang="EN-US">
                            <o:p></o:p>
                        </span> </p>
                   
                </div>
            </div>
        </div>
        <!--Sidebar End-->
        <!--Right-->
        <div class="RightSidebar">
            <div class="MainContent" style="text-align:center;">
                <!--Star-->
                   
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ccd13e5567ae483ffe0ef18c2da43253&action=lists&catid=%24catid&num=10&order=id+DESC&page=%24page&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 10;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                       <div style="text-align:center;display:inline-block;margin-left:10px;">
                            <a target='_blank' href="<?php echo $r['url'];?>">
                               <img src="<?php echo $r['thumb'];?>" width="100px">
                                <dl class="Info"><?php echo $r['title'];?></dl>
                            </a>
                        </div>
                      <?php $n++;}unset($n); ?>
            
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <!--End-->
            </div>
        </div>
        <!--Right End-->
        <div class="Space45"></div>
    </div>
    <!--End-->
    <!--bottom-->
    
<?php include template('content','foot'); ?>