<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package University_Hub
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Ничего не найдено', 'university-hub' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( __( 'Готовы опубликовать свою первую запись? <a href="%1$s">Начните здесь</a>.', 'university-hub' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Извините, но ничего не найдено по условиям поиска. Попробуйте использовать другие ключевые слова.', 'university-hub' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php esc_html_e( 'Кажется, мы не можем найти то, что вы ищете. Возможно, поиск сможет помочь.', 'university-hub' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
