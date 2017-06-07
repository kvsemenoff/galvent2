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


<div class="container container_padding_top">
    <h2 class="h2 h2_dark conveyors__caption">Конвейеры в машиностроительстве</h2>

    <div class="share_block conveyors__share">
        <span class="share">Поделиться</span>
        <div class="share__socials">
            <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
            <script src="//yastatic.net/share2/share.js"></script>
            <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,twitter"></div>
        </div>      
    </div>
    <div class="clear"></div>

    <div class="conveyors__img">
        <?php 
        $image = get_field('картинка_направления');

        if( !empty($image) ): ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>
    </div>
   
    <div class="conveyors__text">
        <?php the_content(); ?>       
    </div>
</div>

<div class="rateandshare_bg conveyors_margin">
    <div class="container rateandshare_container">

        <div class="rate_block">
            <span class="rate_block__rate">Оценить статью:</span>

            <div class="reviewStars-input">
               
            </div>
        </div>

        <div class="share_block">
            <span class="share">Поделиться</span>
            <div class="share__socials">
                <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                <script src="//yastatic.net/share2/share.js"></script>
                <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,twitter"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>




<?php get_template_part( 'content', 'order' ); ?>


<?php get_footer(); ?>	