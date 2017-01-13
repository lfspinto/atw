<?php  
$mes_pt = array (1 => 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'); 
$mes_pt_abv = array (1 => 'Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'); 

$dia_sm_pt1 = array (1 => 'Sg', 'Tr', 'Qa', 'Qi', 'Sx', 'Sb', 'Dg'); 
$dia_sm_pt2 = array (0 => 'Dg', 'Sg', 'Tr', 'Qa', 'Qi', 'Sx', 'Sb'); 

$tipos_ficheiro = array (
  'jpe' => 'image/jpeg',
  'jpeg' => 'image/jpeg',
  'jpg' => 'image/jpeg',
  'png' => 'image/png',
);
$tipos_ficheiro_IE = array (
  'jpg' => 'image/pjpeg', 
  'png' => 'image/x-png',
);
$tipos_pdf = array (
  1 => 'application/pdf'
);
$tipos_jpg = array (
  'jpe' => 'image/jpeg',
  'jpeg' => 'image/jpeg',
  'jpg' => 'image/jpeg',
);

$vogais = array ("a", "e", "i", "o", "u", "y", "c");
$vogais_xtr = array ("~á|à|â|ã~i", "~é|è|ê~i", "~í|ì|î~i", "~ó|ò|ô|õ~i", "~ú|ù|û~i", "~ý~i", "~ç~i");

$niveis = array (1 => 'Administrador', 
                 2 => 'Utilizador');

$estados = array (1 => 'Administrador', 
                  2 => 'Novo', 
                  3 => 'Passe', 
                  4 => 'Activo', 
                  5 => 'Inactivo');
?>
