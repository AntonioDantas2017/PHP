<%@ LANGUAGE="VBScript"%>
<?php
include "inc_css.php";
include "conexao.php";

$sql="select * from clientes where codcli = $codcli";
$resultado=mysql_query($sql) or die("Conex�o Imposs�vel");
$registros=mysql_fetch_row($resultado);
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
                <td align="left" valign="top" height="500" bgcolor="#FFFFFF" class="linkA"><div align="center">
                  <form name="form1" method="post" action="editar_clientes2.php">
                    <table width="60%" border="0" class="LinkA">
                      <tr>
                        <td width="23%"><div align="right">C&oacute;digo:</div></td>
                        <td width="2%">&nbsp;</td>
                        <td width="35%"><? echo $registros[0]?><input type="hidden" name="codigo" value="<? echo $registros[0]?>"></td>
                      </tr>
                      <tr>
                        <td width="23%"><div align="right">Nome:</div></td>
                        <td width="2%">&nbsp;</td>
                        <td width="35%"><input name="txtnome" type="text" id="txtnome" value="<? echo $registros[2]?>" size="30" maxlength="50"></td>
                      </tr>
                      <tr>
                        <td width="23%"><div align="right">CPF:</div></td>
                        <td width="2%">&nbsp;</td>
                        <td width="35%"><input name="txtcpf" type="text" id="txtcpf" value="<? echo $registros[2]?>" size="20" maxlength="15"></td>
                      </tr>
                      <tr>
                        <td width="23%"><div align="right">RG:</div></td>
                        <td width="2%">&nbsp;</td>
                        <td width="35%"><input name="txtrg" type="text" id="txtrg" value="<? echo $registros[1]?>" size="20" maxlength="15"></td>
                      </tr>
                      <tr>
                        <td width="23%"><div align="right">Telefone:</div></td>
                        <td width="2%">&nbsp;</td>
                        <td width="35%"><input name="txttelefone" type="text" id="txttelefone" value="<? echo $registros[4]?>" size="20" maxlength="15"></td>
                      </tr>
                      <tr>
                        <td colspan="3"><label>
                            <div align="center">
                              <input type="submit" name="confirmar" value="Editar">
                            </div>
                          </label></td>
                      </tr>
                    </table>
                  </form>
                  <br>
                  <a href="javascript:history.go(-1)">Voltar</a></div>
                </td>
              </tr>

           </table></td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>
