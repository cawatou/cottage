<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Портфолио';
$this->params['breadcrumbs'][] = $this->title;
?>

<div id="wrapper">
    <div class="content-holder elem scale-bg2 transition3" >
        <div class="fixed-column">
            <div class="container">
                <section  class="no-border">
                    <div class="section-title">
                        <h3><?=$this->title?></h3>
                    </div>
                    <div class="filter-holder column-filter">
                        <div class="gallery-filters vis-filter">
                            <?if(isset($_REQUEST['cat_id'])) $cat_id = $_REQUEST['cat_id'];
                            else $cat_id = 0?>
                            <input type="hidden" value="<?=$cat_id?>" id="active_category">
                            <a href="#" class="gallery-filter <?=($cat_id)? '' : 'gallery-filter-active';?>"  data-filter="*">Все</a>
                            <?foreach($cat_model as $cat):?>
                                <a href="#" class="gallery-filter <?=($cat->id == $cat_id)? 'gallery-filter-active' : '';?>" data-filter=".cat<?=$cat->id?>" data-id="<?=$cat->id?>"><?=$cat->name?></a>
                           <?endforeach?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="content  mm colum-w">
            <div class="wrapper-inner no-padding">
                <section class="no-padding no-border">
                    <div class="gallery-items  three-coulms hid-port-info">
                        <?foreach($item_model as $item):?>
                            <div class="gallery-item cat<?=$item->cat_id?>">
                                <div class="grid-item-holder">
                                    <div class="box-item">
                                        <a href="/item?id=<?=$item->id?>" class="ajax">
                                            <span class="overlay"></span>
                                            <img  src="images/items/<?=$item->img?>"   alt="">
                                        </a>
                                    </div>
                                    <div class="grid-item ">
                                        <h3><a href="/item?id=<?=$item->id?>" class="ajax portfolio-link"><?=$item->name?></a></h3>
                                        <?$i = $item->cat_id?>
                                        <span><?=$cat_model[$i-1]->name?></span>
                                        <span><b>Цена:</b> <?=number_format($item->price, 0, ' ', ' ')?></span>
                                    </div>
                                </div>
                            </div>
                        <?endforeach?>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<?//echo "<pre>".print_r($item_model, 1)."</pre>";?>