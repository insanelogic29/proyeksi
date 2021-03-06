<?php
/**
 * Displays the post header
 *
 * @package Corporate WordPress theme
 * @author Alexander Clarke
 * @link http://www.wpexplorer.com
 * @since 1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
} ?>

<header class="page-header clr">
	<h1 class="page-header-title"><?php the_title(); ?></h1>
	<?php get_template_part( 'partials/post-meta' ); ?>
</header><!-- #page-header -->