<?php
  $arr = [10, 5, 8, 3, 12, 7];
  $pares = [];
  $impares = [];

  for ($i = 0; $i < count($arr); $i ++){
    if ($arr[$i] % 2 == 0){
      $pares[]=$arr[$i];
    } else {
      $impares[]=$arr[$i];
    }
  }
 
  $qnt_par = count($pares);
  $qnt_impar = count($impares);
  
  if($qnt_par == 0){
    echo "Não tem número par \n";
    } else {
      echo $qnt_par > 1 ? $qnt_par ." números pares \n" : "Apenas ".$qnt_par ." número par \n";
    }

   if($qnt_impar == 0){
    echo "Não tem número impar \n";
    } else {
    echo $qnt_impar > 1 ? $qnt_impar ." números ímpares \n" : "Apenas ".$qnt_impar ." número ímpar \n";
    }

  $maior_atual = $arr[0];
  foreach ($arr as $maior) {
    if($maior_atual < $maior){
      $maior_atual = $maior;
    }
  }
  echo "Maior número: ".$maior_atual;

  $menor_atual = $arr[0];
  foreach ($arr as $menor) {
    if($menor_atual > $menor){
      $menor_atual = $menor;
    }
  }
  echo "\nMenor número: ".$menor_atual;

  $somatorio = 0;
  foreach ($arr as $soma){
    $somatorio += $soma;
  }
    
  echo "\nSoma de todos os números: ".$somatorio;