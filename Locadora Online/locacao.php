<%@ LANGUAGE="VBScript"%>
<?php
include "inc_css.php";
?>
<?php 

if($txtdataini == "" && $txtdatafim == "")
{
	$agora=time();
	$data=getdate($agora);
	$dia=$data["mday"];//dia do mês
	$mes=$data["mon"];
	$mes2=$data["mon"]+1;
	if($mes2 == "13"){$mes2="12";}
	$ano=$data["year"];
	$txtdataini = "$dia/$mes/$ano";
	$txtdatafim = "$dia/$mes2/$ano";	
}
?>			
<html>
<head>
<TITLE><?php include "inc_title.php"; ?></TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
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
include "topo_locacao.php";
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
                <td align="left" valign="top" height="500" bgcolor="#FFFFFF" class="linkA"><div align="center">
				<form name="form1" method="post" action="filmes.php">
				  <table width="400" border="0" class="LinkA">
                    <tr>
                      <td width="58">Pesquisa:</td>
                      <td width="133">&nbsp;</td>
                      <td width="41">&nbsp;</td>
                      <td width="150"><a href='inserir_locacao.php'>Inserir <img src='img/icones_insere.gif' alt='Insere um filme' width='20' height='20' border='0'></a> </td>
                    </tr>
                    <tr>
                      <td>De:</td>
                      <td><input name="txtdataini" type="text" id="txtdataini" value="<? echo $txtdataini ?>" size="15" maxlength="10"></td>
                      <td>At&eacute;:</td>
                      <td><input name="txtdatafim" type="text" id="txtdatafim" value="<? echo $txtdatafim ?>" size="15" maxlength="10"></td>
                    </tr>
                    <tr>
                      <td colspan="4"><div align="center">
                        <input type="submit" name="Submit" value="Pesquisar">                        
                      </div>
                        <label></label><div align="center"></div></td>
                      </tr>
                  </table>
                    </form>
				<div align="left"><?php
include "conexao.php";
if($devolvido != "")
{
$sql="update locacao set dev='$devolvido' where codloc =$auxcodloc ";
//echo $sql;
$resultado=mysql_query($sql) or die("Conexão Impossível");
}

if($txtdataini != "")
	$sql_cont = " and dataemp > '$txtdataini'";
if($txtdatafim != "")
	$sql_cont = " and dataemp < '$txtdatafim'";
		
$sql="select * from locacao where codloc <> '' $sql_cont order by dataemp ";
//echo $sql;
$resultado=mysql_query($sql) or die("Conexão Impossível");
$linhas=mysql_num_rows($resultado); //armazena a qtde de registros cadastrados
if($linhas > 0){
?>
				    <table width="100%" border="0">
                      <tr>
                        <td width="8%">&nbsp;</td>
                        <td width="92%"><table width="227" border="0" class="LinkA" height="50">
                          <tr>
                            <td width="43" ><div align="center">
                                <table width="20" height="20" border="0" bgcolor="#FF7777">
                                  <tr>
                                    <td>&nbsp;</td>
                                  </tr>
                                </table>
                            </div></td>
                            <td width="168">N&atilde;o devolvido </td>
                          </tr>
                        </table></td>
                      </tr>
                    </table>
				    </div>
				<br>
                <table border="0" width="600">
<tr align="center" bgcolor="silver">
<th width="57" height="21">Código
<th width="110">Data Emp
<th width="102">Data Dev
<th width="147">Filme
<th width="128">Cliente
<th width="128">Dev
<th width="30">Ap
<?php
for($i=0;$i<$linhas;$i++) //i controla a qtde de registros
   {
   if($i%2==0)
   		$cor="#EEEEEE";
	else 
		$cor="#FFFFFF";
		
   $registros=mysql_fetch_row($resultado); //armazena o conteúdo dos campos de registro
   
   if($registros[5] == "S"){ 
   		$dev = "<a href='locacao.php?devolvido=N&dataini=$dataini&auxcodloc=$registros[0]&datafim=$datafim'><img src='img/icones_confirma.gif' width='20' height='20' border='0'></a>Sim"; 
	}else{ 
   		$dev = "<a href='locacao.php?devolvido=S&dataini=$dataini&auxcodloc=$registros[0]&datafim=$datafim'><img src='img/icones_cancela.gif' width='20' height='20' border='0'></a>Não"; 
	}
   
   if($registros[5] == "N")
   {
   		$cor="#FF7777";
	}
   
   $sql2="select * from clientes where codcli = $registros[4] ";
//   echo $sql2;
   $resultado2=mysql_query($sql2) or die("Conexão Impossível");
   $registros2=mysql_fetch_row($resultado2);
   
   $sql3="select * from filmes where codfil = $registros[4] ";
   $resultado3=mysql_query($sql3) or die("Conexão Impossível");
   $registros3=mysql_fetch_row($resultado3);
   
   
   echo "<tr align=center bgcolor=$cor><td>$registros[0]<td>$registros[1]<td>$registros[2]
   <td>$registros3[1]
   <td>$registros2[3]
   <td>$dev
   <td><a href='apagar_locacao.php?codloc=$registros[0]'><img src='img/icones_apaga.gif' alt='Edita este cliente' width='20' height='20' border='0'></a>";
   }
  }else{
  echo "<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>Não existe locações cadastrados<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>";
  }
?>
</table><br>
<div align=right><a href="default.php">Voltar</a></div>

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
