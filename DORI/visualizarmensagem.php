<!DOCTYPE html>
<html>
<head>
    <title>Formulário e Exibição de Mensagens</title>
    <style>
        /* Estilos CSS para os cards */
        body{
            background-color: #043959;
            color: white;
        }
        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            padding: 20px;
            margin: 10px;
            height: 100px;
            width: 200px;
            background-color: #9ec2e6;
            color: black;
        }

        .card-header {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-body {
            font-size: 16px;
        }
    </style>
</head>
<body>
<br>
<br>
<br>
<br>
<?php
include_once('config.php');


// Consulta SELECT para buscar todas as mensagens
$sql = "SELECT * FROM contato";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Mensagens Enviadas</h2>";
    while($row = $result->fetch_assoc()) {
        echo "<div class='card'>";
        echo "<div class='card-header'>Mensagem de : " . $row["nome"] . "</div>";
        echo "<div class='card-body'>";
       // echo "<p>Email: " . $row["email"] . "</p>";
        echo "<p>Mensagem: " . $row["mensagem"] . "</p>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "Nenhuma mensagem encontrada.";
}

$conn->close();
?>

</body>
</html>