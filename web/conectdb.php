<?php
$link = mysql_connect('HOST', 'BASE', 'SENHA');
if (!$link) {
    die('Erro ao conectar ao banco: ' . mysql_error());
}
echo 'Conectado com sucesso';
mysql_close($link);
?>