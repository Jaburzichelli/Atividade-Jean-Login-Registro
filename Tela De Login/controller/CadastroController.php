<?php

require '../model/CadastroModel.php';

if ($_POST) {
    $fullname = $_POST['fullname'] ?? '';
    $Telefone = $_POST['Telefone'] ?? ''; 
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirmPassword'] ?? '';

    $result = register($fullname, $email ,$Telefone ,$password);

    if ($result) {
        // Mostra alerta de sucesso e redireciona para index.php
        echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href = '../view/index.php';</script>";
    } else {
        // Mostra alerta de erro e volta para a tela de cadastro
        echo "<script>alert('Não foi possível realizar o cadastro. Tente novamente.'); window.location.href = '../view/teladecadastro.php';</script>";
    }
}
