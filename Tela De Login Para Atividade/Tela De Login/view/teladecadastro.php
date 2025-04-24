<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Conta</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .register-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 400px;
        }

        .register-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .register-header h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 600;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .form-group input:focus {
            border-color: #4a90e2;
            outline: none;
        }

        .register-button {
            width: 100%;
            padding: 12px;
            background-color: #4a90e2;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .register-button:hover {
            background-color: #3a7bc8;
        }

        .register-footer {
            margin-top: 20px;
            text-align: center;
        }

        .register-footer a {
            color: #4a90e2;
            text-decoration: none;
            font-size: 14px;
            margin: 0 10px;
            transition: color 0.3s;
        }

        .register-footer a:hover {
            color: #3a7bc8;
            text-decoration: underline;
        }

        .divider {
            margin: 20px 0;
            text-align: center;
            position: relative;
            color: #999;
        }

        .divider::before,
        .divider::after {
            content: "";
            display: inline-block;
            width: 30%;
            height: 1px;
            background-color: #ddd;
            position: absolute;
            top: 50%;
        }

        .divider::before {
            left: 0;
        }

        .divider::after {
            right: 0;
        }
    </style>
</head>

<body>
    <div class="register-container">
        <div class="register-header">
            <h1>Criar Conta</h1>
        </div>

        <form action="../controller/CadastroController.php" method="POST">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" name="email" placeholder="Digite seu e-mail" required>
            </div>

            <div class="form-group">
    <label for="telefone">Telefone</label>
    <input type="tel" name="Telefone" id="Telefone" placeholder="(XX) XXXXX-XXXX" required>
</div>

            

            <div class="form-group">
                <label for="Nome">Nome</label>
                <input type="Nome" name="fullname" id="Nome" name="Nome" placeholder="Digite seu Nome" required>
            </div>

            <div class="form-group">
                <label for="Sobrenome">Sobrenome</label>
                <input type="Sobrenome" name="Sobrenome" id="Sobrenome" name="Sobrenome" placeholder="Digite seu Sobrenome" required>
            </div>

            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" name="password" id="password" name="password" placeholder="Digite sua senha" required>
            </div>

            <div class="form-group">
                <label for="confirm-password">Confirmar Senha</label>
                <input type="password" name="confirmPassword" id="confirm-password" name="confirm-password" placeholder="Confirme sua senha" required>
            </div>

            <button type="submit" class="register-button">Cadastrar</button>
        </form>

        <div class="divider">ou</div>

        <div class="register-footer">
            <p>Já tem uma conta? <a href="index.php">Faça login</a></p>
        </div>
    </div>
</body>

</html>