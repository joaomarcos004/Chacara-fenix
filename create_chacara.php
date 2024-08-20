<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['numero'];
    $tamanho = $_POST['tamanho'];
    $memorial = $_POST['memorial_descritivo'];

    $sql = "INSERT INTO chacara (numero, tamanho, memorial_descritivo) VALUES ('$numero', '$tamanho', '$memorial')";

    if ($conn->query($sql) === TRUE) {
        echo "Nova chácara criada com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
