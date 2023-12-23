<?php

use common\models\news;

/*
 * Team：少萝刚满十八岁爱吃辣椒炒肉和金钱蛋
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
          <p>俄乌战争爆发后，俄罗斯各大银行也成了西方国家的制裁对象。但得益于各"友好国家"的合作，银行业务一直得以勉强维持，但现在情况显然正在发生变化。 </p>
          <p>德国《商报》报道称，迄今为止，一些不顾西方制裁仍坚持同俄罗斯银行保持业务往来的国家现在也纷纷打起了退堂鼓。这其中就包括中国、土耳其和阿联酋以及一些中亚前苏联共和国。</p>
          <p>俄罗斯银行副总裁拉赫马宁（Alexander Rachmanin）前不久在莫斯科一次经济会议上表示，中国银行、中国建设银行等中资银行已经中断了同西方制裁名单上的俄罗斯银行的业务往来。土耳其方面也只有一些二级银行仍同俄罗斯保持合作，而阿联酋方面也不再允许以当地货币替代美元的业务。俄乌战争爆发后，一些俄罗斯企业纷纷将业务转移至海湾地区，莫斯科官方也在海湾地区设立了一些空壳公司，目的是逃避西方国家的制裁。</p>
          <p>在对伊朗实施制裁时，美国财政部下属的外国资产控制办公室Ofac就曾对中国、阿联酋以及土耳其等国的银行发出威胁称，如果他们违反对伊制裁令，将面临所谓的"次级制裁"，比如不得进入美国金融市场。《商报》报道称，显然在对俄制裁的问题上，上述国家也不愿意承受次级制裁可能带来的损失，因而纷纷放弃同俄罗斯银行的业务往来。 </p>
          <P>2021年，俄罗斯银行业曾一度进入鼎盛时期。当年俄罗斯银行总营收达到创纪录的312亿欧元。然而，好景不长，俄罗斯发动的侵乌战争使本来处于上升阶段的银行业转瞬进入寒冬。</p>
          <p>20多家俄罗斯大型银行受到西方国家的制裁，其中九家银行更被排除在环球银行金融电信协会SWIFT之外，其中包括俄罗斯最大银行联邦储备银行（ Sberbank）、国有的联邦外贸银行（ VTB）以及联邦发展与外经贸银行（VEB）。面对西方的制裁，俄罗斯各大银行纷纷转而加强同友好国家的业务往来，但随着中国、土耳其以及阿联酋等国退出合作，这些银行的处境也将变得更加艰难。</p>
          <p>url:<?= $site2->url ?></p>
        </div>
      </div>
    </div>

    <br><br><br><br><br><br><br><br><br><br>
    <center><button type="button"><a href="index.php?r=site%2Fcomment2" style="text-decoration: none;">评论列表</button></center>
    <br><br>
  </body>
</html>