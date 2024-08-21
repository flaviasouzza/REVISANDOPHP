<?php

// Continuação de estruturas condicionas - if, else if e else

// If (condição) será executada se o código for verdadeiro 
// Else if (nova condição) nova condição a ser testada se a condição if anterior testada não for verdade
// else (condição) será executado se o código for falso 

$nota = 3 ;

if ($nota >= 7) {
    echo "Aluno Aprovado, Parabéns Jovem Padawam!\n\n";
}

else if (($nota <7) && ($nota >=4)){
    echo "Aluno de Recuperação. Você Ainda Tem Chances!\n\n";
}

else  {echo "Aluno Reprovado, Sinto Muito Tente Novamente\n\n";

}
// -- Temos uma maneira simplificada de fazer a expressão acima, acompanhe:


echo $nota >= 7 ? "Aluno Aprovado, Parabéns Jovem Padawan!\n" : ($nota >= 4 ? "Aluno de Recuperação, Você Ainda Tem Chances!!\n" : "Aluno Reprovado, Sinto Muito. Tente Novamente\n");

// Explicação o ponto de ? é igual ao IF(SE) e os : é igual ao ELSE(SE NÃO), porém na condição acima estamos primeiro realizado um ELSE IF ali em $nota >=5, pois estamos verificando 
// mais de uma condição, se o aluno tiver nota maior que 7 aprovado, (se essa condição for falsa o codigo segue para o else if) que seria se o aluno tem nota maior ou igual a 5 está
// em recuperação, se não (else) ultima condição aluno reprovado.

//Obs.: 
