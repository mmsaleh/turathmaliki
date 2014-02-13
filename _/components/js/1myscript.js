$(function() {
//highlight the current nav
$("#home a:contains('الرئيسية')").parent().addClass('active');
$("#about a:contains('حول الكتاب')").parent().addClass('active');
$("#book a:contains('المتن')").parent().addClass('active');
$("#commentary a:contains('الشرح')").parent().addClass('active');
$("#audio a:contains('الصوتيات')").parent().addClass('active');
$("#extras a:contains('المزيد')").parent().addClass('active');
	
}); //jQuery is loaded