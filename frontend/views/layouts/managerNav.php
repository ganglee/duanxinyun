<?php
use frontend\widgets\SideNavWidget;

?>

<div class="col-lg-3  col-md-3 col-xs-3 padding-left-none">
    <?= SideNavWidget::widget([
        'encodeLabels' => false,
        'items' => [
            //所有用户
            [
                'label' => '<i class="glyphicon glyphicon-user"></i> &nbsp;所有用户',
                'url' => ['manager/index'],
                'active' => \Yii::$app->controller->route == 'manager/index',
                //'visible' => '',
            ],
            [
                'label' => '<i class="glyphicon glyphicon-plus"></i> &nbsp;添加用户',
                'url' => ['manager/create'],
                'active' => \Yii::$app->controller->route == 'manager/create',
                //'visible' => '',
            ],
            [
                'label' => '<i class="glyphicon glyphicon-pencil"></i> &nbsp;编辑用户',
                'url' => ['manager/update'],
                'active' => \Yii::$app->controller->route == 'manager/update',
                'visible' => '',
            ],
            [
                'label' => '<i class="glyphicon glyphicon-list-alt"></i> &nbsp;用户详情',
                'url' => ['manager/view'],
                'active' => \Yii::$app->controller->route == 'manager/view',
                'visible' => '',
            ],
        ]]);
    ?>
</div>
