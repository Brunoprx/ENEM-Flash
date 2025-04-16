<?php

require('config.php');

// Check if the form is submitted
if (isset($_POST['nomealuno'])) {
    // Retrieve form data
    $nome = $_POST['nomealuno'];
    $senha = $_POST['senhaaluno'];

    // Ensure $mysqli is defined and not null
    if ($conn) {
        // Use prepared statements to prevent SQL injection
        $query = "INSERT INTO aluno (nomealuno, senhaaluno) VALUES (?, ?)";
        
        // Prepare the statement
        $stmt = mysqli_prepare($conn, $query);

        // Bind parameters
        mysqli_stmt_bind_param($stmt, 'ss', $nome, $senha);

        // Execute the statement
        $status = mysqli_stmt_execute($stmt);

        // Close the statement
        mysqli_stmt_close($stmt);

        // Check the status of the query
        if ($status) {
            echo 'OK! Cadastro salvo Aluno(a).';
        } else {
            echo 'Problema ao cadastrar.';
        }
    } else {
        echo 'Erro na conexão com o banco de dados.';
    }
}

?>

<!-- Rest of your HTML code -->



 

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Aluno - EnemBemLegal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        :root {
            --primary: #7B68EE;
            --secondary: #9B59B6;
            --text: #2D3436;
            --background: #f8f9fa;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, rgba(123, 104, 238, 0.1), rgba(155, 89, 182, 0.1));
            padding: 2rem;
            background-image: url("../assetss/livros.jpg");
            background-size: cover;
            background-position: center;
            position: relative;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(123, 104, 238, 0.9), rgba(155, 89, 182, 0.9));
            z-index: 1;
        }

        .register-container {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 450px;
            padding: 2.5rem;
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .register-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .register-header img {
            height: 60px;
            margin-bottom: 1rem;
        }

        .register-header h1 {
            color: var(--text);
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
        }

        .register-header p {
            color: #666;
            font-size: 1rem;
        }

        .social-register {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .social-button {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-button:hover {
            background: var(--background);
            color: var(--primary);
            transform: translateY(-2px);
        }

        .register-form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .form-group {
            position: relative;
        }

        .form-group input {
            width: 100%;
            padding: 1rem;
            border: 2px solid #eee;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: var(--background);
        }

        .form-group input:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 3px rgba(123, 104, 238, 0.1);
        }

        .form-group i {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 1rem;
            color: #666;
        }

        .register-button {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 1rem;
            border: none;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            text-align: center;
        }

        .register-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(123, 104, 238, 0.3);
        }

        .login-link {
            text-align: center;
            margin-top: 1.5rem;
            color: #666;
        }

        .login-link a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            margin-left: 0.5rem;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        .alert {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            padding: 1rem 2rem;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            text-align: center;
            animation: slideDown 0.5s ease-out;
            z-index: 1000;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .alert-success {
            background: linear-gradient(135deg, #4CAF50, #45a049);
            color: white;
            border: 2px solid #45a049;
        }

        .alert-error {
            background: linear-gradient(135deg, #f44336, #e53935);
            color: white;
            border: 2px solid #e53935;
        }

        @keyframes slideDown {
            from {
                transform: translate(-50%, -100%);
                opacity: 0;
            }
            to {
                transform: translate(-50%, 0);
                opacity: 1;
            }
        }

        @media (max-width: 480px) {
            .register-container {
                padding: 2rem;
                margin: 1rem;
            }
        }
    </style>
</head>
<body>
    <main class="register-container">
        <div class="register-header">
            <img src="../assetss/logo.png" alt="Logo EnemBemLegal">
            <h1>Criar Conta de Aluno</h1>
            <p>Comece sua jornada de estudos</p>
        </div>

        <div class="social-register">
            <a href="https://www.facebook.com/" class="social-button">
                <i class="fa fa-facebook"></i>
            </a>
            <a href="https://www.google.com" class="social-button">
                <i class="fa fa-google"></i>
            </a>
            <a href="https://www.linkedin.com/" class="social-button">
                <i class="fa fa-linkedin"></i>
            </a>
        </div>

        <form action="cadastra ai aluno.php" method="POST" class="register-form">
            <div class="form-group">
                <input type="text" name="nomealuno" placeholder="Nome de usuário" required>
                <i class="fa fa-user"></i>
            </div>
            <div class="form-group">
                <input type="password" name="senhaaluno" placeholder="Senha" required>
                <i class="fa fa-lock"></i>
            </div>
            <button type="submit" class="register-button">
                Cadastrar <i class="fa fa-arrow-right"></i>
            </button>
        </form>

        <div class="login-link">
            Já tem uma conta?
            <a href="entrar aluno.php">Entrar</a>
        </div>
    </main>

    <?php
    if(isset($status)) {
        if ($status) {
            echo '<div class="alert alert-success">
                    <i class="fa fa-check-circle"></i> Cadastro realizado com sucesso!
                  </div>';
        } else {
            echo '<div class="alert alert-error">
                    <i class="fa fa-exclamation-circle"></i> Erro ao realizar cadastro. Tente novamente.
                  </div>';
        }
    }
    ?>
</body>
</html>