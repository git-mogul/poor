<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('content','head'); ?>
    <!--top End-->
    <!--ban-->
    <div class="H_ban">
        <div class="box">
            <div class="list">
                <h3>公司新闻</h3>
                <ol>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1b4a47aebd2bc56b8c75a01cd884cecb&action=lists&catid=10&num=2&order=id+DESC&page=%24page&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 2;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'10','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'10','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                               
                            <li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a><span><?php echo date('Y年m月d日', $r['inputtime']);?></span></li>
                        <?php $n++;}unset($n); ?>
                    
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ol>
                <dl><a href="<?php echo $CATEGORYS['9']['url'];?>">更多</a></dl>
            </div>
            <div class="ban" id="main1">
                <ul id="content1">
                    <li><img src="<?php echo WEB_PATH;?>statics/home/uploadfiles/Home_ban1_cn.jpg"  /></li>
                    <li><img src="<?php echo WEB_PATH;?>statics/home/uploadfiles/Home_ban2_cn.jpg"  /></li>
                    <li><img src="<?php echo WEB_PATH;?>statics/home/uploadfiles/Home_ban3_cn.jpg"  /></li>
                </ul>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo WEB_PATH;?>statics/home/cn/Script/MSClass.js"></script>
    <script type="text/javascript">
    new Marquee({
        MSClassID: "main1",
        ContentID: "content1",
        Direction: 2,
        Step: 0.1,
        Width: 778,
        Height: 351,
        Timer: 20,
        DelayTime: 3000,
        WaitTime: 1000,
        ScrollStep: 778,
        SwitchType: 2,
        AutoStart: true
    })
    </script>
    <!--ban End-->
    <div class="bghome">
        <!--Star-->
        <div class="Content">
            <div class="Space"></div>
            <!--核心理念-->
            <div class="H_Concept">
                <h3 class="name">核心理念</h3>
                <div class="box">
                    一直以来，广东华凯科技股份有限公司秉持 “真诚、积极、进步、创新、和谐、共赢”的经营理念，立足国内，放眼全球，严谨求实，与时俱进，致力于科技创新与可持续发展，竭诚为用户提供环保的产品和一体化的解决方案，努力为社会创造和谐的效益，竭力为生态作出卓越的贡献！
                    <a href="<?php echo $CATEGORYS['16']['url'];?>">详细</a>
                </div>
            </div>
            <!--核心理念 End-->
            <!--Mibble-->
            <div class="H_Mibble">
                <ul>
                    <li>
                        <div class="bg"></div>
                        <div class="pic"><img src="<?php echo WEB_PATH;?>statics/home/uploadfiles/2013/10/201310211044444444.jpg" onerror="this.src='/res/images/nofile.jpg'" /></div>
                        <h4><a href="<?php echo $CATEGORYS['14']['url'];?>">科技创新</a></h4>
                        <dl> 广东华凯科技股份有限公司作为广东省民营科技企业，国家高新技术企业 公司于2009年通过...<a href='http://www.walkkind.com/cn/kjcx/index_45.aspx'>详细</a></dl>
                    </li>
                    <li>
                        <div class="bg"></div>
                        <div class="pic"><img src="<?php echo WEB_PATH;?>statics/home/uploadfiles/2013/10/201310211045124512.jpg" onerror="this.src='/res/images/nofile.jpg'" /></div>
                        <h4><a href="<?php echo $CATEGORYS['16']['url'];?>">优质服务</a></h4>
                        <dl> 凭借产品表里如一的稳定品质，结合“客户满意度至上”的卓越服务，充满活力的华凯公司一...<a href='http://www.walkkind.com/cn/yzfw/index_48.aspx'>详细</a></dl>
                    </li>
                    <li>
                        <div class="bg"></div>
                        <div class="pic"><img src="<?php echo WEB_PATH;?>statics/home/uploadfiles/2013/10/201310211045304530.jpg" onerror="this.src='/res/images/nofile.jpg'" /></div>
                        <h4><a href="<?php echo $CATEGORYS['17']['url'];?>">社会使命</a></h4>
                        <dl> 有限资源需要无限利用，在科技创新的道路上 积极参与环境保护，是任何一个企业都无法...<a href='http://www.walkkind.com/cn/shsm/index_46.aspx'>详细</a></dl>
                    </li>
                    <li>
                        <div class="bg"></div>
                        <div class="pic"><img src="<?php echo WEB_PATH;?>statics/home/uploadfiles/2013/10/201310211045534553.jpg" onerror="this.src='/res/images/nofile.jpg'" /></div>
                        <h4><a href="<?php echo $CATEGORYS['17']['url'];?>">企业愿景</a></h4>
                        <dl> 想要创造非凡，当前只是起点。 华凯全体同仁将时刻牢记面对社会的责任和使命 以真诚...<a href='http://www.walkkind.com/cn/qyyj/index_47.aspx'>详细</a></dl>
                    </li>
                </ul>
            </div>
            <!--Mibble End-->
            <!--视频中心-->
            <div class="H_video">
                <h4>视频中心</h4>
                <div class="box">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6ecc31d26e1363fcb31dfb4c64a15838&action=lists&catid=11&num=1&order=id+DESC&page=%24page&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 1;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'11','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'11','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                               
                            <a href="<?php echo $CATEGORYS['11']['url'];?>"><video src="<?php echo $r['content'];?>"  style="width:200px;height:100px;"  controls="controls" width="30px" height="40px"></video></a>
                            <!-- <li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a><span><?php echo date('Y年m月d日', $r['inputtime']);?></span></li> -->
                        <?php $n++;}unset($n); ?>
                    
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

                    <!-- <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6154cc5c44f30f593de2b6581878ddcf&action=category&catid=11&num=1&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'11','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'1',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $res) { ?>
                        <?php echo $res['url'];?>
                        <?php echo $res; ?>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> -->
                </div>
            </div>
            <!--视频中心 End-->
            <!--关于我们-->
            <div class="H_about">
                <h4>公司简介</h4>
                <div class="box">
                    <dl><a href="<?php echo $CATEGORYS['16']['url'];?>"><img src="<?php echo WEB_PATH;?>statics/home/cn/images/H_aboutPic.jpg" /></a></dl>
                    <a href="<?php echo $CATEGORYS['16']['url'];?>"> 广东华凯特种纤维板科技有限公司是一家集特种纤维板研发、生产...</a>
                </div>
            </div>
            <!--关于我们 End-->
            <!--联系我们-->
            <div class="H_contact">
                <h4><a href="<?php echo $CATEGORYS['16']['url'];?>">联系我们</a></h4>
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
            <!--联系我们 End-->
            <div class="Space18"></div>
        </div>
        <!--End-->
    </div>
    <!--bottom-->
    <script type="text/javascript" language="javascript">
    function $(id) { return document.getElementById(id) };
    </script>
