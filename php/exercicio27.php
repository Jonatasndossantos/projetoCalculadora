<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 27</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $texto = "";
    ?>

    <h1>Exercicio 27</h1>
    <form method="post">
        <label>Primeiro Número: </label>
        <input type="textober" id="texto" name="texto"><br><br>

        <button>Calcular
        <?php
            $texto = $_POST['texto'];
        ?>
        </button><br><br>

        <textArea rows="10" cols="60" readonly fixed>
            <?php
                if($texto == ""){
                    echo "Preencha os campos para calcular.";
                }else{
                    echo "O tamanho do texto digitado é: ".tamtext($texto);
                }
            ?>
        </textArea>
    </form>
</body>
</html>