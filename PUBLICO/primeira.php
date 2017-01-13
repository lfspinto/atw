<!DOCTYPE html><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title> :.: Calend&aacute;rio de Eventos Desportivos :.: </title>

<link href="comuns/classes.css" rel="stylesheet" type="text/css">
<link href="comuns/objectos.css" rel="stylesheet" type="text/css">
<link href="comuns/colunas1.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="comuns/janela.js"></script>
</head>

<body onLoad="Janela ()">
<div id="div_topo"><iframe id="iframe_topo" src="topo.php" frameborder="0" scrolling="NO" allowtransparency="TRUE"></iframe></div>
<table border="0" align="center" cellpadding="0" cellspacing="0" id="miolo">
 <tr><td>&nbsp;</td></tr>
 <tr><td>

 <?php include_once "comuns/comuns.php"; ?>
 <?php include_once "ligar/base.php"; include_once "ligar/calendario.php"; 
       $data = date ("Y-m-d");
       $ler_evts = mysql_query ("SELECT *, eventos.ID as ID, eventos.nome as evento, categorias.nome as categoria, utilizadores.nome as promotor 
                                 FROM eventos, categorias, utilizadores 
                                 WHERE eventos.promotor LIKE utilizadores.ID
                                 AND eventos.categoria LIKE categorias.ID
                                 AND data > '$data'
                                ");
       if (mysql_num_rows ($ler_evts) == TRUE) { while ($ver_evts = mysql_fetch_array ($ler_evts)) {
 ?>
 <table cellpadding="0" cellspacing="0" id="evento" width="45%" style="float:left;margin:2.5%;background-color:rgb(203,215,153);height:200px;">
 <tr><td width="200" style="background-color:rgb(153,165,103);">

     <img width="200" src="imagens/evt01.jpg" style="float:left;margin-right:10px;">

  </td><td style="padding:5px;">
  <p><b>Evento 01</b></p>
  Praia da Luz, Matosinhos<br><br>
  13 de Janeiro de 2017
  
 </td></tr>
 </table>
 <?php } } ?>

 </td></tr>
 <tr><td>&nbsp;</td></tr>
</table>
<div id="div_rodape"><iframe id="iframe_rodape" src="rodape.php" frameborder="0" scrolling="NO" allowtransparency="TRUE"></iframe></div>
</body>
</html>
