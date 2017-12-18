<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\ServicesOfferedSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Services Offered';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="services-offered-index">
    <p>
        <?= Html::a('Add Service', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin(); ?>    <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'service_offered_desc',
                'ServicesDescLabel',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    <?php Pjax::end(); ?>
</div>
