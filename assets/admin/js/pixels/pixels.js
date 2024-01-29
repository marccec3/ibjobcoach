"use strict";
'use es6';
/* eslint-disable */

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.addPixels = addPixels;

function addFacebookPixelScript(pixelIds) {
  !function (f, b, e, v, n, t, s) {
    if (f.fbq) return;

    n = f.fbq = function () {
      n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments);
    };

    if (!f._fbq) f._fbq = n;
    n.push = n;
    n.loaded = !0;
    n.version = '2.0';
    n.agent = 'tmhubspot';
    n.queue = [];
    t = b.createElement(e);
    t.async = !0;
    t.src = v;
    s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s);
  }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');

  for (var index = 0; index < pixelIds.length; index++) {
    fbq('init', pixelIds[index]);
  }

  fbq('track', 'PageView');
}

function appendAdWordsTagManagerScript(pixelId) {
  var wrapper = document.createElement('script');
  wrapper.async = true;
  wrapper.src = "https://www.googletagmanager.com/gtag/js?id=AW-" + pixelId;
  document.head.appendChild(wrapper);
}

function addAdWordsPixelScript(conversionIds) {
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }

  ;
  gtag('js', new Date());

  for (var index = 0; index < conversionIds.length; index++) {
    gtag('config', "AW-" + conversionIds[index]);
  }
}

function addLinkedInPixelScript(pixelIds) {
  for (var index = 0; index < pixelIds.length; index++) {
    var _linkedin_partner_id = pixelIds[index];
    window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];

    window._linkedin_data_partner_ids.push(_linkedin_partner_id);
  }

  (function () {
    var s = document.getElementsByTagName("script")[0];
    var b = document.createElement("script");
    b.type = "text/javascript";
    b.async = true;
    b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
    s.parentNode.insertBefore(b, s);
  })();
}

function addPixels(config) {
  for (var adNetwork in config) {
    if (config.hasOwnProperty(adNetwork) && config[adNetwork].length > 0) {
      var pixelIds = config[adNetwork];

      switch (adNetwork) {
        case "FACEBOOK":
          {
            addFacebookPixelScript(pixelIds);
            break;
          }

        case "ADWORDS":
          {
            appendAdWordsTagManagerScript(pixelIds[0]);
            addAdWordsPixelScript(pixelIds);
            break;
          }

        case "LINKEDIN":
          {
            addLinkedInPixelScript(pixelIds);
            break;
          }
      }
    }
  }
}


//////////////////
// WEBPACK FOOTER
// ./js/pixels/pixels.js
// module id = 2
// module chunks = 0 1