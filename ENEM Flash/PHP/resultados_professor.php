<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentativas de Prova</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f0f0f0;
        }

        header,
        nav,
        main,
        footer {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
        }

        header h1 {
            margin: 0;
            color: #333;
        }

        header {
            background-color: #DDA0DD;
        }

        nav {
            background-color: white;
        }

        nav a {
            margin-right: 10px;
            text-decoration: none;
            color: #333;
        }

        main {
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        footer {
    background-color:#DDA0DD;
    color: #fff;
    text-align: center;
    padding: 1em;
    position: fixed;
    bottom: 0;
    width: 100%;
}
    </style>
</head>

<body>

    <header>
        <h1>Projeto IF</h1>
    </header>

    <nav>
        <a href="professor.php#">Página Inicial</a>
        <a href="../contato.html">Contato</a>
    </nav>

    <main>

        <?php
        // Include the configuration file
        include('config.php');

        // Exemplo de como exibir resultados na nova página
        echo "<h2>Tentativas de Prova</h2>";

        // Consulta para obter as tentativas e pontuações dos alunos
        $queryResultados = "SELECT tp.idtentativaprova, tp.idprova, tp.idaluno, tp.pontuacao_total
                            FROM tentativaprova tp";

        $resultadoResultados = mysqli_query($conn, $queryResultados);

        if ($resultadoResultados) {
            echo "<table>";
            echo "<tr><th>ID Tentativa</th><th>ID Prova</th><th>ID Aluno</th><th>Pontuação Total</th></tr>";

            while ($rowResultado = mysqli_fetch_assoc($resultadoResultados)) {
                $idTentativa = $rowResultado['idtentativaprova'];
                $idProva = $rowResultado['idprova'];
                $idAluno = $rowResultado['idaluno'];
                $pontuacaoTotal = $rowResultado['pontuacao_total'];

                echo "<tr>";
                echo "<td>$idTentativa</td><td>$idProva</td><td>$idAluno</td><td>$pontuacaoTotal</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "Erro ao recuperar resultados.";
        }
        ?>
    </main>

    <footer>
        &copy; 2025 Projeto ENEM Flash.
    </footer>

</body>

</html>
