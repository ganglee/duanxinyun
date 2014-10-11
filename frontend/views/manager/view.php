<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var common\models\Post $model
 */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => '用户管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div>
    <?= $this->render('../layouts/managerNav.php') ?>

    <div class="post-view col-lg-9">

        <h1  class="page-header"><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('删除', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => '确定要删除?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>

        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'user_id',
                'title',
                'content:ntext',
                'img',
                'created_at:datetime',
                'updated_at:datetime',
            ],
        ]) ?>

    </div>
</div>