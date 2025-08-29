<?php 
    $codigo1 = fgets(STDIN);
    $qtd1 = (int) fgets(STDIN);
    $valorUnidade1 = (float) fgets(STDIN);

    $codigo2 = fgets(STDIN);    
    $qtd2 = (int) fgets(STDIN);
    $valorUnidade2 = (float) fgets(STDIN);

    $deve = ($qtd1 * $valorUnidade1) + ($qtd2 * $valorUnidade2);

    echo "VALOR A PAGAR: R$ " . number_format($deve, 2, ".", ".") . "\n"; 
?>