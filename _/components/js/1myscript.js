$(function() {
//highlight the current nav
$("#home a:contains('الرئيسية')").parent().addClass('active');
$("#aboutproject a:contains('حول الموقع')").parent().addClass('active');
$("#book a:contains('المتن')").parent().addClass('active');
$("#commentary a:contains('الشرح')").parent().addClass('active');
$("#video a:contains('المرئيات')").parent().addClass('active');
$("#extras a:contains('المزيد')").parent().addClass('active');

//make menus drop automatically
	$('ul.nav li.dropdown').hover(function() {
		$('.dropdown-menu', this).fadeIn();
	}, function() {
		$('.dropdown-menu', this).fadeOut('fast');
	});//hover


	$("[data-toggle='tooltip']").tooltip({ animation: true});

	
}); //jQuery is loaded