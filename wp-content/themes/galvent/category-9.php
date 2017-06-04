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
<?php	
$category_id = 9;
$args = array(
	'cat' => $category_id,
	);
$query = new WP_Query($args);
?>
<div class="direction_content">       
	<div class="container">
		<div class="col-sm-12 col-md-12">
			<h1><?php single_cat_title();?></h1>
		</div>
		<?php			
		while ( $query->have_posts() ) {
			$query->the_post();
			?>
			<div class="col-md-4 col-sm-6">
				<div class="box-width">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail() ?>
					<div class="zagolovok">
						<span class="direction_item__circle"></span>
						<p class="direction_item__p"><?php the_title();?></p>
					</div>
					</a>
				</div>
			</div>
			<?php } ?>
			<div class="col-md-12">

				<div class="direction_description">
					<p class="direction_description_p">
						<?php 
						$post_id = 'category_9';
						the_field('определение', $post_id); ?>
					</p>
					<p class="direction_description_p">
						<?php echo category_description( $category_id ); ?>
					</p>
				</div>
			</div>
		</div>
	</div>

	<?php get_footer(); ?>