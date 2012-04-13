jQuery(document).ready(function($) {

/*---------------------------------------------------------------------------*
 * Scroll to top
/*---------------------------------------------------------------------------*/
	$('#footer a.top,.sc-divider a').click(function() {
		$('html, body').animate({scrollTop:0},'slow');
		return false;
	});

/*---------------------------------------------------------------------------*
 * Menu slideDown
/*---------------------------------------------------------------------------*/
	$('#nav ul.sub-menu').hide();
	$('#nav li').hover( 
		function() {
			$(this).children('ul.sub-menu').slideDown('fast');
		}, 
		function() {
			$(this).children('ul.sub-menu').hide();
		}
	);
	
/*---------------------------------------------------------------------------*
 * Add alt-row styling to tables
/*---------------------------------------------------------------------------*/
	if($('.entry table').length) {
		$('.entry table tr:odd').addClass('alt-table-row');
	}

/*---------------------------------------------------------------------------*
 * jQuery UI Tabs
/*---------------------------------------------------------------------------*/
	// widget tabs
	if($('.widget_bandit_tabs').length) {
		$('.bandit_tabs').tabs({
			fx: {opacity:'show'}
		});
	}

	// content tabs
	if($('.sc-tabs').length) {
		$('.sc-tabs').tabs({
			fx: {opacity:'show'}
		});
	}

/*---------------------------------------------------------------------------*
 * Toggle Box
/*---------------------------------------------------------------------------*/
	if($('.toggle-box').length) {
		$('h4.toggle-title').click(function() {
			$(this).toggleClass('toggle-title-active')
			$(this).parent().find('.toggle-inner').toggle();
			return false;
		});
	}

});