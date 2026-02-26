<?php get_header(); ?>
<main class="single-stream">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('log-entry full-log'); ?>>
            <header class="log-header">
                <span class="log-id">LOG_ID: <?php the_ID(); ?></span> | 
                <span class="log-date"><?php the_date('Y.m.d H:i:s'); ?></span>
            </header>
            <h1 class="log-title"><?php the_title(); ?></h1>
            <div class="log-content">
                <?php the_content(); ?>
            </div>
            <div class="related-protocols">
                <div class="rp-title">> RECOMMENDED_PROTOCOLS</div>
                <div class="rp-list">
                <?php
                    $categories = get_the_category($post->ID);
                    if ($categories) {
                        $category_ids = array();
                        foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                        $args=array(
                            'category__in' => $category_ids,
                            'post__not_in' => array($post->ID),
                            'posts_per_page'=> 4
                        );
                        $my_query = new wp_query( $args );
                        if( $my_query->have_posts() ) {
                            while( $my_query->have_posts() ) {
                                $my_query->the_post();
                                echo '<div class="rp-item"><a href="' . get_permalink() . '">> ' . get_the_title() . '</a></div>';
                            }
                        }
                    }
                    wp_reset_postdata();
                ?>
                </div>
            </div>
        </article>
        <?php
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
        ?>
    <?php endwhile; endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>