function validateLogin() {
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    // Simulação de autenticação
    if (username === "admin" && password === "1234") {
        return true; // Redireciona para a intranet
    } else {
        alert("Usuário ou senha incorretos!");
        return false; // Impede o envio do formulário
    }
}
