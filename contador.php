<?php
// Define o nome do arquivo que vai guardar a contagem
$arquivo = 'contador.txt';

// Verifica se o arquivo existe
if (file_exists($arquivo)) {
    // Lê o valor atual
    $visitas = file_get_contents($arquivo);
    // Incrementa +1
    $visitas++;
} else {
    // Se não existir, começa em 1
    $visitas = 1;
}

// Salva o novo valor no arquivo
file_put_contents($arquivo, $visitas);

// Exibe o número de visitas
echo "Você é o visitante número: " . $visitas;
?>
