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


<div class="container container_padding_top beltconveyors__txt">
	
	
<h1>Поиск по: "<?php echo $_GET['s'];?>"</h1><br/><br/>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<a href="<?php the_permalink();?>"><?php the_title(); ?></a><br/><br/>

<?php endwhile; else: ?>
	<p>Поиск не дал результатов.</p>
<?php endif;?>
		

</div>









<?php get_footer(); ?>