<?php

// Array de funcionários
$funcionarios = [
    ["nome" => "João",   "salario_base" => 3000,   "horas_extras" => 10],  
    ["nome" => "Maria",   "salario_base" => 4000,   "horas_extras" => 5],  
    ["nome" => "Pedro",   "salario_base" => 3500,   "horas_extras" => 15]
];

// Array para armazenar os salários totais de cada funcionário
$salarios_totais = [];

// Variáveis para armazenar o maior salário e o nome do funcionário correspondente
$maiorTotal = 0;
$nomeFuncionario = "";

// Iterar por cada funcionário para calcular o salário total
foreach ($funcionarios as $funcionario) {
    $salario_total = $funcionario["salario_base"] + ($funcionario["horas_extras"] * 50);
    
    // Verificar se este é o maior salário encontrado até agora
    if ($salario_total > $maiorTotal) {
        $maiorTotal = $salario_total;
        $nomeFuncionario = $funcionario["nome"];
    }
}

// Exibir o resultado
echo "Funcionario(A): " . $nomeFuncionario . "\n";
echo "Maior salário: " . $maiorTotal . "\n";
?>
