<?php

include('Calculadora.php');
include('Funcionarios.php');

$cpf = $_POST['cpf'];

$calculadora = new Calculadora();
$funcionarios = new Funcionarios();

$func = $funcionarios->find($cpf);

$novoSalario = $calculadora->mult(
    $func['salario'],
    1.1
);

echo $func['nome'] . '<br>';
echo 'Salário anterior: R$ ' . $func['salario'] . '<br>';
echo 'Novo salário: R$ ' . $novoSalario;

?>