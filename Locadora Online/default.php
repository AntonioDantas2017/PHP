<%@ LANGUAGE="VBScript"%>
<?php
include "inc_css.php";
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
<style type="text/css">
<!--
.style1 {
	font-size: 16px;
	font-weight: bold;
}
-->
</style>
</head>
<body background="img/bgfull.jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="21%" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td width="98%" height="100" align="center" valign="top" background="img/bgsquare.gif"> 
      <table width="100%" border="0" cellspacing="0" cellpadding="0" height="100">
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
          <td align="left" valign="top"  height="100">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  height="100">
              <tr> 
                <td width="1%" rowspan="9" align="right" valign="top"><img src="img/6x1h.gif" width="7" height="1"></td>
                <td align="center" valign="top" bgcolor="#FFFFFF"><?php
include "topo_filme.php";
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
                <td align="left" valign="top" height="500" bgcolor="#FFFFFF" class="linkB"><div align="center"><br>
                    <table width="500" border="0" class="LinkA">
                      <tr>
                        <td><div align="center" class="style1">Locadora</div></td>
                      </tr>
                      <tr height="10">
                        <td><div align="center"></div></td>
                      </tr>
					                        <tr height="10">
                        <td><div align="center"></div></td>
                      </tr>
                      <tr>
                        <td><div align="center"><a href="filmes.php" class="LinkB">Filmes</a></div></td>
                      </tr>
                      <tr>
                        <td><div align="center"><a href="clientes.php" class="LinkB">Clientes</a></div></td>
                      </tr>
                      <tr>
                        <td><div align="center"><a href="locacao.php" class="LinkB">Loca&ccedil;&atilde;o</a></div></td>
                      </tr>
                    </table>
                    <br>
                    <br>
<div align=right></div>

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
