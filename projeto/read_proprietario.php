<?php
include 'config.php';

$sql = "SELECT * FROM proprietario";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["idpro"]. " - CPF/CNPJ: " . $row["cpf_cnpj"]. " - Endereço: " . $row["endereco"]. "<br>";
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>
