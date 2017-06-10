<?php
/*
Template Name: Карта сайта
*/
?>

<?php get_header(); ?>

<div class="news-page">
	<div class="container content-part">				
		<div class="box">
			<h1>Карта сайта</h1>
			<div class="content clearfix">						
				<ul class="sitemap">
					<li><a href="/?cat=2">Статьи</a>
						<ul>
						<?php $wp_query = new WP_Query(array('cat' => '2', 'order' => 'ASC')); ?>
						<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php endwhile; // end of the loop. ?>
						</ul>
					</li>
					<li><a href="/?cat=3">Новости</a>
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

						
						<?php $parent_id = 6; ?> 
						<?php $sub_cats = get_categories( array(
							'child_of' => $parent_id,
							'hide_empty' => 0,
							'order' => 'ASC'
							) );
						?>
						<?php $parent = get_category($parent_id); ?>
						<?php if( $sub_cats ){ ?>
						<ul>
						<?php foreach( $sub_cats as $cat ){ ?>
							<?php $child = get_category($cat->term_id); ?>
							<li><a href="/<?php echo $parent->slug.'/'.$child->slug; ?>"><?php echo $cat->name; ?></a></li>
							<?php	
							$args = array(
								'cat' => $cat->term_id,
							); ?>
							<?php  $query = new WP_Query($args); ?>
							<ul>
							<?php wp_reset_query(); ?>
							<?php while ( $query->have_posts() ) { ?>
							<?php $query->the_post(); ?>
								<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a><li>
							<?php } ?>
							<?php wp_reset_query(); ?>
							</ul>
						<?php }	?>
						</ul>
						<?php } ?>
					</li>
					<li><a href="/?cat=9">Направления</a>
						<ul>
						<?php $wp_query = new WP_Query(array('cat' => '9', 'order' => 'ASC')); ?>
						<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php endwhile; // end of the loop. ?>
						</ul>
					</li>
					<?php wp_list_pages('title_li=&exclude=68,281,321'); ?>
					
				</ul>
				<br>
				<br>
				<br>
				
			</div>	
		</div>
	</div>
</div>


<?php get_footer(); ?>	

