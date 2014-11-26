<?php

use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\Pjax;

/**
 * @var yii\web\View                       $this
 * @var yii\data\ActiveDataProvider        $dataProvider
 * @var yii2mod\rbac\models\AuthItemSearch $searchModel
 */
$this->title = 'Permission';
$this->params['breadcrumbs'][] = $this->title;
$this->render('/layouts/_sidebar');
?>
<div class="role-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Permission', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php
    Pjax::begin([
        'enablePushState' => false,
    ]);
    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            'description:ntext',
            ['class' => 'yii\grid\ActionColumn',],
        ],
    ]);
    Pjax::end();
    ?>

</div>
