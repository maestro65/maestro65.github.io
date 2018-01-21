<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package University_Hub
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">

				<header class="page-header">
					<h1 class="page-title">Ошибка 404. Страница не найдена</h1>
				</header><!-- .page-header -->

				<div class="page-content">

		          <p>По данному адресу ничего не найдено. Воспользуйтесь поиском.</p>

					<?php get_search_form(); ?>

					<?php
					wp_nav_menu( array(
						'theme_location' => 'notfound',
						'depth'          => 1,
						'fallback_cb'    => false,
						'container'      => 'div',
						'container_id'   => 'quick-links-404',
						)
					);
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
