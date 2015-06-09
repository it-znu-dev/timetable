<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\module\handbook\models\Specclasses */

$this->title = 'Оновити інформацію: ' . ' ' . $model->spec_class_name;
$this->params['breadcrumbs'][] = ['label' => 'Типи аудиторій', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->spec_class_name, 'url' => ['view', 'id' => $model->spec_class_id]];
$this->params['breadcrumbs'][] = 'Оновити';
?>
<div class="specclasses-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
