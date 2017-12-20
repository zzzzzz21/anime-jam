'use strict';

(function () {
  'use strict';
  var FloatObj;

  FloatObj = (function () {
    function FloatObj(options) {
      if (options == null) {
        options = {};
      }
      this._images = options.images || [];
      this._duration = options.duration || 5000;
      this._dom = options.target ? $(options.target) : $('#wrap');
      this._num = options.num || 0;
      this._width = this._dom.width();
      this._height = this._dom.outerHeight();
      this.FfloatObj = [];
      this.init();
    }

    FloatObj.prototype.init = function () {
      var i, j, ref;
      for (i = j = 0, ref = this._num; 0 <= ref ? j <= ref : j >= ref; i = 0 <= ref ? ++j : --j) {
        this.FfloatObj[i] = this.create();
      }
      return this.insert();
    };

    FloatObj.prototype.create = function () {
      var elem;
      elem = document.createElement('div');
      elem.className = 'FloatObj';
      elem.style.width = '185px';
      elem.style.height = '185px';
      elem.style.position = 'absolute';
      elem.style.top = Math.random() * this._height + 'px';
      elem.style.left = Math.random() * this._width + 'px';
      elem.style.transform = 'rotate(' + ~ ~(Math.random() * 90) + 'deg) ' + 'translateY(0px)';
      elem.style.background = 'url(' + this._images[~ ~(Math.random() * this._images.length)] + ') no-repeat left top';
      return elem;
    };

    FloatObj.prototype.move = function (target) {
      var _this, rotate, spd, scales;
      _this = this;
      spd = Math.random() * 1.5 + .25;
      rotate = 360 * 0.25 * (this._height / 200);
      rotate = Math.random() * 2 > 1 ? rotate : -rotate;
      scales = (Math.floor(Math.random() * 10) + 1) * 0.1;

      if (Modernizr.csstransforms) {
        $(target).velocity({ scale: scales }, { duration: 0 });
        return $(target).velocity({
          translateY: -800,
          rotateZ: rotate
        }, (spd + .5) * _this._duration, 'linear', function () {
          return $(this).velocity({
            translateY: _this._height,
            rotateZ: 0
          }, 0, function () {
            return _this.move(target);
          });
        });
      } else {
        return $(target).velocity({
          top: -800,
          rotateZ: rotate
        }, (spd + .5) * _this._duration, 'linear', function () {
          return $(this).velocity({
            top: _this._height,
            rotateZ: 0
          }, 0, function () {
            return _this.move(target);
          });
        });
      }
    };

    FloatObj.prototype.insert = function () {
      var elems, key, ref, val;
      elems = document.createDocumentFragment();
      ref = this.FfloatObj;
      for (key in ref) {
        val = ref[key];
        elems.appendChild(val);
      }
      return this._dom.append(elems);
    };

    FloatObj.prototype.start = function () {
      var i, j, ref, results;
      results = [];
      for (i = j = 0, ref = this._num; 0 <= ref ? j <= ref : j >= ref; i = 0 <= ref ? ++j : --j) {
        results.push(this.move(this.FfloatObj[i]));
      }
      return results;
    };

    FloatObj.prototype.stop = function () {
      var i, j, ref, results;
      results = [];
      for (i = j = 0, ref = this._num; 0 <= ref ? j <= ref : j >= ref; i = 0 <= ref ? ++j : --j) {
        results.push(this.move(this.FfloatObj[i]));
      }
      return results;
    };

    return FloatObj;
  })();

  window.AnimeJAM || (window.AnimeJAM = {});

  window.AnimeJAM.FloatObj = FloatObj || (FloatObj = {});
}).call(undefined);