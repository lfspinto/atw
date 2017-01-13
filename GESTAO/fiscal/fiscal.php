<?php
session_start ();

if ($piso && $piso == 0) { $caminho = ""; } 
if ($piso && $piso == 1) { $caminho = "../"; } 
if ($piso && $piso == 2) { $caminho = "../../"; } 
if ($piso && $piso == 3) { $caminho = "../../../"; } 
if ($piso && $piso == 4) { $caminho = "../../../../"; } 

if (!isset ($_SESSION ['inem_rh'])) {
 header ("location: ". $caminho ."entrada.php?info=1");
 exit;
} 


if ($_SESSION ['inem_rh']['nivel'] != "1") { // Se o nível for diferente que Administrador.

 if (strpos ($_SESSION ['inem_rh'] ['areas'], "§§") !== FALSE) { 
  $espacos0 = explode ("§§", $_SESSION ['inem_rh'] ['areas']); 
 } 
 if (strpos ($_SESSION ['inem_rh'] ['areas'], "§§") === FALSE) { 
  $espacos0 = array ($_SESSION ['inem_rh'] ['areas']); 
 } 

 $espacos = array ();
 foreach ($espacos0 as $espaco) {
  array_push ($espacos, utf8_encode ($espaco)); 
	}

 $espacos2 = array (); // Áreas a que tem acesso.
 for ($n = 0; $n < count ($espacos); $n++) { 
  $espaco = explode (":", $espacos [$n]); 
  array_push ($espacos2, $espaco [1]); 
 }

 if (in_array ($area, $espacos2) == FALSE) { 
  header ("location: ". $caminho ."erro.php"); 
  exit;
 } 


 if ($_SESSION ['inem_rh']['nivel'] != "2") { // Se o nível for diferente que Administrador de Plataforma.
  $subs = $espacos [array_search ($area, $espacos2)]; 
  $subs = explode (":", $subs); 
  $subs = explode (";", $subs [2]); 

  $subs2 = array (); // Subareas a que tem acesso.
  foreach ($subs as $sub) { 
   $sub = explode ("|", $sub); 
   array_push ($subs2, $sub [0]); 
  }


  if ($subarea != "primeira" && in_array ($subarea, $subs2) == FALSE) { 
   header ("location: ". $caminho ."erro.php"); 
   exit;
  } 
  if ($subarea != "primeira" && in_array ($subarea, $subs2) == TRUE && $accao != "ler") { 
   $accoes = $subs [array_search ($subarea, $subs2)];
   $accoes = explode ("|", $accoes); // Acções a que tem acesso.

   if (in_array ($accao, $accoes) == FALSE) { 
    header ("location: ". $caminho ."erro.php"); 
    exit;
			}
  } 
 }

}
?>
