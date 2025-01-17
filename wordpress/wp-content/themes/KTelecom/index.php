<?php
/* Template Name: Mein Page */
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php 
		wp_head();
	
	?>
	<title>К-телеком</title>
</head>
<body>
	<header>
		<div class="container">
			<img src="<?php echo bloginfo('template_url');?>/assets/image/icons/left.svg" alt="Logo">
		</div>
	</header>

	<section class='promo'>
		<div class="container">
			<div class="promo__info">
				<h1>Экономия нервов и денег — интернет К&minus;Телеком</h1>

				<ul>
					<li>5 тарифов для многоквартирных и 4 для частных домов</li>
					<li>безлимит подключенных устройств</li>
					<li>комфортная поддержка 24/7</li>
				</ul>

				<button class='button'>Подробнее</button>
			</div>

			<img src="<?php echo bloginfo('template_url');?>/assets/image/img/main pic.svg" alt="promo_img" class='promo__image'>
		</div>
	</section>

	<section class='product'>
		<div class="container col">
			<h2 class='product__title'>Тарифные планы</h2>

			<div class='product__wrap' id="carousel">


				<div class="card">
					<h3 class='card__title'>Мой клик</h3>
					<span class='card__subtitle'>Скорость интернета</span>
					<div class="card__condition">до 40 Мбит/с</div>
					<p class="card__description">Отличный вариант для пенсионеров, выполнения определенных задач и работе с файлами различных размеров.</p>
					<label class="card__checkbox">
						<input type="checkbox">
						<div class="card__checkbox-text">
							ТВ + 100 ₽ <br>
							(пакет “Базовый”)
						</div>
					</label>
					<div class="card__prise">
						<span>399 ₽ </span>в месяц
					</div>
					<div class="card__offer">*итоговая цена зависит от варианта оплаты и пакета ТВ при необходимости
					</div>
					<button class="button card__button">Выбрать тариф</button>
				</div>


				<div class="card">
					<h3 class='card__title'>Мой клик</h3>
					<span class='card__subtitle'>Скорость интернета</span>
					<div class="card__condition">до 40 Мбит/с</div>
					<p class="card__description">Отличный вариант для пенсионеров, выполнения определенных задач и работе с файлами различных размеров.</p>
					<label class="card__checkbox">
						<input type="checkbox">
						<div class="card__checkbox-text">
							ТВ + 100 ₽ <br>
							(пакет “Базовый”)
						</div>
					</label>
					<div class="card__prise">
						<span>399 ₽ </span>в месяц
					</div>
					<div class="card__offer">*итоговая цена зависит от варианта оплаты и пакета ТВ при необходимости
					</div>
					<button class="button card__button">Выбрать тариф</button>
				</div>


				<div class="card">
					<h3 class='card__title'>Мой клик</h3>
					<span class='card__subtitle'>Скорость интернета</span>
					<div class="card__condition">до 40 Мбит/с</div>
					<p class="card__description">Отличный вариант для пенсионеров, выполнения определенных задач и работе с файлами различных размеров.</p>
					<label class="card__checkbox">
						<input type="checkbox">
						<div class="card__checkbox-text">
							ТВ + 100 ₽ <br>
							(пакет “Базовый”)
						</div>
					</label>
					<div class="card__prise">
						<span>399 ₽ </span>в месяц
					</div>
					<div class="card__offer">*итоговая цена зависит от варианта оплаты и пакета ТВ при необходимости
					</div>
					<button class="button card__button button_active">Тариф выбран</button>
				</div>


				<div class="card disable">
					<h3 class='card__title'>Мой клик</h3>
					<span class='card__subtitle'>Скорость интернета</span>
					<div class="card__condition">до 40 Мбит/с</div>
					<p class="card__description">Отличный вариант для пенсионеров, выполнения определенных задач и работе с файлами различных размеров.</p>
					<label class="card__checkbox">
						<input type="checkbox">
						<div class="card__checkbox-text">
							ТВ + 100 ₽ <br>
							(пакет “Базовый”)
						</div>
					</label>
					<div class="card__prise">
						<span>399 ₽ </span>в месяц
					</div>
					<div class="card__offer">*итоговая цена зависит от варианта оплаты и пакета ТВ при необходимости
					</div>
					<button class="button card__button">Выбрать тариф</button>
				</div>

			</div>
		</div>
	</section>

	<footer>
		<div class="container col">
			<hr>
			<div class='footer'>
				<div class="footer__branding">
					<img src="<?php echo bloginfo('template_url');?>/assets/image/icons/left.svg" alt="Logo">
					<p>© 2018–2022 ООО «К-Телеком»</p>
				</div>
	
				<div class="footer__link">
					<a href=""><img src="<?php echo bloginfo('template_url');?>/assets/image/icons/inst.svg" alt="Instagram"></a>
					<a href=""><img src="<?php echo bloginfo('template_url');?>/assets/image/icons/YT.svg" alt="YouTube"></a>
					<a href=""><img src="<?php echo bloginfo('template_url');?>/assets/image/icons/VK.svg" alt="Вконтакте"></a>
				</div>
			</div>
			<hr>
		</div>
	</footer>

	<?php 
		wp_footer();
	?>
</body>
</html>