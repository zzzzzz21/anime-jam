'use strict';

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError('Cannot call a class as a function'); } }

requirejs.config({
	baseUrl: '/assets/js/',
	paths: {
		'jquery': ['lib/jquery-1.11.1.min'],
		'velocity': ['lib/velocity.min'],
		'modernizr': ['lib/modernizr.custom.21931']
	},
	shim: {
		'jquery': {
			exports: '$'
		},
		'velocity': {
			deps: ['jquery'],
			exports: 'velocity'
		}
	}
});

require(['modernizr', 'jquery', 'velocity',, 'common.floatObj'], function (modernizr, $, velocity) {

	(function (root) {
		var COMMON = (function () {
			function COMMON() {
				_classCallCheck(this, COMMON);

				this.cacheElements();
				this.bindEvents();
				this.build();
			}

			COMMON.prototype.cacheElements = function cacheElements() {
				this.$mod_pageTop = $('.mod-pageTop');
			};

			COMMON.prototype.bindEvents = function bindEvents() {
				this.$mod_pageTop.on('click', function (event) {
					console.log("on");
					$('html,body').velocity("scroll", { offset: -75, easing: 'easeInOutCubic', duration: 750 });
				});
				// star animation
				var floatObj = new window.AnimeJAM.FloatObj({
					target: '.layout-fixedObj',
					duration: 10000,
					num: 10,
					images: ['assets/fig/common/bg_obj_circle01.png', 'assets/fig/common/bg_obj_circle02.png', 'assets/fig/common/bg_obj_line.png', 'assets/fig/common/bg_obj_triangle01.png', 'assets/fig/common/bg_obj_triangle02.png']
				});
				floatObj.start();
			};

			COMMON.prototype.build = function build() {};

			return COMMON;
		})();

		root.AnimeJAM = root.AnimeJAM || {};
		root.AnimeJAM.COMMON = COMMON || {};

		$(function () {
			new root.AnimeJAM.COMMON();
		});
	})(window);
});