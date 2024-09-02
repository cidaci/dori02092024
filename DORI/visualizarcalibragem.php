<?php
// Include configuration file (assuming it contains database details)
include_once('config.php');

// Create the query to retrieve reservoir data
$sql = "SELECT id, data_cali, nome_reservatorio, nome_proprietario, leitura1_1, leitura1_2, leitura1_3,
leitura2_1, leitura2_2, leitura2_3, leitura3_1, leitura3_2, leitura3_3, leitura4_1, leitura4_2, leitura4_3,
leitura5_1, leitura5_2, leitura5_3, leitura6_1, leitura6_2, leitura6_3, leitura7_1, leitura7_2, leitura7_3,
leitura8_1, leitura8_2, leitura8_3 FROM calibracao";

// Execute the query and check for success
$result = $conn->query($sql);
if (!$result) {
    die("Failed to execute query: " . $conn->error);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>AMOSTRA | GN</title>

    <style>
        body {
            background: url(peixe.jpeg);
            background-repeat: no-repeat;
            background-size: cover;
            color: black 0.6;
            text-align: center;
        }

        .table-bg {
            background-color: #191970;
            border-radius: 15px 15px 0 0;
        }

        .box-search {
            display: flex;
            justify-content: center;
            gap: 0.1%;
        }
        table{
            font-size: 10px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
         
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="d-flex">
        <a href="sair.php" class="btn btn-danger me-5">Sair</a>
    </div>
</nav>

<br>

<?php
echo "<h1>CALIBRAGEM</h1>";
?>

<br>

<div class="box-search">
    
    <button onclick="searchData()" class="btn btn-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6
            </svg>
        </button>
    </div>
   
    <div class="m-5">
        <table class="table text-white table-bg">
            <thead>
                <tr>
                    
                    
                    <th scope="col">ID</th>
                    <th scope="col">DATA</th>
                    <th scope="col">RESERVATÓRIO</th>
                    <th scope="col">PROPRIETARIO</th>
                    <th scope="col">L1_1</th>
                    <th scope="col">L1_2</th>
                    <th scope="col">L1_3</th>
                    <th scope="col">L2_1</th>
                    <th scope="col">L2_2</th>
                    <th scope="col">L2_3</th>
                    <th scope="col">L3_1</th>
                    <th scope="col">L3_2</th>
                    <th scope="col">L3_3</th>
                    <th scope="col">L4_1</th>
                    <th scope="col">L4_2</th>
                    <th scope="col">L4_3</th>
                    <th scope="col">L5_1</th>
                    <th scope="col">L5_2</th>
                    <th scope="col">L5_3</th>
                    <th scope="col">L6_1</th>
                    <th scope="col">L6_2</th>
                    <th scope="col">L6_3</th>
                    <th scope="col">L7_1</th>
                    <th scope="col">L7_2</th>
                    <th scope="col">L7_3</th>
                    <th scope="col">L8_1</th>
                    <th scope="col">L8_2</th>
                    <th scope="col">L8_3</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        
                        echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['data_cali']."</td>";
                        echo "<td>".$user_data['nome_reservatorio']."</td>";
                        echo "<td>".$user_data['nome_proprietario']."</td>";
                        echo "<td>".$user_data['leitura1_1']."</td>";
                        echo "<td>".$user_data['leitura1_2']."</td>";
                        echo "<td>".$user_data['leitura1_3']."</td>";
                        echo "<td>".$user_data['leitura2_1']."</td>";
                        echo "<td>".$user_data['leitura2_2']."</td>";
                        echo "<td>".$user_data['leitura2_3']."</td>";
                        echo "<td>".$user_data['leitura3_1']."</td>";
                        echo "<td>".$user_data['leitura3_2']."</td>";
                        echo "<td>".$user_data['leitura3_3']."</td>";
                        echo "<td>".$user_data['leitura4_1']."</td>";
                        echo "<td>".$user_data['leitura4_2']."</td>";
                        echo "<td>".$user_data['leitura4_3']."</td>";
                        echo "<td>".$user_data['leitura5_1']."</td>";
                        echo "<td>".$user_data['leitura5_2']."</td>";
                        echo "<td>".$user_data['leitura5_3']."</td>";
                        echo "<td>".$user_data['leitura6_1']."</td>";
                        echo "<td>".$user_data['leitura6_2']."</td>";
                        echo "<td>".$user_data['leitura6_3']."</td>";
                        echo "<td>".$user_data['leitura7_1']."</td>";
                        echo "<td>".$user_data['leitura7_2']."</td>";
                        echo "<td>".$user_data['leitura7_3']."</td>";
                        echo "<td>".$user_data['leitura8_1']."</td>";
                        echo "<td>".$user_data['leitura8_2']."</td>";
                        echo "<td>".$user_data['leitura8_3']."</td>";
                        echo "<td>
                        <a class='btn btn-sm btn-primary' href='edit.php?id=$user_data[id]' title='Editar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg>
                            </a> 
                            <a class='btn btn-sm btn-danger' href='delete.php?id=$user_data[id]' title='Deletar'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg>
                            </a>
                            </td>";
                        echo "</tr>";
                    }
                    ?>
            </tbody>
        </table>
    </div>
</body>
<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") 
        {
            searchData();
        }
    });

    function searchData()
    {
        window.location = 'visualizaramostra.php?search='+search.value;
    }
</script>
</html>