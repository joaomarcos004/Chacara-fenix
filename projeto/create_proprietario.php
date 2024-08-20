<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cpf_cnpj = $_POST['cpf_cnpj'];
    $endereco = $_POST['endereco'];
    $telefones = $_POST['telefones']; // Pode ser JSON
    $email = $_POST['email'];
    $foto = $_POST['foto']; // Nome do arquivo de foto
    $dependentes = $_POST['dependentes']; // Pode ser JSON

    $sql = "INSERT INTO proprietario (cpf_cnpj, endereco, telefones, email, foto, dependentes) VALUES ('$cpf_cnpj', '$endereco', '$telefones', '$email', '$foto', '$dependentes')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo proprietário criado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
