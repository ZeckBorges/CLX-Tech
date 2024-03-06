<?php

class FuncionarioDAO
{

    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=funcionarios";

        try {
            $this->conexao = new PDO($dsn, 'root', '2468');
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Conexão estabelecida com sucesso
        } catch (PDOException $e) {
            echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
        }
    }


    public function insert(FuncionarioModel $model)
    {
        
        $sql = "INSERT INTO funcionarios (nome, dt_nascimento, salario, usuario, senha) VALUES (?, ?, ?, ?, ?)";

        try {
            
            $stmt = $this->conexao->prepare($sql);

            $stmt->bindValue(1, $model->nome);
            $stmt->bindValue(2, $model->dt_nascimento);
            $stmt->bindValue(3, $model->salario);
            $stmt->bindValue(4, $model->usuario);
            $stmt->bindValue(5, $model->senha);

            // Executamos a consulta preparada.
            $stmt->execute();
            echo "Inserido com sucesso!";
        } catch (PDOException $e) {
            echo "Erro no banco de dados: " . $e->getMessage();
        }
    }

    public function update(FuncionarioModel $model)
    {
        $sql = "UPDATE funcionarios SET nome=?, dt_nascimento=?, salario=?, usuario=?, senha=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->dt_nascimento);
        $stmt->bindValue(3, $model->salario);
        $stmt->bindValue(4, $model->usuario);
        $stmt->bindValue(5, $model->senha);
        $stmt->bindValue(6, $model->id);

        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM funcionarios";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }

    public function selectById(int $id)
    {
        include_once 'Model/FuncionarioModel.php';

        $sql = "SELECT * FROM funcionarios WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("FuncionarioModel");
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM funcionarios WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

}