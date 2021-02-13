<form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
    <fieldset><legend> <?php esc_html_e('Find Articles', 'tswwide'); ?> </legend>
        <label for="s" class="screen-reader-text"><?php esc_html_e('Search for: ', 'tswwide'); ?></label>
        <input type="text" id="s" name="s" value="" />
        
        <input type="submit" value="<?php esc_attr_e('Search', 'tswwide'); ?>" id="searchsubmit" />
    </fieldset>
</form>