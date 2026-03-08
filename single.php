<?php get_header(); ?>

<main class="article">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<div class="article-meta">
By <?php the_author(); ?> | <?php echo get_the_date(); ?>
</div>
<?php if(has_post_thumbnail()) the_post_thumbnail('large'); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>