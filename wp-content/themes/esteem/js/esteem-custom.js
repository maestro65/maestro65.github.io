jQuery(document).ready(function(){
	jQuery('.search-top').click(function(){
		jQuery('#masthead .search-form-top').toggle();
	});
});

jQuery(document).ready(function(){
	jQuery('#scroll-up').hide();
	jQuery(function () {
		jQuery(window).scroll(function () {
			if (jQuery(this).scrollTop() > 1000) {
				jQuery('#scroll-up').fadeIn();
			} else {
				jQuery('#scroll-up').fadeOut();
			}
		});
		jQuery('a#scroll-up').click(function () {
			jQuery('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});
});
jQuery(document).on('click', '#site-navigation .menunav-menu li.menu-item-has-children > a', function(event) {
    var menuClass = jQuery(this).parent('.menu-item-has-children');
    if (! menuClass.hasClass('focus')){
        menuClass.addClass('focus');
        event.preventDefault();
        menuClass.children('.sub-menu').css({
           'display': 'block'
        });
    }
  });