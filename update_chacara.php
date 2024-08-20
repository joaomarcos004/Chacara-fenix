<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idcha = $_POST['idcha'];
    $numero = $_POST['numero'];
    $tamanho = $_POST['tamanho'];
    $memorial = $_POST['memorial_descritivo'];

    $sql = "UPDATE chacara SET numero='$numero', tamanho='$tamanho', memorial_descritivo='$memorial' WHERE idcha=$idcha";

    if ($conn->query($sql) === TRUE) {
        echo "Chácara atualizada com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
