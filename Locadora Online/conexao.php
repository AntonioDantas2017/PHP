<?php

//cria uma nova conexão e devemos inclui-la em todas as páginas que trabalharão com BD
$conexao=mysql_connect("localhost","antonio","123");
//                     "nome_micro","usuário","senha"
$conexao2=mysql_connect("localhost","antonio","123");
mysql_select_db("projeto");


?>

