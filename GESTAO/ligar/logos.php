<?php
$mestra = "uid&&938##akks"; // Chave para criptografar as palavras-passe

$dt_passe = date ("Y-m-d", mktime (0, 0, 0, date("m")+6, date("d"), date("Y")));  // Data de validade da palavra-passe

// Bloco que criptografa a palavra-passe
  $cifra = mcrypt_module_open ('tripledes', '', 'ecb', '');
  $iv = mcrypt_create_iv (mcrypt_enc_get_iv_size ($cifra), MCRYPT_RAND);
  mcrypt_generic_init ($cifra, $mestra, $iv);
  $passe3 = mcrypt_generic ($cifra, $passe);
  mcrypt_generic_deinit ($cifra);
  mcrypt_module_close ($cifra);
?>
