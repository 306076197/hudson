$(document).ready(function(){
	m_prod_catalog();
	h_list();
	h_list2();
	m1();
	school();
    nav();
	lihover();
	

});

function m_prod_catalog(){
	var self = "";
	var self_top = "";
	var pos_nav_offsetTop = "";
	$("#m-prod-catalog li").hover(
		function(){
			self = $(this);
			self.addClass("hover").children("div").show();
		},
		function(){
			self = $(this);
			self.children("div").hide();
			self.removeClass("hover");
		}
	);
};

function nav(){
	var self = "";
	var self_top = "";
	var pos_nav_offsetTop = "";
	$("#nav li.lihover").hover(
		function(){
			self = $(this);
			self.addClass("hover");
			document.getElementById("navbg").style.display="block";
			
			
			
		},
		function(){
			self = $(this);
			self.removeClass("hover");
		document.getElementById("navbg").style.display="none";
			
		}
	);
};



function m1(){
	var self = "";
	var self_top = "";
	var pos_nav_offsetTop = "";
	$("#m1 li").hover(
		function(){
			self = $(this);
			self.addClass("hover").children("div").show();
		},
		function(){
			self = $(this);
			self.children("div").hide();
			self.removeClass("hover");
		}
	);
};


function h_list(){
	var self = "";
	var self_top = "";
	var pos_nav_offsetTop = "";
	$(".h_list li").hover(
		function(){
			self = $(this);
			self.addClass("hover").children("div").show();
		},
		function(){
			self = $(this);
			self.children("div").hide();
			self.removeClass("hover");
		}
	);
};

function h_list2(){
	var self = "";
	var self_top = "";
	var pos_nav_offsetTop = "";
	$(".h_list2 li").hover(
		function(){
			self = $(this);
			self.addClass("hover").children("div").show();
		},
		function(){
			self = $(this);
			self.children("div").hide();
			self.removeClass("hover");
		}
	);
};

function school(){
	var self = "";
	var self_top = "";
	var pos_nav_offsetTop = "";
	$("#school li").hover(
		function(){
			self = $(this);
			self.addClass("hover").children("div").show();
		},
		function(){
			self = $(this);
			self.children("div").hide();
			self.removeClass("hover");
		}
	);
};

function lihover(){
	var self = "";
	var self_top = "";
	var pos_nav_offsetTop = "";
	$(".lihover li").hover(
		function(){
			self = $(this);
			self.addClass("hover");
		},
		function(){
			self = $(this);
			self.removeClass("hover");
		}
	);
};
