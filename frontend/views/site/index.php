<?php


/*
 * Team：互联网团队
 * Coding By：王荣熙、李新
 * 主页面(前台)
*/

/** @var yii\web\View $this */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
$cnt = 2;

//难民数据
$element_1 = \common\models\element::findOne(['name' => '锶-90']);
$element_2 = \common\models\element::findOne(['name' => '锑-124']);
$element_3 = \common\models\element::findOne(['name' => '钴-60']);
$element_4 = \common\models\element::findOne(['name' => '铯-137']);
$element_5 = \common\models\element::findOne(['name' => '氚']);
$element_6 = \common\models\element::findOne(['name' => '碳-14']);
$element_7 = \common\models\element::findOne(['name' => '铯-134']);
$element_8 = \common\models\element::findOne(['name' => '碲-129']);
$element_9 = \common\models\element::findOne(['name' => '镍-63']);




// $this->title = 'My Yii Application';
?>
<!-- BEGIN: .cover -->
<!-- <div class="cover overlay">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-7">
                
            </div>
        </div>
    </div>
</div> -->
<head>
  <meta charset="UTF-8">
  <title>My PHP Page</title>
  <link rel="stylesheet" href="./style.css">
</head>
<script src="./jquery.js"></script>
<section class="banner_main">
    <div class="container-fluid">
        <div class="row d_flex">
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="text-bg">
                    <span class="caption mb-3 d-block"></span>
                    <!--发送通知信息-->
                    <?php
                    if (isset($message))
                        echo "<h1 class=\"heading\">" . $message . "</h1>";
                    if(isset($_GET['message']))
                        echo "<h1 class=\"heading\">" . $_GET['message'] . "</h1>";
                    else echo "<h1 class=\"heading\"></h1>";
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->
<p class="checkcaption">日本非法排放核污水时间线</p>
<div class="check">
	<input type="checkbox" id="switch1" name="switch1" class="switch" />
	<label for="switch1"></label>
</div>

<div id="timeline">
	<div class="dot" id="one">
		<span></span>
		<date>2021</date>
	</div>
  <div class="dot" id="two">
		<span></span>
		<date>2022</date>
	</div>
  <div class="dot" id="three">
		<span></span>
		<date>2022</date>
	</div>
  <div class="dot" id="four">
		<span></span>
		<date>2023</date>
	</div>
  <div class="inside"></div>
</div>

<!-- Modals -->

<article class='modal one'>
  <date>13/04 - 2021</date>
  <h2>日本正式启动排海计划</h2>
  <p>日本政府正式决定将上述核污水经过滤并稀释后排放入海。排放在2023年后开始，排放时间持续20年至30年。根据该会议决定，福岛第一核电站的运营方东京电力公司在排放核污水时，水中所含氚的浓度被稀释到日本核电站废水氚排放国家标准即每升水中氚活度6万贝克勒尔的四十分之一以下，整个排放预计于2041年至2051年福岛核电站完成反应堆废除工作前结束。日本媒体援引日本政府相关人士的话报道称，关于福岛第一核电站核污染水排放入海问题，日本政府和东京电力公司已基本敲定，将修建一条从福岛第一核电站通往近海的海底隧道，核污染水经海水稀释后，通过该隧道引流到距离海岸1公里的海中</p>
</article>

<article class='modal two'>
  <date>15/04 - 2022</date>
  <h2>审查同意</h2>
  <p>日本原子力规制委员会大体结束了对福岛第一核电站核污染水排放计划安全性的审查。该委员会对东京电力公司核污染水排放计划“大致同意”，5月将出具事实上表示合格的审查结果。在获得日本原子力规制委员会以及福岛县等地方政府的同意后，东京电力公司便可启动排放计划，东京电力公司计划在2023年4月中旬前后完成有关设备施工等工作。</p>
</article>

