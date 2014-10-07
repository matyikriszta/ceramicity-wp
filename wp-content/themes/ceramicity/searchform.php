<form action="/" method="get">
    <fieldset>
        <label for="search">Search for:</label>
        <input type="text" name="s" id="search" placeholder="Search" value="<?php the_search_query(); ?>" />
    </fieldset>
</form>