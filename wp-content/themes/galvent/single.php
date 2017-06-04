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

<div class="container container_padding_top beltconveyors__txt content-part">
	<div class="row">
		<div class="col-md-12">
			<h1><?php the_title(); ?></h1>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
			<?php the_content(); ?>	
			
			<?php endwhile; ?>
			<?php else: ?>
			<?php endif; ?> 	
		</div>
	</div>
</div>

<?php get_template_part( 'content', 'order' ); ?>


<?php get_footer(); ?>	