<article class='modal three'>
  <date>27/04 - 2022</date>
  <h2>排海工程</h2>
  <p>据日本广播协会（NHK）报道，关于福岛第一核电站核污染水的海洋排放问题，东京电力公司日前重新评估了核污水储存罐的饱和时间，为下一步排海做准备。报道称，福岛第一核电站每天释放出约130吨核污染水。目前，东京电力在核电站设置了1000多个存放核污水的储存罐，截至21日，现有核污水容量已达最高承载量的95%。此前，东京电力认为核污水饱和会在2022年秋天左右，但经此次评估后指出，饱和时间应该会在2023年夏天到秋天之间。另一方面，关于核污水的海洋排放，东京电力表示，在2023年春天正式排海的计划不会改变。东京电力福岛第一废炉推进公司代表小野明表示，“为了得到当地和相关人员的理解，将继续进行说明，但仍会为明年春天（核污水）排海做准备”。</p>
</article>

<article class='modal four'>
  <date>03/08 - 2023</date>
  <h2>排海时间</h2>
  <p>据日本共同社消息，东京电力公司当天表示，此前制定的2023年春天正式排放福岛核污水计划推迟，或于2023年夏季开始排放。东京电力公司还表示，将于4日正式开始铺设海底隧道等设备，为排放福岛核污水做准备。福岛当地政府对排海计划开绿灯后，东电随即开工建设排海设施，其中全长1公里的海底隧道已经挖掘了近200米。日本东京电力公司在福岛第一核电站用于排放核污染水的海底隧道出口端放置了作为排放口的大型沉箱。待海底隧道挖掘完成后，整套排海设施就可连通起来。</p>
</article>

