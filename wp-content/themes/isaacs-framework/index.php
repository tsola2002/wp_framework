<?php
/**
 * Created by PhpStorm.
 * User: isaac
 * Date: 11/03/15
 * Time: 13:03
 *
 * index.php
 */

?>

<div class="main-content col-md-8" role="main">
		<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
</div> <!-- end main-content -->
