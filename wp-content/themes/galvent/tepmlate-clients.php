<?php 
/*
Template name: Клиенты
*/
?>
<?php get_header(); ?>
<div class="bread_menu bread_menu_bg_img conveyors_page">	
	<div class="container pos-relative">
		<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' '); ?>		
		<a href="#modal__form_order" class="fancybox order_curcle_innerpage conveyors_page_circle">
			<span class="order_curcle__text toppadding">On-line</span>
			<span class="order_curcle__text">заявка</span>
		</a>
	</div>
</div>

<div class="clients_content">
	<div class="container">
		<div class="clients_header">
			<h2 class="h2 h2_dark clients_header__h2">Наши клиенты</h2>
		</div>
		<div class="clients_block">
			<?php $args = array(
				'post_type' => 'client'
				);


			$query = new WP_Query($args);

			while ( $query->have_posts() ) {
				$query->the_post(); ?>
				<div class="col-md-4 col-sm-6 col-lg-3">
					<div class="clients_item clients_item__1">
						<div class="clients_item__img"></div>
						<a href="" class="clients_item__link"><?php the_title(); ?></a>
					</div>
				</div>

		<?php }?>
	</div>
         <!--    
                <div class="col-md-4 col-sm-6 col-lg-3">
                    <div class="clients_item clients_item__2">
                        <div class="clients_item__img"></div>
                        <a href="" class="clients_item__link">ПАО АНК «Башнефть»</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-3">
                    <div class="clients_item clients_item__3">
                        <div class="clients_item__img"></div>
                        <a href="" class="clients_item__link">ПАО «АвтоВАЗ»</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-3">
                    <div class="clients_item clients_item__4">
                        <div class="clients_item__img"></div>
                        <a href="" class="clients_item__link">Evraz plc</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-3">
                    <div class="clients_item clients_item__5">
                        <div class="clients_item__img"></div>
                        <a href="" class="clients_item__link">НК ЛУКОЙЛ</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-3">
                    <div class="clients_item clients_item__6">
                        <div class="clients_item__img"></div>
                        <a href="" class="clients_item__link">ПАО АНК «Башнефть»</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-3">
                    <div class="clients_item clients_item__7">
                        <div class="clients_item__img"></div>
                        <a href="" class="clients_item__link">Группа НЛМК</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-lg-3">
                    <div class="clients_item clients_item__8">
                        <div class="clients_item__img"></div>
                        <a href="" class="clients_item__link">Т плюс Групп</a>
                    </div>
                </div>
            -->
        </div>
    </div>

    <?php get_footer(); ?>	