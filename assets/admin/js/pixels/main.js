"use strict";
'use es6';

var _interopRequireWildcard = require("@babel/runtime/helpers/interopRequireWildcard");

var utils = _interopRequireWildcard(require("../utils"));

var _pixels = require("./pixels");

var _configFetcher = require("../configFetcher");

var start = function start() {
  // TODO: this domain, which lb?
  var configDomain = utils.getEnv() === 'qa' ? 'api.hubapiqa.com' : 'api.hubapi.com';

  if (window.disabledHsPopups && window.disabledHsPopups.indexOf('ADS') > -1) {
    return;
  } // For GDPR purposes, users must consent to privacy policy before pixel is added


  window._hsq = window._hsq || [];

  window._hsq.push(["addPrivacyConsentListener", function (consent) {
    if (consent.allowed) {
      (0, _configFetcher.fetchConfig)({
        jsonUrl: configDomain + "/hs-script-loader-public/v1/config/json",
        jsonpUrl: configDomain + "/hs-script-loader-public/v1/config/jsonp"
      }, _pixels.addPixels, 'addPixels');
    }
  }]);
};

window.PIXELS_RAN = window.PIXELS_RAN || false;

if (!window.PIXELS_RAN) {
  window.PIXELS_RAN = true; // Code entry point

  start();
}


//////////////////
// WEBPACK FOOTER
// ./js/pixels/main.js
// module id = 3
// module chunks = 1