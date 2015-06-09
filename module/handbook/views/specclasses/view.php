<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\module\handbook\models\Specclasses */

$this->title = $model->spec_class_id;
$this->params['breadcrumbs'][] = ['label' => 'Specclasses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="specclasses-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->spec_class_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->spec_class_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'spec_class_id',
            'spec_class_name',
        ],
    ]) ?>

</div>
