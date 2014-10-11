<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use ijackua\lepture\Markdowneditor;
use yii\web\JqueryAsset;
use yii\web\View;

$this->registerJs('$(document).delegate(".icon-image","click",function(){
    file.click();
});', View::POS_END);

/**
 * @var yii\web\View $this
 * @var common\models\Post $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin([
        'options' => [
            'enctype' => 'multipart/form-data',
        ]
    ]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 500]) ?>
    <?php //$form->field($model, 'order')->textInput(['maxlength' => 500, 'placeholder' => '填写0-99的数字作为正常排序时的权重依据']) ?>
    <?php //$this->render('upload') ?>

    <label class="control-label" for="post-title">内容</label>
   <!-- <div class="form-group" style="border:#ccc solid 1px">
        <?/*= Markdowneditor::widget(
        [
            'model' => $model,
            'attribute' => 'content',
        ])*/?>
    </div>-->

    <?= $form->field($model, 'img')->fileInput(); ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '添加新用户' : '修改用户', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>
    <?php if(!empty($model->image)) { ?>
        <h4>原始图片：<?= $model->image; ?></h4>
    <?php } ?>
</div>
