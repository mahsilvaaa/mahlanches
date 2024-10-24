<?php

$quantidade1 = $_POST["quantidade1"]; //X-Burguer
$quantidade2 = $_POST["quantidade2"]; //X-Dudão
$quantidade3 = $_POST["quantidade3"]; //X-Baconese
$quantidade4 = $_POST["quantidade4"]; //Coca-Cola
$quantidade5 = $_POST["quantidade5"]; //Fanta
$quantidade6 = $_POST["quantidade6"]; //Sprite
$obs = $_POST["obs"]; // obs
$valortotal = 0.00;

if (isset($_POST["opcao1"])) {
    $valortotal += (8.50 * $quantidade1); // X-Burguer
}

if (isset($_POST["opcao2"])) {
    $valortotal += (31.90 * $quantidade2); // X-Dudão
}

if (isset($_POST["opcao3"])) {
    $valortotal += (14.90 * $quantidade3); // X-Baconese
}

if (isset($_POST["opcao4"])) {
    $valortotal += (5.00 * $quantidade4); // Coca-Cola
}

if (isset($_POST["opcao5"])) {
    $valortotal += (5.00 * $quantidade5); // Fanta
}

if (isset($_POST["opcao6"])) {
    $valortotal += (5.00 * $quantidade6); // Sprite
}

// Exibindo o valortotal
echo "Pedido realizado com sucesso!<br>";
echo "Sua conta ficou em R$: ", $valortotal;
echo "Obs: ", $obs;
echo "<br><a href= 'cardapio.html'>Voltar</a>";



