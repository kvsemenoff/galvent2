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

<div class="service-wrap">
	<div class="container relative content-part">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="clearfix"></div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="konveer">
							<?php 
							$image = get_field('продукция_внутренная_картинка');
							if( !empty($image) ){ ?>
								<div class="product-img-inner"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></div>
							<?php }else{ ?>
								<div class="product-img-inner"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/konv.jpg" alt=""></div>
							<?php } ?>

					<!-- <div class="konveer__item konveer__item_right">
						<div class="konveer__item_img">
							<?php 
							$image = get_field('продукция_внутренная_картинка');
							if( !empty($image) ){ ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							<?php }else{ ?>
								<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/konv.jpg" alt="">
							<?php } ?>
						</div>
					</div> -->
					
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>	
						<?php endwhile; ?>
						<?php else: ?>
						<?php endif; ?> 
					
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_template_part( 'content', 'quick-order' ); ?>


<?php get_footer(); ?>	