<!-- Portfolio Section -->
<section id="portfolio" class="section portfolio-section">
    <div class="container">
        <h6 class="section-title text-center">日本非法排放核污水大数据分析</h6>
        <h6 class="section-subtitle mb-5 text-center">The big data analysis of Japan's illegal discharge of nuclear contaminated water</h6>
        <div class="filters">
            <a href="#" data-filter=".new" class="active">
                放射性元素
            </a>
            <a href="#" data-filter=".advertising">
                半衰期
            </a>
            <a href="#" data-filter=".branding">
                View
            </a>
        </div>
        <div class="portfolio-container"> 
            <div class="col-md-6 col-lg-4 new">
                <div class="portfolio-item">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/1.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    <div class="content-holder">
                        <a class="img-popup" href="assets/frontend/leadmark/public_html/assets/imgs/1.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">锶-90</h6>
                            <p class="subtitle"><?= number_format($element_1->time) ?></p>
                        </div>
                    </div>   
                </div>             
            </div>
            <div class="col-md-6 col-lg-4 new">
                <div class="portfolio-item">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/2.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    <div class="content-holder">
                        <a class="img-popup" href="assets/frontend/leadmark/public_html/assets/imgs/2.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">锑-124</h6>
                            <p class="subtitle"><?=number_format($element_2->time) ?></p>
                        </div>
                    </div> 
                </div>                         
            </div>
            <div class="col-md-6 col-lg-4 new">
                <div class="portfolio-item">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/3.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                         
                    <div class="content-holder">
                        <a class="img-popup" href="assets/frontend/leadmark/public_html/assets/imgs/3.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">钴-58</h6>
                            <p class="subtitle"><?= number_format($element_3->time) ?></p>
                        </div>
                    </div>    
                </div>              
            </div> 
            <div class="col-md-6 col-lg-4 new">
                <div class="portfolio-item">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/4.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                    <div class="content-holder">
                        <a class="img-popup" href="assets/frontend/leadmark/public_html/assets/imgs/4.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">铯-137</h6>
                            <p class="subtitle"><?= number_format($element_4->time) ?></p>
                        </div>
                    </div>
                </div>                                                     
            </div>

            <div class="col-md-6 col-lg-4 new"> 
                <div class="portfolio-item">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/5.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                               
                    <div class="content-holder">
                        <a class="img-popup" href="assets/frontend/leadmark/public_html/assets/imgs/5.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">镍-63</h6>
                            <p class="subtitle"><?= number_format($element_5->time) ?></p>
                        </div>
                    </div>
                </div>                                                       
            </div> 
            <div class="col-md-6 col-lg-4 new">
                <div class="portfolio-item">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/6.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">  
                    <div class="content-holder">
                        <a class="img-popup" href="assets/frontend/leadmark/public_html/assets/imgs/6.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">氚</h6>
                            <p class="subtitle"><?= number_format($element_6->time) ?></p>
                        </div>
                    </div>
                </div>                                                     
            </div>
            <div class="col-md-6 col-lg-4 new">
                <div class="portfolio-item">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/7.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">       
                    <div class="content-holder">
                        <a class="img-popup" href="assets/frontend/leadmark/public_html/assets/imgs/7.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">碳-14</h6>
                            <p class="subtitle"><?= number_format($element_7->time) ?></p>
                        </div>
                    </div>
                </div>                                                       
            </div> 
            <div class="col-md-6 col-lg-4 new">
                <div class="portfolio-item">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/8.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">  
                    <div class="content-holder">
                        <a class="img-popup" href="assets/frontend/leadmark/public_html/assets/imgs/8.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">铯-134</h6>
                            <p class="subtitle"><?=number_format($element_8->time) ?></p>
                        </div>
                    </div>
                </div>                                                     
            </div>
            <div class="col-md-6 col-lg-4 new">
                <div class="portfolio-item">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/9.jpg" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">  
                    <div class="content-holder">
                        <a class="img-popup" href="assets/frontend/leadmark/public_html/assets/imgs/9.jpg"></a>
                        <div class="text-holder">
                            <h6 class="title">碲-129</h6>
                            <p class="subtitle"><?= number_format($element_9->time) ?></p>
                        </div>
                    </div>
                </div>                                                     
            </div>
            <div class="col-md-6 col-lg-4 advertising">
            <div id="container" style="height: 600%;width: 300%"></div>
                <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@5.4.1/dist/echarts.min.js"></script>
                <script type="text/javascript">
                    var dom = document.getElementById('container');
                    var myChart = echarts.init(dom, null, {
                    renderer: 'canvas',
                    useDirtyRect: false
                    });
                    var app = {};
                    
                    var option;

                    option = {
                    legend: {
                        top: 'bottom'
                    },
                    toolbox: {
                        show: true,
                        feature: {
                        mark: { show: true },
                        dataView: { show: true, readOnly: false },
                        restore: { show: true },
                        saveAsImage: { show: true }
                        }
                    },
                    series: [
                        {
                        name: 'Nightingale Chart',
                        type: 'pie',
                        radius: [50, 250],
                        center: ['50%', '50%'],
                        roseType: 'area',
                        itemStyle: {
                            borderRadius: 7
                        },
                        data: [
                            { value: <?= $element_1->time ?>, name: '锶-90' },
                            { value: <?= $element_2->time ?>, name: '锑-124' },
                            { value: <?= $element_3->time ?>, name: ' 钴-58' },
                            { value: <?= $element_4->time ?>, name: '铯-137' },
                            { value: <?= $element_5->time ?>, name: '镍-63' },
                            { value: <?= $element_6->time ?>, name: '氚' },
                            { value: <?= $element_7->time ?>, name: '碳-14' },
                            { value: <?= $element_8->time ?>, name: '铯-134' },
                            { value: <?= $element_9->time ?>, name: '碲-129' }
                        ]
                        }
                    ]
                    };

                    if (option && typeof option === 'object') {
                    myChart.setOption(option);
                    }

                    window.addEventListener('resize', myChart.resize);
                </script>
        </div>
            <div class="col-md-6 col-lg-7 branding">
                <img src="assets/frontend/leadmark/public_html/assets/imgs/1.gif" class="img-fluid">
            </div>
    </div>            
</section>
<!-- End of portfolio section -->



<!-- Blog Section -->
<section class="section" id="blog">
    <div class="container">
        <h6 class="section-title mb-0 text-center">最新文章</h6>
        <h6 class="section-subtitle mb-5 text-center">注：本网站为南开大学学生作业，网站提供数据仅为练习，不负任何法律责任，请勿当真。</h6>

        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 mb-4">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/blog-4.jpg" alt="" class="card-img-top w-100">
                    <div class="card-body">                         
                        <h6 class="card-title">blog1</h6>
                        <p>坚决反对日本非法排放核污水！</p>
                        <a href="index.php?r=collision%2Findex" class="small text-muted">跳转到数据界面</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 mb-4">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/blog-5.png" alt="" class="card-img-top w-100">
                    <div class="card-body">                         
                        <h6 class="card-title">blog2</h5>
                        <p>我们的地球，我们的责任：反对日本非法核污水排放</p>
                        <a href="index.php?r=rwardamage%2Findex" class="small text-muted">跳转到数据界面</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 mb-4">
                    <img src="assets/frontend/leadmark/public_html/assets/imgs/blog-6.jpg" alt="" class="card-img-top w-100">
                    <div class="card-body">                         
                        <h6 class="card-title">blog3</h6>
                        <p>为环境呼吁：反对日本非法排放核污水！</p>
                        <a href="index.php?r=uwardamage%2Findex" class="small text-muted">跳转到数据界面</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Blog Section -->

