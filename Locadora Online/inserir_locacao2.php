<?php
include "inc_css.php";
?>
			
<html>
<head>
<TITLE><?php include "inc_title.php"; ?></TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body background="img/bgfull.jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="21%" height="583" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td width="98%" height="583" align="center" valign="top" background="img/bgsquare.gif"> 
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td align="center" valign="top"><?php
include "topo.php";
?>
          </td>
        </tr>
        <tr> 
          <td align="center" valign="top"><img src="img/1x6v.gif" width="1" height="6"></td>
        </tr>
        <tr> 
          <td align="left" valign="top">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr> 
                <td width="1%" rowspan="9" align="right" valign="top"><img src="img/6x1h.gif" width="7" height="1"></td>
                <td align="center" valign="top" bgcolor="#FFFFFF"><?php
include "topo_cliente.php";
?></td>
                <td width="1%" rowspan="9" align="left" valign="top"><img src="img/6x1h.gif" width="6" height="1"></td>
              </tr>
              <tr> 
                <td align="left" valign="top" bgcolor="#FFFFFF" class="linkA">
<div align="right"><font color="#727292"> <br>
                    </font></div></td>
              </tr>

              <tr> 
                <td align="left" valign="top" bgcolor="#FFFFFF"><font color="#FF0000"><img src="img/blank25x8h.gif" width="25" height="8"></font></td>
              </tr>
              <tr>
                <td align="left" valign="top" height="500" bgcolor="#FFFFFF" class="linkA"><div align="center"><br>
                    <table width="200" border="0" class="LinkA">
                      <tr>
                        <td><div align="center">
                          <?
include "conexao.php";



$erro = 0;

list ($dia, $mes, $ano) = split ('[/.-]', $datadev);
if(! checkdate($mes, $dia, $ano)) {
	echo "Data inv�lida!";
	$erro = 1;
}

$datadodia = date("Y/m/d"); 
list ($ano , $mes,  $dia) = split ('[/.-]', $datadodia);
$dataemp = "$dia/$mes/$ano"; 

/*
$sql="select maxdias from filmes where codfil = $codfil";
$resultado=mysql_query($sql) or die ("Conex�o Imposs�vel 1");
$registros=mysql_fetch_row($resultado); 
//$auxdia = date("$dia")+ $registros[0];$registros[0]

$datainicio = date("Y/m/d"); 
//list ($dia, $mes, $ano) = split ('[/.-]', $datadev);
$datafim	= date("$ano/$mes/$dia");
$intervalo= ($datafim - $datainicio) ; 
//echo $dataemp;
echo $datafim;

if($intervalo > $registros[0])
{
	echo "Data devolu��o n�o permitida!";
	$erro = 1;
}
*/

if($erro == 0)
{
$sql="insert into locacao (dataemp,datadev,codfil,codcli,dev) values('$dataemp','$datadev','$codfil','$codcli','N')";
echo $sql;
$resultado=mysql_query($sql) or die ("Conex�o Imposs�vel 2");
echo "Loca��o feita com sucesso!<br>";
}


?>
                        </div>                        </td>
                      </tr>
                    </table>
                    <br>
                    <br>
                    <a href="locacao.php">Voltar</a>
                                   
                  </div>
                </td>
              </tr>

           </table></td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>
