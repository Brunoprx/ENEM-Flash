<?php

include('config.php');

// Verifica se a conexão foi estabelecida corretamente
if ($conn->connect_error) {
    die('Erro de Conexão (' . $conn->connect_errno . ') ' . $conn->connect_error);
}

if (isset($_POST['nomeprofessor']) && isset($_POST['senhaprofessor'])) {

    if (strlen($_POST['nomeprofessor']) == 0) {
        echo "Preencha seu e-mail";
    } else if (strlen($_POST['senhaprofessor']) == 0) {
        echo "Preencha sua senha";
    } else {
        $nome = $_POST['nomeprofessor'];
        $senha = $_POST['senhaprofessor'];

        $stmt = $conn->prepare("SELECT idprofessor, nomeprofessor FROM Professor WHERE nomeprofessor = ? AND senhaprofessor = ?");
        $stmt->bind_param("ss", $nome, $senha);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 1) {
            $stmt->bind_result($idprofessor, $nomeprofessor);
            $stmt->fetch();

            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }

            $_SESSION['idprofessor'] = $idprofessor;
            $_SESSION['nomeprofessor'] = $nomeprofessor;

            $stmt->close();
            header("Location:../PHP/professor.php");
            exit();
        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Professor - EnemBemLegal</title>
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

        .login-container {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 450px;
            padding: 2.5rem;
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .login-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .login-header img {
            height: 60px;
            margin-bottom: 1rem;
        }

        .login-header h1 {
            color: var(--text);
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
        }

        .login-header p {
            color: #666;
            font-size: 1rem;
        }

        .social-login {
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

        .login-form {
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

        .login-button {
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

        .login-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(123, 104, 238, 0.3);
        }

        .register-link {
            text-align: center;
            margin-top: 1.5rem;
            color: #666;
        }

        .register-link a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            margin-left: 0.5rem;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            .login-container {
                padding: 2rem;
                margin: 1rem;
            }
        }
    </style>
</head>
<body>
    <main class="login-container">
        <div class="login-header">
            <img src="../assetss/logo.png" alt="Logo EnemBemLegal">
            <h1>Área do Professor</h1>
            <p>Entre com sua conta para gerenciar conteúdo</p>
        </div>

        <div class="social-login">
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

        <form action="" method="POST" class="login-form">
            <div class="form-group">
                <input type="text" name="nomeprofessor" placeholder="Nome de usuário" required>
                <i class="fa fa-user"></i>
            </div>
            <div class="form-group">
                <input type="password" name="senhaprofessor" placeholder="Senha" required>
                <i class="fa fa-lock"></i>
            </div>
            <button type="submit" class="login-button">
                Entrar <i class="fa fa-arrow-right"></i>
            </button>
        </form>

        <div class="register-link">
            Ainda não tem uma conta?
            <a href="cadastra ai professor.php">Cadastre-se</a>
        </div>
    </main>
</body>
</html>

<?php
   if(isset($status)) {
           if ($status) {
              echo'OK! Cadastro salvo.';
           }else{
             echo 'Problema ao cadastrar.';
           }
   }
  