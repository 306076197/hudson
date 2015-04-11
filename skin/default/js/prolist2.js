 

			
	
	
			jQuery(function(){
			if (!$('#slide1')[0]) 
			return;
			var i = 0, p = $('#slide1 ul'), pList = $('#slide1 ul li'), len = pList.length;
			var elePrev = $('#pre1'), eleNext = $('#next1');
			//var firstClick = false;
		var w = 82, num = 3;
		//	p.css('width',w*len);
			if (len <= num) 
			eleNext.addClass('gray');
			function prev(){
			if (elePrev.hasClass('gray')) {
			//alert('已经是第一张了');
			return;
			}
			p.animate({
			marginLeft:-(--i) * w
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
			marginLeft:-(++i) * w
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
			    $('#slide1 ul li.cur').removeClass('cur');
			$(this).addClass('cur');
//				show(n);
				
			}).mouseover(function(){
		
			}).mouseout(function(){

			})
			});
			
//				function show(i){
//			var ad = areaDailyList1[i];
//		
//		
//			$('#dailyImage1').attr('src',ad.image);
//			
//			
//			}
		
			});
			
			
			
			jQuery(function(){
			if (!$('#slide2')[0]) 
			return;
			var i = 0, p = $('#slide2 ul'), pList = $('#slide2 ul li'), len = pList.length;
			var elePrev = $('#pre2'), eleNext = $('#next2');
			//var firstClick = false;
		var w = 82, num = 3;
		//	p.css('width',w*len);
			if (len <= num) 
			eleNext.addClass('gray');
			function prev(){
			if (elePrev.hasClass('gray')) {
			//alert('已经是第一张了');
			return;
			}
			p.animate({
			marginLeft:-(--i) * w
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
			marginLeft:-(++i) * w
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
			    $('#slide2 ul li.cur').removeClass('cur');
			$(this).addClass('cur');
//				show(n);
			}).mouseover(function(){
		
			}).mouseout(function(){

			})
			});
			
//				function show(i){
//			var ad = areaDailyList2[i];
//		
//		
//			$('#dailyImage2').attr('src',ad.image);
//			
//			
//			}
		
			});
			
			jQuery(function(){
			if (!$('#slide3')[0]) 
			return;
			var i = 0, p = $('#slide3 ul'), pList = $('#slide3 ul li'), len = pList.length;
			var elePrev = $('#pre3'), eleNext = $('#next3');
			//var firstClick = false;
		var w = 82, num = 3;
			//p.css('width',w*len);
			if (len <= num) 
			eleNext.addClass('gray');
			function prev(){
			if (elePrev.hasClass('gray')) {
			//alert('已经是第一张了');
			return;
			}
			p.animate({
			marginLeft:-(--i) * w
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
			marginLeft:-(++i) * w
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
			    $('#slide3 ul li.cur').removeClass('cur');
			$(this).addClass('cur');
//				show(n);
			}).mouseover(function(){
		
			}).mouseout(function(){

			})
			});
//			
//				function show(i){
//			var ad = areaDailyList3[i];
//		
//		
//			$('#dailyImage3').attr('src',ad.image);
//			
//			
//			}
		
			});
			
			jQuery(function(){
			if (!$('#slide4')[0]) 
			return;
			var i = 0, p = $('#slide4 ul'), pList = $('#slide4 ul li'), len = pList.length;
			var elePrev = $('#pre4'), eleNext = $('#next4');
			//var firstClick = false;
		var w = 82, num = 3;
			//p.css('width',w*len);
			if (len <= num) 
			eleNext.addClass('gray');
			function prev(){
			if (elePrev.hasClass('gray')) {
			//alert('已经是第一张了');
			return;
			}
			p.animate({
			marginLeft:-(--i) * w
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
			marginLeft:-(++i) * w
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
			    $('#slide4 ul li.cur').removeClass('cur');
			$(this).addClass('cur');
//				show(n);
			}).mouseover(function(){
		
			}).mouseout(function(){

			})
			});
//			
//				function show(i){
//			var ad = areaDailyList4[i];
//		
//		
//			$('#dailyImage4').attr('src',ad.image);
//			
//			}
			
		
			});