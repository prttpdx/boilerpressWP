<?php
/**
 * Site footer template
 * 
 * @package BoilerPressWP
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<footer class="site-footer">
    <div class="container">

        <section class="site-footer__copy">
            <p><?php esc_html_e( 'Copyright', 'boilerpress' ); ?> © <?php the_date( 'Y' ); ?> BoilerPressWP</p>
        </section>
        
    </div>
</footer>

<?php wp_footer(); ?>