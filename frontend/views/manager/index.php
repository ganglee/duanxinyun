<?php
use yii\helpers\Html;
use yii\grid\GridView;
use common\models\SystemComponents;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 */

$this->title = '用户管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div>
    <?= $this->render('../layouts/managerNav.php') ?>

    <div class="post-index col-lg-9  col-md-9 col-xs-9">

        <h1 class="page-header">
            <?= Html::encode($this->title) ?>
            <?= Html::a('新增用户', ['create'], ['class' => 'btn btn-success pull-right']) ?>
        </h1>

        <?= (isset($_GET['item'])) ? $this->render('../layouts/update_callback.php', ['id' => $_GET['id']]) : null; ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                'title',
                [
                    'attribute' => 'created_at',
                    'format' =>  ['date', 'Y-m-d H:i:s'],
                    'options' => ['width' => '180'],
                ],
                ['class' => 'yii\grid\ActionColumn', 'header' => '操作', 'headerOptions' => ['width' => '80']],
            ],
            'layout' => "{items}\n{pager}",
        ]); ?>
    </div>

</div>
