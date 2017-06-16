<%@ LANGUAGE="VBScript"%>
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
                <td align="left" valign="top" height="500" bgcolor="#FFFFFF" class="linkA"><div align="center">
                  <form name="form1" method="post" action="clientes.php">
                    <table width="400" border="0" class="LinkA">
                      <tr>
                        <td width="59">Pesquisa:</td>
                        <td width="134">&nbsp;</td>
                        <td width="66">&nbsp;</td>
                        <td width="123"><a href='inserir_clientes.php'>Inserir <img src='img/icones_insere.gif' alt='Insere um filme' width='20' height='20' border='0'></a> </td>
                      </tr>
                      <tr>
                        <td>Nome:</td>
                        <td><input name="txtnome" type="text" id="txtnome" value="<? echo $txtnome ?>" size="20" maxlength="30"></td>
                        <td>CPF:</td>
                        <td><input name="txtcpf" type="text" id="txtcpf" value="<? echo $txtcpf ?>" size="15" maxlength="20"></td>
                      </tr>
                      <tr>
                        <td colspan="4"><div align="center">
                            <input type="submit" name="Submit" value="Pesquisar">
                          </div>
                            <label></label>
                          <div align="center"></div></td>
                      </tr>
                    </table>
                  </form>
                  <?php
include "conexao.php";
if($txtnome != "")
	$sql_cont = " and nome like '%$txtnome%'";
if($txtcpf != "")
	$sql_cont = " and cpf = '$txtcpf'";
	
$sql="select * from clientes where codcli <> '' $sql_cont order by nome";
$resultado=mysql_query($sql) or die("Conexão Impossível");
$linhas=mysql_num_rows($resultado); //armazena a qtde de registros cadastrados
if($linhas > 0){
?>
<table border="0" width="600">
<tr align="center" bgcolor="silver">
<th width="58" height="21">Código
<th width="169">Nome
<th width="99">CPF
<th width="98">RG
<th width="95">Telefone
<th width="26">Ed
<th width="25">Ap
<?php
for($i=0;$i<$linhas;$i++) //i controla a qtde de registros
   {
   if($i%2==0)
   		$cor="#EEEEEE";
	else 
		$cor="#FFFFFF";
   $registros=mysql_fetch_row($resultado); //armazena o conteúdo dos campos de registro
   echo "<tr align=center bgcolor=$cor><td>$registros[0]<td>$registros[3]<td>$registros[2]<td>$registros[1]<td>$registros[4]
   <td><a href='editar_clientes.php?codcli=$registros[0]'><img src='img/icones_edita.gif' alt='Edita este cliente' width='20' height='20' border='0'></a>
   <td><a href='apagar_clientes.php?codcli=$registros[0]'><img src='img/icones_apaga.gif' alt='Edita este cliente' width='20' height='20' border='0'></a>";
   }
  }else{
  echo "<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>Não existe clientes cadastrados<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>";
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
