<form role="search" method="get" class="grep-search-form" action="<?php echo home_url( '/' ); ?>">
    <span style="color:var(--term-green); margin-right:5px;">> GREP</span>
    <input type="text" class="grep-input" placeholder="[ KEYWORD ]" value="<?php echo get_search_query(); ?>" name="s" />
    <input type="submit" class="grep-submit" value="Search" />
</form>