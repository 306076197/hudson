 
	
			jQuery(function(){
			if (!$('#slide1')[0]) 
			return;
			var i = 0, p = $('#slide1 ul'), pList = $('#slide1 ul li'), len = pList.length;
			var elePrev = $('#pre'), eleNext = $('#next');
			//var firstClick = false;
			var w = 90, num = 2;
			p.css('height',w*len);
			if (len <= num) 
			eleNext.addClass('gray');
			function prev(){
			if (elePrev.hasClass('gray')) {
			//alert('已经是第一张了');
			return;
			}
			p.animate({
			marginTop:-(--i) * w
			},500);
			if (i < len - num) {
			eleNext.removeClass('gray');
			}
			if (i == 0) {
			elePrev.addClass('gray');
			}
			}
			function next(){
			if (eleNext.hasClass('gray')) {
			//alert('已经是最后一张了');
			return;
			}
			//p.css('margin-left',-(++i) * w);
			p.animate({
			marginTop:-(++i) * w
			},500);
			if (i != 0) {
			elePrev.removeClass('gray');
			}
			if (i == len - num) {
			eleNext.addClass('gray');
			}
			}
			elePrev.bind('click',prev);
			eleNext.bind('click',next);
			pList.each(function(n,v){
			$(this).click(function(){
			if(n-i == 2){
			next();
			}
			if(n-i == 0){
			prev()
			}
	
			}).mouseover(function(){
			$(this).addClass('hover');
			}).mouseout(function(){
			$(this).removeClass('hover');
			})
			});
		
			});
			
			
			jQuery(function(){
			if (!$('#slide2')[0]) 
			return;
			var i = 0, p = $('#slide2 ul'), pList = $('#slide2 ul li'), len = pList.length;
			var elePrev = $('#pre2'), eleNext = $('#next2');
			//var firstClick = false;
			var w = 90, num = 2;
			p.css('height',w*len);
			if (len <= num) 
			eleNext.addClass('gray');
			function prev(){
			if (elePrev.hasClass('gray')) {
			//alert('已经是第一张了');
			return;
			}
			p.animate({
			marginTop:-(--i) * w
			},500);
			if (i < len - num) {
			eleNext.removeClass('gray');
			}
			if (i == 0) {
			elePrev.addClass('gray');
			}
			}
			function next(){
			if (eleNext.hasClass('gray')) {
			//alert('已经是最后一张了');
			return;
			}
			//p.css('margin-left',-(++i) * w);
			p.animate({
			marginTop:-(++i) * w
			},500);
			if (i != 0) {
			elePrev.removeClass('gray');
			}
			if (i == len - num) {
			eleNext.addClass('gray');
			}
			}
			elePrev.bind('click',prev);
			eleNext.bind('click',next);
			pList.each(function(n,v){
			$(this).click(function(){
			if(n-i == 2){
			next();
			}
			if(n-i == 0){
			prev()
			}
	
			}).mouseover(function(){
			$(this).addClass('hover');
			}).mouseout(function(){
			$(this).removeClass('hover');
			})
			});
		
			});
			
			jQuery(function(){
			if (!$('#slide3')[0]) 
			return;
			var i = 0, p = $('#slide3 ul'), pList = $('#slide3 ul li'), len = pList.length;
			var elePrev = $('#pre3'), eleNext = $('#next3');
			//var firstClick = false;
			var w = 90, num = 2;
			p.css('height',w*len);
			if (len <= num) 
			eleNext.addClass('gray');
			function prev(){
			if (elePrev.hasClass('gray')) {
			//alert('已经是第一张了');
			return;
			}
			p.animate({
			marginTop:-(--i) * w
			},500);
			if (i < len - num) {
			eleNext.removeClass('gray');
			}
			if (i == 0) {
			elePrev.addClass('gray');
			}
			}
			function next(){
			if (eleNext.hasClass('gray')) {
			//alert('已经是最后一张了');
			return;
			}
			//p.css('margin-left',-(++i) * w);
			p.animate({
			marginTop:-(++i) * w
			},500);
			if (i != 0) {
			elePrev.removeClass('gray');
			}
			if (i == len - num) {
			eleNext.addClass('gray');
			}
			}
			elePrev.bind('click',prev);
			eleNext.bind('click',next);
			pList.each(function(n,v){
			$(this).click(function(){
			if(n-i == 2){
			next();
			}
			if(n-i == 0){
			prev()
			}
	
			}).mouseover(function(){
			$(this).addClass('hover');
			}).mouseout(function(){
			$(this).removeClass('hover');
			})
			});
		
			});
			
			jQuery(function(){
			if (!$('#slide4')[0]) 
			return;
			var i = 0, p = $('#slide4 ul'), pList = $('#slide4 ul li'), len = pList.length;
			var elePrev = $('#pre4'), eleNext = $('#next4');
			//var firstClick = false;
			var w = 90, num = 2;
			p.css('height',w*len);
			if (len <= num) 
			eleNext.addClass('gray');
			function prev(){
			if (elePrev.hasClass('gray')) {
			//alert('已经是第一张了');
			return;
			}
			p.animate({
			marginTop:-(--i) * w
			},500);
			if (i < len - num) {
			eleNext.removeClass('gray');
			}
			if (i == 0) {
			elePrev.addClass('gray');
			}
			}
			function next(){
			if (eleNext.hasClass('gray')) {
			//alert('已经是最后一张了');
			return;
			}
			//p.css('margin-left',-(++i) * w);
			p.animate({
			marginTop:-(++i) * w
			},500);
			if (i != 0) {
			elePrev.removeClass('gray');
			}
			if (i == len - num) {
			eleNext.addClass('gray');
			}
			}
			elePrev.bind('click',prev);
			eleNext.bind('click',next);
			pList.each(function(n,v){
			$(this).click(function(){
			if(n-i == 2){
			next();
			}
			if(n-i == 0){
			prev()
			}
	
			}).mouseover(function(){
			$(this).addClass('hover');
			}).mouseout(function(){
			$(this).removeClass('hover');
			})
			});
		
			});
			
		