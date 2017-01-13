<!DOCTYPE html><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title> :.: Calend&aacute;rio de Eventos Desportivos :.: </title>

<link href="comuns/classes.css" rel="stylesheet" type="text/css">
<link href="comuns/objectos.css" rel="stylesheet" type="text/css">
<style type="text/css"><!--
#entrar {
 font-family: Calibri, Arial, Helvetica, sans-serif;
 font-size: 16px; 
 width: 700px; 
 height: 40px;
 font-weight: bold;
 text-align: center;
 box-shadow: 0 0 16px 0 rgba(185,135,20,.7) inset;
}
.formulario { 
 border: 1px solid rgb(255,230,180); 
	padding: 2px 5px 2px 5px; 
 background: none;
 box-shadow: none;
 box-shadow: 0 0 1px 0 rgba(185,135,20,.7) inset;
}
.botao { 
 padding: 0;
 border: none; 
 width: 24px;
 height: 24px;
}
::-webkit-input-placeholder { /* WebKit, Blink, Edge */
 color: rgb(185,135,20);
}
:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
 color: rgb(185,135,20); opacity: 1; 
}
::-moz-placeholder { /* Mozilla Firefox 19+ */
 color: rgb(185,135,20); opacity: 1; 
}
:-ms-input-placeholder { /* Internet Explorer 10-11 */
 color: rgb(185,135,20);
}
--></style>

<script type="text/javascript" src="comuns/geral.js"></script>
<script type="text/javascript" src="comuns/janela.js"></script>
<script><!--
function Centro_Alto () {  // TOTAL - RODAPE 
 document.getElementById("materia").style.height = alto-126+"px";
}
// --></script>
</head>

<body onLoad="Apontar_Nome (), Janela ()">
<table border="0" align="center" cellpadding="0" cellspacing="0" id="materia">
 <tr><td>&nbsp;</td></tr>
 <tr><td align="center" height="30%">&nbsp;</td></tr>
 <tr><td>&nbsp;</td></tr>

 <tr><td align="center"><b style="text-transform:uppercase; font-size:20px;">Calend&aacute;rio de Eventos Desportivos</b></td></tr>

 <tr><td align="center">&nbsp;</td></tr>

 <tr><td id="entrar">
 <form action="barreira.php" method="post" name="sessao" onSubmit="return Validar_Sessao ()">
 <table border="0" cellpadding="0" cellspacing="0" align="center">
  <tr>
  <td><img src="imagens/login-utilizador.png" width="24" border="0" style="margin-top:5px;"> &nbsp; </td>
  <td><input name="nome" type="text" class="formulario sombra" maxlength="20" placeholder="Nome de Utilizador"> &nbsp; &nbsp; </td>
  <td><img src="imagens/login-passe.png" width="24" border="0" style="margin-top:5px;"> &nbsp; </td>
  <td><input name="passe" type="password" class="formulario" maxlength="12" placeholder="Palavra-Passe"> &nbsp; &nbsp; </td>
  <td><button type="submit" class="botao"><img src="imagens/login-entrar.png" width="24" border="0" style="margin:-2px;" title="ENTRAR"></button></td>
  </tr>
 </table>
 </form>
 </td></tr>

 <tr><td>
  <?php if (isset ($_GET ['info'])) { $info = $_GET ['info']; } else { $info = ""; } ?>
  <?php if ($info != "" && $info == "1") { ?>
  <p align="center" class="pequeno"><b>Algo foi esquecido, ou o Nome de Utilizador ou a Palavra-Passe.</b></p>
  <?php } ?>
  <?php if ($info != "" && $info == "2" || $info == "4") { ?>
  <p align="center" class="pequeno"><b>Nome de Utilizador e/ou Palavra-Passe inv&aacute;lidos.</b></p>
  <?php } ?>
  <?php if ($info != "" && $info == "2") { ?>
  <p align="center" class="pequeno">Se esqueceu a Palavra-Passe, por favor, solicite uma nova, ao administrador da plataforma.</p>
  <?php } ?>
  <?php if ($info == "2" || $info == "4") { ?>
  <p align="center" class="pequeno">Se pretende de aceder a esta plataforma e ainda n&atilde;o tem dados que o permitam <a>solicite-os</a>.</p>
  <?php } ?>
  <?php if ($info != "" && $info == "3") { ?>
  <p align="center"><b>A Palavra-Passe foi alterada.</b></p>
  <?php } ?>
  <?php if ($info != "" && $info == "5") { ?>
  <p align="center"><b>N&atilde;o tem permiss&atilde;o para aceder a esta plataforma.</b></p>
  <?php } ?>
 </td></tr>

 <tr><td>&nbsp;</td></tr>
</table>
<div><iframe id="iframe_rodape" src="rodape.php" frameborder="0" scrolling="NO" allowtransparency="TRUE"></iframe></div>
</body>
</html>
