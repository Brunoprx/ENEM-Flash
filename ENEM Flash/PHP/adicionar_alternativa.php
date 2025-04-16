<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Alternativa</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<header>
    <h1>Projeto IF</h1>
</header>

<nav>
    <ul>
        <li><a href="professor.php">Página Inicial</a></li>
        <li><a href="adicionar_prova.php">Adicionar Prova</a></li>
        <li><a href="adicionar_pergunta.php">Adicionar Pergunta</a></li>
        <li><a href="adicionar_alternativa.php" class="active">Adicionar Alternativa</a></li>
        <li><a href="../contato.html">Contato</a></li>
    </ul>
</nav>

<main>
    <div class="card">
        <h2>Adicionar Alternativa</h2>

        <?php
        // Incluir o arquivo de configuração
        include('config.php');

        // Adicionar o código PHP para processar o formulário de adição de prova aqui
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Verificar se as variáveis estão definidas
            if (isset($_POST['idalternativa'], $_POST['textoalternativa'])) {
                // Processar os dados do formulário e adicionar a prova ao banco de dados
                $idAlternativa = $_POST['idalternativa'];
                $textoAlternativa = $_POST['textoalternativa'];

                $query = "INSERT INTO alternativa (idalternativa, textoalternativa) VALUES ('$idAlternativa','$textoAlternativa')";
                $resultado = mysqli_query($conn, $query);

                // Verificar se a inserção foi bem-sucedida e exibir uma mensagem ao usuário
                if ($resultado) {
                    echo "<p class='alert alert-success'>Alternativa adicionada com sucesso!</p>";
                } else {
                    echo "<p class='alert alert-danger'>Erro ao adicionar alternativa: " . mysqli_error($conn) . "</p>";
                }
            }
        }
        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form-container">
            <div class="form-group">
                <label for="idalternativa">ID da Alternativa:</label>
                <input type="number" name="idalternativa" id="idalternativa" required>
            </div>

            <div class="form-group">
                <label for="textoalternativa">Enunciado:</label>
                <input type="text" name="textoalternativa" id="textoalternativa" required>
            </div>

            <button type="submit" class="btn">Adicionar Alternativa</button>
        </form>
    </div>
</main>

<footer>
    &copy; 2025 Projeto ENEM Flash.
</footer>

</body>
</html>
