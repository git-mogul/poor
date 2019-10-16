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
                <h4><?php echo $rs['title'];?></h4>
                <div class="box">
                    <p> <span style="font-family:微软雅黑, 'MS Sans Serif', sans-serif;font-size:13px;line-height:normal;white-space:normal;background-color:#FFEDC4;"> 介绍</span></p>
                    <p class="MsoNormal"> <?php echo $rs['description'];?><span lang="EN-US">
                            <o:p></o:p>
                        </span> </p>
                    <p class="MsoNormal"> <?php echo $rs['content'];?><span lang="EN-US">
                </div>
            </div>
        </div>
        <!--Sidebar End-->
        <!--Right-->
        <div class="RightSidebar">
            <div class="MainContent" style="text-align:center;">
                <!--Star-->
                   
                <div class="ban" id="main1">
                    <ul id="content1">
                        <?php $n=1; if(is_array($pictureurls)) foreach($pictureurls AS $pic_k => $r) { ?>
                        img
                        <li><img src="<?php echo $r['url'];?>" width="500px"height="300px"></li>
                        <?php $n++;}unset($n); ?>
                        
                    </ul>
                </div>
                <!--End-->
            </div>
        </div>
        <!--Right End-->
        <div class="Space45"></div>
    </div>
    <!--End-->
    <!--bottom-->
    <script type="text/javascript" src="<?php echo WEB_PATH;?>statics/home/cn/Script/MSClass.js"></script>
    <script type="text/javascript">
    new Marquee({
        MSClassID: "main1",
        ContentID: "content1",
        Direction: 2,
        Step: 0.1,
        Width: 500,
        Height: 300,
        Timer: 20,
        DelayTime: 3000,
        WaitTime: 1000,
        ScrollStep: 778,
        SwitchType: 2,
        AutoStart: true
    })
    </script>
<?php include template('content','foot'); ?>