<form class="search-form" action="<?php  echo esc_url(home_url('/')); ?>/" method="get">
    <fieldset>
        <input type="text" name="s" id="s" />
        <input type="submit" id="searchsubmit" />
        <?php if (function_exists('et_get_theme_icon') && et_get_theme_icon() && isset(et_get_theme_icon()['search'])): ?>
            <div class="search-icon"><?php echo et_get_theme_icon()['search']; ?></div>
        <?php endif; ?>
    </fieldset>
</form>