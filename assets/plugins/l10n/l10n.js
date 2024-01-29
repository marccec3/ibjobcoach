/////////////////////////////////
// I18n (Internationalization) //
/////////////////////////////////

var l10n = {};
var loadLangs = ['es_CL'];
var jsLocale = 'undefined' !== typeof localization && localization && localization.length ? localization : 'es';

$(document).ready(function() {
	$(loadLangs).each(function() {
		var lang = this;
		var code = lang.substr(0, 2);
		$.getJSON(basePath + 'assets/javascript-' + lang + '.json', function(json) {
			l10n[code] = json;
		});
	});
});

// ImplementaÃ§Ã£o prÃ³pria do gettext para JavaScript usando objeto JSON para traduÃ§Ã£o.
if ('undefined' === typeof _) {
	function _(str)
	{
		if (l10n && 'object' === typeof l10n && l10n.hasOwnProperty(jsLocale) && l10n[jsLocale].hasOwnProperty(str)) {
			return l10n[jsLocale][str];
		}
		return str;
	}
}