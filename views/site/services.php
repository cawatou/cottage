<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Услуги и цены';
$this->params['breadcrumbs'][] = $this->title;
if(isset($model)):?>
    <div id="wrapper">
        <div class="content-holder elem scale-bg2 transition3" >
            <div class="content">
                <!-- background animation  -->
                <div class="bg-animate"><img src="images/body-bg.png"  class="respimg" alt=""></div>
                <!-- wrapper inner -->
                <div class="wrapper-inner">
                    <section class="no-padding no-border" id="sec1">
                        <!-- page title -->
                        <div class="container">
                            <div class="page-title no-border">
                                <h2><?=$model->title?></h2>
                            </div>
                        </div>
                    </section>
                    <div class="container">
                        <section>
                            <div class="row">
                                <div class="col-md-8">
                                    <p><?=$model->description?></p>
                                </div>
                            </div>
                        </section>
                        <!-- about text end -->
                    </div>
                </div>
                <!-- wrapper inner end   -->
                <!-- parallax column   -->
                <div class="img-wrap">
                    <div class="bg" style="background-image: url('images/<?=$model->img?>')"  data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
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
<?endif?>