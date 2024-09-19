<?php

// a função isset($varavel) verifica se a variavel existe
if (isset($_post)) {
    // forma 1 - maior e demorada
    if ($_POST[nome] == "") {
        $nome = "VAZIO";

    } else {
        $nome = $_POST['nome'];
    }

    // forma 2 = rápido
    // $var = (condicao) ? se verdadeiro : se falso;
    $peso = ($_POST['peso'] == "") ? 0 : $POST['peso'];
    $altura = ($_POST['altura'] == "") ? 0 : $_POST['altura'];


    $imc = $peso / ($altura * $altura);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>

<div class="container mt-3">
    <div class="card" style="width: 50%;">
        <form action="validacao.php" method="POST">

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control">
            </div>

            <div class="formgroup">
                <div class="row">
                    <div class="col">
                        <label for="peso">Peso:</label>
                        <input type="number" name="peso" id="peso" class="form-control" step="0.01">
                    </div>

                    <div class="col">
                        <label for="altura"></label>
                        <input type="number" name="altura" id="altura" class="form-control" step="0.01">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-danger">CAlcular imc</button>


        </form>
    </div>




    <?php

    //Faz o trecho do html aparecere somente quando houver
    //um post no formulario
    if(isset($$imc)) {
?> 
    <div class="alert alert-primary mt-5" role="alert">
  Imc calculado : <?= $imc ?>
    </div>
<?php
}
?>
</div>
    




















<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>




</body>
</html>