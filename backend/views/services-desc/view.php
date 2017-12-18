<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\ServicesDesc */

$this->title = $model->service_desc;
$this->params['breadcrumbs'][] = ['label' => 'Services Descs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="services-desc-view">

    <h3><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
        'service_desc',
        [
            'attribute' => 'thumbnail',
            'format' => 'raw',
            'value' => function ($model) {                      
                    return '<div class = "thumbnail"><img src = "'.Yii::$app->homeUrl.'/uploads/services/'.$model->ImageThumbnail.'" style = width:100%;"></div>';
            },
        ],
        ],
    ]) ?>

</div>
