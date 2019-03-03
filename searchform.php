<div class="searchWrapper fixedWrapper">
    <form role="search" method="get" class="search-form wrapper" action="<?php echo home_url( '/' ); ?>">
<!--        <input type="submit" class="search-submit" value="Search" />-->
        <button type="submit"><i class="fa fa-search"></i></button>
        <label>
            <input type="search" class="search-field" placeholder="<?php the_field('placeholder_text', 'options'); ?>" value="" name="s" title="Search for:" />
        </label>
    </form>
</div>