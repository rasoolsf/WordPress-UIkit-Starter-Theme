<?php
/**
 * element for header
 * 
 * @author nstaeger
 * @since 2014-08-31
 */
?>
<header id="header">
    <div class="uk-container uk-container-center">
        <h1 class="uk-margin-large-top">
            <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" class="uk-link-reset">
                <?php bloginfo( 'name' ); ?>
            </a>
        </h1>
        <span><?php bloginfo( 'description' ); ?></span>
    </div>
</header>