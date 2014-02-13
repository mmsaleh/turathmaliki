$(function() {
//highlight the current nav
$("#home a:contains('الرئيسية')").parent().addClass('active');
$("#about a:contains('حول الكتاب')").parent().addClass('active');
$("#book a:contains('المتن')").parent().addClass('active');
$("#commentary a:contains('الشرح')").parent().addClass('active');
$("#audio a:contains('الصوتيات')").parent().addClass('active');
$("#extras a:contains('المزيد')").parent().addClass('active');
	


//make menus drop automatically
$('ul.nav li.dropdown').hover(function() {
	$('.dropdown-menu', this).fadeIn();
}, function() {
	$('.dropdown-menu', this).fadeOut('fast');
});//hover

}); //jQuery is loaded