<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idpro = $_POST['idpro'];
    $cpf_cnpj = $_POST['cpf_cnpj'];
    $endereco = $_POST['endereco'];
    $telefones = $_POST['telefones'];
    $email = $_POST['email'];
    $foto = $_POST['foto'];
    $dependentes = $_POST['dependentes'];

    $sql = "UPDATE proprietario SET cpf_cnpj='$cpf_cnpj', endereco='$endereco', telefones='$telefones', email='$email', foto='$foto', dependentes='$dependentes' WHERE idpro=$idpro";

    if ($conn->query($sql) === TRUE) {
        echo "Proprietário atualizado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
