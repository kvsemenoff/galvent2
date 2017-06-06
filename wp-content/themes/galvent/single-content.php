<?php get_header(); ?>


<?php

if (in_category('2') or in_category('3')  or in_category('4')) {
	get_template_part('single-content');
} 
else {
	get_template_part('single-default.php');
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
    <div class="hidden-sm hidden-md hidden-lg conv_bg_m"></div>
    <div class="container">
        <div class="col-md-12 hidden-xs">
            <div class="conv_bg">
				<?php the_post_thumbnail(); ?>

				<span class="conv_bg-date"><?php the_time('d.m.Y'); ?></span>
            </div>
        </div>
        <div class="hidden-md hidden-lg conv_m_list">
            <div class="conv_list">
                <ul class="conv_list__ul">
                    <li class="conv_list__item">
                        <a href="#" class="conv_list__p">Как выбрать конвейер</a>
                    </li>
                    <li class="conv_list__item">
                        <a href="#" class="conv_list__p">Какой конвейер лучше</a>
                    </li>
                    <li class="conv_list__item">
                        <a href="#" class="conv_list__p">Почему стоит заказывать у нас</a>
                    </li>
                    <li class="conv_list__item">
                        <a href="#" class="conv_list__p">Гарантийное обслуживание</a>
                    </li>
                    <li class="conv_list__item">
                        <a href="#" class="conv_list__p">Пост гарантийное обслуживание</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-5 col-lg-4 hidden-xs hidden-sm">
            <div class="conv_list">
                <ul class="conv_list__ul">
                    <li class="conv_list__item">
                        <a href="#" class="conv_list__p">Как выбрать конвейер</a>
                    </li>
                    <li class="conv_list__item">
                        <a href="#" class="conv_list__p">Какой конвейер лучше</a>
                    </li>
                    <li class="conv_list__item">
                        <a href="#" class="conv_list__p">Почему стоит заказывать у нас</a>
                    </li>
                    <li class="conv_list__item">
                        <a href="#" class="conv_list__p">Гарантийное обслуживание</a>
                    </li>
                    <li class="conv_list__item">
                        <a href="#" class="conv_list__p">Пост гарантийное обслуживание</a>
                    </li>
                </ul>
            </div>
        </div>
        <h3 class="hidden-md hidden-lg conv_h3">Как выбрать конвейер</h3>
        <div class="col-md-7 col-lg-8 hidden-xs hidden-sm">
            <h3 class="conv_h3">Как выбрать конвейер</h3>
            <p class="conv_p conv_p_1">Разнообразный и богатый опыт сложившаяся структура организации влечет за собой
                процесс
                внедрения и модернизации существенных финансовых и административных условий. С другой стороны постоянное
                информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании позиций,
                занимаемых участниками в отношении поставленных задач. Повседневная практика показывает, что укрепление
                и развитие структуры способствует подготовки и реализации направлений прогрессивного развития.
                Разнообразный и богатый опыт сложившаяся структура организации влечет за собой процесс внедрения и
                модернизации </p>
        </div>
        <div class="col-md-12">
            <p class="conv_p">Разнообразный и богатый опыт сложившаяся структура организации влечет за собой процесс
                внедрения и модернизации существенных финансовых и административных условий. С другой стороны постоянное
                информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании позиций,
                занимаемых участниками в отношении поставленных задач.
            </p>
        </div>
        <h3 class="conv_h3 hidden-md hidden-lg conv_m_h3">Какой конвейер лучше</h3>
        <div class="col-md-12">
            <div class="conv_block">
                <h3 class="conv_h3 hidden-xs hidden-sm">Какой конвейер лучше</h3>
                <p class="conv_p conv_p_1">Разнообразный и богатый опыт сложившаяся структура организации влечет за
                    собой
                    процесс
                    внедрения и модернизации существенных финансовых и административных условий. С другой стороны
                    постоянное
                    информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании
                    позиций,
                    занимаемых участниками в отношении поставленных задач.</p>
                <p class="conv_p">
                    Повседневная практика показывает, что укрепление и развитие структуры способствует подготовки и
                    реализации направлений прогрессивного развития. Разнообразный и богатый опыт сложившаяся структура
                    организации влечет за собой процесс внедрения и модернизации существенных финансовых и
                    административных
                    условий. С другой стороны постоянное информационно-пропагандистское обеспечение нашей деятельности
                    играет важную роль.
                </p>
                <div class="clearfix conv_images">
                    <div class="conv_block__imgblock hidden-sm hidden-md hidden-lg">
                        <img src="img/conv-img3.png" alt="Оборудование" class="conv_block__img conv_block__img3">
                    </div>
                    <div class="hidden-xs lent-sm col-md-6 col-lg-6 ">
                        <div class="conv_block__imgblock">
                            <img src="img/conv-img1.png" alt="Оборудование" class="conv_block__img">
                        </div>
                    </div>
                    <div class="hidden-xs  lent-sm col-md-6 col-lg-6  ">
                        <div class="conv_block__imgblock">
                            <img src="img/conv-img2.png" alt="Оборудование" class="conv_block__img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="conv_block">
                <h3 class="conv_h3 hidden-md hidden-lg conv_m_h3">Какой конвейер лучше</h3>
                <h3 class="conv_h3 hidden-xs hidden-sm">Почему стоит заказывать у нас</h3>
                <p class="conv_p conv_p_1">Разнообразный и богатый опыт сложившаяся структура организации влечет за
                    собой
                    процесс
                    внедрения и модернизации существенных финансовых и административных условий. С другой стороны
                    постоянное
                    информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании
                    позиций,
                    занимаемых участниками в отношении поставленных задач.</p>
                <p class="conv_p">
                    Повседневная практика показывает, что укрепление и развитие структуры способствует подготовки и
                    реализации направлений прогрессивного развития. Разнообразный и богатый опыт сложившаяся структура
                    организации влечет за собой процесс внедрения и модернизации существенных финансовых и
                    административных
                    условий. С другой стороны постоянное информационно-пропагандистское обеспечение нашей деятельности
                    играет важную роль.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="rateandshare_bg">
    <div class="container rateandshare_container">

        <div class="rate_block">
            <span class="rate_block__rate">Оценить статью:</span>

            <div class="reviewStars-input">
                <input id="star-4" type="radio" name="reviewStars"/>
                <label title="gorgeous" for="star-4"></label>

                <input id="star-3" type="radio" name="reviewStars"/>
                <label title="good" for="star-3"></label>

                <input id="star-2" type="radio" name="reviewStars"/>
                <label title="regular" for="star-2"></label>

                <input id="star-1" type="radio" name="reviewStars"/>
                <label title="poor" for="star-1"></label>

                <input id="star-0" type="radio" name="reviewStars"/>
                <label title="bad" for="star-0"></label>
            </div>

            <span class="rate_block__nums"><i>0</i>/5</span>
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