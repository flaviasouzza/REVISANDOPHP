<?php

// Variáveis locais são definidas dentro de uma função, e são acessíveis dentro do escopo dessa função 
// Variáveis globais são definidas fora de qualquer função e estõa disponíveis em qualquer parte do script 
$a = 50;

    function soma (){
        global $a;
       // $x = 10 + 40;
        $y = $a + 30;
        //return $x;
        return $y;
    }
    echo soma();

    // Observação1.: No nosso código definimos uma váriavel global (a=50), dentro da função soma chamamos a variável global
    // Observação2.: Cuidado ao utilizar variáveis globais para não deixar o código difícil de entender.
    ?>