<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ServicesDesc */

$this->title = 'Update Service Description: ' . $model->service_desc;
$this->params['breadcrumbs'][] = ['label' => 'Service Description', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->service_desc, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="services-desc-update">
	<div class="row">
		<div class="col-md-8">
			<h3><?= Html::encode($this->title) ?></h3>
		    <?= $this->render('_form', [
		        'model' => $model,
		    ]) ?>		
		</div>
		<div class="col-md-4">
			<?= '<img src = "'.Yii::$app->homeUrl.'/uploads/services/'.$model->ImageThumbnail.'" style = width:100%;">' ?>
		</div>
    </div>
</div>
