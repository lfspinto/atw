// JavaScript Document

if( typeof( window.innerWidth ) == 'number' ) {
  largo = window.innerWidth;
  alto = window.innerHeight;
} else if( document.documentElement && ( document.documentElement.offsetWidth || document.documentElement.offsetHeight ) ) {
  largo = document.documentElement.offsetWidth;
  alto = document.documentElement.offsetHeight;
} else if( document.body && ( document.body.offsetWidth || document.body.offsetHeight ) ) {
  largo = document.body.offsetWidth;
  alto = document.body.offsetHeight;
}


function Janela () {
 if (alto > 400) { Centro_Alto (); }
}
function Centro_Alto () {  // TOTAL - TOPO - RODAPE
 document.getElementById("miolo").style.height = alto-90-120-5+"px";
}

window.onload = function () { Janela (); }
window.onresize = function () { Janela (); }
