<?php

// Datas -- quando precisarmos chamar datas podemos usar as seguintes funções;

echo date ("d/");
echo date ("m\n");
echo date ("D\n");
echo date ("M\n");
echo date ("y\n");
echo date ("Y\n");

echo date ("d/m/Y\n");

date_default_timezone_set('America/Sao_Paulo');// para dizer que estamos no Brasil e trazer a data correta

echo date("H:i:s\n");

$date = date("d/m/Y - H:i:s");
echo $date;

// Observação1.: date_default_timezone_set('America/Sao_Paulo') -- utilizamos essa função para dizer que estamos no Brasil e assim conseguir trazer a data correta 
?>