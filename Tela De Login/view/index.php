<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
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
            overflow: hidden; /* Impede a rolagem durante a animação */
            transition: transform 0.5s ease-out; /* Transição para a animação */
        }

        .login-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 400px;
        }

        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-header h1 {
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

        .login-button {
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

        .login-button:hover {
            background-color: #3a7bc8;
        }

        .login-footer {
            margin-top: 20px;
            text-align: center;
        }

        .login-footer a {
            color: #4a90e2;
            text-decoration: none;
            font-size: 14px;
            margin: 0 10px;
            transition: color 0.3s;
        }

        .login-footer a:hover {
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

        /* Animação para mover a tela para a esquerda */
        .slide-left {
            animation: slideLeft 0.5s forwards;
        }

        @keyframes slideLeft {
            to {
                transform: translateX(-100%);
            }
        }
    </style>
</head>
<body>

    <div class="login-container">
        <div class="login-header">
            <h1>Faça seu Login</h1>
        </div>

        <form action="../controller/LoginController.php" method="POST">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
            </div>

            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" placeholder="Digite sua senha" required>
            </div>

            <button type="submit" class="login-button">Entrar</button>
        </form>

        <div class="login-footer">
            <a href="recuperaçaodesenha.php">Esqueci minha senha</a>
        </div>

        <div class="divider">ou</div>

        <div class="login-footer">
            <p>Não tem uma conta? <a href="teladecadastro.php">Cadastre-se</a></p>
        </div>

        
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('a[href]').forEach(link => {
                link.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');

                    // Se for link interno (não âncora vazia e não javascript)
                    if (href && !href.startsWith('#') && !href.startsWith('javascript:')) {
                        e.preventDefault(); // Impede a navegação imediata
                        document.body.classList.add('slide-left'); // Aplica a animação de deslizar para a esquerda

                        setTimeout(() => {
                            window.location.href = href; // Redireciona após a animação
                        }, 500); // Tempo de duração da animação (500ms)
                    }
                });
            });
        });
    </script>
</body>
</html>