$parcela_inicio = '1';
$parcela_fim = '5';
$dataTransacao = "2020-09-10";

for ($i = 0; $i < $parcela_fim; $i++) {
    $newdate = strtotime ( $i.' month' , strtotime ( $dataTransacao ) ) ;
      $newdate = date ( 'Y-m-d' , $newdate );
      printR($newdate);
}
