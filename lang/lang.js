var langs = ['en'];
var langCode = '';

var translate = function (jsdata) {
	$("[tkey]").each (function (index)
	{
		var strTr = jsdata [$(this).attr ('tkey')];
	  var placeAtr = $(this).attr('placeholder');
		if (typeof placeAtr !== typeof undefined && placeAtr !== false) {
			$(this).attr("placeholder", strTr);
		}
		else {
			$(this).html (strTr);
		}
	});
}

langCode = navigator.language.substr (0, 2);
//langCode = 'en';

if (langs.indexOf(langCode) != -1) {
	$.getJSON('lang/'+langCode+'.json', translate);
}
