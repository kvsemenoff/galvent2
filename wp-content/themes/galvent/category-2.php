<?php get_header(); ?>
<?php 

$query = new WP_Query( array( 'category_name' => 'news' ) );
while ( $query->have_posts() ) {
	$query->the_post();

	the_title(); // выведем заголовок поста
}
 ?>
<div class="bread_menu bread_menu_bg_img conveyors_page">	
	<div class="container pos-relative">
		<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' '); ?>	
		<a href="#modal__form_order" class="fancybox order_curcle_innerpage conveyors_page_circle">
			<span class="order_curcle__text toppadding">On-line</span>
			<span class="order_curcle__text">заявка</span>
		</a>
	</div>
</div>

<div class="last-article">
	<div class="container">
		<h2 class="h2 h2_dark">Последние статьи</h2>
		<div class="row">
			<div class="col-md-4">
				<div class="article">
					<div class="article__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/article-photo-1.jpg" alt="">
						<span class="article__img-descr">Заголовок статьи</span>
					</div>
					<div class="article__content">
						<p class="article__txt">Разнообразный и богатый опыт сложившаяся структура организации влечет за условий.</p>
						<div class="article__info clearfix">
							<div class="article__date">10.04.2017</div>
							<div class="article__button">
								<a href="#" class="button button__view"><span class="button__view_txt button__view_txt2">читать подробнее</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="article">
					<div class="article__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/article-photo-1.jpg" alt="">
						<span class="article__img-descr">Заголовок статьи</span>
					</div>
					<div class="article__content">
						<p class="article__txt">Разнообразный и богатый опыт сложившаяся структура организации влечет за условий.</p>
						<div class="article__info clearfix">
							<div class="article__date">10.04.2017</div>
							<div class="article__button">
								<a href="#" class="button button__view"><span class="button__view_txt button__view_txt2">читать подробнее</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="article">
					<div class="article__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/article-photo-1.jpg" alt="">
						<span class="article__img-descr">Заголовок статьи</span>
					</div>
					<div class="article__content">
						<p class="article__txt">Разнообразный и богатый опыт сложившаяся структура организации влечет за условий.</p>
						<div class="article__info clearfix">
							<div class="article__date">10.04.2017</div>
							<div class="article__button">
								<a href="#" class="button button__view"><span class="button__view_txt button__view_txt2">читать подробнее</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="article">
					<div class="article__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/article-photo-1.jpg" alt="">
						<span class="article__img-descr">Заголовок статьи</span>
					</div>
					<div class="article__content">
						<p class="article__txt">Разнообразный и богатый опыт сложившаяся структура организации влечет за условий.</p>
						<div class="article__info clearfix">
							<div class="article__date">10.04.2017</div>
							<div class="article__button">
								<a href="#" class="button button__view"><span class="button__view_txt button__view_txt2">читать подробнее</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="article">
					<div class="article__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/article-photo-1.jpg" alt="">
						<span class="article__img-descr">Заголовок статьи</span>
					</div>
					<div class="article__content">
						<p class="article__txt">Разнообразный и богатый опыт сложившаяся структура организации влечет за условий.</p>
						<div class="article__info clearfix">
							<div class="article__date">10.04.2017</div>
							<div class="article__button">
								<a href="#" class="button button__view"><span class="button__view_txt button__view_txt2">читать подробнее</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="article">
					<div class="article__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/article-photo-1.jpg" alt="">
						<span class="article__img-descr">Заголовок статьи</span>
					</div>
					<div class="article__content">
						<p class="article__txt">Разнообразный и богатый опыт сложившаяся структура организации влечет за условий.</p>
						<div class="article__info clearfix">
							<div class="article__date">10.04.2017</div>
							<div class="article__button">
								<a href="#" class="button button__view"><span class="button__view_txt button__view_txt2">читать подробнее</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="article">
					<div class="article__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/article-photo-1.jpg" alt="">
						<span class="article__img-descr">Заголовок статьи</span>
					</div>
					<div class="article__content">
						<p class="article__txt">Разнообразный и богатый опыт сложившаяся структура организации влечет за условий.</p>
						<div class="article__info clearfix">
							<div class="article__date">10.04.2017</div>
							<div class="article__button">
								<a href="#" class="button button__view"><span class="button__view_txt button__view_txt2">читать подробнее</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="article">
					<div class="article__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/article-photo-1.jpg" alt="">
						<span class="article__img-descr">Заголовок статьи</span>
					</div>
					<div class="article__content">
						<p class="article__txt">Разнообразный и богатый опыт сложившаяся структура организации влечет за условий.</p>
						<div class="article__info clearfix">
							<div class="article__date">10.04.2017</div>
							<div class="article__button">
								<a href="#" class="button button__view"><span class="button__view_txt button__view_txt2">читать подробнее</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="article">
					<div class="article__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/article-photo-1.jpg" alt="">
						<span class="article__img-descr">Заголовок статьи</span>
					</div>
					<div class="article__content">
						<p class="article__txt">Разнообразный и богатый опыт сложившаяся структура организации влечет за условий.</p>
						<div class="article__info clearfix">
							<div class="article__date">10.04.2017</div>
							<div class="article__button">
								<a href="#" class="button button__view"><span class="button__view_txt button__view_txt2">читать подробнее</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="article__nav">
		<div class="container">
			<a href="#" class="article__page">1</a>
			<a href="#" class="article__page">2</a>
			<a href="#" class="article__page">3</a>
			<a href="#" class="article__nav-button">следующая</a>
		</div>
	</div>
</div>
<?php get_footer(); ?>