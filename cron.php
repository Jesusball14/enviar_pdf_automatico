<?php
// Dispara el envío en segundo plano sin esperar a que termine y responde de inmediato
$url = 'https://enviar-pdf-automatico.onrender.com/enviar_pdf.php';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 1); // Cierra la conexión de cron al segundo 1
curl_setopt($ch, CURLOPT_NOSIGNAL, 1);
curl_exec($ch);
curl_close($ch);

echo "OK - Disparado correctamente";
?>
