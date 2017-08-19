<?php

    include '../Model/UserModel.php';
    include '../Include/UserValidate.php';

    if((!empty($_POST['txtUser'])) &&
        (!empty($_POST['txtNome'])) &&
        (!empty($_POST['txtSobrenome'])) &&
        (!empty($_POST['txtEmail'])) &&
        (!empty($_POST['txtIdade'])) &&
        (!empty($_POST['pwdSenha'])))
    {   
        $erros = array();
        
        if (!UserValidate::testarIdade($_POST['txtIdade'])){
            $erros[] = 'Idade Invalida!';
        }
        if (!UserValidate::testarEmail($_POST['txtEmail'])){
            $erros[] = "E-mail inválido!";
        }
        
        if (count($erros) == 0){
            
            $user = new UserModel();
            
            
            $user->user = $_POST['txtUser'];
            $user->nome = $_POST['txtNome'];
            $user->sobrenome= $_POST['txtSobrenome'];
            $user->email = $_POST['txtEmail'];
            $user->idade = $_POST['txtIdade'];
            $user->senha = $_POST['pwdSenha'];
            
            header("location:../View/UserViewResult.php?".
                    "user=$user->user&".
                    "mail=$user->email");
            
        }
        else{
            $err = serialize($erros);
            
            header("location:../View/UserViewError.php?".
                    "erros=$err");
        }
           
    }
    else{
        echo "Informe todos os campo!";
    }
    
?>

