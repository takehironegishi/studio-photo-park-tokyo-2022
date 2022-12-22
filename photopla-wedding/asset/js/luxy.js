/*! luxy.js v0.1.0 | (c) 2018 Mineo Okuda | MIT License | git+ssh://git@github.com:min30327/luxy.js.git */
!(function (t, e) {
  "use strict";
  "function" == typeof define && define.amd
    ? define([], e)
    : "object" == typeof exports
    ? (module.exports = e())
    : (t.luxy = e());
})(this, function () {
  "use strict";
  var t = {
      wrapper: "#luxy",
      targets: ".luxy-el",
      wrapperSpeed: 0.08,
      targetSpeed: 0.02,
      targetPercentage: 0.1,
    },
    e =
      window.requestAnimationFrame ||
      window.mozRequestAnimationFrame ||
      window.webkitRequestAnimationFrame ||
      window.msRequestAnimationFrame;
  window.requestAnimationFrame = e;
  var i = window.cancelAnimationFrame || window.mozCancelAnimationFrame,
    s = function () {
      for (var t = {}, e = 0, i = arguments.length; e < i; e++) {
        var s = arguments[e];
        !(function (e) {
          for (var i in e) e.hasOwnProperty(i) && (t[i] = e[i]);
        })(s);
      }
      return t;
    },
    r = function () {
      (this.Targets = []),
        (this.TargetsLength = 0),
        (this.wrapper = ""),
        (this.windowHeight = 0),
        (this.wapperOffset = 0);
    };
  return (
    (r.prototype = {
      isAnimate: !1,
      isResize: !1,
      scrollId: "",
      resizeId: "",
      init: function (e) {
        if (
          ((this.settings = s(t, e || {})),
          (this.wrapper = document.querySelector(this.settings.wrapper)),
          "undefined" === this.wrapper)
        )
          return !1;
        (this.targets = document.querySelectorAll(this.settings.targets)),
          (document.body.style.height = this.wrapper.clientHeight + "px"),
          (this.windowHeight = window.clientHeight),
          this.attachEvent(),
          this.apply(this.targets, this.wrapper),
          this.animate(),
          this.resize();
      },
      apply: function (t, e) {
        this.wrapperInit(), (this.targetsLength = t.length);
        for (var i = 0; i < this.targetsLength; i++) {
          var s = {
            offset: t[i].getAttribute("data-offset"),
            speedX: t[i].getAttribute("data-speed-x"),
            speedY: t[i].getAttribute("data-speed-Y"),
            percentage: t[i].getAttribute("data-percentage"),
            horizontal: t[i].getAttribute("data-horizontal"),
          };
          this.targetsInit(t[i], s);
        }
      },
      wrapperInit: function () {
        (this.wrapper.style.width = "100%"),
          (this.wrapper.style.position = "fixed");
      },
      targetsInit: function (t, e) {
        this.Targets.push({
          elm: t,
          offset: e.offset ? e.offset : 0,
          horizontal: e.horizontal ? e.horizontal : 0,
          top: 0,
          left: 0,
          speedX: e.speedX ? e.speedX : 1,
          speedY: e.speedY ? e.speedY : 1,
          percentage: e.percentage ? e.percentage : 0,
        });
      },
      scroll: function () {
        document.documentElement.scrollTop || document.body.scrollTop;
        this.scrollTop =
          document.documentElement.scrollTop || document.body.scrollTop;
        this.scrollTop, this.windowHeight;
        this.wrapperUpdate(this.scrollTop);
        for (var t = 0; t < this.Targets.length; t++)
          this.targetsUpdate(this.Targets[t]);
      },
      animate: function () {
        this.scroll(), (this.scrollId = e(this.animate.bind(this)));
      },
      wrapperUpdate: function () {
        (this.wapperOffset +=
          (this.scrollTop - this.wapperOffset) * this.settings.wrapperSpeed),
          (this.wrapper.style.transform =
            "translate3d(0," +
            Math.round(100 * -this.wapperOffset) / 100 +
            "px ,0)");
      },
      targetsUpdate: function (t) {
        (t.top +=
          (this.scrollTop *
            Number(this.settings.targetSpeed) *
            Number(t.speedY) -
            t.top) *
          this.settings.targetPercentage),
          (t.left +=
            (this.scrollTop *
              Number(this.settings.targetSpeed) *
              Number(t.speedX) -
              t.left) *
            this.settings.targetPercentage);
        var e = parseInt(t.percentage) - t.top - parseInt(t.offset),
          i = Math.round(-100 * e) / 100,
          s = 0;
        if (t.horizontal) {
          var r = parseInt(t.percentage) - t.left - parseInt(t.offset);
          s = Math.round(-100 * r) / 100;
        }
        t.elm.style.transform = "translate3d(" + s + "px ," + i + "px ,0)";
      },
      resize: function () {
        var t = this;
        (t.windowHeight =
          window.innerHeight || document.documentElement.clientHeight || 0),
          parseInt(t.wrapper.clientHeight) !=
            parseInt(document.body.style.height) &&
            (document.body.style.height = t.wrapper.clientHeight + "px"),
          (t.resizeId = e(t.resize.bind(t)));
      },
      attachEvent: function () {
        var t = this;
        window.addEventListener("resize", function () {
          t.isResize ||
            (i(t.resizeId),
            i(t.scrollId),
            (t.isResize = !0),
            setTimeout(function () {
              (t.isResize = !1),
                (t.resizeId = e(t.resize.bind(t))),
                (t.scrollId = e(t.animate.bind(t)));
            }, 200));
        });
      },
    }),
    new r()
  );
});
