<?php
$num1 = $_POST['numero1'];
$num2 = $_POST['numero2'];
$op = $_POST['Operacao'];

include "header.php";
require_once "Funcao.php";

$result = Calcular ($num1, $num2,$op);
echo "Oresultado é:".$resultado;
include "Footer.php";