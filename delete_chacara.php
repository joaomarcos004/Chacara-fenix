<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idcha = $_POST['idcha'];

    $sql = "DELETE FROM chacara WHERE idcha=$idcha";

    if ($conn->query($sql) === TRUE) {
        echo "Chácara deletada com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
