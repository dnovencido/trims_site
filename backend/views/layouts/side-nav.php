<?php
    use yii\helpers\Html;
    use yii\bootstrap\Nav;
    use yii\bootstrap\NavBar;
    use yii\widgets\Breadcrumbs;
    use frontend\assets\AppAsset;
    use common\widgets\Alert;
    use yii\bootstrap\Collapse;
    use yii\helpers\Url;
?>
<?php
    if (!Yii::$app->user->isGuest) {
        $items[] = ['title' => 'Services Description' , 'url' => '/trims/backend/web/services-desc'];
        $items[] = ['title' => 'Services Offered' , 'url' => '/trims/backend/web/services-offered'];
        $items[] = ['title' => 'Testimonials' , 'url' => '/trims/backend/web/testimonial'];
        $items[] = ['title' => 'Gallery' , 'url' => '/trims/backend/web/gallery'];
        echo Html::ul($items, ['class' => 'list-group',
            'item' => function($item, $index) {
                return Html::tag('a', $item['title'] ,  ['class' => 'list-group-item' , 'href' =>$item['url']]);
            }
        ]);
    }
?>