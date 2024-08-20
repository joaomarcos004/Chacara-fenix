<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idpro = $_POST['idpro'];

    $sql = "DELETE FROM proprietario WHERE idpro=$idpro";

    if ($conn->query($sql) === TRUE) {
        echo "Proprietário deletado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
