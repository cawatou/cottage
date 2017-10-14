<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\assets\AppAsset;
use app\models\ContactForm;
AppAsset::register($this);
$model = new ContactForm();
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="loader"><i class="fa fa-refresh fa-spin"></i></div>
<!--================= main start ================-->
<div id="main">
    <!--=============== header ===============-->
    <header>
        <div class="header-inner">
            <div class="logo-holder">
                <a href="/" class="ajax"><img src="/images/logo.jpg" alt=""></a>
            </div>
            <div class="nav-button-holder">
                <div class="nav-button vis-m"><span></span><span></span><span></span></div>
            </div>
            <div class="nav-holder">
                <nav>
                    <ul>
                        <li><a href="/about" class="<?=($_SERVER['REQUEST_URI'] == '/about')? 'act-link' : '';?>">О компании</a></li>
                        <li><a href="/services" class="<?=($_SERVER['REQUEST_URI'] == '/services')? 'act-link' : '';?>">Услуги и цены</a></li>
                        <li><a href="/portfolio" class="<?=($_SERVER['REQUEST_URI'] == '/portfolio')? 'act-link' : '';?>">Портфолио</a></li>
                        <li><a href="/contacts" class="<?=($_SERVER['REQUEST_URI'] == '/contacts')? 'act-link' : '';?>">Контакты</a></li>
                        <li><p class="callback_btn"><span class="glyphicon glyphicon-earphone"></span></p></li>
                        <li><p class="phone">+7(921) 580 15 60</p></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!--div class="share-container isShare"></--div>
        <a class="selectMe shareSelector transition">Share</a-->
    </header>
    <!-- header end-->

    <!-- Modal -->
    <div class="modal callback_modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Обратный звонок</h4>
                </div>
                <div class="modal-body">

                    <form id="callbacksend" action="/callbacksend" method="post" role="form">
                         <div class="form-group field-contactform-name required">
                            <label class="control-label" for="contactform-phone">Телефон</label>
                            <input type="text" id="contactform-phone" class="form-control" name="phone" autofocus="">
                        </div>
                        <input type="hidden" name="_csrf" value="Q3Y4Zm12RmsnWwAcPTMALBEHUBUdPBw4LUFLIjg6JA8iJUwwB0QuEQ==">
                        <div class="modal-footer">
                            <button type="submit" id="submit"><span>Отправить </span> <i class="fa fa-long-arrow-right"></i></button>
                        </div>
                    </form>

                </div>


            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal main_modal" id="main_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Напишите нам</h4>
                </div>
                <div class="modal-body">
                    <?$form = ActiveForm::begin(); ?>
                    <?= $form->field($model, 'name')->textInput(['autofocus' => true])->label('Имя') ?>
                    <?= $form->field($model, 'email') ?>
                    <?= $form->field($model, 'body')->textarea(['rows' => 6])->label('Сообщение') ?>
                    <input id="item_name" type="hidden" value="" name="item_name">
                    <div class="modal-footer">
                        <button type="submit"  id="submit_btn"><span>Отправить </span> <i class="fa fa-long-arrow-right"></i></button>
                    </div>
                    <?ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>

    <?=$content?>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
