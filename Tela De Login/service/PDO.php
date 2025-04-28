<?php
require_once(__DIR__ . '../conexao.php'); // conecta ao banco

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $senha = trim($_POST['password']); // cuidado: 'password'

    if (empty($email) || empty($senha)) {
        echo "Preencha todos os campos.";
        exit;
    }

    $query = "SELECT * FROM usuarios WHERE email = :email";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$usuario) {
        echo "E-mail não cadastrado.";
        exit;
    }

    if (!password_verify($senha, $usuario['senha'])) {
        echo "Senha incorreta.";
        exit;
    }

    // Inicia sessão se ainda não iniciou
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $_SESSION['usuario_id'] = $usuario['id'];
    $_SESSION['usuario_email'] = $usuario['email'];

    header("Location: ../view/pagina_protegida.php");
    exit;
}
?>