<?php 
#Escreva um script que pergunta ao usuário se ele deseja converter uma temperatura de grau Celsius para Farenheit ou vice-versa. Se ele digitar 1, é de Celsius para Farenheit, se digitar 2 é de Farenheit para Celsius, outro valor mostre uma mensagem de erro. Para cada conversão, chame a função correta

#F = (C * 9/5) + 32
#C = (F - 32)/1,8

$fahrenheit = 0;
$celsius = 0;
$digitar = 0;

function CelsiusToFahrenheit ($fahrenheit,$digitar_celsius){

    $fahrenheit = ($digitar_celsius * 9/5) + 32;
    return $fahrenheit;
}

function FahrenheitToCelsius($celsius,$digitar_fahrenheit){

    $celsius = ($digitar_fahrenheit - 32) / 1.8;
    return $celsius;
}

while ($digitar != 3) {
    echo "\n Opção 1: Celsius para Farenheit";
    echo "\n Opção 2: Farenheit para Celsius";
    echo "\n Opção 3: Sair";

    echo "\n Qual função deseja executar:\n";
    $digitar =  fgets(STDIN);

    switch ($digitar) {
        case $digitar == 1:
    echo "Digite os graus Celsius:\n";
    $digitar_celsius =  fgets(STDIN);
    echo "A conversão de Celsius para Fahrenheit é de "; 
    echo CelsiusToFahrenheit($fahrenheit,$digitar_celsius,$digitar);
    echo "\n-----------------------";
            break;
        
        case $digitar == 2:
    echo "Digite em fahrenheit:\n";
    $digitar_fahrenheit = fgets(STDIN);
    echo "A coversão de Fahrenheit para Celsius é de ";
    echo FahrenheitToCelsius($celsius,$digitar_fahrenheit);
    echo "\n-----------------------";
            break;
        default:
            echo "Saindo do sistema!";
            break;
    }
}
?>