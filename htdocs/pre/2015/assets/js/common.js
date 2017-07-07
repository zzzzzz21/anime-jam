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

require(['modernizr', 'jquery', 'velocity', 'common.floatObj'], function (modernizr, $, velocity) {

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
								this.$mod_nav_lineup = $('.mod-nav-lineup');
								this.$mod_header_lineup = $('.mod-header-lineup');
								this.$header = $('header');
								this.headerState_1 = false;
								this.headerState_2 = false;
						};

						COMMON.prototype.bindEvents = function bindEvents() {

								var _this = this;

								this.$mod_nav_lineup.on({
										'mouseenter': function mouseenter() {
												_this.headerState_1 = true;
												_this.$mod_nav_lineup.addClass('active');
												_this.$mod_header_lineup.css({ 'display': 'block' });
										},
										'mouseleave': function mouseleave() {
												if (!_this.headerState_2) {
														_this.$mod_nav_lineup.removeClass('active');
														_this.$mod_header_lineup.css({ 'display': 'none' });
												}
										}
								});

								this.$mod_header_lineup.on({
										'mouseenter': function mouseenter() {
												if (_this.headerState_1) {
														_this.headerState_2 = true;
														_this.$mod_nav_lineup.addClass('active');
														_this.$mod_header_lineup.css({ 'display': 'block' });
												}
										},
										'mouseleave': function mouseleave() {
												if (_this.headerState_2) {
														_this.$mod_header_lineup.css({ 'display': 'none' });
														_this.$mod_nav_lineup.removeClass('active');
														_this.headerState_2 = false;
														_this.headerState_1 = false;
												}
										}
								});

								this.$mod_pageTop.on('click', function (event) {
										$('html,body').velocity("scroll", { offset: -75, easing: 'easeInOutCubic', duration: 750 });
								});
								// star animation
								var floatObj = new window.AnimeJAM.FloatObj({
										target: '.layout-fixedObj',
										duration: 10000,
										num: 10,
										images: ['/assets/fig/common/bg_obj_circle01.png', '/assets/fig/common/bg_obj_circle02.png', '/assets/fig/common/bg_obj_line.png', '/assets/fig/common/bg_obj_triangle01.png', '/assets/fig/common/bg_obj_triangle02.png']
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