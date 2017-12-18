<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Gallery */

$this->title = $model->gallery_desc;
$this->params['breadcrumbs'][] = ['label' => 'Galleries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-view">

    
    <div class="row">
        <div class="col-sm-8">
        <p><?= Html::encode($this->title) ?></p>
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
        </div>
        <div class = "col-sm-4">
            <?= '<img src = "'.Yii::$app->homeUrl.'/uploads/gallery/'.$model->ImageThumbnail.'" style = width:100%;">'?>
        </div>
    </div>
</div>
