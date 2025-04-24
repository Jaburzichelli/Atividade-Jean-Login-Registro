<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Código de Validação</title>
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

        .reset-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 400px;
        }

        .reset-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .reset-header h1 {
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

        .reset-button {
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

        .reset-button:hover {
            background-color: #3a7bc8;
        }

        .reset-footer {
            margin-top: 20px;
            text-align: center;
        }

        .reset-footer a {
            color: #4a90e2;
            text-decoration: none;
            font-size: 14px;
            margin: 0 10px;
            transition: color 0.3s;
        }

        .reset-footer a:hover {
            color: #3a7bc8;
            text-decoration: underline;
        }

        .divider {
            margin: 20px 0;
            text-align: center;
            position: relative;
            color: #999;
        }

        .divider::before, .divider::after {
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
    <div class="reset-container">
        <div class="reset-header">
            <h1>Insira o Código</h1>
        </div>

        <form action="novasenha.php" method="POST">
            <div class="form-group">
                <label for="number">Código de Recuperação</label>
                <input type="number" id="number" name="number" placeholder="Insira o código enviado no seu E-mail" required>
            </div>

            <button type="submit" class="reset-button">Seguinte</button>
        </form>

        <div class="divider">ou</div>

        <div class="reset-footer">
            <p>Já lembra da sua senha? <a href="index.php">Faça login</a></p>
        </div>
    </div>
</body>
</html>