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




<div class="conv_content">  
    <div class="container">
        <h2 class="h2 h2_dark conv_header hidden-md hidden-lg"><?php the_title(); ?></h2>
        <div class="col-sm-12 col-md-12">
            <h2 class="h2 h2_dark conv_header hidden-xs hidden-sm"><?php the_title(); ?></h2>
            <div class="share_block">
                <span class="share">Поделиться</span>
                <div class="share__socials">
                    <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                    <script src="//yastatic.net/share2/share.js"></script>
                    <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,twitter"></div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="col-md-12 paddingoff">
            <div class="conv_bg">
                <?php $image = get_field('картинка_внутренняя'); ?>
                <?php if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
                
				<span class="conv_bg-date"><?php the_time('d.m.Y'); ?></span>
            </div>
        </div>
		<div class="clearfix"></div>

        <div class="col-md-5 col-lg-4 paddingoff">
            
                <ul class="conv_list conv_list__ul">
                    <!-- this area for js -->
                </ul>
            
        </div>
		

       
        
        <div class="conv__txtbox">                        
            <?php the_content(); ?>            	            
        </div>       
        
        
    </div>
</div>
<div class="rateandshare_bg">
    <div class="container rateandshare_container">

        <div class="rate_block">
            <span class="rate_block__rate">Оценить статью:</span>

            <div class="reviewStars-input">
               
            </div>

            <!-- <span class="rate_block__nums"><i>0</i>/5</span> -->
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