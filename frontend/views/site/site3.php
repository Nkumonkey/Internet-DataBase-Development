<?php

use common\models\news;

/*
 * Team：互联网团队
 * Coding By：吴树晓
 * 新闻3界面
*/

$site3 = news::findAll(['id' => 3]);
if (sizeof($site3) != 0)
    $site3 = $site3[0];
else $site3 = null;
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
      <div class="headerr"><?= $site3->title ?></div>
      <div class="authorr"><?= $site3->author ?></div>
      <div class="datee"><?= $site3->release_date ?></div>
      <img class="imagee" src="news3.jpg" alt="图片">
      <div class="textt">
        <div class="contentt">
          <p>　新华社东京8月22日电 “不许排放核污染水！”“要听渔民的声音！”“不许污染大海！”22日，许多日本民众冒雨在东京的日本首相官邸前高呼口号，抗议政府当天上午决定8月24日启动福岛核污染水排海。

　　前一天，日本全国渔业协会联合会会长坂本雅信在与首相岸田文雄的会见中重申，反核污染水排海立场不变。</p>
          <p>　22日上午，许多日本民众在首相官邸前集会，抗议日本政府启动核污染水排海的决定。组织者之一泷秀树表示，日本政府强行决定推进核污染水排海，令人极度愤怒。日本政府将要排放的核污染水称作“处理水”，但无论怎么“处理”，核污染水的性质不会改变。泷秀树强调，反对排海的民众今后将继续强烈发声、全力斗争。</p>
          <p>　老家就在福岛核电站附近的古川好子告诉记者，她因福岛核电站事故被迫长期避难，岸田文雄首相宣称将对核污染水排海全程负责，但他根本“没有资格、没有权限、没有权利”承担责任。

          <p>　　日本政府和东京电力公司2015年曾向福岛渔民承诺，在得到利益相关方的理解之前，不会擅自处置核污染水。日本社民党党首福岛瑞穗批评说，政府践踏了与利益相关方达成的约定。日本政府无视反对声音决定启动排海，这是一种“悍然举动”。

          <p>　　日本共同社19日至20日开展的全国舆论调查结果显示，超过八成受访者认为日本政府就核污染水的说明“不充分”。</p>
          <p>　老家就在福岛核电站附近的古川好子告诉记者，她因福岛核电站事故被迫长期避难，岸田文雄首相宣称将对核污染水排海全程负责，但他根本“没有资格、没有权限、没有权利”承担责任。

          <p>　　日本政府和东京电力公司2015年曾向福岛渔民承诺，在得到利益相关方的理解之前，不会擅自处置核污染水。日本社民党党首福岛瑞穗批评说，政府践踏了与利益相关方达成的约定。日本政府无视反对声音决定启动排海，这是一种“悍然举动”。

          <p>　　日本共同社19日至20日开展的全国舆论调查结果显示，超过八成受访者认为日本政府就核污染水的说明“不充分”。。</p>
          <P>　日本全国渔业协会联合会会长坂本雅信21日重申，反对在未获得国民理解的情况下将福岛核污染水排海，这一点毫无改变。</p>

          <p>　　坂本雅信当天在与岸田文雄的会见中作出上述表态。尽管岸田文雄在会见中承诺将持续采取必要对策帮助渔业从业者，但坂本雅信依然表达了反对核污染水排海的立场。</p>
          <p>　8月21日，在日本东京首相官邸，日本全国渔业协会联合会会长坂本雅信（右二）在与日本首相岸田文雄会见时发言。新华社记者 张笑宇 摄</p>

          <p>另外，坂本雅信当天在与日本经济产业大臣西村康稔会谈时表示，核污染水一旦开始排海，恐怕要持续几十年，日本渔业从业者对此感到非常不安和担忧。</p>

          <p>　　“大海是渔民的工作场所，没有人有权污染海洋。”7月30日，由“禁止原子弹氢弹日本国民会议”等团体主办的2023年“禁止原子弹氢弹世界大会”在福岛市开始第一阶段会议，福岛县新地町渔民小野春雄在会上这样说。</p>

          <p>　　对于核污染水排海方案，小野表示，大海一旦被污染，就无法清除，“（把核污染水）保管在储水罐里是最让人放心的”。</p>

          <p>　　丈夫是渔民的庄子公江说，她听到周围有人说，如果开始排放的话就不让孩子们吃鱼了，这让她很受打击。</p>

          <p>　　丈夫和儿子都是渔民的铃木清美对福岛渔业的未来表示不安。她说，不知道要不要让儿子继续从事渔业，更不知道到孙子这一代会变成怎样。（记者：冯武勇、杨光、钱铮、李光正、涂一帆；视频：李麟寅；编辑：陈丹、王丰丰、杜逾舸）</p>
          <p>url:<?= $site3->url ?></p>
        </div>
      </div>
    </div>
  </body>
</html>