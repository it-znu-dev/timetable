<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\module\handbook\models\Housing */

$this->title = 'Додати корпус';
$this->params['breadcrumbs'][] = ['label' => 'Корпуси', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="housing-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