<?php include template('content','foot'); ?>
<!--<div id="img" style="width:400px; height:200px;position:absolute;z-index:9999;" onMouseOver="mystop()" onMouseOut="start()">
  <div id="close-ad" style="width:50px;height:20px;float:left; display:inline;cursor:pointer;color:#000000;text-align:left;" onClick="closead()">关闭</div>
  <div style="width:400px;height:200px;"><a href="http://www.walkkind.com/index.aspx" target="_blank"><img src="飘窗2.jpg"   border="0"/></a></div>
</div>

<script type="text/javascript">

var xPos = 0;var yPos = 0; var step = 1;var delay = 30;var height = 0; var Hoffset = 0;var Woffset = 0; var yon = 0;var xon = 0; var xon = 0; var interval;
var Window = document.getElementById('');
img.style.top = 0;
var interval;
function changePos(){
  width = document.body.clientWidth;
  height = document.documentElement.clientHeight;
  Hoffset = imgWindow.offsetHeight;
  Woffset = imgWindow.offsetWidth;
  imgWindow.style.left = xPos + document.body.scrollLeft + "px";
  imgWindow.style.top = yPos + document.body.scrollTop + "px";
  if (yon) {
    yPos = yPos + step;
  
  }else {
    yPos = yPos - step;
  }
  if (yPos < 0) {
    yon = 1;
    yPos = 0;
  }
  if (yPos >= (height - Hoffset)) {
  yon = 0;
  yPos = (height - Hoffset);
  }
  if (xon) {
  xPos = xPos + step;
  }
  else {
  xPos = xPos - step;
  }
  if (xPos < 0) {
  xon = 1;
  xPos = 0;
  }
  if (xPos >= (width - Woffset)) {
  xon = 0;
  xPos = (width - Woffset);
  }
}
function start() {
imgWindow.visibility = 'visible';
interval = setInterval('changePos()', delay);
}
function mystop()
{
  clearInterval(interval);
}
function closead(){
  clearInterval(interval);
  imgWindow.style.display = "none";
  return false;
}
start();

</script>  
-->