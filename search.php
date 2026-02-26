<?php get_header(); ?>
<main class="log-stream">
    <div class="stream-header" style="margin-bottom: 2rem; color: var(--term-yellow);">
        > SEARCH_QUERY: "<?php echo get_search_query(); ?>"<br>
        > MATCHES FOUND: <?php echo $wp_query->found_posts; ?>
    </div>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('log-entry'); ?>>
            <h2 class="log-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="log-content"><?php the_excerpt(); ?></div>
        </article>
    <?php endwhile; else : ?>
        <p>> NO DATA MATCHED QUERY.</p>
    <?php endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>