<?php
// Função para validação de campos (Exemplo básico)

// Função para upload de imagem (Exemplo básico)
function uploadImagem($imagem) {
    // ... (implementação similar à original, com validações adicionais)
}

// Conexão com o banco de dados
$conn = new PDO('mysql:host=localhost;dbname=dory', 'root', '');

// Verificação de envio do formulário
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Dados do formulário (com validação)
    $erros = [];
    //$id_acude = $_POST["id_acude"];
    $nome_acude = $_POST["nome_acude"];
    // ... (validação dos demais campos)

    // Upload da imagem (com validação)
    $imagem_path = null;
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === 0) {
        // ... (validação do tipo de arquivo, tamanho, etc.)
        $imagem_path = uploadImagem($_FILES['imagem']);
        if (!$imagem_path) {
            $erros[] = "Erro ao enviar a imagem.";
        }
    }

    // Se não houver erros, cadastra o produto
    if (empty($erros)) {
        $stmt = $conn->prepare("INSERT INTO reservatorios (nome_acude, localizacao, data_coleta, especies_peixe, 
        quantidade_peixes, tamanho_medio_peixes, imagem) VALUES ($nome_acude, $localizacao, $data_coleta, $especie_peixe, 
        $quantidade_peixes, $tamanho_medio_peixes, $imagem)");

        
        $stmt->execute();
    } else {
        // Exibir mensagens de erro para o usuário
        foreach ($erros as $erro) {
            echo $erro . "<br>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coleta de Dados do Açude de Peixes</title>
    <link rel="stylesheet" href="style_acude.css">
</head>
<body>
    <h1>COLETA DE DADOS DO RESERVATÓRIO</h1>
    <form action="acude.php" method="post" enctype="multipart/form-data">
        <section id="identificacao">
            <br>
            <h2>Identificação do RESERVATÓRIO</h2>
                     
            <label for="nome_acude">Nome do RESERVATÓRIO:</label>
            <input type="text" id="nome_acude" name="nome_acude" required>

            <label for="localizacao">Localização:</label>
            <input type="text" id="localizacao" name="localizacao" required>

            <label for="data_coleta">Data da Coleta:</label>
            <input type="date" id="data_coleta" name="data_coleta" required>
        </section>
       
        <section id="populacao_peixes">
            <h2>População de Peixes</h2>
            <label for="especie_peixe">Espécie de Peixe:</label>
            <input type="text" id="especie_peixe" name="especie_peixe" required>

            <label for="quantidade_peixes">Quantidade de Peixes:</label>
            <input type="number" id="quantidade_peixes" name="quantidade_peixes" required>

            <label for="tamanho_medio_peixes">Tamanho Médio dos Peixes (cm):</label>
            <input type="number" id="tamanho_medio_peixes" name="tamanho_medio_peixes" required>

            <label for="imagem">IMAGEM ACUDE:</label>
            <input type="file" id="imagem" name="imagem" accept="imagem/*">
        </section>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>