var ytWhatsapp = (function () {
	function ytWhatsapp () {
		var s = this;
		LExtends(s, LSprite, []);

		var backgroundBmp = new LBitmap(dataList["default_menu_background"]);
		backgroundBmp.scaleX = LGlobal.width / backgroundBmp.getWidth();
		backgroundBmp.scaleY = LGlobal.height / backgroundBmp.getHeight();
		s.addChild(backgroundBmp);

		s.addEventListener();
		s.addBtns();

	}
	ytWhatsapp.prototype.addEventListener = (function(){
		//aqui compartir por whatsapp
		var link = "+573123677063";                             
		window.open('https://api.whatsapp.com/send?phone='+link+'&text=Llegue hasta '+rs+' metros en IntercupCalleGame '+now, '_blank');
		//aqui compartir por whatsapp
	})	

	ytWhatsapp.prototype.addBtns = function () {

		
		var s = this;

		s.btnLayer.y = s.txtLayer.y + s.txtLayer.getHeight() + 10;

		var btnTxtList = [
			"Volver a intentarlo",
			"Regresar al el Menu",
			"Escoger piloto",
		];

		for (var k = 0, btnY = 0; k < btnTxtList.length; k++) {
			var btnTxt = s.txtTemplate.clone();
			btnTxt.size = 10;
			btnTxt.text = btnTxtList[k];
			var btn = new ytButton(1, [btnTxt, "center", "middle"], [0.5, 0.5]);
			btn.index = k;
			btn.x = (s.getWidth() - btn.getWidth()) * 0.5;
			btn.y = btnY;
			s.btnLayer.addChild(btn);

			btn.addEventListener(LMouseEvent.MOUSE_UP, function (e) {
				var eve = new LEvent(ytResultBox.EVENT_CLICK_BUTTON);
				eve.msg = e.currentTarget.index;

				s.dispatchEvent(eve);
			});

			btnY += btn.getHeight() + 20;

			
		}
	};

	
		
	return ytWhatsapp;
})();