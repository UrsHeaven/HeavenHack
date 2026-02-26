<?php get_header(); ?>
<main class="log-stream">
    <div class="stream-header" style="margin-bottom: 2rem; color: var(--term-cyan);">
        > ACCESSING DATABASE...<br>
        > <?php echo wp_count_posts()->publish; ?> ENTRIES FOUND.<br>
        > STREAMING DATA...
    </div>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('log-entry'); ?>>
            <header class="log-header">
                <span class="log-id">LOG_ID: <?php the_ID(); ?></span> | 
                <span class="log-date"><?php the_date('Y.m.d H:i:s'); ?></span> | 
                <span class="log-author">AUTH: <?php the_author(); ?></span>
            </header>
            <h2 class="log-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="log-content">
                <?php the_excerpt(); ?>
            </div>
            <div class="log-actions" style="margin-top: 1rem; text-align: right;">
                <a href="<?php the_permalink(); ?>" class="cmd-btn">[ EXECUTE.READ() ]</a>
            </div>
        </article>
    <?php endwhile; else : ?>
        <p><?php esc_html_e( 'NO DATA FOUND.', 'heaven-hacker' ); ?></p>
    <?php endif; ?>
    <div class="pagination">
        <?php
        the_posts_pagination( array(
            'mid_size'  => 2,
            'prev_text' => __( '< PREV', 'heaven-hacker' ),
            'next_text' => __( 'NEXT >', 'heaven-hacker' ),
        ) );
        ?>
    </div>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>