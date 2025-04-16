<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processar Respostas</title>
    <link rel="stylesheet" href="estilo.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header, main, footer {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
        }

        header h1 {
            margin: 0;
        }

        main {
            overflow: hidden;
        }

        .result {
            margin-top: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .score {
            font-weight: bold;
        }

        .message {
            margin-top: 10px;
        }

        footer {
            margin-top: 20px;
            text-align: center;
            clear: both;
        }
    </style>
</head>
<body>

<header>
    <h1>Projeto IF</h1>
</header>

<main>

<?php
// Include the configuration file
include('config.php');

// Initialize the counter and get the total number of questions from the form
$i = 0;
$nPergunta = $_POST['qtdPerguntaProva'];

// Initialize the total score
$pontuacaoTotal = 0;

$idProva = $_POST['idprova'];
$idAluno = 1;
$query = "INSERT INTO tentativaprova(idprova, idaluno) values ($idProva, $idAluno)";
$resultadoInsert = mysqli_query($conn, $query);
$query = "SELECT LAST_INSERT_ID()";
$resultado = mysqli_query($conn, $query);
if($resultado){
    $row= mysqli_fetch_assoc($resultado);
    $idtentativa = intval(implode($row));
}

// Loop to iterate over each question in the form
while ($i < $nPergunta) {
    // Get the question ID from the $_POST array
    $idpergunta = $_POST['pergunta'][$i];

    // Check if the answer to the current question is set in the $_POST array
    if (isset($_POST['respostaPergunta'][$i])) {
        // Get the ID of the selected answer
        $idresposta = $_POST['respostaPergunta'][$i];

        // SQL query to check if the selected answer is correct
        $query = "SELECT p.correta, 1 AS pontuacao
            FROM perguntaalternativa p 
            INNER JOIN alternativa a ON p.idalternativa = a.idalternativa 
            WHERE p.idpergunta = $idpergunta AND a.idalternativa = $idresposta";

        $resultado = mysqli_query($conn, $query);

        // Check if the query was successful
        if ($resultado) {
            // Get the result row
            $row = mysqli_fetch_assoc($resultado);

            // Check if the selected alternative is correct
            if (trim((string)$row['correta']) === 'S') {
                // Insert into the tentativapergunta table
                $queryInsert = "INSERT INTO tentativapergunta (idtentativaprova, idperguntaProva, idrespostaAluno) VALUES ($idtentativa, $idpergunta, $idresposta)";
                $resultadoInsert = mysqli_query($conn, $queryInsert);

                // Add the score to the total
                $pontuacaoTotal += $row['pontuacao'];
            }
        }
    }

    $i++;
}

// Check if at least one answer was submitted
if ($i > 0) {
    // Display the total score
    echo "<div class='result'>";
    echo "<p class='score'>Pontuação total: $pontuacaoTotal</p>";
    echo "</div>";

    echo "<p class='message'>Respostas enviadas com sucesso!</p>";
} else {
    echo "<p class='message'>Nenhuma resposta foi enviada.</p>";
}
?>

</main>

<footer>
    &copy; 2025 Projeto ENEM Flash.
</footer>

</body>
</html>
