// JavaScript Document
/* 
Cria uma lista a partir de uma procura, na base de dados, pelo termo indicado numa caixa de texto, pelo utilizador.
Ao navegar pela lista com as setas a página vai permanecer no lugar. 
Ao seleccionar com a tecla ENTER o formulário não será subtido, a selecção aparecerá na caixa de texto e a caixa receberá o foco.
*/

function Mostrar_Bloco (bloco) { 
 document.getElementById (bloco).style.display = "block"; 
}
function Esconder_Bloco (bloco) {
 document.getElementById (bloco).style.display = "none"; 
}

function Procurar (campo, pagina, tabela, bloco) { 
 if (window.XMLHttpRequest) {  // - for IE7+, Firefox, Chrome, Opera, Safari
    ficheiro = new XMLHttpRequest (); }
 else {  // for IE6, IE5
    ficheiro = new ActiveXObject ("Microsoft.XMLHTTP"); }

 if (document.getElementById (campo).value != "") { 
 ficheiro.open ("POST", pagina +".php", false);
 ficheiro.setRequestHeader ("Content-type", "application/x-www-form-urlencoded");
 if (ficheiro.overrideMimeType) { ficheiro.overrideMimeType ("text/html; charset=utf-8"); }
 ficheiro.onreadystatechange = function () {
  if (ficheiro.readyState == 4 && ficheiro.status == 200) { 
   texto = ficheiro.responseText; 
  } 
 }
 ficheiro.send ("termo="+ document.getElementById (campo).value +"&tabela="+ tabela +"&coluna="+ campo);
 } 

 itens = texto.split ("$"); 

 opt = "";
 for (i = 0; i < itens.length; i++) {
  subitens = itens [i].split ("##"); 
  if (subitens [2] != undefined) {
   opt += "<div id=\"opcao_"+ i +"\" onClick=\"Escolha ("+ i +", "+ campo +", "+ bloco +")\">"+ subitens [2] +"</div>"; 
  }
 }

 if (subitens [2] != undefined) {
  document.getElementById (bloco).innerHTML = opt;
  document.getElementById (bloco).style.display = "block";
  n = -1; Seta (campo, bloco);
 }

 if (texto == "" || document.getElementById (campo).value == "") { 
  document.getElementById (bloco).innerHTML = "";
  document.getElementById (bloco).style.display = "none";
 }
}

function Seta (campo, bloco) { 
 document.onkeydown = function (e) { tecla = (window.event) ? event.keyCode : e.keyCode; 
  // Define o sentido conforme as teclas SETA acima ou SETA abaixo. 
  if (tecla == 38 && n == 0) { e.preventDefault (); document.getElementById (campo).focus (); }
  if (tecla == 38 && n > 0) { e.preventDefault (); document.getElementById (campo).blur (); Acima (); }
  if (tecla == 40 && n < i-1) { e.preventDefault (); document.getElementById (campo).blur (); Abaixo (); }
  if (tecla == 13) { e.preventDefault (); Escolha (n, campo, bloco); } 
  // tecla 27 - ESC . tecla 9 - TAB
  if (tecla == 27 || tecla == 9) { 
   document.getElementById (bloco).style.display = "none"; 
   document.getElementById (bloco).innerHTML = ""; 
   document.getElementById (campo).blur (); 
   document.getElementById (campo).focus (); 
   document.onkeydown = function (e) { return true; } 
  } 
 } 
}

function Abaixo () { 
 if (n >= 0) { document.getElementById ("opcao_"+ eval (n)).style.background = "none"; }
 if (n <= i && n < 9) { n = n+1; }  // Apenas vai seleccionar os resultados de 0 a 9 - (8+1 !!)
 document.getElementById ("opcao_"+ eval (n)).style.background = "rgb(210,220,240)"; 
}
function Acima () {
 document.getElementById ("opcao_"+ eval (n)).style.background = "none";
 n = n-1;
 document.getElementById ("opcao_"+ eval (n)).style.background = "rgb(210,220,240)";
}

function Escolha (s, campo, bloco) { 
 document.onkeydown = function (e) { return true; } 
 if (typeof s != "number") { s = n; }
 document.getElementById ("opcao_"+ eval (s)).style.background = "rgb(210,220,240)";
 valor = itens [s].split ("##"); nmr = valor [0]; nome = valor [1]; 
 n = -1; 
 if (typeof bloco != "object") { 
  document.getElementById (campo).value = nome; 
  document.getElementById (bloco).style.display = "none"; 
  document.getElementById (bloco).innerHTML = ""; 
  document.getElementById (campo).focus (); 
 } 
 if (typeof bloco == "object") { 
  campo.value = nome; 
  bloco.style.display = "none"; 
  bloco.innerHTML = "";
  campo.focus (); 
 } 
}
