<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\module\handbook\models\Housing */

$this->title = 'Оновити інформацію про: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Корпус', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->housing_id]];
$this->params['breadcrumbs'][] = 'Оновити';
?>
<div class="housing-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
