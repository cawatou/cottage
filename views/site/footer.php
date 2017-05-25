<?
use app\models\Contacts;
$contact_model = Contacts::find()->one();
//echo "<pre>".print_r($contact_model, 1)."</pre>";?>

<footer>
    <div class="footer-inner">
		<div class="row">
			<div class="col-md-5">
				<a class="footer-logo ajax" href="/"><img src="/images/logo.jpg" alt=""></a>
			</div>
			<div class="col-md-3">
				<div class="footer-adress">
					<span>Санкт Петербург</span>
					<a href="/contacts" target="_blank">Показать на карте</a>
				</div>
			</div>
			<div class="col-md-4">
				<ul class="footer-contact">
					<li><?=$contact_model->phone?></li>
					<li><p><?=$contact_model->email?></p></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5"></div>
			<div class="col-md-7">
				<p> &#169;2016.  All rights reserved.  </p>
			</div>
		</div>
    </div>
    <span class="footer-decor"></span>
</footer>
