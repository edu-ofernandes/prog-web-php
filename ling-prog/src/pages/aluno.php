
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema faculdade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php
        // require_once("../includes/header.php");
        require_once("../dal/conexao.php");
        
    ?>
    <h1>Alunos</h1>
    <hr>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Matrícula</th>
            <th scope="col">Nome</th>
            <th scope="col">Codigo Curso</th>
            <th scope="col">Codigo Professor</th>
            <th scope="col">Data Nasc</th>

            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">7653453</th>
            <td>Mark</td>
            <td>2</td>
            <td>1</td>
            <td>@mdo</td>

            </tr>
            <tr>
            <th scope="row">328475</th>
            <td>Jacob</td>
            <td>1</td>
            <td>3</td>
            <td>@mdo</td>

            </tr>
            <tr>
            <th scope="row">2353453</th>
            <td >Larry the Bird</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>


            </tr>
        </tbody>
    </table>
</body>
</html>