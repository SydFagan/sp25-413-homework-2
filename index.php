<?php get_header(); ?>

<?php
$featured = new WP_Query(array('posts_per_page'=>1));
?>
<section class="hero">
<?php if($featured->have_posts()) :
while($featured->have_posts()) : $featured->the_post(); ?>
<?php if(has_post_thumbnail()) the_post_thumbnail('large'); ?>
<h2>
<a href="<?php the_permalink(); ?>">
<?php the_title(); ?>
</a>
</h2>

<p><?php the_excerpt(); ?></p>
<?php endwhile; endif; wp_reset_postdata(); ?>

</section>
<div class="content-layout">
<main>
<div class="magazine-grid">

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<article class="post-card">
<?php
$category = get_the_category();
if($category){
echo '<span class="category-label">'.$category[0]->name.'</span>';
}
?>

<?php if(has_post_thumbnail()) : ?>
<a href="<?php the_permalink(); ?>">
<?php the_post_thumbnail('medium'); ?>
</a>
<?php endif; ?>

<h3>
<a href="<?php the_permalink(); ?>">
<?php the_title(); ?>
</a>
</h3>
<div class="post-meta">
<?php echo get_the_date(); ?>
</div>

<p><?php the_excerpt(); ?></p>
</article>
<?php endwhile; else: ?>
<p>No posts found.</p>

<?php endif; ?>

</div>
</main>
<aside>
<div class="sidebar-card">
<h3>Trending</h3>
<ul class="trending">
<?php
$trending = new WP_Query(array(
'posts_per_page'=>5,
'orderby'=>'comment_count'
));

while($trending->have_posts()) : $trending->the_post();
?>
<li>
<a href="<?php the_permalink(); ?>">
<?php the_title(); ?>
</a>
</li>
<?php endwhile; wp_reset_postdata(); ?>
</ul>
</div>

<div class="sidebar-card">
<h3>About</h3>
<p>The Metro Report provides viewers with live-updates and the hot topics!</p>
</div>
</aside>
</div>

<?php get_footer(); ?>