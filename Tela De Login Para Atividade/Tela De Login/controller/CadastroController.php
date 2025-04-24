<?php

require '../model/cadastroModel.php';

if ($_POST) {
    $fullname = $_POST['fullname'] ?? '';
    $Sobrenome = $_POST['Sobrenome'] ?? '';
    $Telefone = $_POST['Telefone'] ?? ''; 
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirmPassword'] ?? '';

  

   
    $result = register($fullname, $email, $Sobrenome, $password, $Telefone);

    if ($result) {
        echo 'Cadastro realizado com sucesso!';
    } else {
        echo 'Não foi possível realizar o cadastro.';
    }
}