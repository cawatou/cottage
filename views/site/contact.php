<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>
<?//if(isset($contact_model)) echo "<pre>".print_r($contact_model, 1)."</pre>";?>

<div id="wrapper">
    <div class="content-holder elem scale-bg2 transition3" >
        <div class="content">
            <!-- background animation  -->
            <div class="bg-animate"><img src="images/body-bg.png"  class="respimg" alt=""></div>
            <!-- wrapper-inner -->
            <div class="wrapper-inner">
                <div class="container">
                    <div class="page-title no-border">
                        <h2>Хочешь заказать проект ? Свяжись с нами</h2>
                        <div id="tt" style="display:none">
                            fdasfdasfdasfdasfa
                        </div>
                        <h3><span>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true .</span></h3>
                    </div>
                    <!-- map  -->
                    <section class="no-border">
                        <div class="map-box">
                            <div>
                                <?=$contact_model->map?>
                            </div>
                        </div>
                    </section>
                    <!-- map  end-->
                    <!-- contact info  -->
                    <section class="no-border">
                        <div class="contact-details">
                            <div class="row">
                                <div class="col-md-4">
                                    <h3>Контакты : </h3>
                                </div>
                                <div class="col-md-3">
                                    <h4>Офис в Санкт-Петербурге</h4>
                                    <ul>
                                        <li><a href="#"><?=$contact_model->address?></a></li>
                                        <li><a href="#"><?=$contact_model->phone?></a></li>
                                        <li><a href="#"><?=$contact_model->email?></a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h4>Ищите нас : </h4>
                                    <ul>
                                        <li><a href="contact.html#">Facebook</a></li>
                                        <li><a href="contact.html#">Twitter </a></li>
                                        <li><a href="contact.html#">Instagram</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- contact info  end-->
                    <!-- contact form -->
                    <section>
                        <div class="contact-form-holder">
                            <div id="contact-form">
                                <div id="message"></div>
                                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                                <?= $form->field($model, 'name')->textInput(['autofocus' => true])->label('Имя') ?>

                                <?= $form->field($model, 'email') ?>

                                <?= $form->field($model, 'body')->textarea(['rows' => 6])->label('Сообщение') ?>

                                <button type="submit"  id="submit"><span>Отправить </span> <i class="fa fa-long-arrow-right"></i></button>

                                <?php ActiveForm::end(); ?>

                            </div>
                        </div>
                    </section>
                    <!-- contact form  end-->
                </div>
            </div>
            <!-- wrapper inner end   -->
            <!-- parallax column   -->
            <div class="img-wrap">
                <div class="bg" style="background-image: url('images/bg/long/9.jpg')"  data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
            </div>
            <!-- parallax column end   -->
            <!--to top    -->
            <div class="to-top">
                <i class="fa fa-long-arrow-up"></i>
            </div>
            <!-- to top  end -->
            <!--=============== footer ===============-->
            <div class="height-emulator"></div>
            <?include('../views/site/footer.php');?>
            <!-- footer end    -->
        </div>
        <!-- content  end  -->
    </div>
    <!-- content-holder  end  -->
</div>