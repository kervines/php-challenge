  <?php

$notas = [100, 50, 20, 10, 5, 2, 1];

echo "==================== CAIXA ELETRÔNICO ====================\n";
echo "Cédulas disponivéis: R$100, R$50, R$20, R$10, R$5, R$2, R$1 \n";
echo "Quanto deseja sacar? ";
$valor_saque = (int)trim(fgets(STDIN));

if($valor_saque <= 0){
  return printf('Valor inválido');
}

$qnt_cedulas_valores = [];
$aux_nota = $valor_saque;
$aux_valor = $valor_saque;

foreach ($notas as $nota) {
    $aux_nota = floor($aux_nota / $nota);
    $qnt_cedulas_valores["$nota"] = $aux_nota;
    $aux_valor = $aux_valor % $nota;
    $aux_nota = $aux_valor;
}

foreach ($qnt_cedulas_valores as $valor => $qnt){
  if($qnt > 0) {
    echo ($qnt>1) ?  $qnt . ' cédulas de R$' . $valor . ",00\n" : $qnt . ' cédula de R$' . $valor . ",00\n";
  }
}