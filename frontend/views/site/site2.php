<?php

use common\models\news;

/*
 * Team：互联网团队
 * Coding By：吴树晓
 * 新闻2界面
*/

$site2 = news::findAll(['id' => 2]);
if (sizeof($site2) != 0)
    $site2 = $site2[0];
else $site2 = null;
?>

<html>
  <head>
    <style>
      .containerr {
        width: 66.6%;
        margin: 0 auto;
        border: 10px solid #333;
        border-radius: 20px;
        background-color: black;
        padding: 20px;
      }

      .headerr {
        font-size: 36px;
        font-family: Songti;
        font-weight: bold;
        text-align: center;
        color: white;
      }

      .authorr {
        font-size: 20px;
        font-family: Songti;
        text-align: right;
        color: white;
      }

      .datee {
        font-size: 20px;
        font-family: Songti;
        text-align: right;
        color: white;
      }

      .imagee {
        width: 35%;
        height: auto;
        object-fit: contain;
        margin: 20px auto;
        display: block;
      }

      .textt {
        font-size: 15px;
        font-family: "WenQuanYi Zen Hei";
        line-height: 1.5;
        text-align: left;
        color: white;
        text-indent: 2em;
      }

      .contentt {
        width: 60%;
        margin: 0 auto;
        text-align: left;
      }
    </style>
  </head>
  <body>
    <div class="containerr">
      <div class="headerr"><?= $site2->title ?></div>
      <div class="authorr"><?= $site2->author ?></div>
      <div class="datee"><?= $site2->release_date ?></div>
      <img class="imagee" src="news2.jpg" alt="图片">
      <div class="textt">
        <div class="contentt">
        <h1>为环境发声：拒绝日本核污水排放！</h1>

<p>2021年4月13日，日本政府决定将福岛核电站的核污水排放入海，这一决定引发了国际社会的广泛关注和担忧。此举被认为是对海洋环境和周边国家利益的不负责任行为。</p>

<p>中国外交部发言人赵立坚表示，应本着负责任的态度，充分协商，寻求妥善的处置方法。同时，他敦促日本政府不要擅自启动核污水排海，以免给民众健康和全球海洋环境带来不可预测的风险。</p>

<blockquote>
  <p>“我们拒绝看到这种对海洋环境的不负责任行为。日本政府应当寻求其他更为安全和负责的处置方式。”</p>
</blockquote>

<p>日本政府试图向国内外传达排海核污水的“安全可靠”，然而，这种做法引起了广泛的质疑和反对。民调显示大多数民众不支持核污水排海，民间组织联合反对此举。</p>

<p>国际社会也纷纷表达担忧，认为这一决定不仅将影响海洋生态，还可能对周边地区渔业和其他国家的海洋环境造成长期影响。</p>

          <p>url:<?= $site2->url ?></p>
        </div>
      </div>
    </div>

    <br><br><br><br><br><br><br><br><br><br>
    <center><button type="button"><a href="index.php?r=site%2Fcomment2" style="text-decoration: none;">评论列表</button></center>
    <br><br>
  </body>
</html>