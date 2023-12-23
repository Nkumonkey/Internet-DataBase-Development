<?php

use frontend\models\Usupport;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\usupportSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = '核污水排放量';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usupport-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <font size="6">本页面展示了自2023年8月22日起日本每天的核污水排放量,包括排放地点，排放时间，排放量（单位吨）等。</font>
    </p>
    <p>
        <?= Html::a('Create Usupport', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'country',
            'resource',
            'amount',
            'time',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Usupport $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'country' => $model->country, 'resource' => $model->resource, 'time' => $model->time]);
                 }
            ],
        ],
    ]); ?>


</div>
