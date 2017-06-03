<?php
/*
Template Name: Карта сайта
*/
?>

<?php get_header(); ?>



<div class="news-page">
	<div class="container">				
		<div class="box">
			<h1>Карта сайта</h1>
			<div class="content clearfix">						
				<ul>
					<li><a href="/">Главная</a></li>
					<li><a href="/#services">Услуги</a>
					<ul>
					<?php $wp_query = new WP_Query(array('cat' => '22', 'orderby' => 'порядковый_номер', 'order' => 'ASC')); ?>
					<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endwhile; // end of the loop. ?>
					</ul>
					</li>
					<li><a href="/#products">Продукция</a>
					<ul>
					<?php $wp_query = new WP_Query(array('cat' => '13', 'orderby' => 'порядковый_номер', 'order' => 'ASC')); ?>
					<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endwhile; // end of the loop. ?>
					</ul>
					</li>
					<li><a href="/?cat=16">Статьи</a>
					<ul>
					<?php $wp_query = new WP_Query(array('cat' => '16','orderby' => 'date', 'order' => 'ASC')); ?>
					<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endwhile; // end of the loop. ?>
					</ul>
					</li>
					<li><a href="/?cat=14">Новости</a>
					<ul>
					<?php $wp_query = new WP_Query(array('cat' => '14','orderby' => 'date', 'order' => 'ASC')); ?>
					<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endwhile; // end of the loop. ?>
					</ul>
					</li>
					<li><a href="/#team">Наши специалисты</a></li>
					<li><a href="/#clients">Клиенты</a></li>
					<li><a href="/#contacts">Контакты</a></li>
					
				</ul>
			</div>	
		</div>
	</div>
</div>


<?php get_footer(); ?>	

<?php get_header(); ?>

<section class="content-inner">
	<div class="container">
<?php require_once('sidebar2.php'); ?>
		<div class="right-content">
		<div class="right-content_padding">
			<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
			<div class="anz-map">
			<h2><?php the_title(); ?></h2>
			<ul>
			<li><a href="/">Главная</a></li>
			<li><a href="/#services">Услуги</a>
			<ul>
			<?php $wp_query = new WP_Query(array('cat' => '22', 'orderby' => 'порядковый_номер', 'order' => 'ASC')); ?>
			<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; // end of the loop. ?>
			</ul>
			</li>
			<li><a href="/#products">Продукция</a>
			<ul>
			<?php $wp_query = new WP_Query(array('cat' => '13', 'orderby' => 'порядковый_номер', 'order' => 'ASC')); ?>
			<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; // end of the loop. ?>
			</ul>
			</li>
			<li><a href="/?cat=16">Статьи</a>
			<ul>
			<?php $wp_query = new WP_Query(array('cat' => '16','orderby' => 'date', 'order' => 'ASC')); ?>
			<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; // end of the loop. ?>
			</ul>
			</li>
			<li><a href="/?cat=14">Новости</a>
			<ul>
			<?php $wp_query = new WP_Query(array('cat' => '14','orderby' => 'date', 'order' => 'ASC')); ?>
			<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; // end of the loop. ?>
			</ul>
			</li>
			<li><a href="/#team">Наши специалисты</a></li>
			<li><a href="/#clients">Клиенты</a></li>
			<li><a href="/#contacts">Контакты</a></li>
			
			</ul>
			</div>
			</div>
		</div> <!-- right-content -->
		<div class="clear"></div>
	</div>
</section>
<?php get_footer(); ?>