
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1 Signa</title>
</head>
    <style type="text/css" >
   .container{
display: flex;
flex-direction: row;
justify-content: center;
align-items: center;
width: 100%;
   }

   .size td input{
       width: 60%;
   }
  
   .botao td input{
       width: 100%;
       color: #fff;
       background-color: #0000FF;
       border-radius: 5px;
       padding: 8px;
    }


    .botao td input:hover{
       background-color: #000;
       cursor: pointer;
    }
    </style>
  </head>
  <body>

  <div class="container">
       <table style="max-width:800px; " border="1">
            <thead>
                <tr>
                    <th colspan="6"><h1>Desafio vetor Signa</h1></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th colspan="6"><h3>Digitar numeros inteiros</h3></th>      
                </tr>   
                <form method="POST" id="form">
                <tr class="size">
        <td >  
      <b>01:&nbsp;</b><input type="text" name="vetor1" id="vetor1"> 
        </td>
        <td >
      <b>02:&nbsp;</b><input type="text" name="vetor2" id="vetor2">
        </td>
        
        <td >
      <b>03:&nbsp;</b><input type="text" name="vetor3">
        </td>
        <td >
      <b>04:&nbsp;</b><input type="text" name="vetor4">
        </td>
        <td >
      <b>05:&nbsp;</b><input type="text" name="vetor5">
        </td>
        </tr>

        <tr class="size">
        <td >
      <b>06:&nbsp;</b><input type="text" name="vetor6">
        </td>
        <td >
      <b>07:&nbsp;</b><input type="text" name="vetor7">
        </td>
        <td >
      <b>08:&nbsp;</b><input type="text" name="vetor8">
        </td>
        <td >
      <b>09:&nbsp;</b><input type="text" name="vetor9">
        </td>
        <td >
      <b>10:&nbsp;</b><input type="text" name="vetor10">
        </td>
        </tr>
      
        <tr class="size">
        <td >
      <b>11:&nbsp;</b><input type="text" name="vetor11">
        </td>
        <td >
      <b>12:&nbsp;</b><input type="text" name="vetor12">
        </td>
        <td >
      <b>13:&nbsp;</b><input type="text" name="vetor13">
        </td>
        <td >
      <b>14:&nbsp;</b><input type="text" name="vetor14">
        </td>
        <td >
      <b>15:&nbsp;</b><input type="text" name="vetor15">
        </td>
        </tr>

        <tr class="size">
        <td >
      <b>16:&nbsp;</b><input type="text" name="vetor16">
        </td>
        <td >
      <b>17:&nbsp;</b><input type="text" name="vetor17">
        </td>
        <td >
      <b>18:&nbsp;</b><input type="text" name="vetor18">
        </td>
        <td >
      <b>19:&nbsp;</b><input type="text" name="vetor19">
        </td>
        <td >
      <b>20:&nbsp;</b><input type="text" name="vetor20">
        </td>
        </tr>

     <tr class="botao">
        <td >
        <input type="submit"  name="todos" value="todos" onclick="Todos();" >
        </td>
        <td >
        <input type="submit" name="maior" value="maior" onclick="Maior();">
        </td>
        <td >
        <input type="submit" name="menor" value="menor" onclick="Menor();">
        </td>
        <td >
        <input type="submit" name="percentual" value="percentual" onclick="Percentual();" >
        </td>
        <td >
        <input type="submit" name="media" value="media" onclick="Media();">
        </td>
        </tr>
        </form>
   
    <tr>
<td>

<div class="todos"></div>
</td>
<td>
<div class="maior"></div>
</td>
<td>
<div class="menor"></div>
</td>

<td>
<div class="pares"></div>
</td>

<td>
<div class="media"></div>
  </td>
</tr>             
            </tbody>
        </table>
    </div>
  </body>
</html>


   
    <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="ajax.js"></script>






<?php

$qtvetor = 20;

$array = array(30,45,50,90,85,541,0,45,1,87,78,8,35,6,45,58,81,84,89,37);


echo "Todos os Arrays </br>";
foreach ($array as $i => $value) {
    echo "$array[$i] </br>";  
}

echo "</br></br>Menor numero do array</br>";
asort($array);
foreach ($array as $i => $value) {
    echo "$array[$i] </br>";
   break;
}

echo "</br></br>Maior numero do array </br>";
arsort($array);
foreach ($array as $i => $value) {
    echo "$array[$i] </br>";
   break;
}

foreach ($array as $i => $value) {
    if($array[$i] % 2 == 0){
    $pares = $pares + 1;
    }
}


$percentual = $pares *  5 ;
echo " </br></br> Percentual de numeros pares  $percentual% </br>" ; 

$soma = array_sum($array);

$media = $soma  / $qtvetor;

echo "média dos elementos do vetor eh  $media";