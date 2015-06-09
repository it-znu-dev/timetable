<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\module\handbook\models\Specclasses */

$this->title = 'Update Specclasses: ' . ' ' . $model->spec_class_id;
$this->params['breadcrumbs'][] = ['label' => 'Specclasses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->spec_class_id, 'url' => ['view', 'id' => $model->spec_class_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="specclasses-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
