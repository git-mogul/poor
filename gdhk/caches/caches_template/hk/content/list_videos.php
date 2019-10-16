<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?> <?php include template('content','head'); ?>   
    <div class="H_ban">
        <div class="box">
            <div class="Menu">
                <h4>新闻中心</h4>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b6aa4ce2f50929eda93ef067276e8587&action=category&catid=9&num=20&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'9','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $res) { ?>
                        <li id="menu53">
                            <a href="<?php echo $res['url'];?>"><?php echo $res['catname'];?></a>
                        </li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            <div class="ban02">
                <a href=''><img src="<?php echo WEB_PATH;?>statics/home/uploadfiles/2013/10/201310211048184818.jpg" /></a>
            </div>
            <dl class="Current"><span>公司视频</span></dl>
        </div>
    </div>
    <!--ban End-->
    <!--Star-->
    <div class="Content">
        <!--Sidebar-->
        <div class="Sidebar">
            <div class="Sub">
                <h4>联系我们</h4>
                <div class="box">
                    <p> <span style="font-family:微软雅黑, 'MS Sans Serif', sans-serif;font-size:13px;line-height:normal;white-space:normal;background-color:#FFEDC4;"> </span></p>
                    <p class="MsoNormal"> 广东华凯科技股份有限公司<span lang="EN-US">
                            <o:p></o:p>
                        </span> </p>
                    <p class="MsoNormal"> 公司总机：<span lang="EN-US">0757</span>—<span lang="EN-US">87381388<o:p></o:p></span> </p>
                    <p class="MsoNormal"> 销售分机：<span lang="EN-US">0757-87381388</span>（<span lang="EN-US">300</span>）<span lang="EN-US">
                            <o:p></o:p>
                        </span> </p>
                    <p class="MsoNormal"> 人资分机：<span lang="EN-US">0757-87381388</span>（<span lang="EN-US">379</span>）<span lang="EN-US">
                            <o:p></o:p>
                        </span> </p>
                    <p class="MsoNormal"> 地<span lang="EN-US">&nbsp; &nbsp; &nbsp;&nbsp;</span>址：广东省佛山市三水区中心科技工业区<span lang="EN-US">A</span>区<span lang="EN-US">19</span>号<span lang="EN-US">
                            <o:p></o:p>
                        </span> </p>
                    <p> <br /></p>
                    <p> <span style="font-family:微软雅黑, 'MS Sans Serif', sans-serif;font-size:13px;line-height:normal;white-space:normal;background-color:#FFEDC4;"></span></p>
                </div>
            </div>
        </div>
        <!--Sidebar End-->
        <!--Right-->
        <div class="RightSidebar">
            <div class="MainContent">
                <!--Star-->

                <ul class="News_list">
                     <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f15e6a5ca486b10108ea74d42cfa5f43&action=lists&catid=%24catid&num=2&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 2;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <!-- <tr>
                                <td><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?> </a></td>
                                <td class="tc"><?php echo date('Y-m-d',$r[inputtime]);?></td>
                            </tr> -->
                            <li>
                                <div class="pic"><a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" onerror="this.src='/res/images/nofile.jpg'" /></a></div>
                                <h4><span><?php echo date('Y-m-d',$r[inputtime]);?></span><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></h4>
                                <dl> <?php echo $r['description'];?><a href="<?php echo $r['url'];?>">详细+</a></dl>
                            </li>

                        <?php $n++;}unset($n); ?>
                                
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>


                </ul>
                <!--Pages-->
                
                <div class="Pages"> <?php echo $pages;?></div>
                <!--Pages-->
                <!--End-->
            </div>
        </div>
        <!--Right End-->
        <div class="Space45"></div>
    </div>
<?php include template('content','foot'); ?>