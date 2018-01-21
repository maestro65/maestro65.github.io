<?php 

// Do not allow direct access to the file.
if( ! defined( 'ABSPATH' ) ) {
    exit;
} 

global $top_nav, $social_icons; ?>

<div id="header-wrapper">
    <div class="container clearfix">
        
        <div id="primary-menu-trigger"><i class="fa fa-bars"></i></div>
        
        <!-- Logo -->
        <div id="logo" class="nobottomborder">
            <?php if( get_theme_mod( 'agama_logo', '' ) ): ?>
                <a href="<?php echo esc_url( home_url('/') ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                    <img src="<?php echo esc_url( get_theme_mod( 'agama_logo' ) ); ?>" 
                         alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                </a>
            <?php else: ?>
                <h1 class="site-title">
                    <a href="<?php echo esc_url( home_url('/') ); ?>" 
                       title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
                </h1>
            <?php endif; ?>
        </div><!-- Logo End -->
        
        <!-- Primary Menu -->
        <nav id="primary-menu">
            <?php echo Agama::menu( 'primary' ); ?>
        </nav><!-- Primary Menu End -->
        
        <?php if( $social_icons ): ?>
        <!-- Social Icons -->
        <div class="clearfix visible-md visible-lg">
            <a href="#" class="social-icon tv-small tv-borderless tv-facebook">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-facebook"></i>
            </a>
            <a href="#" class="social-icon tv-small tv-borderless tv-twitter">
                <i class="fa fa-twitter"></i>
                <i class="fa fa-twitter"></i>
            </a>
        </div><!-- Social Icons End -->
        <?php endif; ?>
        
    </div>
</div>

