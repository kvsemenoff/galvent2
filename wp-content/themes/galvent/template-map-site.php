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
				<ul class="sitemap">
					<li><a href="/">Главная</a></li>
					<li><a href="/cat=2">Статьи</a>
						<ul>
						<?php $wp_query = new WP_Query(array('cat' => '2', 'order' => 'ASC')); ?>
						<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php endwhile; // end of the loop. ?>
						</ul>
					</li>
					<li><a href="/cat=3">Новости</a>
						<ul>
						<?php $wp_query = new WP_Query(array('cat' => '3', 'order' => 'ASC')); ?>
						<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php endwhile; // end of the loop. ?>
						</ul>
					</li>
					<li><a href="/?cat=4">Акции</a>
						<ul>
						<?php $wp_query = new WP_Query(array('cat' => '4', 'order' => 'ASC')); ?>
						<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php endwhile; // end of the loop. ?>
						</ul>
					</li>
					<li><a href="/?cat=6">Продукция</a>
						<ul>
						<?php $wp_query = new WP_Query(array('cat' => '6', 'order' => 'ASC')); ?>
						<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php endwhile; // end of the loop. ?>
						</ul>
					</li>
					<li><a href="/?cat=9">Направления</a>
						<ul>
						<?php $wp_query = new WP_Query(array('cat' => '9', 'order' => 'ASC')); ?>
						<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php endwhile; // end of the loop. ?>
						</ul>
					</li>
					<?php wp_list_pages('title_li='); ?>
					
				</ul>
				<br>
				<br>
				<br>
				
			</div>	
		</div>
	</div>
</div>


<?php get_footer(); ?>	

