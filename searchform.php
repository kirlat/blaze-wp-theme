<?php namespace Blaze; ?>
<form action="<?php echo home_url(); ?>/" method="get">
    <div id="search-area" class="right">
        <input type="search" id="searchfield" placeholder="Search" value="<?php the_search_query(); ?>" name="s" />
        <input type="submit" value="Submit" id="searchbutton" name="submit" id="searchbutton" class="postfix" />
    </div>
</form>