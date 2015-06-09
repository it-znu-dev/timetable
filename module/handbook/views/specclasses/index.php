<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\module\handbook\models\SpecclassesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Типи аудиторій';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="specclasses-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Додати', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'spec_class_id',
            'spec_class_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
