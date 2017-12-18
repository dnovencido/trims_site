<?php
    use yii\helpers\Html;
    use yii\bootstrap\Nav;
    use yii\bootstrap\NavBar;
    use yii\widgets\Breadcrumbs;
    use frontend\assets\AppAsset;
    use common\widgets\Alert;
?>
<?php
    echo Collapse::widget([
        'items' => [
            // equivalent to the above
            [
                'label' => 'Collapsible Group Item #1',
                'content' => 'Anim pariatur cliche...',
                // open its content by default
                'contentOptions' => ['class' => 'in']
            ],
            // another group item
            [
                'label' => 'Collapsible Group Item #1',
                'content' => 'Anim pariatur cliche...',
                'contentOptions' => [],
                'options' => [],
            ],
            // if you want to swap out .panel-body with .list-group, you may use the following
            [
                'label' => 'Collapsible Group Item #1',
                'content' => [
                    'Anim pariatur cliche...',
                    'Anim pariatur cliche...'
                ],
                'contentOptions' => [],
                'options' => [],
                'footer' => 'Footer' // the footer label in list-group
            ],
        ]
    ]);

?>