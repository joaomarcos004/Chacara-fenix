CREATE DATABASE condominio_fenix;

USE condominio_fenix;

CREATE TABLE chacara (
    idcha INT AUTO_INCREMENT PRIMARY KEY,
    numero VARCHAR(50) NOT NULL,
    tamanho VARCHAR(50),
    memorial_descritivo TEXT
);

CREATE TABLE proprietario (
    idpro INT AUTO_INCREMENT PRIMARY KEY,
    cpf_cnpj VARCHAR(20) NOT NULL,
    endereco VARCHAR(255),
    telefones TEXT,  -- Telefone pode ser armazenado como um JSON string para múltiplos números
    email VARCHAR(100),
    foto VARCHAR(255),
    dependentes TEXT -- Dependentes podem ser armazenados como um JSON string
);

CREATE TABLE lote (
    idlo INT AUTO_INCREMENT PRIMARY KEY,
    idch INT,
    idpro INT,
    FOREIGN KEY (idch) REFERENCES chacara(idcha),
    FOREIGN KEY (idpro) REFERENCES proprietario(idpro)
);
