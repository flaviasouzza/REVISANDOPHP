<?php 

// Continuando estruturas de condicionais, com SWITCH CASE
// switch (expressao){
// case valor1: // -- código executado se a expresão for igual ao valor1
//    break;
 

// case valor2: // -- código executado se a expresão for igual ao valor2
//    break;
 

 //case valorN: // -- código executado se a expresão for igual ao valorN
 //   break;

 $bingo = rand(0,5); 
 // A função rand() em PHP é usada para gerar números aleatórios.
 // Neste exemplo, rand(0, 5) gera um número inteiro aleatório entre 0 e 5, inclusive. Isso significa que o valor de $bingo pode ser 0, 1, 2, 3, 4 ou 5.

 echo "Valor sorteado: " . $bingo;
 // o ponto (.) é o operador de concatenação de strings

 switch ($bingo){
    case 0:
        echo " => Você acerto 1 número";
        break;

    case 1:
        echo " => Você não acertou nenhum número";
        break;

    case 2: 
        echo " => Você ganhou um bônus, parabêns acertou 2 números seguidos";
        break;
    
    default:  // é atendido caso nenhuma das opções acima sejam atendidas 
        echo " => Você não ganhou, compre outra cartela";
        break;
 }