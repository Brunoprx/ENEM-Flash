<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Prova</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header,
        nav,
        main,
        footer {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
        }

        header {
            background-color: #DDA0DD;
        }

        nav {
            background-color: #DDA0DD;
        }

        main {
            overflow: hidden;
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

        header h1 {
            margin: 0;
            color: #333; /* Dark gray text color */
        }

        nav a {
            margin-right: 10px;
            text-decoration: none;
            color: #333;
        }

        .card {
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .pergunta {
            margin: 0;
            color: #333; /* Dark gray text color */
        }

        .alternativas {
            margin-top: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333; /* Dark gray text color */
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            margin-top: 10px;
            padding: 5px 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <header>
        <h1>Projeto IF</h1>
    </header>

    <nav>
        <a href="index.html">Página Inicial</a>
        <a href="contato.html">Contato</a>
    </nav>

    <main>

        <?php
        include('config.php');

        if (isset($_GET['idprova'])) {
            $idProva = $_GET['idprova'];

            $query = "SELECT * FROM prova WHERE idprova = $idProva";
            $resultado = mysqli_query($conn, $query);

            if ($resultado && mysqli_num_rows($resultado) > 0) {
                $prova = mysqli_fetch_assoc($resultado);
                echo "<h2>Detalhes da Prova: {$prova['nomeprova']}</h2>";
                echo "<p>ID: {$prova['idprova']}</p>";

                echo "<form method='post' action='processar_respostas.php'>";
                echo "<input type='hidden' name='idprova' value='$idProva'>";

                $queryPerguntas = "SELECT * FROM perguntaprova JOIN pergunta ON perguntaprova.idpergunta = pergunta.idpergunta WHERE idprova = $idProva";
                $resultadoPerguntas = mysqli_query($conn, $queryPerguntas);
                $cont = 0;

                while ($pergunta = mysqli_fetch_assoc($resultadoPerguntas)) {
                    echo "<div class='card'>";
                    echo "<p class='pergunta'>{$pergunta['textopergunta']}</p>";

                    $queryAlternativas = "SELECT * FROM perguntaalternativa JOIN alternativa ON perguntaalternativa.idalternativa = alternativa.idalternativa WHERE idpergunta = {$pergunta['idpergunta']}";
                    $resultadoAlternativas = mysqli_query($conn, $queryAlternativas);

                    echo "<div class='alternativas'>";
                    echo "<input type='hidden' name='pergunta[{$cont}]' value='{$pergunta['idpergunta']}'>";

                    while ($alternativa = mysqli_fetch_assoc($resultadoAlternativas)) {
                        echo "<label><input type='radio' name='respostaPergunta[{$cont}]' value='{$alternativa['idalternativa']}'> {$alternativa['textoalternativa']}</label>";
                    }

                    echo "</div>";
                    echo "</div>";
                    $cont++;
                }

                echo "<input type='hidden' name='qtdPerguntaProva' value='$cont'>";
                echo "<input type='submit' value='Enviar Respostas'>";
                echo "</form>";

            } else {
                echo "<p>Prova não encontrada.</p>";
            }
        } else {
            echo "<p>ID da prova não fornecido.</p>";
        }
        ?>

    </main>

    <footer>
        &copy; 2025 Projeto ENEM Flash.
    </footer>

</body>

</html>
