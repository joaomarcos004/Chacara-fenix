<?php
include 'config.php';

$sql = "SELECT * FROM chacara";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["idcha"]. " - Número: " . $row["numero"]. " - Tamanho: " . $row["tamanho"]. "<br>";
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>
