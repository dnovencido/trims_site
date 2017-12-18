<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Gallery */

$this->title = 'Add new item';
$this->params['breadcrumbs'][] = ['label' => 'Galleries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
