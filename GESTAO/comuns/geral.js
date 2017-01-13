// JavaScript Document

function Voltar () { history.back (); }
function Actual () { history.go (0); }
function Abrir_Janela (caminho,nome,feitio) { window.open (caminho,nome,feitio); }
function Fechar_Janela () { window.close (); }
function Tarefas () { opener.location.reload(); window.close (); }

function Mostrar_Foto (nmr) { document.getElementById('foto'+nmr).innerHTML = "<img src=\"../../ficheiros/fotos/FCN-"+ nmr +".jpg\" width=\"200\">"; } 
function Esconder_Foto (nmr) { document.getElementById('foto'+nmr).innerHTML = ""; } 

function Defeito (caixa) {
 if (caixa.value == '') { caixa.value=caixa.defaultValue; caixa.style.color="#a2bce0"; caixa.type="text"; } 
 if (caixa.value != caixa.defaultValue) { caixa.style.color="#000000"; document.sessao.passe.type="password"; } 
}
function Apaga (caixa) {
 if (caixa.value == caixa.defaultValue) { caixa.value=''; caixa.style.color="#000000"; }
}
function Ver_Apagar (genero, seccao, alvo, destino) { 
 var r= confirm ("Tem a certeza que deseja apagar "+ genero +" seguinte "+ seccao +" ?! \n\n "+ alvo +" \n \n"); 
 if (r==true) { window.location = destino; }
}
function Ver_Apagar_2 (genero, seccao, alvo, destino) { 
 var r= confirm ("Tem a certeza que deseja apagar PERMANENTEMENTE "+ genero +" seguinte "+ seccao +" ?! \n\n "+ alvo +" \n \n"); 
 if (r==true) { window.location = destino; }
}
function Procura (valor) { 
 if (valor == 1) { 
  document.getElementById("procura").style.display = "block";
  document.getElementById("ver0").style.display = "block";
  document.getElementById("ver1").style.display = "none";
  document.getElementById("i_procura").focus();
 }
 if (valor == 0) { 
  document.getElementById("procura").style.display = "none";
  document.getElementById("ver0").style.display = "none";
  document.getElementById("ver1").style.display = "block";
 }
}

function Apontar_Nome () { document.sessao.nome.focus (); }
function Apontar_Passe () { document.passe.passe1.focus (); }
function Editar_Nome () { document.editar.nome.focus (); }
function Editar_Codigo () { document.editar.codigo.focus (); }

mes_pt = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"]
decimal =  /^[-+]?[0-9]+\,[0-9]+$/; 

function Validar_Sessao ()
{
  if (document.sessao.nome.value == "min: 3 ctr - máx: 20 ctr" || document.sessao.nome.value.length < 3)
  { alert ("Falta indicar o Nome de Utilizador. \n \n ");
    document.sessao.nome.focus();
    return (false);
  }
  if (document.sessao.nome.value.match (sinais_nome) != null)
  { alert ("Nome de Utilizador inválido. \n \n");
    document.sessao.nome.focus();
    return false;
  }
  if (document.sessao.passe.value.length < 6 || document.sessao.passe.value.length > 12)
  { alert ("Falta indicar a Palavra-Passe. \n\n A Palavra-Passe tem, pelo menos, 6 caracteres. \n \n");
    document.sessao.passe.focus();
    return (false);
  }
  if (document.sessao.passe.value.match (sinais_passe) != null)
  { alert ("Palavra-Passe inválida. \n \n");
    document.sessao.passe.focus();
    return false;
  }
  return (true);
}

function Validar_Passe ()
{
  if (document.passe.passe1.value.length < 6  || document.passe.passe1.value.length > 12)
  { alert ("A nova Palavra-Passe tem de possuir entre 6 e 12 caracteres. \n \n");
    document.passe.passe1.focus();
    return (false);
  }
  if (document.passe.passe1.value.match (sinais_passe) != null)
  { alert ("Palavra-Passe inválida. \n\n Não são permitidos os caracteres seguintes: \n \n ' < > { } [ ] \" ´ ` ~ ; \n \n");
    document.passe.passe1.focus();
    return false;
  }
  if (document.passe.passe2.value.length < 6 || document.passe.passe2.value.length > 12)
  { alert ("Falta repetir a Palavra-Passe. \n\n A Palavra-Passe tem de possuir entre 6 e 12 caracteres. \n \n");
    document.passe.passe2.focus();
    return (false);
  }
  if (document.passe.passe1.value != document.passe.passe2.value)
  { alert ("As Palavras indicadas são diferentes ! \n \n");
    document.passe.passe1.focus();
    return (false);
  }
  return (true);
}
