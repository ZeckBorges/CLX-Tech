<?php

class FuncionarioController{

    public static function index()
    {
        include './Views/cadastro.php';
    }

    public static function save()
    {
       include 'Model/FuncionarioModel.php';

       var_dump($_POST);

       
       $model = new FuncionarioModel();
       $model->id = $_POST['id'];
       $model->nome = $_POST['nome'];
       $model->dt_nascimento = $_POST['dt_nascimento'];
       $model->salario = $_POST['salario'];
       $model->usuario = $_POST['usuario'];
       $model->senha = $_POST['senha'];

       $model->save();

       header("Location: /");

    }

    public static function list()
    {
        include 'Model/FuncionarioModel.php'; 
        $model = new FuncionarioModel();
        $model->getAllRows();

        include './Views/funcionarios.php';
    }
    public static function func(){
        include './Views/editar.php';
    }

    public static function edit()
    {
        include 'Model/FuncionarioModel.php';
        $model = new FuncionarioModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);

        include './Views/editar.php';
    }

    public static function delete()
    {
        include 'Model/FuncionarioModel.php';


        $model = new FuncionarioModel();

        $model->delete( (int) $_GET['id'] );

        header("Location: /listar");
    }

}