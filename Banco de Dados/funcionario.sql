CREATE TABLE funcionarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    dt_nascimento DATE NOT NULL,
    salario DECIMAL(10, 2) NOT NULL,
    usuario VARCHAR(50) NOT NULL,
    senha VARCHAR(50) NOT NULL
);
