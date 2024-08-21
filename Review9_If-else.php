<?php

//Estrutura de Condicional 
// -- condição IF (qualquer expressão será avaliada como verdadeiro ou falso)
// -- codigo será executado se a condição for verdadeira ex:

    $variavel1 = true;
    $variavel2 = false;
    $variavel3 = true;
    $nota = 7;

        if ($variavel1 == $variavel3) {
            echo "Variáveis são iguais\n";
        }

// obs.: \n é usado para quebra de linha

// -- codição ELSE (então sabemos que SE a condição for verdadeira o código roda o IF), porém SE NÃO (ELSE) o código será executado se a condição for falsa rodara o ELSE ex:

 
        if ($variavel1 == $variavel2) {
            echo "Variáveis são iguais";
        }

        else {
            echo "Variáveis são diferentes\n\n";
        }

       
    
        if ($nota >= 20) {
            echo "Aluno Aprovado, Parabéns Jovem Padawam!\n";
        }

        else  {echo "Aluno Reprovado, Sinto Muito Tente Novamente\n\n";

        }
// -- Temos uma maneira simplificada de fazer a expressão acima, acompanhe:

        echo $nota >= 7 ? "Aluno Aprovado, Parabéns Jovem Padawam!\n" : "Aluno Reprovado, Sinto Muito Tente Novamente";
        echo $nota >= 20 ? "Aluno Aprovado, Parabéns Jovem Padawam!\n" : "Aluno Reprovado, Sinto Muito Tente Novamente";
        
// Explicação o ponto de ? é igual ao IF(SE) e os : é igual ao ELSE(SE NÃO)
    ?>
