<?php

/*
 * Team：互联网团队
 * Coding By：吴树晓
*/

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\news $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

?>


<html>
  <head>
    <title>News Page</title>
    <style>
      #news-list {
        list-style-type: none;
        margin: 0 auto;
        padding: 0;
        width: 50%;
        background-color: #f1f1f1;
        border: 1px solid black;
        text-align: center;
      }
      #news-list li a {
        display: block;
        color: #000;
        padding: 8px 16px;
        text-decoration: none;
        font-size: 18px;
        font-weight: bold;
        text-align: center;
        border-bottom: 1px solid black;
      }
      #news-list li a:hover {
        background-color: #555;
        color: white;
      }
    </style>
  </head>
  <body>
    <h1 style="text-align: center;">新闻列表</h1>
    <ul id="news-list">
      <li><a href="index.php?r=site%2Fsite1">日本正式排污入海，240天后核污染水将扩散至中国</a></li>
      <li><a href="index.php?r=site%2Fsite2">新华国际时评：排放核废水入海，日方不可一意孤行</a></li>
      <li><a href="index.php?r=site%2Fsite3">日本核污染水24日排海！民众集会抗议、渔民重申反对</a></li>
      <li><a href="index.php?r=site%2Fsite4">日本核污水排海——“地球之殇”引发思考</a></li>
      <li><a href="index.php?r=site%2Fsite5">日本擅自排放核污染水，殃及全球公共福祉</a></li>
    </ul>
    <br><br><br><br><br><br><br><br><br><br>
  </body>
</html>
