<!DOCTYPE html>
<html>
<body>

<?php
$numeros = [11, 3, 42, 8, 27, 5];
$maior = max($numeros);
$menor = min($numeros);
$dif = $maior - $menor;

echo 'Maior Valor: ',$maior;
echo '<br> Menor Valor: ',$menor;
echo '<br> Diferença: ', $dif, '';
?> 

</body>
</html>
