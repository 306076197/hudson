// JavaScript Document






  function setTab(name,cursel,n){
   for(i=1;i<=n;i++){
    var menu=document.getElementById(name+i);
    var con=document.getElementById("con_"+name+"_"+i);
    menu.className=i==cursel?"hover":"";
    con.style.display=i==cursel?"block":"none";
   }
  }

    function setTabout(name,cursel){

  var menu=document.getElementById(name+cursel);
    menu.className="";
    var con=document.getElementById("con_"+name+"_"+cursel);

    con.style.display="none"; 
  }
  
  
  function showDiv(n){
  $(".markdiv").hide();
document.getElementById(n).style.display='block';
document.getElementById('bg').style.display='block';
}


function closeDiv(n){
document.getElementById(n).style.display='none';
document.getElementById('bg').style.display='none';
}


  function zhankai(name){

    var menu=document.getElementById(name);

 
  menu.className = menu.className== 'zhankaicon2' ? 'zhankaicon' : 'zhankaicon2';
  }
  
  
   function seton(name){
	  var num=document.getElementById(name);

num.style.display = num.style.display == 'block' ? 'none' : 'block';

 }
 
 
 
  function sethover(name,cursel,n){
   for(i=1;i<=n;i++){
    var menu=document.getElementById(name+i);

    menu.className=i==cursel?"hover":"";

   }
  }
   function setqq(name,cursel,n){
   for(i=1;i<=n;i++){
    var menu=document.getElementById(name+i);

    menu.className=i==cursel?"qq":"";

   }
  }
  
  
   function zkset(name,n){

    var menu=document.getElementById(name);

 
  menu.className = menu.className== 'rcword2' ? 'rcword' : 'rcword2';
   var num=document.getElementById(n);
  num.className = num.className== 'hover' ? '' : 'hover';

  }
  
  
 