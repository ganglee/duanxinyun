<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = '登陆';
/*$this->params['breadcrumbs'][] = $this->title;*/
?>
<div class="site-login">

    <div class="row">
        <div class="col-lg-3 col-lg-offset-4" style="padding-top: 10%">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <?= $form->field($model, 'username') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <?= $form->field($model, 'rememberMe')->checkbox() ?>
               <!-- <div style="color:#999;margin:1em 0">
                    忘记密码 <?/*= Html::a('马上找回', ['user/request-password-reset']) */?>.
                </div>-->
                <div class="form-group">
                    <?= Html::submitButton('登陆', ['class' => 'btn btn-primary col-lg-12', 'name' => 'login-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
