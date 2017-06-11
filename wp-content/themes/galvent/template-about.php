<?php 
/*
Template name: О компании
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

<div class="about">
	<div class="container content-part">		
		<h1><?php the_title(); ?></h1>
	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>	

		<?php endwhile; ?>
		<?php else: ?>
		<?php endif; ?> 	
	
		<span class="about__descr">Фото с нашего производства:</span>

		<div class="about__photos-block clearfix">
		<?php if( class_exists('Dynamic_Featured_Image') ) { ?>
     	<?php global $dynamic_featured_image; ?>
     	<?php $featured_images = $dynamic_featured_image->get_featured_images( get_the_ID() ); ?>
			<?php foreach( $featured_images as $image ) { ?>
				<div class="about__photo">
					<a class="fancybox photo" href="<?php echo $image['full'] ?>" data-fancybox-group="gallery">
						<img src="<?php echo $image['full'] ?>" alt="" />
					</a>
				</div>
			<?php } ?>
		<?php } ?>
		</div>

		<p class="about__text"><?php the_field('нижний_текст'); ?></p>
		
		<?php get_template_part( 'content', 'order' ); ?>

	</div>
</div>

<?php get_footer(); ?>	