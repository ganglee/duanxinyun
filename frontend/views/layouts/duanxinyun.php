<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => '<i class="glyphicon glyphicon-cloud"></i>&nbsp;&nbsp;Srun短信云平台',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $menuItems = [
                ['label' => '<i class="glyphicon glyphicon-user"></i>&nbsp;&nbsp;用户管理', 'url' => ['/manager/index']],
                ['label' => '<i class="glyphicon glyphicon-usd"></i>&nbsp;&nbsp;充值中心', 'url' => ['/pay/index']],
                ['label' => '<i class="glyphicon glyphicon-zoom-in"></i>&nbsp;&nbsp;查看详情', 'url' => ['/show/index']],
            ];
            if (Yii::$app->user->isGuest) {
                //$menuItems[] = ['label' => '<i class="glyphicon glyphicon-registration-mark"></i>&nbsp;&nbsp;注册', 'url' => ['/user/signup']];
                $menuItems[] = ['label' => '<i class="glyphicon glyphicon-globe"></i>&nbsp;&nbsp;登陆', 'url' => ['/user/login']];
            } else {
                $menuItems[] = [
                    'label' => '退出 (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/user/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }
            echo Nav::widget([
                'encodeLabels' => false,
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>

        <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
