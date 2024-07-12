<?php
// Array é uma estrutura de dados que armazena uma coleção de elementos de tal forma que cada um dos elementos possa ser identificado por um indice ou uma chave
    $a = "PHP\n";
    $b = "JAVA\n";
    $c = "C++\n";

    echo $a . $b . $c ;
// Acima criamas uma estrutura com array, porém seria muito trabalhoso criar várias variaveis com os cursos, então vamos simplificar para maneira a seguir

$cursos = array("PHP","JAVA","REDES","C++","AULA_BRUNO","ARRAY","LIST\n");
print_r($cursos);

print_r($cursos[2]); 
echo "\n";
// Observação1.: lembre-se que o indice de array sempre começa em 0
// Observação2.: para chamar um ARRAY utilizamos print_r ao invés de echo 
// Observação3.: print e echo tem a mesma função (Exibir informação na tela) porém o echo permite passar mais de uma string e o print não, segue exemplo abaixo:

    echo "display on screen\n", "Hey Guys "

// Observação4.: "\n" é usado para quebrar linha 
?>
