<?php include "../unir/base.php"; ?>
<?php include_once "../unir/funcionarios.php"; ?>
<?php include "comuns.php"; ?>
<?php header ('Content-type: text/plain; charset=utf-8');  

 $termo = $_POST ['termo']; if (!$termo) { $termo = $_GET ['termo']; } 
 $termo = mb_strtolower ($termo, 'UTF-8');

 $tabela = $_POST ['tabela']; if (!$tabela) { $tabela = $_GET ['tabela']; } 

 for ($z = 0; $z < count ($vogais); $z++) { 
  if (preg_match ($vogais_xtr [$z], $termo)) {
   $termo = preg_replace ($vogais_xtr, $vogais, $termo);
  }
 }

 $ler1 = sqlsrv_query ($ligacao, "SELECT ID, nome FROM $tabela ORDER BY nome");

 if (sqlsrv_has_rows ($ler1) != false) { 
  $i_resultado = 0; $resultado = ""; $misto = 0; 

  while ($ver = sqlsrv_fetch_array ($ler1)) { 
   $nome = mb_strtolower (utf8_encode ($ver ['nome']), 'UTF-8');

   for ($z = 0; $z < count ($vogais); $z++) { 
    if (preg_match ($vogais_xtr [$z], $nome)) {
     $nome = preg_replace ($vogais_xtr, $vogais, $nome);
    } else {
     $nome = $nome;
    }
   }

  $casas = strlen ($termo);
  $pos1 = strpos ($nome, $termo); 
  if ($pos1 == 0) { 
   $procura = substr ($nome, 0, $casas); 
   if (strnatcasecmp ($termo, $procura) == 0) { 
    $pos3 = $casas;
    $nome1 = ""; $nome2 = substr ($ver ['nome'], 0, $casas); $nome3 = substr ($ver ['nome'], $pos3); 
    $misto = 1; 
   } 
  } 
  if ($pos1 != 0) { 
   $pos2 = strpos ($nome, " ".$termo); 
   if ($pos2 != FALSE) { 
    $procura = substr ($nome, $pos2+1, $casas); 
    if (strnatcasecmp ($termo, $procura) == 0) { 
     $pos3 = $pos2 + 1 + $casas;
     $nome1 = substr ($ver ['nome'], 0, $pos2+1); $nome2 = substr ($ver ['nome'], $pos2+1, $casas); $nome3 = substr ($ver ['nome'], $pos3); 
     $misto = 1; 
    }
   }
  }

   if ($misto == 1) { 
    $i_resultado = $i_resultado + 1;
    $resultado .= $ver ['ID'] ."##". utf8_encode ($ver ['nome']) ."##". utf8_encode ($nome1) ."<b>". utf8_encode ($nome2) ."</b>". utf8_encode ($nome3) ."$"; 
			}
   $misto = 0; 

   if ($i_resultado == 10) { 
    $resultado = substr ($resultado, 0, -1);
    echo $resultado; 
    exit;
   } 
  }
 }

$resultado = substr ($resultado, 0, -1);
echo $resultado; 
sqlsrv_close ($ligacao);
?>
