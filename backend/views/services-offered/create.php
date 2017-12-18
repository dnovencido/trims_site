<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ServicesOffered */

$this->title = 'Add Service';
$this->params['breadcrumbs'][] = ['label' => 'Services Offered', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="services-offered-create">

    <?= $this->render('_form', [
        'model' => $model,
        'services_desc' => $services_desc
    ]) ?>

</div>