<!-- Contact Section -->
<section id="contact" class="section has-img-bg pb-0">
    <div class="container">
        <div class="row align-items-center">
            <!-- <div class="col-md-5 my-3">
                <h6 class="mb-0">Phone</h6>
                <p class="mb-4">+ 123-456-7890</p>

                <h6 class="mb-0">Address</h6>
                <p class="mb-4">12345 Fake ST NoWhere AB Country</p>

                <h6 class="mb-0">Email</h6>
                <p class="mb-0">info@website.com</p>
                <p></p>
            </div> -->
            <div class="col-md-6 col-lg-2 mb-4 mb-md-0">
                <!-- 导航栏BEGIN: .widget -->
                <div class="widget">
                    <h3>关于本站</h3>
                    <ul class="nav-link">
                        <li><a href="<?= \yii\helpers\Url::to(['/site/index']); ?>">主页</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['/site/about']); ?>">关于</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['/site/news']); ?>">新闻</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['/site/error']); ?>">404页面</a></li>
                    </ul>
                </div>
                <!-- END: .widget -->
            </div>
            <div class="col-md-6 col-lg-2 mb-4 mb-md-0">
                <!-- BEGIN: .widget -->
                <div class="widget">
                    <h3>相关网站</h3>
                    <ul class="nav-link">
                        <li><a href="http://www.google.com">去谷歌搜索</a></li>
                        <li><a href="https://www.zhihu.com/">去知乎搜索</a></li>
                        <li><a href="https://www.baidu.com/">去百度搜索</a></li>
                        <li><a href="https://mil.news.sina.com.cn/">新浪军事</a></li>
                    </ul>
                </div>
                <!-- END: .widget -->
            </div>
            <div class="col-md-7">
                <form>
                    <h4 class="mb-4">让你的信息显示在页面顶部</h4>
                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <input type="text" class="form-control text-white rounded-0 bg-transparent" name="name" placeholder="姓名">
                        </div>
                        <div class="form-group col-sm-4">
                            <input type="email" class="form-control text-white rounded-0 bg-transparent" name="Email" placeholder="电子邮箱">
                        </div>
                        <div class="form-group col-sm-4">
                            <input type="text" class="form-control text-white rounded-0 bg-transparent" name="subject" placeholder="主题">
                        </div>
                        <div class="form-group col-12">
                            <textarea name="message" id="" cols="30" rows="4" class="form-control text-white rounded-0 bg-transparent" placeholder="内容"></textarea>

                        </div>
                        <div class="form-group col-12 mb-0">
                            <button type="submit" class="btn btn-primary rounded w-md mt-3">Send</button>
                        </div>                          
                    </div>                          
                </form>
            </div>  
        </div> 
        <footer id="footer">
            <div class="container">
                <div class="row copyright">
                    <div class="col-md-6 order-2 text-center text-md-right"><a href="#" class="js-top"><span
                                    class="icon-long-arrow-up mr-2"></span> 返回顶部</a></div>
                    <div class="col-md-6 text-center text-md-left">
                        <p class="mb-0 small">&copy; <script>document.write(new Date().getFullYear())</script>, The Module comes from <a href="https://www.free-css.com/" target="_blank">Free CSS.</a></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</section>
<script src="./style.js"></script>
<script src="js/jquery.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/echarts.min.js" type="text/javascript" charset="utf-8"></script>
   <!-- 添加地图 -->
   <script src="js/china.js"></script>
    <script src="js/charts/map.js"></script>

