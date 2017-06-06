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

    <div class="conveyors__img conveyors__img_desk">
        <?php 
        $image = get_field('картинка_направления');

        if( !empty($image) ): ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>
    </div>
  

    <div class="conveyors__list">
        <ul class="conveyors__list_txt">
            <li>Электроэнергетика</li>
            <li>Топливная промышленность</li>
            <li>Чёрная металлургия</li>
            <li>Цветная металлургия</li>
        </ul>
        <ul class="conveyors__list_txt">
            <li>Химическая и нефтехимическая промышленность</li>
            <li>Машиностроение и металлообработка</li>
            <li>Лесная, деревообрабатывающая и целлюлозно-бумажная промышленность</li>
            <li>Промышленность строительных материалов</li>
        </ul>
    </div>  
    
    <p class="conveyors__text">Разнообразный и богатый опыт сложившаяся структура организации влечет за собой процесс внедрения и модернизации существенных финансовых и административных условий. С другой стороны постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании позиций, занимаемых участниками в отношении поставленных задач. Повседневная практика показывает, что укрепление и развитие структуры способствует подготовки и реализации направлений прогрессивного развития. Разнообразный и богатый опыт сложившаяся структура организации влечет за собой процесс внедрения и модернизации существенных финансовых и административных условий. С другой стороны постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль.
    </p>
    <p class="conveyors__text"> в формировании позиций, занимаемых участниками в отношении поставленных задач. Повседневная практика показывает, что укрепление и развитие структуры способствует подготовки и реализации направлений прогрессивного развития.</p>
</div>

<div class="rateandshare_bg conveyors_margin">
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




<div class="container">
    <h2 class="h2 h2_dark conveyors__caption_form">Остались вопросы?</h2>
    <span class="conveyors__subtext_form">Свяжитесь с нами через форму обратной связи</span>
    <div class="form_for_inner_page conveyors__marginbottom">
        <form action="#" method="post" class="js-submit">
            <div class="form_for_inner_page_box">
                <span class="for_input">Ваше ФИО:<i>*</i></span>
                <span class="input input_theme_rosa"><input type="text" class="input__control" name="uname" placeholder="Василий" required></span> 
            </div>
            <div class="form_for_inner_page_box">
                <span class="for_input">Телефон:<i>*</i></span>
                <span class="input input_theme_rosa"><input type="tel" class="input__control js-phone" name="phone" placeholder="+7(___)___-__-__" required></span>
            </div>
            <div class="form_for_inner_page_box last_box">
                <span class="for_input">E-mail:<i>*</i></span>
                <span class="input input_theme_rosa"><input type="email" class="input__control" name="email" placeholder="vasiliy@mail.ru" required></span> 
            </div>
            <div class="clear"></div>
            <span class="for_input for_input_margintop">Комментарий:<i>*</i></span>
            <textarea name="message"  class="message message_theme_rosa" placeholder="Текст комментария"></textarea>

            
            <span class="conveyors__submit"><input type="submit"></span>
        </form>
    </div>
</div>


<?php get_footer(); ?>	