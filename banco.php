<?php
$servidor = "127.0.0.1";
$base = "dbinb0243";
$usuario = "inb0243user";
$senha = "alunos";
try {
    $conn = new PDO("mysql:host=$servidor;dbname=$base", $usuario, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head>";
    echo "<meta charset=\"utf-8\">";
    echo "<title>Conexão com o Servidor Web</title>";
    echo "</head>";
    echo "<body style=\"background-color: #f2f2f2; font-family: 'Arial', sans-serif;\">";
    echo "<div style=\"text-align: center; padding-top: 50px;\">";
    echo "<h1 style=\"font-size: 36px; color: #1a1a1a;\">Conectado ao Servidor Web</h1>";
    echo "<br>";
    echo "<h1 style=\"font-size: 24px; color: #333;\">MARIA 2021324612</h1>";
    echo "<h1 style=\"font-size: 24px; color: #333;\">ISADORA 2021308833</h1>";
    echo "</div>";
    echo "<div style=\"text-align: center; margin-top: 50px;\">";

    echo "</div>";
    echo "</body>";
    echo "</html>";

} catch(PDOException $e) {
    echo "Falha na conexão: " . $e->getMessage();
}
?>

