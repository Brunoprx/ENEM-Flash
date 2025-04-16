<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Prova</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<header>
    <h1>Projeto IF</h1>
</header>

<nav>
    <ul>
        <li><a href="professor.php">Página Inicial</a></li>
        <li><a href="adicionar_prova.php" class="active">Adicionar Prova</a></li>
        <li><a href="adicionar_pergunta.php">Adicionar Pergunta</a></li>
        <li><a href="adicionar_alternativa.php">Adicionar Alternativa</a></li>
        <li><a href="../contato.html">Contato</a></li>
    </ul>
</nav>

<main>
    <div class="card">
        <h2>Adicionar Prova</h2>

        <?php
        include('config.php');

        // Consulta SQL para obter todas as áreas
        $queryAreas = "SELECT * FROM area";
        $resultadoAreas = mysqli_query($conn, $queryAreas);

        // Consulta SQL para obter todas as perguntas
        $queryPerguntas = "SELECT * FROM pergunta";
        $resultadoPerguntas = mysqli_query($conn, $queryPerguntas);

        // Verificar o envio do formulário e inserir a prova no banco de dados
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['nomeprova'], $_POST['idprofessor'], $_POST['idarea'], $_POST['idpergunta'], $_POST['idprova'])) {
                $nomeProva = $_POST['nomeprova'];
                $idProfessor = $_POST['idprofessor'];
                $idArea = $_POST['idarea'];
                $idPergunta = $_POST['idpergunta'];
                $idProva = $_POST['idprova'];

                // Inserindo a prova na tabela
                $query = "INSERT INTO prova (idprova, idprofessor, idaluno, nomeprova, idarea, idpergunta) VALUES ('$idProva', '$idProfessor', NULL, '$nomeProva', '$idArea', '$idPergunta')";
                $resultado = mysqli_query($conn, $query);

                if ($resultado) {
                    echo "<p class='alert alert-success'>Prova adicionada com sucesso!</p>";
                } else {
                    echo "<p class='alert alert-danger'>Erro ao adicionar prova: " . mysqli_error($conn) . "</p>";
                }
            }
        }
        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form-container">
            <div class="form-group">
                <label for="nomeprova">Nome da Prova:</label>
                <input type="text" name="nomeprova" id="nomeprova" required>
            </div>
            
            <div class="form-group">
                <label for="idprova">ID da Prova:</label>
                <input type="number" name="idprova" id="idprova" required>
            </div>

            <div class="form-group">
                <label for="idprofessor">ID do Professor:</label>
                <input type="text" name="idprofessor" id="idprofessor" required>
            </div>

            <div class="form-group">
                <label for="idarea">Área:</label>
                <select name="idarea" id="idarea" required>
                    <?php
                    // Exibir as áreas no elemento select
                    while ($area = mysqli_fetch_assoc($resultadoAreas)) {
                        echo "<option value='{$area['idarea']}'>{$area['nomearea']}</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="idpergunta">Pergunta:</label>
                <select name="idpergunta" id="idpergunta" required>
                    <?php
                    // Exibir as perguntas no elemento select
                    while ($pergunta = mysqli_fetch_assoc($resultadoPerguntas)) {
                        echo "<option value='{$pergunta['idpergunta']}'>{$pergunta['textopergunta']}</option>";
                    }
                    ?>
                </select>
            </div>

            <button type="submit" class="btn">Adicionar Prova</button>
        </form>
    </div>
</main>

<footer>
    &copy; 2025 Projeto ENEM Flash.
</footer>

</body>
</html>
