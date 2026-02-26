        <footer class="sys-footer">
            <div class="sys-shut">
                <?php echo esc_html(get_theme_mod('footer_uptime', '> SYSTEM UPTIME: ')); ?><?php echo human_time_diff(0, time()); ?><br>
                > &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. ALL RIGHTS RESERVED.<br>
                <?php echo esc_html(get_theme_mod('footer_protocol', '> JOLLY DOG PROTOCOL INSTALLED.')); ?>
            </div>
        </footer>
    </div> <!-- .console-container -->

    <?php wp_footer(); ?>
</body>
</html>