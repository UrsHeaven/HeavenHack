<aside class="sys-sidebar">
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <div class="widget-area">
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div>
    <?php else : ?>
        <div class="cmd-panel">
            <div class="cmd-title">COMMAND_PANEL::SEARCH</div>
            <?php get_search_form(); ?>
        </div>
        <div class="cmd-panel">
            <div class="cmd-title">COMMAND_PANEL::DIRECTORY</div>
            <ul>
                <?php wp_list_categories(array('title_li' => '')); ?>
            </ul>
        </div>
        <div class="cmd-panel">
            <div class="cmd-title">COMMAND_PANEL::RECENT_LOGS</div>
            <ul>
                <?php wp_get_archives(array('type' => 'postbypost', 'limit' => 5)); ?>
            </ul>
        </div>
    <?php endif; ?>
</aside>