<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var common\models\Post $model
 */

$this->title = '修改用户信息';
$this->params['breadcrumbs'][] = ['label' => '用户管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div>
    <?= $this->render('../layouts/managerNav.php') ?>

    <div class="post-create col-lg-9  col-md-9 col-xs-9 bg-9-color">
        <h1 class="page-header"><?= Html::encode($this->title) ?></h1>

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>

