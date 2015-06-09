<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\module\handbook\models\Specclasses */

$this->title = 'Типи аудиторій';
$this->params['breadcrumbs'][] = ['label' => 'Перелік', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="specclasses-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
