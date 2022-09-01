<?php

$mysql = new mysqli('localhost', 'root', '@Papalino01', 'bravo');
$mysql->set_charset('utf8');

if ($mysql == FALSE) {
    echo "Erro na conexão";
}
