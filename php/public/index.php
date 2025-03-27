<?php
// Inicia a sessão para armazenar os dados enviados
session_start();

// Se houver envio do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"] ?? "";
    $idade = $_POST["idade"] ?? "";

    // Verifica se já existe um array de pessoas na sessão
    if (!isset($_SESSION["pessoas"])) {
        $_SESSION["pessoas"] = [];
    }

    // Adiciona a nova pessoa ao array
    $_SESSION["pessoas"][] = ["nome" => $nome, "idade" => $idade];
}

// Carrega as pessoas da sessão
$pessoas = $_SESSION["pessoas"] ?? [];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>PHP!!</title>
</head>
<body>
    <h1>Aula 2 PHP</h1>

    <form action="index.php" method="post">
        Nome: <input type="text" name="nome" required><br>
        Idade: <input type="number" name="idade" required><br>
        <button type="submit">Enviar</button>
    </form>

    <table border="3                ">
        <tr>
            <th>Nome</th>
            <th>Idade</th>
        </tr>
        <?php
        if (!empty($pessoas)) {
            foreach ($pessoas as $pessoa) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($pessoa['nome']) . "</td>";
                echo "<td>" . htmlspecialchars($pessoa['idade']) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>Nenhuma pessoa cadastrada.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
