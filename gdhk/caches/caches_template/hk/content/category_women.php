<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('content','head'); ?>
    <!--top End-->
    <!--ban-->
    <div class="H_ban">
        <div class="box">
            <div class="Menu">
                <h4>关于我们</h4>
                <ul>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=879dbecc6a8145c969f0ecd1130a7b8d&action=category&catid=16&num=20&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'16','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $res) { ?>
                     <li id="menu53">
                            <a href="<?php echo $res['url'];?>"><?php echo $res['catname'];?></a>
                    </li>
                <?php $n++;}unset($n); ?>
            
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
            <div class="ban02">
                <a href=''><img src="<?php echo WEB_PATH;?>statics/home/uploadfiles/2013/10/201310211047364736.jpg" /></a>
            </div>
            <dl class="Current"><span>公司简介</span></dl>
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
                <p style="text-indent:24pt;" class="MsoNormal"> <span style="text-indent:24pt;">广东华凯科技股份有限公司</span><span style="text-indent:24pt;">是一家</span><span style="text-indent:24pt;">集特种纤维板研发、生产、销售、进出口贸易为一体的国家高新技术企业。公司成立于</span><span style="text-indent:24pt;">2007</span><span style="text-indent:24pt;">年</span><span style="text-indent:24pt;">1</span><span style="text-indent:24pt;">月，总部位于广东省佛山市三水区中心科技工业区</span><span style="text-indent:24pt;">A</span><span style="text-indent:24pt;">区</span><span style="text-indent:24pt;">19</span><span style="text-indent:24pt;">号，距广州市仅</span><span style="text-indent:24pt;">30</span><span style="text-indent:24pt;">分钟车程。目前，公司拥有三条自主设计、自主知识产权的纤维板生产线，设备自动化程度高，产品质量优良。公司致力于纤维的应用研究与开发，产品广泛应用于制鞋用的乳胶纤维板和高密度纤维板、箱包材料、工业垫片、绝缘材料等。生产使用的原材料大部分是可再生材料，是利用循环经济的一个高新技术企业。</span></p>
                <p style="text-indent:24pt;" class="MsoNormal"> 公司建立了一支以多名行业精英为技术骨干的研发团队，通过开展产学研技术合作，依靠自主创新的研究和开发，逐步掌握特种纤维板制造的核心技术，并获得了多项由国家授权的实用新型和发明专利。<span></span> </p>
                <p style="text-indent:24pt;" class="MsoNormal"> 公司已通过<span>DNV</span>的<span>ISO9001</span>：<span>2008</span>质量管理体系认证，是国内外许多著名鞋业品牌指定生产商，是英国<span>SATRA</span>国际技术中心会员并获国内首家同行业<span>SATRA</span>实验室认证，同时也获得“国家高新技术企业”、“广东省民营科技企业”等称号，并获批组建“佛山市特种纤维板材料工程技术中心”，而成为特种纤维板专业生产企业的引领者。<span></span> </p>
                <p style="text-indent:24pt;" class="MsoNormal"> 公司的产品有完备的自主知识产权和企业、国家及世界标准，产品获通过如<span>SGS</span>、<span>UNION</span>、<span>INTERTEK</span>等权威检测机构的物性检测合格，并通过<span>SGS</span>检测达到欧洲环保性能的要求，产品质量达到同类产品的国际水平，产品不仅畅销全国各地，而且出口到墨西哥、阿根廷、哥伦比亚、俄罗斯、西班牙、日本、韩国、印度、孟加拉、伊朗、巴基斯坦、印度尼西亚、越南、台湾等国家和地区。<span></span> </p><span style="white-space:normal;">广东华凯科技股份有限公司</span>将继续秉承“真诚、积极、进步、创新、和谐、共赢”的经营理念，以“成为特种纤维板行业的领导者”为企业愿景，与时俱进，团结务实，锐意创新，努力打造一个具有国际市场竞争力的特种纤维板龙头企业。<p> <br /></p>
                <p> <br /></p>
                <p> <span style="white-space:normal;"></span></p>
                <!--End-->
            </div>
        </div>
        <!--Right End-->
        <div class="Space45"></div>
    </div>
    <!--End-->
    <!--bottom-->
 <?php include template('content','foot'); ?>