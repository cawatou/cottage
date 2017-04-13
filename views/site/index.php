<?php
/* @var $this yii\web\View */
$this->title = 'Главная';
?>
<div id="wrapper">
    <div class="content-holder elem scale-bg2 transition3" >
        <div class="content">
            <div class="fullheight-carousel-holder">
                <div class="customNavigation">
                    <a class="modalmain_btn"><span class="glyphicon glyphicon-pencil"></span></a>
                </div>
                <div class="fullheight-carousel owl-carousel">
                    <?if(isset($model)):?>
                        <?foreach($model as $cat):?>
                        <div class="item">
                            <div class="carousel-item">
                                <div class="bg" style="background-image: url('images/<?=$cat->img?>')"></div>
                                <div class="overlay"></div>
                                <div class="carousel-link-holder">
                                    <h3><a href="/portfolio?cat_id=<?=$cat->id?>"><?=$cat->name?></a></h3>
                                </div>
                            </div>
                        </div>
                        <?endforeach?>
                    <?endif?>
                </div>
            </div>
        </div>
        <!-- content  end  -->
    </div>
    <!-- content-holder  end  -->
</div>

