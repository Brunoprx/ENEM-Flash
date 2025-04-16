<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Provas</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<header>
    <h1>Projeto IF</h1>
</header>

<nav>
    <a href="professor.html">Página Inicial</a>
    <a href="contato.html">Contato</a>
</nav>

<main>
    <?php
    // Incluir o arquivo de configuração
    include('config.php');

    // IDs definidos
    $ids = [3];

    // Exibir as provas para cada ID definido
    foreach ($ids as $id) {
        // Query para buscar as provas com base no ID
        $query = "SELECT prova.idprova, prova.nomeprova, area.nomearea
                  FROM prova
                  INNER JOIN area ON prova.idarea = area.idarea
                  WHERE prova.idarea = $id";
        $resultado = mysqli_query($conn, $query);

        // Exibir as provas
        echo "<h2>Provas Disponíveis (Área $id)</h2>";
        echo "<div class='provas-lista'>";

        while ($row = mysqli_fetch_assoc($resultado)) {
            $idProva = $row['idprova'];
            $nomeProva = $row['nomeprova'];
            $nomeArea = $row['nomearea'];
            echo "<section><p><a href='detalhes_prova.php?idprova=$idProva'>$nomeProva ($nomeArea)</a></p></section>";
        }

        echo "</div>";
    }
    ?>

    <h2>Provas Adicionadas</h2>

</main>

<footer>
    &copy; 2025 Projeto ENEM Flash.
</footer>

</body>
</html>
