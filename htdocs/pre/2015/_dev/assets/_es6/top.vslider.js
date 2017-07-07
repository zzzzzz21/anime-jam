require(['jquery',,'velocity'], function($,velocity) {

	(function(root){

		class VerticalSlider{

			constructor(){
				this.cacheElements();
				this.build();
			}
			cacheElements(){
				this.$layout_slider = $('.layout-slider');
				this.targetList = ['main01','main01','main01','main01'];
				this.current = 0;
				this.sliderTimer = 0;
				this.directive=true;
				this._clickflg=true;
			}
			build(){

				var _this = this;

				// prev btn
				this.$layout_slider.find('.mod-interim_prev').on('click', function(event) {
					if(_this._clickflg){
						_this._clickflg = false;
						_this.current--;
						_this.directive=false;
						slideCtrl();
					}
				});

				// next btn
				this.$layout_slider.find('.mod-interim_next').on('click', function(event) {
					if(_this._clickflg){
						_this._clickflg = false;
						_this.current++;
						_this.directive=true;
						slideCtrl();
					}
				});
				

				// init
				function init(){
					_this.current++;
					_this.sliderTimer= setTimeout(function(){slideCtrl()},5000)
				}

				function slideCtrl(){

					clearTimeout(_this.sliderTimer)

					// move first item
					if(_this.current>_this.targetList.length-1){
						_this.current=0;
					}

					if(_this.current < 0){
						_this.current = _this.targetList.length-1;
					}

					if(_this.directive){
						slideNext();
					} else {
						slidePrev();
					}

				}

				// slide next
				function slideNext(){


					$('.mod-sliderTicketLink').velocity({"opacity":0},{duration:500,easing:'easeInOutCubic',
						complete:function(){
							switch(_this.current){
								case 0:
									$('#mod-sliderTicketBtn1').css({'display':'block'})
									$('#mod-sliderTicketBtn2').css({'display':'none'})
									$('.mod-sliderTicketLink').css({"top":"auto","bottom":"40px","left":"50%","margin-left":"-14.4%"}).velocity({"opacity":1},{duration:500,easing:'easeInOutCubic'});
									break;
								case 1:
									$('#mod-sliderTicketBtn1').css({'display':'none'})
									$('#mod-sliderTicketBtn2').css({'display':'none'})
									// 	$('#mod-sliderTicketBtn1').css({'display':'none'})
									// 	$('#mod-sliderTicketBtn2').css({'display':'block'})
									// 	$('.mod-sliderTicketLink').css({"top":"50%","bottom":"auto","left":"0","margin-left":"0px"}).velocity({"opacity":1},{duration:500,easing:'easeInOutCubic'})
									break;
								default:
									$('#mod-sliderTicketBtn1').css({'display':'none'})
									$('#mod-sliderTicketBtn2').css({'display':'none'})
									break;									
							}
						}
					})

					_this.$layout_slider.find('.mod-slideImgLeftNext img').attr('src','assets/fig/top/main/'+ _this.targetList[_this.current]+'_01.jpg')
					_this.$layout_slider.find('.mod-slideImgRightNext img').attr('src','assets/fig/top/main/'+ _this.targetList[_this.current]+'_02.jpg')

					_this.$layout_slider.find('.mod-slideImgLeftNext').css({'top':'-100%'}).velocity({top:0},{duration:750,easing:'easeInOutCubic'})
					_this.$layout_slider.find('.mod-slideImgRightNext').css({'top':'100%'}).velocity({top:0},{duration:750,easing:'easeInOutCubic'})

					_this.$layout_slider.find('.mod-slideImgLeftCurrent').velocity({top:'100%'},{duration:750,easing:'easeInOutCubic',
						complete:function(){
							_this.$layout_slider.find('.mod-slideImgLeftCurrent img').attr('src','assets/fig/top/main/'+ _this.targetList[_this.current]+'_01.jpg')
							_this.$layout_slider.find('.mod-slideImgLeftCurrent').css({'top':'0%'})
							_this.$layout_slider.find('.mod-slideImgLeftNext').css({'top':'100%'})
						}
					})
					_this.$layout_slider.find('.mod-slideImgRightCurrent').velocity({top:'-100%'},{duration:750,easing:'easeInOutCubic',
						complete:function(){
							_this.$layout_slider.find('.mod-slideImgRightCurrent img').attr('src','assets/fig/top/main/'+ _this.targetList[_this.current]+'_02.jpg')							
							_this.$layout_slider.find('.mod-slideImgRightCurrent').css({'top':'0%'})
							_this.$layout_slider.find('.mod-slideImgRightNext').css({'top':'-100%'})

							_this._clickflg = true;
							_this.sliderTimer= setTimeout(function(){_this.current++;_this.directive=true;slideCtrl()},5000)
						}
					})

				}

				// slide prev
				function slidePrev(){

					_this.$layout_slider.find('.mod-slideImgLeftNext img').attr('src','assets/fig/top/main/'+ _this.targetList[_this.current]+'_01.jpg')
					_this.$layout_slider.find('.mod-slideImgRightNext img').attr('src','assets/fig/top/main/'+ _this.targetList[_this.current]+'_02.jpg')

					_this.$layout_slider.find('.mod-slideImgLeftNext').css({'top':'100%'}).velocity({top:0},{duration:750,easing:'easeInOutCubic'})
					_this.$layout_slider.find('.mod-slideImgRightNext').css({'top':'-100%'}).velocity({top:0},{duration:750,easing:'easeInOutCubic'})

					_this.$layout_slider.find('.mod-slideImgLeftCurrent').velocity({top:'-100%'},{duration:750,easing:'easeInOutCubic',
						complete:function(){
							_this.$layout_slider.find('.mod-slideImgLeftCurrent img').attr('src','assets/fig/top/main/'+ _this.targetList[_this.current]+'_01.jpg')
							_this.$layout_slider.find('.mod-slideImgLeftCurrent').css({'top':'0%'})
							_this.$layout_slider.find('.mod-slideImgLeftNext').css({'top':'100%'})
						}
					})
					_this.$layout_slider.find('.mod-slideImgRightCurrent').velocity({top:'100%'},{duration:750,easing:'easeInOutCubic',
						complete:function(){
							_this.$layout_slider.find('.mod-slideImgRightCurrent img').attr('src','assets/fig/top/main/'+ _this.targetList[_this.current]+'_01.jpg')							
							_this.$layout_slider.find('.mod-slideImgRightCurrent').css({'top':'0%'})
							_this.$layout_slider.find('.mod-slideImgRightNext').css({'top':'-100%'})
							_this._clickflg = true;
							_this.sliderTimer= setTimeout(function(){_this.current++;_this.directive=true;slideCtrl()},5000)
						}
					})

				}

				init();

			}

		}

		root.AnimeJAM = root.AnimeJAM || {}
		root.AnimeJAM.VerticalSlider = VerticalSlider || {}

		$(function(){
			new root.AnimeJAM.VerticalSlider();
		})

	}(window))

});
