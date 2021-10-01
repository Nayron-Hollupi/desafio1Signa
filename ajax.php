<?php
$case = $_GET['case']; 




$array = array(intval($_GET['vetor1']),intval($_GET['vetor2']),intval($_GET['vetor3']),intval($_GET['vetor4']),intval($_GET['vetor5']),
intval($_GET['vetor6']),intval($_GET['vetor7']),intval($_GET['vetor8']),intval($_GET['vetor9']),intval($_GET['vetor10']),
intval($_GET['vetor11']),intval($_GET['vetor12']),intval($_GET['vetor13']),intval($_GET['vetor14']),intval($_GET['vetor15']),
intval($_GET['vetor16']),intval($_GET['vetor17']),intval($_GET['vetor18']),intval($_GET['vetor19']),intval($_GET['vetor20']));


switch ($case) {
   case 1:
      echo "Todos os Arrays </br>";
      foreach ($array as $i => $value) {
          echo "$array[$i] </br>";  
      }
       break;



   case 2:
      echo "</br></br>Maior numero do array </br>";
arsort($array);
foreach ($array as $i => $value) {
    echo "$array[$i] </br>";
   break;
}
       break;




   case 3:
      echo "</br></br>Menor numero do array</br>";
      asort($array);
      foreach ($array as $i => $value) {
          echo "$array[$i] </br>";
         break;
      }
       break;




       case 4:
         
foreach ($array as $i => $value) {
   if($array[$i] % 2 == 0){
   $pares = $pares + 1;
   }
}
         $percentual = $pares *  5 ;
         echo " </br></br> Percentual de numeros pares  $percentual% </br>" ; 
         break;




         case 5:
           
            $qtvetor = 20;
$soma = array_sum($array);

$media = $soma  / $qtvetor;

echo "média dos elementos do vetor eh  $media";
            break;
}


  