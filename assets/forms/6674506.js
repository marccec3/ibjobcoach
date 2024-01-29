/**
 * HubSpot Analytics Tracking Code Build Number 1.319
 * Copyright 2020 HubSpot, Inc.  http://www.hubspot.com
 */
var _hsq = _hsq || [];
var _paq = _paq || [];
_hsq.push(["setPortalId", 6674506]);
_hsq.push(["trackPageView"]);
_hsq.push(["setLegacy", false]);
_hsq.push(["addCookieDomain", ".hs-sites.com"]);
_hsq.push(["addCookieDomain", ".dnaoutplacement.com"]);
_hsq.push(["addCookieDomain", ".hubspot.com"]);
_hsq.push(["addCookieDomain", ".hsforms.com"]);
_hsq.push(["addCookieDomain", ".grupo-dna.com"]);
_hsq.push(["addCookieDomain", ".genesnextstep.com"]);
_hsq.push(["enableAutomaticLinker", true]);
_hsq.push([
  "embedHubSpotScript",
  "https://js.hs-scripts.com/6674506.js",
  "hs-script-loader",
]);
/** _anon_wrapper_ **/ (function () {
  function loadHstc(t, e) {
    function n() {
      var e = new hstc.tracking.Runner(t);
      e.run();
    }
    var i = t.getDocument();
    !i.readyState ||
    "complete" == i.readyState ||
    (i.addEventListener && "loaded" == i.readyState)
      ? n()
      : hstc.utils.addEventListener(e, "load", n, !0);
  }
  var hstc = hstc || {};
  hstc.JS_VERSION = 1.1;
  hstc.ANALYTICS_HOST = "track.hubspot.com";
  var hstc = hstc || {};
  hstc.Math = {
    uuid: function () {
      if (window.navigator.userAgent.indexOf("googleweblight") > -1)
        return hstc.Math._mathRandomUuid();
      var t = window.crypto || window.msCrypto;
      return "undefined" != typeof t &&
        "undefined" != typeof t.getRandomValues &&
        "undefined" != typeof window.Uint16Array
        ? hstc.Math._cryptoUuid()
        : hstc.Math._mathRandomUuid();
    },
    _mathRandomUuid: function () {
      var t = new Date().getTime();
      return "xxxxxxxxxxxx4xxxyxxxxxxxxxxxxxxx".replace(/[xy]/g, function (e) {
        var n = (t + 16 * Math.random()) % 16 | 0;
        t = Math.floor(t / 16);
        return ("x" === e ? n : (3 & n) | 8).toString(16);
      });
    },
    _cryptoUuid: function () {
      var t = window.crypto || window.msCrypto,
        e = new Uint16Array(8);
      t.getRandomValues(e);
      var n = function (t) {
        for (var e = t.toString(16); e.length < 4; ) e = "0" + e;
        return e;
      };
      return (
        n(e[0]) +
        n(e[1]) +
        n(e[2]) +
        n(e[3]) +
        n(e[4]) +
        n(e[5]) +
        n(e[6]) +
        n(e[7])
      );
    },
  };
  Math.uuid =
    Math.uuid ||
    function () {
      hstc.utils.logError(new Error("Attempt to use Math.uuid()"));
      return hstc.Math.uuid();
    };
  var hstc = hstc || {};
  hstc.debug = !1;
  hstc.log = function () {
    try {
      var t = new hstc.cookies.Cookie(),
        e = "hs_dbg",
        n = document.location.hash.indexOf("#hsdbg") > -1;
      if (hstc.debug || n || "1" === t.get(e)) {
        var i = window.console;
        i && "function" == typeof i.log && i.log.apply(i, arguments);
        t.set(e, 1);
      }
    } catch (r) {}
  };
  var hstc = hstc || {};
  hstc.global = {};
  hstc.global.Context = function (t, e, n, i, r, s, o) {
    this.doc = t || document;
    this.nav = e || navigator;
    this.scr = n || screen;
    this.win = i || window;
    this.loc = r || this.win.location;
    this.top = s || top;
    this.parent = o || parent;
  };
  hstc.global.Context.prototype.getDocument = function () {
    return this.doc;
  };
  hstc.global.Context.prototype.getNavigator = function () {
    return this.nav;
  };
  hstc.global.Context.prototype.getScreen = function () {
    return this.scr;
  };
  hstc.global.Context.prototype.getWindow = function () {
    return this.win;
  };
  hstc.global.Context.prototype.getLocation = function () {
    return this.loc;
  };
  hstc.global.Context.prototype.getHostName = function () {
    try {
      return this.loc.hostname;
    } catch (t) {
      return this.doc.domain;
    }
  };
  hstc.global.Context.prototype.getPathName = function () {
    return this.loc.pathname;
  };
  hstc.global.Context.prototype.getTop = function () {
    return this.top;
  };
  hstc.global.Context.prototype.getParent = function () {
    return this.parent;
  };
  hstc.global.Context.prototype.getReferrer = function () {
    var t = "";
    try {
      t = this.top.document.referrer;
    } catch (e) {
      if (parent)
        try {
          t = this.parent.document.referrer;
        } catch (n) {
          t = "";
        }
    }
    "" === t && (t = this.doc.referrer);
    return t;
  };
  hstc.global.Context.prototype.getCharacterSet = function () {
    return this.doc.characterSet
      ? this.doc.characterSet
      : this.doc.charset
      ? this.doc.charset
      : "";
  };
  hstc.global.Context.prototype.getLanguage = function () {
    return this.nav.language
      ? this.nav.language
      : this.nav.browserLanguage
      ? this.nav.browserLanguage
      : "";
  };
  hstc.global.Context.prototype.getOrigin = function () {
    return this.loc.origin
      ? this.loc.origin
      : this.loc.protocol +
          "//" +
          this.getHostName() +
          (this.loc.port ? ":" + this.loc.port : "");
  };
  hstc.global.Context.prototype.getCurrentHref = function (t) {
    return t ? this.getOrigin().toLowerCase() + t : this.loc.href.toLowerCase();
  };
  var hstc = hstc || {};
  hstc.utils = {};
  hstc.utils.tostr = (function () {
    return Object.prototype.toString;
  })();
  hstc.utils.getNextWeekStart = function (t) {
    var e = t || new Date(),
      n = e.getDay(),
      i = e.getDate() + (0 == n ? 7 : 7 - n);
    return hstc.utils.clearTimePart(new Date(e.setDate(i)));
  };
  hstc.utils.getNextMonthStart = function (t) {
    for (
      var e = t || new Date(), n = e.getMonth(), i = 0;
      n == e.getMonth();

    ) {
      i++;
      e.setDate(e.getDate() + 1);
    }
    return hstc.utils.clearTimePart(e);
  };
  hstc.utils.clearTimePart = function (t) {
    t.setHours(0);
    t.setMinutes(0);
    t.setSeconds(0);
    t.setMilliseconds(0);
    return t;
  };
  hstc.utils.truncateString = function (t, e) {
    return t ? (t.length > e ? t.substr(0, e) : t) : "";
  };
  hstc.utils.search2dArray = function (t, e, n, i) {
    for (var r = 0; r < t.length; r++) {
      var s = t[r];
      if (
        s &&
        hstc.utils.isArray(s) &&
        -1 !== hstc.utils.inArray(s[e - 1], n)
      ) {
        i(s, r);
        t.splice(r--, 1);
      }
    }
  };
  hstc.utils.removeSingleCallValueFromHsq = function (t, e) {
    for (var n = 0; n < t.length; n++) {
      var i = t[n];
      if (i && hstc.utils.isArray(i) && i[0] === e) {
        t.splice(n--, 1);
        return 2 == i.length ? i[1] : null;
      }
    }
  };
  hstc.utils.removeDomain = function (t) {
    return "/" + t.split("//")[1].split("/").slice(1).join("/");
  };
  hstc.utils.removeItem = function (t, e, n) {
    var i = t.slice((n || e) + 1 || this.length);
    this.length = 0 > e ? t.length + e : e;
    return t.push.apply(t, i);
  };
  hstc.utils.isArray = function (t) {
    return "[object Array]" === hstc.utils.tostr.call(t);
  };
  hstc.utils.inArray = function (t, e) {
    for (var n = 0, i = e.length; i > n; n++) if (e[n] === t) return n;
    return -1;
  };
  hstc.utils.extend = function () {
    var t,
      e = arguments[0] || {},
      n = 1,
      i = arguments.length,
      r = !1;
    if ("boolean" == typeof e) {
      r = e;
      e = arguments[1] || {};
      n = 2;
    }
    "object" == typeof e || hstc.utils.isFunction(e) || (e = {});
    if (i == n) {
      e = this;
      --n;
    }
    for (; i > n; n++)
      if (null != (t = arguments[n]))
        for (var s in t) {
          var o = e[s],
            c = t[s];
          e !== c &&
            (r && c && "object" == typeof c && !c.nodeType
              ? (e[s] = hstc.utils.extend(
                  r,
                  o || (null !== c.length ? [] : {}),
                  c
                ))
              : void 0 !== c && (e[s] = c));
        }
    return e;
  };
  hstc.utils.each = function (t, e) {
    var n,
      i = 0,
      r = t.length;
    if (void 0 === r) {
      for (n in t) if (e.call(t[n], n, t[n]) === !1) break;
    } else for (var s = t[0]; r > i && e.call(s, i, s) !== !1; s = t[++i]);
    return t;
  };
  hstc.utils.isDefined = function (t) {
    return "undefined" != typeof t;
  };
  hstc.utils.addEventListener = function (t, e, n, i) {
    if (t.addEventListener) {
      t.addEventListener(e, n, i);
      return !0;
    }
    if (t.attachEvent) return t.attachEvent("on" + e, n);
    t["on" + e] = n;
  };
  hstc.utils.removeEventListener = function (t, e, n, i) {
    if (t.removeEventListener) {
      t.removeEventListener(e, n, i);
      return !0;
    }
    if (t.detachEvent) return t.detachEvent("on" + e, n);
    t.removeAttribute("on" + e);
  };
  hstc.utils.preventDefault = function (t) {
    t.preventDefault ? t.preventDefault() : (t.returnValue = !1);
  };
  hstc.utils.loadImage = function (t, e, n) {
    var i = new Date(),
      r = new Image(1, 1);
    expireDateTime = i.getTime() + e;
    r.onload = function () {
      n && n();
    };
    r.src = t;
  };
  hstc.utils.isEmpty = function (t) {
    return void 0 == t || "-" == t || "" == t;
  };
  hstc.utils.isEmptyObject = function (t) {
    for (var e in t) return !1;
    return !0;
  };
  hstc.utils.safeString = function (t) {
    return hstc.utils.isEmpty(t) ? "" : t;
  };
  hstc.utils.makeLowerCase = function (t) {
    return hstc.utils.safeString(t).toLowerCase();
  };
  hstc.utils.encodeParam = function (t, e) {
    var n = encodeURIComponent;
    return n instanceof Function ? (e ? encodeURI(t) : n(t)) : escape(t);
  };
  hstc.utils.decodeParam = function (t, e) {
    var n,
      i = decodeURIComponent;
    t = t.split("+").join(" ");
    if (i instanceof Function)
      try {
        n = e ? decodeURI(t) : i(t);
      } catch (r) {
        n = unescape(t);
      }
    else n = unescape(t);
    return n;
  };
  hstc.utils.isFunction = function (t) {
    return "[object Function]" === hstc.utils.tostr.call(t);
  };
  hstc.utils.utcnow = function () {
    return new Date().getTime();
  };
  hstc.utils.hashString = function (t) {
    for (var e = 0, n = t.length - 1; n >= 0; n--) {
      var i = t.charCodeAt(n);
      e = ((e << 6) & 268435455) + i + (i << 14);
      i = 266338304 & e;
      e = 0 !== i ? e ^ (i >> 21) : e;
    }
    return e;
  };
  hstc.utils.extractDomain = function (t) {
    var e = t.split(".");
    e.length > 2 && (e = e.slice(1));
    return "." + e.join(".");
  };
  hstc.utils.createElement = function (t) {
    var e = document.createDocumentFragment(),
      n = document.createElement("div");
    n.innerHTML = t;
    for (; n.firstChild; ) e.appendChild(n.firstChild);
    return e;
  };
  hstc.utils.deparam = function (t, e) {
    var n = {},
      i = { true: !0, false: !1, null: null };
    t = hstc.utils.trim(hstc.utils.safeString(t));
    (hstc.utils.startsWith(t, "?") || hstc.utils.startsWith(t, "#")) &&
      (t = t.slice(1));
    hstc.utils.each(t.split("+").join(" ").split("&"), function (t, r) {
      var s,
        o = r.split("="),
        c = hstc.utils.decodeParam(o[0]),
        a = n,
        h = 0,
        u = c.split("]["),
        l = u.length - 1;
      if (/\[/.test(u[0]) && /\]$/.test(u[l])) {
        u[l] = u[l].replace(/\]$/, "");
        u = u.shift().split("[").concat(u);
        l = u.length - 1;
      } else l = 0;
      if (2 === o.length) {
        s = hstc.utils.decodeParam(o[1]);
        e &&
          (s =
            s && !isNaN(s)
              ? +s
              : "undefined" === s
              ? void 0
              : void 0 !== i[s]
              ? i[s]
              : s);
        if (l)
          for (; l >= h; h++) {
            c = "" === u[h] ? a.length : u[h];
            a = a[c] =
              l > h ? a[c] || (u[h + 1] && isNaN(u[h + 1]) ? {} : []) : s;
          }
        else
          hstc.utils.isArray(n[c])
            ? n[c].push(s)
            : void 0 !== n[c]
            ? (n[c] = [n[c], s])
            : (n[c] = s);
      } else c && (n[c] = e ? void 0 : "");
    });
    return n;
  };
  hstc.utils.param = function (t, e) {
    function n(t, e) {
      i[i.length] = hstc.utils.encodeParam(t) + "=" + hstc.utils.encodeParam(e);
    }
    var i = [];
    e = e || "&";
    for (var r in t)
      hstc.utils.isArray(t[r])
        ? hstc.utils.each(t[r], function () {
            n(r, this);
          })
        : n(r, hstc.utils.isFunction(t[r]) ? t[r]() : t[r]);
    return i.join(e).replace(/%20/g, "+");
  };
  hstc.utils.updateQueryStringParameter = function (t, e, n) {
    var i = new RegExp("([?|&])" + e + "=.*?(&|#|$)(.*)", "gi");
    if (i.test(t))
      return n
        ? t.replace(i, "$1" + e + "=" + n + "$2$3")
        : t.replace(i, "$1$3").replace(/(&|\?)$/, "");
    if (n) {
      var r = t.indexOf("#"),
        s = t.indexOf("?"),
        o = -1 !== s && (-1 === r || r > s) ? "&" : "?",
        c = t.split("#");
      t = c[0] + o + e + "=" + n;
      c[1] && (t += "#" + c[1]);
      return t;
    }
    return t;
  };
  hstc.utils.trim = function (t) {
    return (t || "").replace(/^\s+|\s+$/g, "");
  };
  hstc.utils.startsWith = function (t, e) {
    return null == e ? !1 : t.substr(0, e.length) == e;
  };
  hstc.utils.endsWith = function (t, e) {
    var n = t.length - e.length;
    return n >= 0 && t.lastIndexOf(e) === n;
  };
  hstc.utils.mergeObject = function (t, e) {
    t = t || {};
    if (!e) return e;
    for (var n in e) t[n] = e[n];
    return t;
  };
  hstc.utils.hasClass = function (t, e) {
    return t && t.className
      ? hstc.utils.inArray(e, t.className.split(" ")) > -1
      : void 0;
  };
  hstc.utils.stripNumericBrackets = function (t) {
    return (t || "").replace(/(^.+?)\[(.+?)\]/, "$1_$2");
  };
  hstc.utils.parseCurrency = function (t, e) {
    if ("number" == typeof t) return t;
    var n = t.match(/([^\d]*)([\d\.,]+)([^\d\.,]*)/);
    if (n) {
      var i,
        r = n[2],
        s = r.split("."),
        o = r.split(",");
      i =
        s.length > 2 ||
        (2 == s.length &&
          s[1].length > 2 &&
          (0 === o.length || s[0].length < o[0].length)) ||
        (2 == o.length && 2 == o[1].length)
          ? o
          : s;
      var c = (decimalPart = 0);
      if (i.length > 1) {
        decimalPart = i.pop();
        c = i.join("");
      } else c = i.join("");
      c = c.replace(/[\.,]/g, "");
      var a = parseInt(c);
      decimalPart &&
        (a += parseFloat(decimalPart) / Math.pow(10, decimalPart.length));
      return a;
    }
    return null;
  };
  hstc.utils.logError = function (t, e) {
    e = e || {};
    var n = {
      w: hstc.utils.utcnow(),
      m: t.message || t.toString ? t.toString() : "-",
      j: hstc.JS_VERSION,
    };
    n = hstc.utils.extend(n, e);
    t.name && (n.n = t.name);
    t.fileName && (n.f = t.fileName);
    t.lineNumber && (n.l = t.lineNumber);
    try {
      n.x = t.stack || t.stacktrace || "";
    } catch (i) {}
    hstc.log("Encountered a JS error");
    hstc.log(n);
    hstc.utils.loadImage(
      "https://" + hstc.ANALYTICS_HOST + "/__pto.gif?" + hstc.utils.param(n)
    );
  };
  hstc.utils.objectsAreEqual = function (t, e) {
    return eq(t, e, []);
  };
  hstc.utils.eq = function (t, e, n) {
    if (t === e) return 0 !== t || 1 / t == 1 / e;
    if (null == t || null == e) return t === e;
    t._chain && (t = t._wrapped);
    e._chain && (e = e._wrapped);
    if (t.isEqual && _.isFunction(t.isEqual)) return t.isEqual(e);
    if (e.isEqual && _.isFunction(e.isEqual)) return e.isEqual(t);
    var i = toString.call(t);
    if (i != toString.call(e)) return !1;
    switch (i) {
      case "[object String]":
        return t == String(e);
      case "[object Number]":
        return t != +t ? e != +e : 0 == t ? 1 / t == 1 / e : t == +e;
      case "[object Date]":
      case "[object Boolean]":
        return +t == +e;
      case "[object RegExp]":
        return (
          t.source == e.source &&
          t.global == e.global &&
          t.multiline == e.multiline &&
          t.ignoreCase == e.ignoreCase
        );
    }
    if ("object" != typeof t || "object" != typeof e) return !1;
    for (var r = n.length; r--; ) if (n[r] == t) return !0;
    n.push(t);
    var s = 0,
      o = !0;
    if ("[object Array]" == i) {
      s = t.length;
      o = s == e.length;
      if (o) for (; s-- && (o = s in t == s in e && eq(t[s], e[s], n)); );
    } else {
      if (
        "constructor" in t != "constructor" in e ||
        t.constructor != e.constructor
      )
        return !1;
      for (var c in t)
        if (_.has(t, c)) {
          s++;
          if (!(o = _.has(e, c) && eq(t[c], e[c], n))) break;
        }
      if (o) {
        for (c in e) if (_.has(e, c) && !s--) break;
        o = !s;
      }
    }
    n.pop();
    return o;
  };
  var hstc = hstc || {};
  hstc.cookies = {};
  hstc.cookies.Cookie = function (t) {
    this.context = t || new hstc.global.Context();
    this.currentDomain = null;
    this.domains = [];
  };
  hstc.cookies.Cookie.prototype.addDomain = function (t) {
    hstc.utils.endsWith("." + this.context.getHostName(), t) &&
      (!this.currentDomain || t.length < this.currentDomain.length) &&
      (this.currentDomain = t);
    this.domains.push(t);
  };
  hstc.cookies.Cookie.prototype.getDomains = function () {
    return this.domains;
  };
  hstc.cookies.Cookie.prototype.set = function (t, e, n) {
    n = n || {};
    var i,
      r,
      s = !1;
    if (n.minsToExpire) {
      i = new Date();
      i.setTime(i.getTime() + 1e3 * n.minsToExpire * 60);
    } else if (n.daysToExpire) {
      i = new Date();
      i.setTime(i.getTime() + 1e3 * n.daysToExpire * 60 * 60 * 24);
    } else
      n.expiryDate && n.expiryDate.toGMTString
        ? (i = n.expiryDate)
        : n.expiryDate && (i = new Date(n.expiryDate));
    if (void 0 !== i) {
      r = i.toGMTString();
      s = !0;
    }
    this._set(t, n.alreadyEncoded ? e : hstc.utils.encodeParam(e, !0), {
      expires: s ? ";expires=" + r : "",
      expiresTime: s ? i : null,
      path: ";path=" + (n.path ? n.path : "/"),
      domain:
        !this.cookiesToSubdomain && this.currentDomain
          ? ";domain=" + this.currentDomain
          : "",
      secure: n.secure ? ";secure" : "",
      sameSite: ";SameSite=Lax",
    });
  };
  hstc.cookies.Cookie.prototype._set = function (t, e, n) {
    var i = n.expires + n.path + n.domain + n.sameSite + n.secure;
    this._writeCookie(t + "=" + e + i);
    var r = this.get(t);
    if (
      (!r || r != e) &&
      "" != n.domain &&
      (!n.expiresTime || n.expiresTime - new Date() > 0)
    ) {
      i = n.expires + n.path + n.sameSite + n.secure;
      this._writeCookie(t + "=" + e + i);
    }
  };
  hstc.cookies.Cookie.prototype._writeCookie = function (t) {
    this.context.getDocument().cookie = t;
  };
  hstc.cookies.Cookie.prototype.get = function (t) {
    var e = new RegExp("(^|;)[ ]*" + t + "=([^;]*)"),
      n = e.exec(this.context.getDocument().cookie);
    return n ? hstc.utils.decodeParam(n[2], !0) : "";
  };
  hstc.cookies.Cookie.prototype.has = function () {
    return (
      hstc.utils.isDefined(this.context.getNavigator().cookieEnabled) ||
      ("cookie" in this.context.getDocument() &&
        this.context.getDocument().cookie.length > 0)
    );
  };
  hstc.cookies.Cookie.prototype.remove = function (t) {
    this.set(t, "", { expiryDate: "Thu, 01-Jan-1970 00:00:01 GMT" });
  };
  hstc.cookies.Cookie.prototype.setCookiesToSubdomain = function (t) {
    this.cookiesToSubdomain = t;
  };
  var hstc = hstc || {};
  hstc.identities = {};
  hstc.identities.Identity = function (t) {
    this.raw = t;
  };
  hstc.identities.Identity.prototype.get = function () {
    return this.raw;
  };
  hstc.identities.Identity.prototype.equals = function (t) {
    return hstc.utils.objectsAreEqual(this, t);
  };
  hstc.identities.Identity.prototype.merge = function (t) {
    this.raw = hstc.utils.mergeObject(this.raw, t);
  };
  var hstc = hstc || {};
  hstc.browser = function (t) {
    t = t || new hstc.global.Context();
    var e = t.getNavigator(),
      n = e.userAgent.toLowerCase(),
      i = {
        init: function () {
          this.browser = this.searchString(this.dataBrowser) || "";
          this.version =
            this.searchVersion(e.userAgent) ||
            this.searchVersion(e.appVersion) ||
            "";
          this.OS = this.searchString(this.dataOS) || "";
        },
        searchString: function (t) {
          for (var e = 0; e < t.length; e++) {
            var n = t[e].string,
              i = t[e].prop;
            this.versionSearchString = t[e].versionSearch || t[e].identity;
            if (n) {
              if (-1 !== n.indexOf(t[e].subString)) return t[e].identity;
              if (i) return t[e].identity;
            }
          }
        },
        searchVersion: function (t) {
          var e = t.indexOf(this.versionSearchString);
          return -1 !== e
            ? parseFloat(t.substring(e + this.versionSearchString.length + 1))
            : void 0;
        },
        dataBrowser: [
          { string: e.userAgent, subString: "Chrome", identity: "Chrome" },
          {
            string: e.userAgent,
            subString: "OmniWeb",
            versionSearch: "OmniWeb/",
            identity: "OmniWeb",
          },
          {
            string: e.vendor,
            subString: "Apple",
            identity: "Safari",
            versionSearch: "Version",
          },
          { prop: window.opera, identity: "Opera" },
          { string: e.vendor, subString: "iCab", identity: "iCab" },
          { string: e.vendor, subString: "KDE", identity: "Konqueror" },
          { string: e.userAgent, subString: "Firefox", identity: "Firefox" },
          { string: e.vendor, subString: "Camino", identity: "Camino" },
          { string: e.userAgent, subString: "Netscape", identity: "Netscape" },
          {
            string: e.userAgent,
            subString: "MSIE",
            identity: "Explorer",
            versionSearch: "MSIE",
          },
          {
            string: e.userAgent,
            subString: "Gecko",
            identity: "Mozilla",
            versionSearch: "rv",
          },
          {
            string: e.userAgent,
            subString: "Mozilla",
            identity: "Netscape",
            versionSearch: "Mozilla",
          },
        ],
        dataOS: [
          { string: e.platform, subString: "Win", identity: "Windows" },
          { string: e.platform, subString: "Mac", identity: "Mac" },
          { string: e.userAgent, subString: "iPhone", identity: "iPhone/iPod" },
          { string: e.platform, subString: "Linux", identity: "Linux" },
        ],
      };
    i.init();
    this.version = (n.match(/.+(?:rv|it|ra|ie)[\/: ]([\d.]+)/) || [0, "0"])[1];
    this.os = i.OS;
    this.brand = i.browser;
    this.webkit = /webkit/.test(n);
    this.opera = /opera/.test(n);
    this.msie = /msie/.test(n) && !/opera/.test(n);
    this.mozilla = /mozilla/.test(n) && !/(compatible|webkit)/.test(n);
  };
  var hstc = hstc || {};
  hstc.tracking = hstc.tracking || {};
  hstc.tracking.Tracker = function (t, e) {
    this.context = t || new hstc.global.Context();
    this.cookie = e || new hstc.cookies.Cookie(this.context);
    this.now = hstc.utils.utcnow();
    this.session = null;
    this.utk = null;
    this.managedCookies = !1;
    this.trackingEnabled = !0;
    this.limitTrackingToCookieDomains = !1;
    this.crossDomainLinkingEnabled = !1;
    this.hasResetVisitor = !1;
    this.privacyConsent = null;
    this.privacySettings = null;
    this.clickSelectors = [];
    this.userTokenListeners = [];
    this.cookieListeners = [];
    this.pageIdListeners = [];
    this.contentMetadataListeners = [];
    this.contentTypeListeners = [];
  };
  hstc.tracking.Tracker.DO_NOT_TRACK = "__hs_do_not_track";
  hstc.tracking.Tracker.DO_NOT_TRACK_EXPIRATION = 390;
  hstc.tracking.Tracker.prototype._initialize = function () {
    this._handlePrivacyPolicy();
    this._handleMigrations();
    this._setRelCanonicalUrl();
  };
  hstc.tracking.Tracker.prototype._getHspQueue = function () {
    return (this.context.getWindow()._hsp =
      this.context.getWindow()._hsp || []);
  };
  hstc.tracking.Tracker.prototype.setPortalId = function (t) {
    this.portalId = t;
    this._manageCookies();
  };
  hstc.tracking.Tracker.prototype.setCanonicalUrl = function (t) {
    this.canonicalUrl = t;
  };
  hstc.tracking.Tracker.prototype.setPath = function (t) {
    "" == t && (t = "/");
    this.referrerPath = this.path;
    this.path = t;
    this.refreshPageHandlers();
  };
  hstc.tracking.Tracker.prototype.refreshPageHandlers = function () {
    for (var t = 0; t < this.clickSelectors.length; t++)
      this._resetClickHandler(this.clickSelectors[t]);
  };
  hstc.tracking.Tracker.prototype.setContentType = function (t) {
    this.contentType = t;
    for (var e = 0; e < this.contentTypeListeners.length; e++)
      this.contentTypeListeners[e](this.contentType);
  };
  hstc.tracking.Tracker.prototype.setPageId = function (t) {
    this.pageId = t;
    for (var e = 0; e < this.pageIdListeners.length; e++)
      this.pageIdListeners[e](this.pageId);
  };
  hstc.tracking.Tracker.prototype.setContentMetadata = function (t) {
    this.contentMetadata = t;
    for (var e = 0; e < this.contentMetadataListeners.length; e++)
      this.contentMetadataListeners[e](this.contentMetadata);
  };
  hstc.tracking.Tracker.prototype.setTargetedContentMetadata = function (t) {
    this.targetedContentMetadata = t;
  };
  hstc.tracking.Tracker.prototype.setDebugMode = function (t) {
    hstc.debug = t;
  };
  hstc.tracking.Tracker.prototype.setCookiesToSubdomain = function (t) {
    this.cookie.setCookiesToSubdomain(t);
  };
  hstc.tracking.Tracker.prototype.setLimitTrackingToCookieDomains = function (
    t
  ) {
    this.limitTrackingToCookieDomains = t;
  };
  hstc.tracking.Tracker.prototype.setTrackingEnabled = function (t) {
    this.trackingEnabled = !!t;
  };
  hstc.tracking.Tracker.prototype.addUserTokenListener = function (t) {
    this.utk && this.utk.visitor && t(this.utk.visitor);
    this.userTokenListeners.push(t);
  };
  hstc.tracking.Tracker.prototype.addCookieListener = function (t) {
    var e = null,
      n = null;
    this.utk && this.utk.visitor && (e = this.utk.get());
    this.session && (n = this.session.get());
    (e || n) && t(e, n, this._getFingerprint());
    this.cookieListeners.push(t);
  };
  hstc.tracking.Tracker.prototype.addIdentityListener =
    hstc.tracking.Tracker.prototype.addCookieListener;
  hstc.tracking.Tracker.prototype.addPageIdListener = function (t) {
    this.pageId && t(this.pageId);
    this.pageIdListeners.push(t);
  };
  hstc.tracking.Tracker.prototype.addContentMetadataListener = function (t) {
    this.contentMetadata && t(this.contentMetadata);
    this.contentMetadataListeners.push(t);
  };
  hstc.tracking.Tracker.prototype.addContentTypeListener = function (t) {
    this.contentType && t(this.contentType);
    this.contentTypeListeners.push(t);
  };
  hstc.tracking.Tracker.prototype.addPrivacyConsentListener = function (t) {
    this._enqueuePrivacyCall("addPrivacyConsentListener", t);
  };
  hstc.tracking.Tracker.prototype.addCookieDomain = function (t) {
    this.cookie.addDomain(t);
  };
  hstc.tracking.Tracker.prototype.enableAutomaticLinker = function () {
    var t = this;
    t.crossDomainLinkingEnabled = !0;
    t._manageCookies();
    if (this.cookie.getDomains() && !(this.cookie.getDomains().length <= 0)) {
      var e = [];
      hstc.utils.each(this.cookie.getDomains(), function (n, i) {
        if (!t.cookie.currentDomain || t.cookie.currentDomain !== i) {
          var r = i.replace(/\./g, "\\.");
          r = 0 === r.indexOf("\\.") ? r.replace(/^\\\./, "(^|\\.)") : "^" + r;
          e.push(r);
        }
      });
      var n = new RegExp("(" + e.join("|") + ")$");
      t._iterateLinks(function (e) {
        return (
          e.hostname &&
          e.hostname !== t.context.getHostName() &&
          e.hostname.match(n)
        );
      });
    }
  };
  hstc.tracking.Tracker.prototype.handleSearchLink = function (t) {
    var e = this;
    return e.handleLink(t, null, !0);
  };
  hstc.tracking.Tracker.prototype.handleSearchLinks = function () {
    var t = this;
    t._manageCookies();
    var e = new RegExp(
      "(/_hcms/analytics/search/conversion|/_hcms/analytics/search/request)"
    );
    t._iterateLinks(function (t) {
      return t.href.match(e);
    });
  };
  hstc.tracking.Tracker.prototype._iterateLinks = function (t) {
    var e = this;
    hstc.utils.each(hstc.find("a"), function (n, i) {
      if (e.utk && e.utk.visitor)
        try {
          if (t(i))
            try {
              i.href = e.handleLink(i.href, i.target, !0);
            } catch (r) {
              i &&
                i.href &&
                hstc.utils.logError("Unable to modify link to " + i.href);
            }
        } catch (s) {
          hstc.log("Can't modify link.");
        }
    });
  };
  hstc.tracking.Tracker.prototype.handleLink = function (t, e, n) {
    var i = t,
      r = this._getFingerprint();
    if (null !== r) {
      i = hstc.utils.updateQueryStringParameter(i, "__hstc", this.utk.get());
      i = hstc.utils.updateQueryStringParameter(
        i,
        "__hssc",
        this.session.get()
      );
      i = hstc.utils.updateQueryStringParameter(i, "__hsfp", r);
    }
    if (n) return i;
    this.context.getWindow().open(i, e || "_self");
  };
  hstc.tracking.Tracker.prototype.identify = function (t, e) {
    e || this._manageCookies();
    this.identity
      ? this.identity.merge(t)
      : (this.identity = new hstc.identities.Identity(t));
  };
  hstc.tracking.Tracker.prototype.trackPageView = function () {
    this._manageCookies();
    var t = { k: 1 };
    this._loadImage(t);
  };
  hstc.tracking.Tracker.prototype.trackConversion = function (t, e) {
    this._manageCookies();
    if ("string" == typeof t || "number" == typeof t) {
      t = { id: hstc.utils.safeString(t) };
      hstc.utils.isDefined(e) && (t = hstc.utils.mergeObject(t, e));
    }
    hstc.utils.isFunction(t.value) && (t.value = t.value(hstc));
    var n = hstc.utils.mergeObject(t, {
      k: 3,
      n: hstc.utils.safeString(t.id),
      m: hstc.utils.safeString(t.value),
    });
    this._loadImage(n);
  };
  hstc.tracking.Tracker.prototype.trackEvent =
    hstc.tracking.Tracker.prototype.trackConversion;
  hstc.tracking.Tracker.prototype.trackClick = function (t, e, n) {
    var i = this,
      n = n || {},
      r = {
        selector: t,
        eventId: e,
        opts: n,
        handler: function () {
          try {
            i.trackEvent(e, n);
          } catch (t) {
            hstc.utils.logError(t);
          }
        },
      };
    this.clickSelectors.push(r);
    this._resetClickHandler(r);
  };
  hstc.tracking.Tracker.prototype._resetClickHandler = function (t) {
    var e = "data-hs-event-" + hstc.utils.hashString(t.eventId),
      n = !t.opts.url || this.urlMatches(t.opts.url);
    try {
      hstc.utils.each(hstc.find(t.selector), function (i, r) {
        var s = "1" == r.getAttribute(e);
        if (s && !n) {
          hstc.utils.removeEventListener(r, "mousedown", t.handler);
          r.removeAttribute(e);
        } else if (!s && n) {
          hstc.utils.addEventListener(r, "mousedown", t.handler);
          r.setAttribute(e, "1");
        }
      });
    } catch (i) {
      hstc.log(
        "Bad selector for " +
          this.portalId +
          ": " +
          t.selector +
          ", for event " +
          t.eventId
      );
    }
  };
  hstc.tracking.Tracker.prototype.trackFormView = function (t, e, n) {
    this._trackFormActivity(15, t, e, n);
  };
  hstc.tracking.Tracker.prototype.trackFormInstall = function (t, e, n) {
    this._trackFormActivity(16, t, e, n);
  };
  hstc.tracking.Tracker.prototype.trackFormVisible = function (t, e, n) {
    this._trackFormActivity(17, t, e, n);
  };
  hstc.tracking.Tracker.prototype.trackFormInteraction = function (t, e, n) {
    this._trackFormActivity(18, t, e, n);
  };
  hstc.tracking.Tracker.prototype.trackFormCompletion = function (t, e, n) {
    this._trackFormActivity(19, t, e, n);
  };
  hstc.tracking.Tracker.prototype._trackFormActivity = function (t, e, n, i) {
    if ("object" == typeof n) {
      i = n;
      n = "";
    }
    i = i || {};
    var r = { k: t, fi: hstc.utils.safeString(e) };
    hstc.utils.isEmpty(n) || (r.fci = n);
    (hstc.utils.isEmpty(i.formVariantId) && hstc.utils.isEmpty(i.fvi)) ||
      (r.fvi = i.formVariantId || i.fvi);
    (hstc.utils.isEmpty(i.leadFlowId) && hstc.utils.isEmpty(i.lfi)) ||
      (r.lfi = i.leadFlowId || i.lfi);
    (hstc.utils.isEmpty(i.formType) && 0 !== i.formType) || (r.ft = i.formType);
    this._loadImage(r);
  };
  hstc.tracking.Tracker.prototype.trackFeedbackView = function (t) {
    t = t || {};
    var e = {
      k: 26,
      st: hstc.utils.safeString(t.surveyType),
      si: hstc.utils.safeString(t.surveyId),
    };
    this._loadImage(e);
  };
  hstc.tracking.Tracker.prototype.trackCtaView = function (t, e) {
    var n = {
      k: 12,
      aij:
        '["' +
        hstc.utils.safeString(t) +
        '","' +
        hstc.utils.safeString(e) +
        '"]',
      rfc: 8,
    };
    this._loadImage(n);
  };
  hstc.tracking.Tracker.prototype.doNotTrack = function (t) {
    t && t.track
      ? this.cookie.remove(hstc.tracking.Tracker.DO_NOT_TRACK)
      : this.cookie.set(hstc.tracking.Tracker.DO_NOT_TRACK, "yes", {
          daysToExpire: hstc.tracking.Tracker.DO_NOT_TRACK_EXPIRATION,
        });
  };
  hstc.tracking.Tracker.prototype.urlMatches = function (t, e) {
    e || (e = this.context.getCurrentHref(this.path));
    t = t.toLowerCase();
    if (e == t) return !0;
    if (-1 === t.indexOf("?")) {
      var n = e.indexOf("?");
      -1 !== n && (e = e.substring(0, n));
    }
    if (-1 == t.indexOf("*")) {
      t = t.replace(/\/$/, "");
      e = e.replace(/\/$/, "");
      return t == e
        ? !0
        : 0 === t.indexOf("/")
        ? hstc.utils.removeDomain(e) == t
        : !1;
    }
    if (t == e) return !0;
    if (0 === t.length) return !1;
    var i = new RegExp("[.+?|()\\[\\]{}\\\\]", "g");
    regex = t.replace(i, "\\$&").replace(new RegExp("\\*", "g"), "(.*?)");
    regex = /\/$/.test(regex) ? "^" + regex + "$" : "^" + regex + "/?$";
    regex = new RegExp(regex, "i");
    if (regex.test(e)) return !0;
    if (0 === t.indexOf("/")) {
      e = "/" + e.split("//")[1].split("/").splice(1).join("/");
      return regex.test(e);
    }
    return !1;
  };
  hstc.tracking.Tracker.prototype.resetVisitor = function () {
    this.hasResetVisitor = !0;
    this.utk = hstc.tracking.Utk.regenerate(this.cookie);
    this.session = hstc.tracking.Session.regenerate(this.cookie);
    this.identity = null;
    this._manageCookies(this.utk, this.session, !0);
    this.crossDomainLinkingEnabled && this.enableAutomaticLinker();
    this.handleSearchLinks();
  };
  hstc.tracking.Tracker.prototype._manageCookies = function (t, e, n) {
    var i = this;
    if (!this.managedCookies || n) {
      var r = hstc.tracking.Utk.parse(this.cookie),
        s = hstc.tracking.Session.parse(this.cookie);
      if (!this.hasResetVisitor) {
        this._enqueueConsentListener(function () {
          i._extractIdentitiesFromQueryString(r, s);
        });
        this._extractUtkOverride(r);
      }
      this.utk || (this.utk = t || r);
      this.session || (this.session = e || s);
      this.session.isNew() && !n
        ? this.utk.isNew() || this.utk.rotate(this.session.start)
        : n || this.session.increment();
      this.context.getWindow().__hsUserToken ||
        (this.context.getWindow().__hsUserToken = this.utk.visitor);
      this._enqueueConsentListener(function () {
        i.utk.save(i.privacySettings, i.privacyConsent);
        i.session.save();
      });
      for (var o = 0; o < this.userTokenListeners.length; o++)
        this.userTokenListeners[o](this.utk.visitor);
      for (var c = 0; c < this.cookieListeners.length; c++)
        this.cookieListeners[c](
          this.utk.get(),
          this.session.get(),
          this._getFingerprint()
        );
      this.managedCookies = !0;
    }
  };
  hstc.tracking.Tracker.prototype._extractIdentitiesFromQueryString = function (
    t,
    e
  ) {
    var n = this._getUrlParams();
    n.__hs_email &&
      this.identify({ email: hstc.utils.decodeParam(n.__hs_email) }, !0);
    if (0 !== this.cookie.getDomains().length) {
      var i = this;
      if (n.__hsfp) {
        var r = parseInt(hstc.utils.safeString(n.__hsfp), 10),
          s = this._getFingerprint();
        if (null === s || s != r) return;
        if (n.__hstc) {
          var o = hstc.tracking.Utk.parse(
            this.cookie,
            hstc.utils.safeString(n.__hstc)
          );
          hstc.utils.each(this.cookie.getDomains(), function (e, n) {
            if (hstc.utils.hashString(n) == o.domain) {
              if (i.utk && i.utk.visitor !== o.visitor)
                i.identify({ visitor: o.visitor }, !0);
              else if (t.recovered) {
                if (t.visitor !== o.visitor) {
                  i.utk = t;
                  i.identify({ visitor: o.visitor }, !0);
                }
              } else {
                i.utk = o;
                i.utk.resetDomain();
              }
              return !1;
            }
          });
        }
        if (n.__hssc) {
          var c = hstc.tracking.Session.parse(
            this.cookie,
            hstc.utils.safeString(n.__hssc)
          );
          hstc.utils.each(this.cookie.getDomains(), function (t, n) {
            if (hstc.utils.hashString(n) == c.domain) {
              if (e.recovered) i.session = e.merge(c);
              else {
                i.session = c;
                i.session.resetDomain();
                i.session.recovered = !0;
              }
              return !1;
            }
          });
        }
      }
    }
  };
  hstc.tracking.Tracker.prototype._extractUtkOverride = function (t) {
    var e = this.context.getWindow().__hsUserToken;
    if (e) {
      var n = this.utk && this.utk.visitor == e,
        i = t.visitor == e,
        r = this.identity && !!this.identity.get().visitor;
      n ||
        i ||
        r ||
        (this.utk || t.recovered
          ? this.identify({ visitor: e }, !0)
          : (this.utk = hstc.tracking.Utk.parse(this.cookie, e, !0)));
    }
  };
  hstc.tracking.Tracker.prototype._loadImage = function (t, e) {
    if (!this.limitTrackingToCookieDomains || this.cookie.currentDomain) {
      if (!this._hasDoNotTrack() && this.trackingEnabled) {
        hstc.log("Sending Request");
        t && hstc.log(t);
        e = e || this._generateURL(t);
        hstc.log(e);
        hstc.utils.loadImage(e, 0);
      }
    } else
      try {
        hstc.log(
          "Invalid domain for portal " +
            this.portalId +
            ": " +
            this.context.getHostName()
        );
      } catch (n) {}
  };
  hstc.tracking.Tracker.prototype._generateURL = function (t) {
    var e = "https://" + hstc.ANALYTICS_HOST + "/__ptq.gif",
      n = hstc.utils.extend(
        t,
        this._getClientInfo(),
        this._getPageInfo(),
        this._getUserInfo(),
        this._getPrivacyInfo()
      );
    return e + "?" + hstc.utils.param(n);
  };
  hstc.tracking.Tracker.prototype._getUserInfo = function () {
    var t = {};
    t.cts = hstc.utils.utcnow();
    this.identity && (t.i = hstc.utils.param(this.identity.get()));
    this.hasResetVisitor && (t.rv = 1);
    if (this.utk) {
      t.vi = this.utk.visitor;
      t.nc = this.utk.isNew();
    }
    var e = this.cookie.get(hstc.tracking.Utk.COOKIE);
    hstc.utils.isEmpty(e) || (t.u = e);
    var n = this.cookie.get(hstc.tracking.Session.COOKIE);
    hstc.utils.isEmpty(n) || (t.b = n);
    (this.privacyConsent && this.privacyConsent.allowed) || (t.ce = !1);
    return t;
  };
  hstc.tracking.Tracker.prototype._getPageInfo = function () {
    var t = {};
    t.v = hstc.JS_VERSION;
    t.a = this.portalId;
    hstc.utils.isEmpty(this.pageId) || (t.pi = this.pageId);
    hstc.utils.isEmpty(this.contentType) || (t.ct = this.contentType);
    hstc.utils.isEmpty(this.canonicalUrl) || (t.ccu = this.canonicalUrl);
    hstc.utils.isEmpty(this.path) || (t.po = this.path);
    hstc.utils.isEmpty(this.referrerPath) || (t.rpo = this.referrerPath);
    hstc.utils.isEmpty(this.canonicalUrl) &&
      !hstc.utils.isEmpty(this.relCanonicalUrl) &&
      (t.rcu = this.relCanonicalUrl);
    if (!hstc.utils.isEmpty(this.contentMetadata)) {
      var e = this.contentMetadata;
      hstc.utils.isEmpty(e.contentPageId) || (t.cpi = e.contentPageId);
      hstc.utils.isEmpty(e.contentGroupId) || (t.cgi = e.contentGroupId);
      hstc.utils.isEmpty(e.contentFolderId) || (t.cfi = e.contentFolderId);
      hstc.utils.isEmpty(e.legacyPageId) || (t.lpi = e.legacyPageId);
      hstc.utils.isEmpty(e.abTestId) || (t.abi = e.abTestId);
      hstc.utils.isEmpty(e.languageVariantId) || (t.lvi = e.languageVariantId);
      hstc.utils.isEmpty(e.languageCode) || (t.lvc = e.languageCode);
      if (
        !hstc.utils.isEmpty(e.mabData) &&
        !hstc.utils.isEmpty(e.mabData.correlationId) &&
        !hstc.utils.isEmpty(e.mabData.experimentId)
      ) {
        t.mabci = e.mabData.correlationId;
        t.mabei = e.mabData.experimentId;
      }
    }
    if (
      hstc.utils.isArray(this.targetedContentMetadata) &&
      this.targetedContentMetadata.length
    ) {
      for (
        var n = [], i = Math.min(this.targetedContentMetadata.length, 5), r = 0;
        i > r;
        r++
      ) {
        var s = this.targetedContentMetadata[r];
        3 === s.length && n.push(s[0] + "-" + s[1] + "-" + s[2]);
      }
      n.length && (t.tc = n);
    }
    var o = this.context.getReferrer();
    hstc.utils.isEmpty(o) || (t.r = o);
    var c = this.context.getLocation().href;
    hstc.utils.isEmpty(c) || (t.pu = c);
    var a = this.context.getDocument().title;
    hstc.utils.isEmpty(a) || (t.t = a);
    return t;
  };
  hstc.tracking.Tracker.prototype._getClientInfo = function () {
    var t = {},
      e = this.context.getScreen();
    if (e) {
      t.sd = e.width + "x" + e.height;
      t.cd = e.colorDepth + "-bit";
    }
    var n = this.context.getCharacterSet();
    hstc.utils.isEmpty(n) || (t.cs = n);
    var i = this.context.getNavigator(),
      r = i.language ? i.language : i.browserLanguage ? i.browserLanguage : "";
    hstc.utils.isEmpty(r) || (t.ln = hstc.utils.makeLowerCase(r));
    if (!this._hasDoNotTrack()) {
      var s = this._getFingerprint();
      null !== s && (t.bfp = s);
    }
    return t;
  };
  hstc.tracking.Tracker.prototype._getPrivacyInfo = function () {
    var t = {};
    this.privacySettings &&
      (("OPT_IN" != this.privacySettings.mode &&
        "OPT_IN_ACTIVE_CONSENT" != this.privacySettings.mode) ||
      !this.privacySettings.hideDecline
        ? "OPT_IN" == this.privacySettings.mode
          ? (t.pt = 1)
          : "NO_COOKIES" == this.privacySettings.mode
          ? (t.pt = 2)
          : "OPT_IN_ACTIVE_CONSENT" == this.privacySettings.mode && (t.pt = 3)
        : (t.pt = 0));
    (this.privacyConsent && this.privacyConsent.allowed) || (t.ce = !1);
    return t;
  };
  hstc.tracking.Tracker.prototype._hasDoNotTrack = function () {
    try {
      if (
        this.cookie.get(hstc.tracking.Tracker.DO_NOT_TRACK) &&
        "yes" == this.cookie.get(hstc.tracking.Tracker.DO_NOT_TRACK)
      )
        return !0;
    } catch (t) {}
    return !1;
  };
  hstc.tracking.Tracker.prototype.showTargetedElements = function () {
    hstc.utils.each(this.clickSelectors, function (t, e) {
      hstc.utils.each(hstc.find(e), function (t, e) {
        e._hs_oldStyle = e.style.border;
        e.style.border = "dotted 2px red";
      });
    });
  };
  hstc.tracking.Tracker.prototype.hideTargetedElements = function () {
    var t = function (t, e) {
      hstc.utils.each(hstc.find(e), function (t, e) {
        hstc.utils.isDefined(e._hs_oldStyle) &&
          (e.style.border = e._hs_oldStyle);
      });
    };
    hstc.utils.each(this.clickSelectors, t);
  };
  hstc.tracking.Tracker.prototype._handlePrivacyPolicy = function () {
    var t = this;
    this._enqueuePrivacyCall("addPrivacyConsentListener", function (e) {
      t.privacyConsent = e;
    });
    this._enqueuePrivacyCall("addPrivacySettingsListener", function (e) {
      t.privacySettings = e;
    });
  };
  hstc.tracking.Tracker.prototype._enqueueConsentListener = function (t) {
    this._enqueuePrivacyCall("addPrivacyConsentListener", function (e) {
      e && e.allowed && t();
    });
  };
  hstc.tracking.Tracker.prototype._enqueuePrivacyCall = function (t, e) {
    var n = this._getHspQueue();
    e ? n.push([t, e]) : n.push([t]);
  };
  hstc.tracking.Tracker.prototype._handleMigrations = function () {
    var t =
        this.cookie.get(hstc.tracking.Utk.LEGACY_COOKIE) || window.hubspotutk,
      e = this.cookie.get(hstc.tracking.Utk.COOKIE);
    if (
      !hstc.utils.isEmpty(t) &&
      /[0123456789abcdef]{32}/.test(t) &&
      hstc.utils.isEmpty(e)
    ) {
      var n = hstc.tracking.Utk.parse(this.cookie, t);
      this._manageCookies(n);
    }
    hstc.utils.isEmpty(this.cookie.get("hsfirstvisit")) ||
      this.cookie.remove("hsfirstvisit");
  };
  hstc.tracking.Tracker.prototype._setRelCanonicalUrl = function () {
    for (
      var t = document.getElementsByTagName("link"), e = 0;
      e < t.length;
      e++
    )
      if ("canonical" === t[e].rel) {
        this.relCanonicalUrl = t[e].href;
        return;
      }
  };
  hstc.tracking.Tracker.prototype._getFingerprint = function () {
    try {
      return new hstc.Fingerprint().get();
    } catch (t) {
      hstc.utils.logError(t);
      return null;
    }
  };
  hstc.tracking.Tracker.prototype._getUrlParams = function () {
    var t,
      e,
      n = this.context.getLocation();
    try {
      t = n.search;
      e = n.hash;
    } catch (i) {
      t = window.location.search;
      e = window.location.hash;
    }
    return hstc.utils.deparam(t || e);
  };
  hstc.tracking.Tracker.prototype.embedHubSpotScript = function (t, n) {
    if (!document.getElementById(n) && this.trackingEnabled) {
      var i = document.createElement("script");
      i.src = t;
      i.type = "text/javascript";
      i.id = n;
      e = document.getElementsByTagName("script")[0];
      e.parentNode.insertBefore(i, e);
    }
  };
  hstc.tracking.Tracker.prototype.revokeCookieConsent = function () {
    this._enqueuePrivacyCall("revokeCookieConsent");
  };
  hstc.tracking.Tracker.prototype.trackApproveCookieConsent = function () {
    this._loadImage({ k: 28 });
  };
  hstc.tracking.Tracker.prototype.trackDeclineCookieConsent = function () {
    this._loadImage({ k: 29 });
  };
  hstc.tracking.Tracker.prototype.trackRevokeCookieConsent = function () {
    this._loadImage({ k: 30 });
  };
  hstc.tracking.Tracker.prototype._safeCallListener = function (t, e) {
    try {
      t(e);
    } catch (n) {
      hstc.utils.logError(n);
    }
  };
  hstc.tracking.Utk = function (t, e, n, i, r, s, o, c, a) {
    this.context = t ? t.context : new hstc.global.Context();
    this.cookie = t || new hstc.cookies.Cookie(this.context);
    this.rawDomain =
      this.cookie.currentDomain ||
      hstc.utils.extractDomain(this.context.getHostName());
    this.domain = e && !c ? e : hstc.utils.hashString(this.rawDomain);
    this.visitor = n ? n.toLowerCase() : hstc.Math.uuid();
    this.initial = i || hstc.utils.utcnow();
    this.previous = r || hstc.utils.utcnow();
    this.current = s || hstc.utils.utcnow();
    this.session = o || 1;
    this.recovered = c;
    this.returningVisitor = a;
  };
  hstc.tracking.Utk.COOKIE = "__hstc";
  hstc.tracking.Utk.LEGACY_COOKIE = "hubspotutk";
  hstc.tracking.Utk.EXPIRATION = 390;
  hstc.tracking.Utk.EXPIRATION_START = 15444e8;
  hstc.tracking.Utk.parse = function (t, e, n) {
    var i = t ? t.context : new hstc.global.Context();
    t = t || new hstc.cookies.Cookie(i);
    var r = e ? !1 : !0;
    e = e || t.get(hstc.tracking.Utk.COOKIE);
    try {
      var s = e.split(".");
      if (6 == s.length && s[1].length > 0) {
        s[5] = parseInt(s[5], 10);
        return new hstc.tracking.Utk(
          t,
          s[0],
          s[1],
          s[2],
          s[3],
          s[4],
          s[5],
          r,
          !0
        );
      }
      if (1 == s.length && s[0].length > 0)
        return new hstc.tracking.Utk(
          t,
          null,
          s[0],
          null,
          null,
          null,
          null,
          !n,
          !1
        );
    } catch (o) {}
    return hstc.tracking.Utk.regenerate(t);
  };
  hstc.tracking.Utk.regenerate = function (t) {
    return new hstc.tracking.Utk(t);
  };
  hstc.tracking.Utk.prototype.isNew = function () {
    return !this.returningVisitor;
  };
  hstc.tracking.Utk.prototype.rotate = function (t) {
    this.previous = this.current || t;
    this.current = t;
    this.session += 1;
  };
  hstc.tracking.Utk.prototype.get = function () {
    var t = [
      this.domain,
      this.visitor,
      this.initial,
      this.previous,
      this.current,
      this.session,
    ];
    return t.join(".");
  };
  hstc.tracking.Utk.prototype.save = function (t, e) {
    var n =
        t &&
        1 == t.active &&
        ("OPT_IN" == t.mode || "OPT_IN_ACTIVE_CONSENT" == t.mode) &&
        0 == t.hideDecline,
      i = e && 1 == e.allowed;
    if (!this.isNew() && n) {
      if (i) {
        var r =
          hstc.tracking.Utk.EXPIRATION -
          Math.floor((hstc.utils.utcnow() - this.initial) / 864e5);
        this.cookie.set(hstc.tracking.Utk.COOKIE, this.get(), {
          daysToExpire: r,
        });
        this.cookie.set(hstc.tracking.Utk.LEGACY_COOKIE, this.visitor, {
          daysToExpire: r,
        });
      }
    } else {
      this.cookie.set(hstc.tracking.Utk.COOKIE, this.get(), {
        daysToExpire: hstc.tracking.Utk.EXPIRATION,
      });
      this.cookie.set(hstc.tracking.Utk.LEGACY_COOKIE, this.visitor, {
        daysToExpire: hstc.tracking.Utk.EXPIRATION,
      });
    }
  };
  hstc.tracking.Utk.prototype.resetDomain = function () {
    this.domain = hstc.utils.hashString(this.rawDomain);
  };
  hstc.tracking.Session = function (t, e, n, i, r) {
    this.context = t ? t.context : new hstc.global.Context();
    this.cookie = t || new hstc.cookies.Cookie(this.context);
    this.rawDomain =
      this.cookie.currentDomain ||
      hstc.utils.extractDomain(this.context.getHostName());
    this.domain = e && !r ? e : hstc.utils.hashString(this.rawDomain);
    this.viewCount = n || 1;
    this.start = i || hstc.utils.utcnow();
    this.recovered = r;
  };
  hstc.tracking.Session.COOKIE = "__hssc";
  hstc.tracking.Session.RESTART_COOKIE = "__hssrc";
  hstc.tracking.Session.prototype.isNew = function () {
    return this.recovered !== !0;
  };
  hstc.tracking.Session.parse = function (t, e) {
    var n = t ? t.context : new hstc.global.Context();
    t = t || new hstc.cookies.Cookie(n);
    var i = e ? !1 : !0;
    if (e || "1" === t.get(hstc.tracking.Session.RESTART_COOKIE)) {
      e = e || t.get(hstc.tracking.Session.COOKIE);
      try {
        var r = e.split(".");
        if (3 == r.length)
          return new hstc.tracking.Session(t, r[0], r[1], r[2], i);
      } catch (s) {}
    }
    return hstc.tracking.Session.regenerate(t);
  };
  hstc.tracking.Session.regenerate = function (t) {
    return new hstc.tracking.Session(t);
  };
  hstc.tracking.Session.prototype.increment = function () {
    try {
      this.viewCount = parseInt(this.viewCount || 1, 10) + 1;
    } catch (t) {
      this.viewCount = 1;
    }
  };
  hstc.tracking.Session.prototype.get = function () {
    var t = [this.domain, this.viewCount, this.start];
    return t.join(".");
  };
  hstc.tracking.Session.prototype.save = function () {
    this.cookie.set(hstc.tracking.Session.RESTART_COOKIE, "1");
    this.cookie.set(hstc.tracking.Session.COOKIE, this.get(), {
      minsToExpire: 30,
    });
  };
  hstc.tracking.Session.prototype.merge = function (t) {
    t.start && t.start < this.start && (this.start = t.start);
    t.viewCount && (this.viewCount += t.viewCount);
    return this;
  };
  hstc.tracking.Session.prototype.resetDomain = function () {
    this.domain = hstc.utils.hashString(this.rawDomain);
  };
  var hstc = hstc || {};
  hstc.tracking = hstc.tracking || {};
  hstc.tracking.Runner = function (t, e) {
    this.context = t || new hstc.global.Context();
    this.cookie = e || new hstc.cookies.Cookie(this.context);
    this.tracker = new hstc.tracking.Tracker(this.context, this.cookie);
  };
  hstc.tracking.Runner.hsqParam = "_hsq";
  hstc.tracking.Runner.ranParam = "_hstc_ran";
  hstc.tracking.Runner.priorityFunctions = [
    "setPortalId",
    "setCanonicalUrl",
    "setPath",
    "setContentType",
    "setContentMetadata",
    "setPageId",
    "setTargetedContentMetadata",
    "identify",
    "setDebugMode",
    "setLimitTrackingToCookieDomains",
    "setTrackingEnabled",
  ];
  hstc.tracking.Runner.prototype.run = function () {
    function t(t) {
      try {
        if ("function" == typeof t) t(n, hstc);
        else if (t && hstc.utils.isArray(t) && n[t[0]])
          return n[t[0]].apply(n, t.slice(1));
      } catch (e) {
        hstc.utils.logError(e);
      }
    }
    var e = this.context.getWindow();
    if (!e[hstc.tracking.Runner.ranParam]) {
      e[hstc.tracking.Runner.ranParam] = !0;
      var n = this.tracker;
      this.setUpHsq(t);
      this.processHsq(t);
    }
  };
  hstc.tracking.Runner.prototype.setUpHsq = function (t) {
    var e = this.context.getWindow(),
      n = (e[hstc.tracking.Runner.hsqParam] =
        e[hstc.tracking.Runner.hsqParam] || []);
    hstc.utils.isArray(n) || (n = e[hstc.tracking.Runner.hsqParam] = []);
    n.push = t;
  };
  hstc.tracking.Runner.prototype.processHsq = function (t) {
    var e = this.context.getWindow()[hstc.tracking.Runner.hsqParam];
    hstc.utils.search2dArray(
      e,
      1,
      ["setCookiesToSubdomain", "addCookieDomain"],
      t
    );
    this.tracker._initialize();
    hstc.utils.search2dArray(e, 1, hstc.tracking.Runner.priorityFunctions, t);
    for (; e.length; ) t(e.shift());
  };
  !(function (t) {
    function e(t, e, n, i) {
      var r, s, o, c, a, h, u, g, f, d;
      (e ? e.ownerDocument || e : j) !== A && L(e);
      e = e || A;
      n = n || [];
      if (!t || "string" != typeof t) return n;
      if (1 !== (c = e.nodeType) && 9 !== c) return [];
      if (P && !i) {
        if ((r = yt.exec(t)))
          if ((o = r[1])) {
            if (9 === c) {
              s = e.getElementById(o);
              if (!s || !s.parentNode) return n;
              if (s.id === o) {
                n.push(s);
                return n;
              }
            } else if (
              e.ownerDocument &&
              (s = e.ownerDocument.getElementById(o)) &&
              q(e, s) &&
              s.id === o
            ) {
              n.push(s);
              return n;
            }
          } else {
            if (r[2]) {
              tt.apply(n, e.getElementsByTagName(t));
              return n;
            }
            if (
              (o = r[3]) &&
              x.getElementsByClassName &&
              e.getElementsByClassName
            ) {
              tt.apply(n, e.getElementsByClassName(o));
              return n;
            }
          }
        if (x.qsa && (!R || !R.test(t))) {
          g = u = F;
          f = e;
          d = 9 === c && t;
          if (1 === c && "object" !== e.nodeName.toLowerCase()) {
            h = l(t);
            (u = e.getAttribute("id"))
              ? (g = u.replace(Tt, "\\$&"))
              : e.setAttribute("id", g);
            g = "[id='" + g + "'] ";
            a = h.length;
            for (; a--; ) h[a] = g + p(h[a]);
            f = (pt.test(t) && e.parentNode) || e;
            d = h.join(",");
          }
          if (d)
            try {
              tt.apply(n, f.querySelectorAll(d));
              return n;
            } catch (k) {
            } finally {
              u || e.removeAttribute("id");
            }
        }
      }
      return C(t.replace(ht, "$1"), e, n, i);
    }
    function n() {
      function t(n, i) {
        e.push((n += " ")) > b.cacheLength && delete t[e.shift()];
        return (t[n] = i);
      }
      var e = [];
      return t;
    }
    function i(t) {
      t[F] = !0;
      return t;
    }
    function r(t) {
      var e = A.createElement("div");
      try {
        return !!t(e);
      } catch (n) {
        return !1;
      } finally {
        e.parentNode && e.parentNode.removeChild(e);
        e = null;
      }
    }
    function s(t, e) {
      for (var n = t.split("|"), i = t.length; i--; ) b.attrHandle[n[i]] = e;
    }
    function o(t, e) {
      var n = e && t,
        i =
          n &&
          1 === t.nodeType &&
          1 === e.nodeType &&
          (~e.sourceIndex || X) - (~t.sourceIndex || X);
      if (i) return i;
      if (n) for (; (n = n.nextSibling); ) if (n === e) return -1;
      return t ? 1 : -1;
    }
    function c(t) {
      return function (e) {
        var n = e.nodeName.toLowerCase();
        return "input" === n && e.type === t;
      };
    }
    function a(t) {
      return function (e) {
        var n = e.nodeName.toLowerCase();
        return ("input" === n || "button" === n) && e.type === t;
      };
    }
    function h(t) {
      return i(function (e) {
        e = +e;
        return i(function (n, i) {
          for (var r, s = t([], n.length, e), o = s.length; o--; )
            n[(r = s[o])] && (n[r] = !(i[r] = n[r]));
        });
      });
    }
    function u() {}
    function l(t, n) {
      var i,
        r,
        s,
        o,
        c,
        a,
        h,
        u = V[t + " "];
      if (u) return n ? 0 : u.slice(0);
      c = t;
      a = [];
      h = b.preFilter;
      for (; c; ) {
        if (!i || (r = ut.exec(c))) {
          r && (c = c.slice(r[0].length) || c);
          a.push((s = []));
        }
        i = !1;
        if ((r = lt.exec(c))) {
          i = r.shift();
          s.push({ value: i, type: r[0].replace(ht, " ") });
          c = c.slice(i.length);
        }
        for (o in b.filter)
          if ((r = kt[o].exec(c)) && (!h[o] || (r = h[o](r)))) {
            i = r.shift();
            s.push({ value: i, type: o, matches: r });
            c = c.slice(i.length);
          }
        if (!i) break;
      }
      return n ? c.length : c ? e.error(t) : V(t, a).slice(0);
    }
    function p(t) {
      for (var e = 0, n = t.length, i = ""; n > e; e++) i += t[e].value;
      return i;
    }
    function g(t, e, n) {
      var i = e.dir,
        r = n && "parentNode" === i,
        s = $++;
      return e.first
        ? function (e, n, s) {
            for (; (e = e[i]); ) if (1 === e.nodeType || r) return t(e, n, s);
          }
        : function (e, n, o) {
            var c,
              a,
              h,
              u = H + " " + s;
            if (o) {
              for (; (e = e[i]); )
                if ((1 === e.nodeType || r) && t(e, n, o)) return !0;
            } else
              for (; (e = e[i]); )
                if (1 === e.nodeType || r) {
                  h = e[F] || (e[F] = {});
                  if ((a = h[i]) && a[0] === u) {
                    if ((c = a[1]) === !0 || c === S) return c === !0;
                  } else {
                    a = h[i] = [u];
                    a[1] = t(e, n, o) || S;
                    if (a[1] === !0) return !0;
                  }
                }
          };
    }
    function f(t) {
      return t.length > 1
        ? function (e, n, i) {
            for (var r = t.length; r--; ) if (!t[r](e, n, i)) return !1;
            return !0;
          }
        : t[0];
    }
    function d(t, e, n, i, r) {
      for (var s, o = [], c = 0, a = t.length, h = null != e; a > c; c++)
        if ((s = t[c]) && (!n || n(s, i, r))) {
          o.push(s);
          h && e.push(c);
        }
      return o;
    }
    function k(t, e, n, r, s, o) {
      r && !r[F] && (r = k(r));
      s && !s[F] && (s = k(s, o));
      return i(function (i, o, c, a) {
        var h,
          u,
          l,
          p = [],
          g = [],
          f = o.length,
          k = i || v(e || "*", c.nodeType ? [c] : c, []),
          m = !t || (!i && e) ? k : d(k, p, t, c, a),
          y = n ? (s || (i ? t : f || r) ? [] : o) : m;
        n && n(m, y, c, a);
        if (r) {
          h = d(y, g);
          r(h, [], c, a);
          u = h.length;
          for (; u--; ) (l = h[u]) && (y[g[u]] = !(m[g[u]] = l));
        }
        if (i) {
          if (s || t) {
            if (s) {
              h = [];
              u = y.length;
              for (; u--; ) (l = y[u]) && h.push((m[u] = l));
              s(null, (y = []), h, a);
            }
            u = y.length;
            for (; u--; )
              (l = y[u]) &&
                (h = s ? nt.call(i, l) : p[u]) > -1 &&
                (i[h] = !(o[h] = l));
          }
        } else {
          y = d(y === o ? y.splice(f, y.length) : y);
          s ? s(null, o, y, a) : tt.apply(o, y);
        }
      });
    }
    function m(t) {
      for (
        var e,
          n,
          i,
          r = t.length,
          s = b.relative[t[0].type],
          o = s || b.relative[" "],
          c = s ? 1 : 0,
          a = g(
            function (t) {
              return t === e;
            },
            o,
            !0
          ),
          h = g(
            function (t) {
              return nt.call(e, t) > -1;
            },
            o,
            !0
          ),
          u = [
            function (t, n, i) {
              return (
                (!s && (i || n !== D)) ||
                ((e = n).nodeType ? a(t, n, i) : h(t, n, i))
              );
            },
          ];
        r > c;
        c++
      )
        if ((n = b.relative[t[c].type])) u = [g(f(u), n)];
        else {
          n = b.filter[t[c].type].apply(null, t[c].matches);
          if (n[F]) {
            i = ++c;
            for (; r > i && !b.relative[t[i].type]; i++);
            return k(
              c > 1 && f(u),
              c > 1 &&
                p(
                  t
                    .slice(0, c - 1)
                    .concat({ value: " " === t[c - 2].type ? "*" : "" })
                ).replace(ht, "$1"),
              n,
              i > c && m(t.slice(c, i)),
              r > i && m((t = t.slice(i))),
              r > i && p(t)
            );
          }
          u.push(n);
        }
      return f(u);
    }
    function y(t, n) {
      var r = 0,
        s = n.length > 0,
        o = t.length > 0,
        c = function (i, c, a, h, u) {
          var l,
            p,
            g,
            f = [],
            k = 0,
            m = "0",
            y = i && [],
            v = null != u,
            C = D,
            T = i || (o && b.find.TAG("*", (u && c.parentNode) || c)),
            w = (H += null == C ? 1 : Math.random() || 0.1),
            x = T.length;
          if (v) {
            D = c !== A && c;
            S = r;
          }
          for (; m !== x && null != (l = T[m]); m++) {
            if (o && l) {
              p = 0;
              for (; (g = t[p++]); )
                if (g(l, c, a)) {
                  h.push(l);
                  break;
                }
              if (v) {
                H = w;
                S = ++r;
              }
            }
            if (s) {
              (l = !g && l) && k--;
              i && y.push(l);
            }
          }
          k += m;
          if (s && m !== k) {
            p = 0;
            for (; (g = n[p++]); ) g(y, f, c, a);
            if (i) {
              if (k > 0) for (; m--; ) y[m] || f[m] || (f[m] = J.call(h));
              f = d(f);
            }
            tt.apply(h, f);
            v && !i && f.length > 0 && k + n.length > 1 && e.uniqueSort(h);
          }
          if (v) {
            H = w;
            D = C;
          }
          return y;
        };
      return s ? i(c) : c;
    }
    function v(t, n, i) {
      for (var r = 0, s = n.length; s > r; r++) e(t, n[r], i);
      return i;
    }
    function C(t, e, n, i) {
      var r,
        s,
        o,
        c,
        a,
        h = l(t);
      if (!i && 1 === h.length) {
        s = h[0] = h[0].slice(0);
        if (
          s.length > 2 &&
          "ID" === (o = s[0]).type &&
          x.getById &&
          9 === e.nodeType &&
          P &&
          b.relative[s[1].type]
        ) {
          e = (b.find.ID(o.matches[0].replace(wt, xt), e) || [])[0];
          if (!e) return n;
          t = t.slice(s.shift().value.length);
        }
        r = kt.needsContext.test(t) ? 0 : s.length;
        for (; r--; ) {
          o = s[r];
          if (b.relative[(c = o.type)]) break;
          if (
            (a = b.find[c]) &&
            (i = a(
              o.matches[0].replace(wt, xt),
              (pt.test(s[0].type) && e.parentNode) || e
            ))
          ) {
            s.splice(r, 1);
            t = i.length && p(s);
            if (!t) {
              tt.apply(n, i);
              return n;
            }
            break;
          }
        }
      }
      I(t, h)(i, e, !P, n, pt.test(t));
      return n;
    }
    function T(t) {
      if (!t) return null;
      var e = /\[\w+(\*|\$|\||~|!|\^)?=(.+)]/,
        n = e.test(t);
      if (n) {
        n = e.exec(t);
        if (n && 3 == n.length) {
          var i = /'.+'/,
            r = /".+"/;
          if (!i.test(n[2]) && !r.test(n[2]))
            return t.replace("=" + n[2], "='" + n[2] + "'");
        }
      }
    }
    var w,
      x,
      S,
      b,
      E,
      _,
      I,
      D,
      N,
      L,
      A,
      O,
      P,
      R,
      U,
      M,
      q,
      F = "sizzle" + -new Date(),
      j = t.document,
      H = 0,
      $ = 0,
      B = n(),
      V = n(),
      K = n(),
      W = !1,
      G = function (t, e) {
        if (t === e) {
          W = !0;
          return 0;
        }
        return 0;
      },
      z = "undefined",
      X = 1 << 31,
      Q = {}.hasOwnProperty,
      Y = [],
      J = Y.pop,
      Z = Y.push,
      tt = Y.push,
      et = Y.slice,
      nt =
        Y.indexOf ||
        function (t) {
          for (var e = 0, n = this.length; n > e; e++)
            if (this[e] === t) return e;
          return -1;
        },
      it =
        "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
      rt = "[\\x20\\t\\r\\n\\f]",
      st = "(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",
      ot = st.replace("w", "w#"),
      ct =
        "\\[" +
        rt +
        "*(" +
        st +
        ")" +
        rt +
        "*(?:([*^$|!~]?=)" +
        rt +
        "*(?:(['\"])((?:\\\\.|[^\\\\])*?)\\3|(" +
        ot +
        ")|)|)" +
        rt +
        "*\\]",
      at =
        ":(" +
        st +
        ")(?:\\(((['\"])((?:\\\\.|[^\\\\])*?)\\3|((?:\\\\.|[^\\\\()[\\]]|" +
        ct.replace(3, 8) +
        ")*)|.*)\\)|)",
      ht = new RegExp(
        "^" + rt + "+|((?:^|[^\\\\])(?:\\\\.)*)" + rt + "+$",
        "g"
      ),
      ut = new RegExp("^" + rt + "*," + rt + "*"),
      lt = new RegExp("^" + rt + "*([>+~]|" + rt + ")" + rt + "*"),
      pt = new RegExp(rt + "*[+~]"),
      gt = new RegExp("=" + rt + "*([^\\]'\"]*)" + rt + "*\\]", "g"),
      ft = new RegExp(at),
      dt = new RegExp("^" + ot + "$"),
      kt = {
        ID: new RegExp("^#(" + st + ")"),
        CLASS: new RegExp("^\\.(" + st + ")"),
        TAG: new RegExp("^(" + st.replace("w", "w*") + ")"),
        ATTR: new RegExp("^" + ct),
        PSEUDO: new RegExp("^" + at),
        CHILD: new RegExp(
          "^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" +
            rt +
            "*(even|odd|(([+-]|)(\\d*)n|)" +
            rt +
            "*(?:([+-]|)" +
            rt +
            "*(\\d+)|))" +
            rt +
            "*\\)|)",
          "i"
        ),
        bool: new RegExp("^(?:" + it + ")$", "i"),
        needsContext: new RegExp(
          "^" +
            rt +
            "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" +
            rt +
            "*((?:-\\d)?\\d*)" +
            rt +
            "*\\)|)(?=[^-]|$)",
          "i"
        ),
      },
      mt = /^[^{]+\{\s*\[native \w/,
      yt = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
      vt = /^(?:input|select|textarea|button)$/i,
      Ct = /^h\d$/i,
      Tt = /'|\\/g,
      wt = new RegExp("\\\\([\\da-f]{1,6}" + rt + "?|(" + rt + ")|.)", "ig"),
      xt = function (t, e, n) {
        var i = "0x" + e - 65536;
        return i !== i || n
          ? e
          : 0 > i
          ? String.fromCharCode(i + 65536)
          : String.fromCharCode((i >> 10) | 55296, (1023 & i) | 56320);
      };
    try {
      tt.apply((Y = et.call(j.childNodes)), j.childNodes);
      Y[j.childNodes.length].nodeType;
    } catch (St) {
      tt = {
        apply: Y.length
          ? function (t, e) {
              Z.apply(t, et.call(e));
            }
          : function (t, e) {
              for (var n = t.length, i = 0; (t[n++] = e[i++]); );
              t.length = n - 1;
            },
      };
    }
    _ = e.isXML = function (t) {
      var e = t && (t.ownerDocument || t).documentElement;
      return e ? "HTML" !== e.nodeName : !1;
    };
    x = e.support = {};
    L = e.setDocument = function (t) {
      var e = t ? t.ownerDocument || t : j,
        n = e.defaultView;
      if (e === A || 9 !== e.nodeType || !e.documentElement) return A;
      A = e;
      O = e.documentElement;
      P = !_(e);
      n &&
        n.attachEvent &&
        n !== n.top &&
        n.attachEvent("onbeforeunload", function () {
          L();
        });
      x.attributes = r(function (t) {
        t.className = "i";
        return !t.getAttribute("className");
      });
      x.getElementsByTagName = r(function (t) {
        t.appendChild(e.createComment(""));
        return !t.getElementsByTagName("*").length;
      });
      x.getElementsByClassName = r(function (t) {
        t.innerHTML = "<div class='a'></div><div class='a i'></div>";
        t.firstChild.className = "i";
        return 2 === t.getElementsByClassName("i").length;
      });
      x.getById = r(function (t) {
        O.appendChild(t).id = F;
        return !e.getElementsByName || !e.getElementsByName(F).length;
      });
      if (x.getById) {
        b.find.ID = function (t, e) {
          if (typeof e.getElementById !== z && P) {
            var n = e.getElementById(t);
            return n && n.parentNode ? [n] : [];
          }
        };
        b.filter.ID = function (t) {
          var e = t.replace(wt, xt);
          return function (t) {
            return t.getAttribute("id") === e;
          };
        };
      } else {
        delete b.find.ID;
        b.filter.ID = function (t) {
          var e = t.replace(wt, xt);
          return function (t) {
            var n = typeof t.getAttributeNode !== z && t.getAttributeNode("id");
            return n && n.value === e;
          };
        };
      }
      b.find.TAG = x.getElementsByTagName
        ? function (t, e) {
            return typeof e.getElementsByTagName !== z
              ? e.getElementsByTagName(t)
              : void 0;
          }
        : function (t, e) {
            var n,
              i = [],
              r = 0,
              s = e.getElementsByTagName(t);
            if ("*" === t) {
              for (; (n = s[r++]); ) 1 === n.nodeType && i.push(n);
              return i;
            }
            return s;
          };
      b.find.CLASS =
        x.getElementsByClassName &&
        function (t, e) {
          return typeof e.getElementsByClassName !== z && P
            ? e.getElementsByClassName(t)
            : void 0;
        };
      U = [];
      R = [];
      if ((x.qsa = mt.test(e.querySelectorAll))) {
        r(function (t) {
          t.innerHTML = "<select><option selected=''></option></select>";
          t.querySelectorAll("[selected]").length ||
            R.push("\\[" + rt + "*(?:value|" + it + ")");
          t.querySelectorAll(":checked").length || R.push(":checked");
        });
        r(function (t) {
          var n = e.createElement("input");
          n.setAttribute("type", "hidden");
          t.appendChild(n).setAttribute("t", "");
          t.querySelectorAll("[t^='']").length &&
            R.push("[*^$]=" + rt + "*(?:''|\"\")");
          t.querySelectorAll(":enabled").length ||
            R.push(":enabled", ":disabled");
          t.querySelectorAll("*,:x");
          R.push(",.*:");
        });
      }
      (x.matchesSelector = mt.test(
        (M =
          O.webkitMatchesSelector ||
          O.mozMatchesSelector ||
          O.oMatchesSelector ||
          O.msMatchesSelector)
      )) &&
        r(function (t) {
          x.disconnectedMatch = M.call(t, "div");
          M.call(t, "[s!='']:x");
          U.push("!=", at);
        });
      R = R.length && new RegExp(R.join("|"));
      U = U.length && new RegExp(U.join("|"));
      q =
        mt.test(O.contains) || O.compareDocumentPosition
          ? function (t, e) {
              var n = 9 === t.nodeType ? t.documentElement : t,
                i = e && e.parentNode;
              return (
                t === i ||
                !(
                  !i ||
                  1 !== i.nodeType ||
                  !(n.contains
                    ? n.contains(i)
                    : t.compareDocumentPosition &&
                      16 & t.compareDocumentPosition(i))
                )
              );
            }
          : function (t, e) {
              if (e) for (; (e = e.parentNode); ) if (e === t) return !0;
              return !1;
            };
      G = O.compareDocumentPosition
        ? function (t, n) {
            if (t === n) {
              W = !0;
              return 0;
            }
            var i =
              n.compareDocumentPosition &&
              t.compareDocumentPosition &&
              t.compareDocumentPosition(n);
            return i
              ? 1 & i || (!x.sortDetached && n.compareDocumentPosition(t) === i)
                ? t === e || q(j, t)
                  ? -1
                  : n === e || q(j, n)
                  ? 1
                  : N
                  ? nt.call(N, t) - nt.call(N, n)
                  : 0
                : 4 & i
                ? -1
                : 1
              : t.compareDocumentPosition
              ? -1
              : 1;
          }
        : function (t, n) {
            var i,
              r = 0,
              s = t.parentNode,
              c = n.parentNode,
              a = [t],
              h = [n];
            if (t === n) {
              W = !0;
              return 0;
            }
            if (!s || !c)
              return t === e
                ? -1
                : n === e
                ? 1
                : s
                ? -1
                : c
                ? 1
                : N
                ? nt.call(N, t) - nt.call(N, n)
                : 0;
            if (s === c) return o(t, n);
            i = t;
            for (; (i = i.parentNode); ) a.unshift(i);
            i = n;
            for (; (i = i.parentNode); ) h.unshift(i);
            for (; a[r] === h[r]; ) r++;
            return r ? o(a[r], h[r]) : a[r] === j ? -1 : h[r] === j ? 1 : 0;
          };
      return e;
    };
    e.matches = function (t, n) {
      return e(t, null, null, n);
    };
    e.matchesSelector = function (t, n) {
      (t.ownerDocument || t) !== A && L(t);
      n = n.replace(gt, "='$1']");
      if (x.matchesSelector && P && (!U || !U.test(n)) && (!R || !R.test(n)))
        try {
          var i = M.call(t, n);
          if (
            i ||
            x.disconnectedMatch ||
            (t.document && 11 !== t.document.nodeType)
          )
            return i;
        } catch (r) {}
      return e(n, A, null, [t]).length > 0;
    };
    e.contains = function (t, e) {
      (t.ownerDocument || t) !== A && L(t);
      return q(t, e);
    };
    e.attr = function (t, e) {
      (t.ownerDocument || t) !== A && L(t);
      var n = b.attrHandle[e.toLowerCase()],
        i = n && Q.call(b.attrHandle, e.toLowerCase()) ? n(t, e, !P) : void 0;
      return void 0 === i
        ? x.attributes || !P
          ? t.getAttribute(e)
          : (i = t.getAttributeNode(e)) && i.specified
          ? i.value
          : null
        : i;
    };
    e.error = function (t) {
      throw new Error("Syntax error, unrecognized expression: " + t);
    };
    e.uniqueSort = function (t) {
      var e,
        n = [],
        i = 0,
        r = 0;
      W = !x.detectDuplicates;
      N = !x.sortStable && t.slice(0);
      t.sort(G);
      if (W) {
        for (; (e = t[r++]); ) e === t[r] && (i = n.push(r));
        for (; i--; ) t.splice(n[i], 1);
      }
      return t;
    };
    E = e.getText = function (t) {
      var e,
        n = "",
        i = 0,
        r = t.nodeType;
      if (r) {
        if (1 === r || 9 === r || 11 === r) {
          if ("string" == typeof t.textContent) return t.textContent;
          for (t = t.firstChild; t; t = t.nextSibling) n += E(t);
        } else if (3 === r || 4 === r) return t.nodeValue;
      } else for (; (e = t[i]); i++) n += E(e);
      return n;
    };
    b = e.selectors = {
      cacheLength: 50,
      createPseudo: i,
      match: kt,
      attrHandle: {},
      find: {},
      relative: {
        ">": { dir: "parentNode", first: !0 },
        " ": { dir: "parentNode" },
        "+": { dir: "previousSibling", first: !0 },
        "~": { dir: "previousSibling" },
      },
      preFilter: {
        ATTR: function (t) {
          t[1] = t[1].replace(wt, xt);
          t[3] = (t[4] || t[5] || "").replace(wt, xt);
          "~=" === t[2] && (t[3] = " " + t[3] + " ");
          return t.slice(0, 4);
        },
        CHILD: function (t) {
          t[1] = t[1].toLowerCase();
          if ("nth" === t[1].slice(0, 3)) {
            t[3] || e.error(t[0]);
            t[4] = +(t[4]
              ? t[5] + (t[6] || 1)
              : 2 * ("even" === t[3] || "odd" === t[3]));
            t[5] = +(t[7] + t[8] || "odd" === t[3]);
          } else t[3] && e.error(t[0]);
          return t;
        },
        PSEUDO: function (t) {
          var e,
            n = !t[5] && t[2];
          if (kt.CHILD.test(t[0])) return null;
          if (t[3] && void 0 !== t[4]) t[2] = t[4];
          else if (
            n &&
            ft.test(n) &&
            (e = l(n, !0)) &&
            (e = n.indexOf(")", n.length - e) - n.length)
          ) {
            t[0] = t[0].slice(0, e);
            t[2] = n.slice(0, e);
          }
          return t.slice(0, 3);
        },
      },
      filter: {
        TAG: function (t) {
          var e = t.replace(wt, xt).toLowerCase();
          return "*" === t
            ? function () {
                return !0;
              }
            : function (t) {
                return t.nodeName && t.nodeName.toLowerCase() === e;
              };
        },
        CLASS: function (t) {
          var e = B[t + " "];
          return (
            e ||
            ((e = new RegExp("(^|" + rt + ")" + t + "(" + rt + "|$)")) &&
              B(t, function (t) {
                return e.test(
                  ("string" == typeof t.className && t.className) ||
                    (typeof t.getAttribute !== z && t.getAttribute("class")) ||
                    ""
                );
              }))
          );
        },
        ATTR: function (t, n, i) {
          return function (r) {
            var s = e.attr(r, t);
            if (null == s) return "!=" === n;
            if (!n) return !0;
            s += "";
            return "=" === n
              ? s === i
              : "!=" === n
              ? s !== i
              : "^=" === n
              ? i && 0 === s.indexOf(i)
              : "*=" === n
              ? i && s.indexOf(i) > -1
              : "$=" === n
              ? i && s.slice(-i.length) === i
              : "~=" === n
              ? (" " + s + " ").indexOf(i) > -1
              : "|=" === n
              ? s === i || s.slice(0, i.length + 1) === i + "-"
              : !1;
          };
        },
        CHILD: function (t, e, n, i, r) {
          var s = "nth" !== t.slice(0, 3),
            o = "last" !== t.slice(-4),
            c = "of-type" === e;
          return 1 === i && 0 === r
            ? function (t) {
                return !!t.parentNode;
              }
            : function (e, n, a) {
                var h,
                  u,
                  l,
                  p,
                  g,
                  f,
                  d = s !== o ? "nextSibling" : "previousSibling",
                  k = e.parentNode,
                  m = c && e.nodeName.toLowerCase(),
                  y = !a && !c;
                if (k) {
                  if (s) {
                    for (; d; ) {
                      l = e;
                      for (; (l = l[d]); )
                        if (
                          c ? l.nodeName.toLowerCase() === m : 1 === l.nodeType
                        )
                          return !1;
                      f = d = "only" === t && !f && "nextSibling";
                    }
                    return !0;
                  }
                  f = [o ? k.firstChild : k.lastChild];
                  if (o && y) {
                    u = k[F] || (k[F] = {});
                    h = u[t] || [];
                    g = h[0] === H && h[1];
                    p = h[0] === H && h[2];
                    l = g && k.childNodes[g];
                    for (; (l = (++g && l && l[d]) || (p = g = 0) || f.pop()); )
                      if (1 === l.nodeType && ++p && l === e) {
                        u[t] = [H, g, p];
                        break;
                      }
                  } else if (y && (h = (e[F] || (e[F] = {}))[t]) && h[0] === H)
                    p = h[1];
                  else
                    for (; (l = (++g && l && l[d]) || (p = g = 0) || f.pop()); )
                      if (
                        (c
                          ? l.nodeName.toLowerCase() === m
                          : 1 === l.nodeType) &&
                        ++p
                      ) {
                        y && ((l[F] || (l[F] = {}))[t] = [H, p]);
                        if (l === e) break;
                      }
                  p -= r;
                  return p === i || (p % i === 0 && p / i >= 0);
                }
              };
        },
        PSEUDO: function (t, n) {
          var r,
            s =
              b.pseudos[t] ||
              b.setFilters[t.toLowerCase()] ||
              e.error("unsupported pseudo: " + t);
          if (s[F]) return s(n);
          if (s.length > 1) {
            r = [t, t, "", n];
            return b.setFilters.hasOwnProperty(t.toLowerCase())
              ? i(function (t, e) {
                  for (var i, r = s(t, n), o = r.length; o--; ) {
                    i = nt.call(t, r[o]);
                    t[i] = !(e[i] = r[o]);
                  }
                })
              : function (t) {
                  return s(t, 0, r);
                };
          }
          return s;
        },
      },
      pseudos: {
        not: i(function (t) {
          var e = [],
            n = [],
            r = I(t.replace(ht, "$1"));
          return r[F]
            ? i(function (t, e, n, i) {
                for (var s, o = r(t, null, i, []), c = t.length; c--; )
                  (s = o[c]) && (t[c] = !(e[c] = s));
              })
            : function (t, i, s) {
                e[0] = t;
                r(e, null, s, n);
                return !n.pop();
              };
        }),
        has: i(function (t) {
          return function (n) {
            return e(t, n).length > 0;
          };
        }),
        contains: i(function (t) {
          return function (e) {
            return (e.textContent || e.innerText || E(e)).indexOf(t) > -1;
          };
        }),
        lang: i(function (t) {
          dt.test(t || "") || e.error("unsupported lang: " + t);
          t = t.replace(wt, xt).toLowerCase();
          return function (e) {
            var n;
            do
              if (
                (n = P
                  ? e.lang
                  : e.getAttribute("xml:lang") || e.getAttribute("lang"))
              ) {
                n = n.toLowerCase();
                return n === t || 0 === n.indexOf(t + "-");
              }
            while ((e = e.parentNode) && 1 === e.nodeType);
            return !1;
          };
        }),
        target: function (e) {
          var n = t.location && t.location.hash;
          return n && n.slice(1) === e.id;
        },
        root: function (t) {
          return t === O;
        },
        focus: function (t) {
          return (
            t === A.activeElement &&
            (!A.hasFocus || A.hasFocus()) &&
            !!(t.type || t.href || ~t.tabIndex)
          );
        },
        enabled: function (t) {
          return t.disabled === !1;
        },
        disabled: function (t) {
          return t.disabled === !0;
        },
        checked: function (t) {
          var e = t.nodeName.toLowerCase();
          return (
            ("input" === e && !!t.checked) || ("option" === e && !!t.selected)
          );
        },
        selected: function (t) {
          t.parentNode && t.parentNode.selectedIndex;
          return t.selected === !0;
        },
        empty: function (t) {
          for (t = t.firstChild; t; t = t.nextSibling)
            if (t.nodeName > "@" || 3 === t.nodeType || 4 === t.nodeType)
              return !1;
          return !0;
        },
        parent: function (t) {
          return !b.pseudos.empty(t);
        },
        header: function (t) {
          return Ct.test(t.nodeName);
        },
        input: function (t) {
          return vt.test(t.nodeName);
        },
        button: function (t) {
          var e = t.nodeName.toLowerCase();
          return ("input" === e && "button" === t.type) || "button" === e;
        },
        text: function (t) {
          var e;
          return (
            "input" === t.nodeName.toLowerCase() &&
            "text" === t.type &&
            (null == (e = t.getAttribute("type")) || e.toLowerCase() === t.type)
          );
        },
        first: h(function () {
          return [0];
        }),
        last: h(function (t, e) {
          return [e - 1];
        }),
        eq: h(function (t, e, n) {
          return [0 > n ? n + e : n];
        }),
        even: h(function (t, e) {
          for (var n = 0; e > n; n += 2) t.push(n);
          return t;
        }),
        odd: h(function (t, e) {
          for (var n = 1; e > n; n += 2) t.push(n);
          return t;
        }),
        lt: h(function (t, e, n) {
          for (var i = 0 > n ? n + e : n; --i >= 0; ) t.push(i);
          return t;
        }),
        gt: h(function (t, e, n) {
          for (var i = 0 > n ? n + e : n; ++i < e; ) t.push(i);
          return t;
        }),
      },
    };
    b.pseudos.nth = b.pseudos.eq;
    for (w in { radio: !0, checkbox: !0, file: !0, password: !0, image: !0 })
      b.pseudos[w] = c(w);
    for (w in { submit: !0, reset: !0 }) b.pseudos[w] = a(w);
    u.prototype = b.filters = b.pseudos;
    b.setFilters = new u();
    I = e.compile = function (t, e) {
      var n,
        i = [],
        r = [],
        s = K[t + " "];
      if (!s) {
        e || (e = l(t));
        n = e.length;
        for (; n--; ) {
          s = m(e[n]);
          s[F] ? i.push(s) : r.push(s);
        }
        s = K(t, y(r, i));
      }
      return s;
    };
    x.sortStable = F.split("").sort(G).join("") === F;
    x.detectDuplicates = W;
    L();
    x.sortDetached = r(function (t) {
      return 1 & t.compareDocumentPosition(A.createElement("div"));
    });
    r(function (t) {
      t.innerHTML = "<a href='#'></a>";
      return "#" === t.firstChild.getAttribute("href");
    }) ||
      s("type|href|height|width", function (t, e, n) {
        return n
          ? void 0
          : t.getAttribute(e, "type" === e.toLowerCase() ? 1 : 2);
      });
    (x.attributes &&
      r(function (t) {
        t.innerHTML = "<input/>";
        t.firstChild.setAttribute("value", "");
        return "" === t.firstChild.getAttribute("value");
      })) ||
      s("value", function (t, e, n) {
        return n || "input" !== t.nodeName.toLowerCase()
          ? void 0
          : t.defaultValue;
      });
    r(function (t) {
      return null == t.getAttribute("disabled");
    }) ||
      s(it, function (t, e, n) {
        var i;
        return n
          ? void 0
          : t[e] === !0
          ? e.toLowerCase()
          : (i = t.getAttributeNode(e)) && i.specified
          ? i.value
          : null;
      });
    hstc.find = function () {
      try {
        return e.apply(null, arguments);
      } catch (t) {
        var n = T(arguments[0]);
        if (n) {
          arguments[0] = n;
          return e.apply(null, arguments);
        }
        throw t;
      }
    };
    hstc.expr = e.selectors;
    hstc.expr[":"] = hstc.expr.filters;
    hstc.unique = e.uniqueSort;
    hstc.text = e.getText;
    hstc.isXMLDoc = e.isXML;
    hstc.contains = e.contains;
  })(window);
  !(function (t, e, n) {
    e[t] = n();
  })("Fingerprint", hstc, function () {
    "use strict";
    var t = function (t) {
      var e, n;
      e = Array.prototype.forEach;
      n = Array.prototype.map;
      this.each = function (t, n, i) {
        if (null !== t)
          if (e && t.forEach === e) t.forEach(n, i);
          else if (t.length === +t.length) {
            for (var r = 0, s = t.length; s > r; r++)
              if (n.call(i, t[r], r, t) === {}) return;
          } else
            for (var o in t)
              if (t.hasOwnProperty(o) && n.call(i, t[o], o, t) === {}) return;
      };
      this.map = function (t, e, i) {
        var r = [];
        if (null == t) return r;
        if (n && t.map === n) return t.map(e, i);
        this.each(t, function (t, n, s) {
          r[r.length] = e.call(i, t, n, s);
        });
        return r;
      };
      if ("object" == typeof t) {
        this.hasher = t.hasher;
        this.screen_resolution = t.screen_resolution;
        this.screen_orientation = t.screen_orientation;
      } else "function" == typeof t && (this.hasher = t);
    };
    t.prototype = {
      get: function () {
        var t = [];
        t.push(navigator.userAgent);
        t.push(navigator.language);
        t.push(screen.colorDepth);
        if (this.screen_resolution) {
          var e = this.getScreenResolution();
          "undefined" != typeof e && t.push(e.join("x"));
        }
        t.push(new Date().getTimezoneOffset());
        t.push(this.hasSessionStorage());
        t.push(this.hasLocalStorage());
        t.push(!!window.indexedDB);
        document && document.body
          ? t.push(typeof document.body.addBehavior)
          : t.push("undefined");
        t.push(typeof window.openDatabase);
        t.push(navigator.cpuClass);
        t.push(navigator.platform);
        t.push(navigator.doNotTrack);
        return this.hasher
          ? this.hasher(t.join("###"), 31)
          : this.murmurhash3_32_gc(t.join("###"), 31);
      },
      murmurhash3_32_gc: function (t, e) {
        var n, i, r, s, o, c, a, h;
        n = 3 & t.length;
        i = t.length - n;
        r = e;
        o = 3432918353;
        c = 461845907;
        h = 0;
        for (; i > h; ) {
          a =
            (255 & t.charCodeAt(h)) |
            ((255 & t.charCodeAt(++h)) << 8) |
            ((255 & t.charCodeAt(++h)) << 16) |
            ((255 & t.charCodeAt(++h)) << 24);
          ++h;
          a =
            ((65535 & a) * o + ((((a >>> 16) * o) & 65535) << 16)) & 4294967295;
          a = (a << 15) | (a >>> 17);
          a =
            ((65535 & a) * c + ((((a >>> 16) * c) & 65535) << 16)) & 4294967295;
          r ^= a;
          r = (r << 13) | (r >>> 19);
          s =
            (5 * (65535 & r) + (((5 * (r >>> 16)) & 65535) << 16)) & 4294967295;
          r = (65535 & s) + 27492 + ((((s >>> 16) + 58964) & 65535) << 16);
        }
        a = 0;
        switch (n) {
          case 3:
            a ^= (255 & t.charCodeAt(h + 2)) << 16;
          case 2:
            a ^= (255 & t.charCodeAt(h + 1)) << 8;
          case 1:
            a ^= 255 & t.charCodeAt(h);
            a =
              ((65535 & a) * o + ((((a >>> 16) * o) & 65535) << 16)) &
              4294967295;
            a = (a << 15) | (a >>> 17);
            a =
              ((65535 & a) * c + ((((a >>> 16) * c) & 65535) << 16)) &
              4294967295;
            r ^= a;
        }
        r ^= t.length;
        r ^= r >>> 16;
        r =
          (2246822507 * (65535 & r) +
            (((2246822507 * (r >>> 16)) & 65535) << 16)) &
          4294967295;
        r ^= r >>> 13;
        r =
          (3266489909 * (65535 & r) +
            (((3266489909 * (r >>> 16)) & 65535) << 16)) &
          4294967295;
        r ^= r >>> 16;
        return r >>> 0;
      },
      hasLocalStorage: function () {
        try {
          return !!window.localStorage;
        } catch (t) {
          return !0;
        }
      },
      hasSessionStorage: function () {
        try {
          return !!window.sessionStorage;
        } catch (t) {
          return !0;
        }
      },
      getScreenResolution: function () {
        var t;
        t = this.screen_orientation
          ? screen.height > screen.width
            ? [screen.height, screen.width]
            : [screen.width, screen.height]
          : [screen.height, screen.width];
        return t;
      },
    };
    return t;
  });
  !(function (t, e) {
    try {
      var n = t.getWindow();
      if (!n[e]) {
        loadHstc(t, n);
        n[e] = !0;
      }
    } catch (i) {
      hstc.utils.logError(i);
    }
  })(new hstc.global.Context(), "_hstc_loaded");
})(); /** _anon_wrapper_ **/
