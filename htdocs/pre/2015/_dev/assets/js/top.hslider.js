'use strict';

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError('Cannot call a class as a function'); } }

require(['modernizr', 'jquery', 'velocity'], function (modernizr, $, velocity) {

	(function (root) {
		var HorizontalSlide = (function () {
			function HorizontalSlide() {
				_classCallCheck(this, HorizontalSlide);

				this.cacheElements();
				this.build();
			}

			HorizontalSlide.prototype.cacheElements = function cacheElements() {
				this.$layout_linuptItemlists = $('.layout-lineuptItemlists');
			};

			HorizontalSlide.prototype.build = function build() {
				var _this = this,
				    setItem = 3,
				    listLength = 0,
				    itemWidth = 0,
				    itemMargin = 0,
				    listWidth = 0;

				function init() {
					listLength = _this.$layout_linuptItemlists.find('.layout-lineuptItemlist li').length / _this.$layout_linuptItemlists.find('.layout-lineuptItemlist').length, itemWidth = _this.$layout_linuptItemlists.find('.layout-lineuptItemlist li').width(), itemMargin = parseInt(_this.$layout_linuptItemlists.find('.layout-lineuptItemlist li').eq(1).css("marginLeft")), listWidth = listLength * itemWidth + (listLength - 1) * itemMargin;

					for (var i = 0; i < setItem - 1; i++) {
						_this.$layout_linuptItemlists.append(_this.$layout_linuptItemlists.find('.layout-lineuptItemlist').eq(0).clone());
					};
					slide_set();
				}

				function slide_set() {

					_this.$layout_linuptItemlists.find('.layout-lineuptItemlist').css({
						width: listWidth
					});
					_this.$layout_linuptItemlists.find('.layout-lineuptItemlist').each(function (index, el) {
						if (Modernizr.csstransforms) {
							$(el).velocity({ translateX: listWidth * index }, { duration: 0 });
						} else {
							$(el).css({ left: listWidth * index });
						}
					});

					slide();
				}

				function slide() {
					_this.$layout_linuptItemlists.find('.layout-lineuptItemlist').each(function (index, el) {
						if (Modernizr.csstransforms) {
							$(el).velocity({ translateX: listWidth * index - listWidth }, { duration: 70000, easing: 'linear',
								complete: function complete() {
									if (index == 2) {
										slide_set();
									}
								}
							});
						} else {
							$(el).velocity({ left: listWidth * index - listWidth }, { duration: 70000, easing: 'linear' });
						}
					});
				}
				init();
			};

			return HorizontalSlide;
		})();

		root.AnimeJAM = root.AnimeJAM || {};
		root.AnimeJAM.HorizontalSlide = HorizontalSlide || {};

		$(function () {
			new root.AnimeJAM.HorizontalSlide();
		});
	})(window);
});