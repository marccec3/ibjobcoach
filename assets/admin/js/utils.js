"use strict";
'use es6';

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.getDataAttribute = getDataAttribute;
exports.getEnv = getEnv;
exports.getPortalId = getPortalId;
exports.browserSupportsCors = browserSupportsCors;
var DATA_ATTR_PORTAL_ID = "data-hsjs-portal";
var DATA_ATTR_ENV = "data-hsjs-env";
var ENV = {
  PROD: "prod",
  QA: "qa"
};

function getDataAttribute(attr) {
  var script = document.querySelectorAll("script[" + attr + "]");

  if (!script.length) {
    return null;
  }

  return script[0].getAttribute(attr);
}

function getEnv() {
  return getDataAttribute(DATA_ATTR_ENV) || ENV.PROD;
}

function getPortalId() {
  var portalId = getDataAttribute(DATA_ATTR_PORTAL_ID);
  portalId = parseInt(portalId, 10);

  if (!portalId) {
    throw new Error("HS Pixel Loader can't identify portalId via " + DATA_ATTR_PORTAL_ID);
  }

  return portalId;
}

function browserSupportsCors() {
  return 'withCredentials' in new XMLHttpRequest();
}


//////////////////
// WEBPACK FOOTER
// ./js/utils.js
// module id = 1
// module chunks = 0 1