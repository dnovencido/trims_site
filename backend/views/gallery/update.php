<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Gallery */

$this->title = 'Update Gallery: ' . $model->gallery_desc;
$this->params['breadcrumbs'][] = ['label' => 'Galleries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->gallery_desc, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gallery-update">

	<div class="col-md-8">
		<h3><?= Html::encode($this->title) ?></h3>
	    <?= $this->render('_form', [
	        'model' => $model,
	    ]) ?>		
	</div>
	<div class="col-md-4">
		<?= '<img src = "'.Yii::$app->homeUrl.'/uploads/gallery/'.$model->ImageThumbnail.'" style = width:100%;">' ?>
	</div>
	
</div>
