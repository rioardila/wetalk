var langs = ['en', 'es'];
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

if (langs.indexOf(langCode) != -1) { //Show in Spanish or English
	$.getJSON('lang/'+langCode+'.json', translate);
}
else if(langCode == 'ca') { //show in Spanish when lang is Catalan
	$.getJSON('lang/es.json', translate);
}
else { //Otherwise show in English
	$.getJSON('lang/en.json', translate);
}
