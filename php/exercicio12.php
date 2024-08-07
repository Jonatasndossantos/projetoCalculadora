<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 12</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $idade = "";
    ?>

    <h1>Exercicio 12</h1>
    <form method="post">
        <label>Primeiro Número: </label>
        <input type="number" id="idade" name="idade"><br><br>

        <button>Calcular
        <?php
            $idade = $_POST['idade'];
        ?>
        </button><br><br>

        <textArea rows="10" cols="60" readonly fixed>
            <?php
                if($idade == ""){
                    echo "Preencha os campos para calcular.";
                }else{
                    echo "A maioridade do numero digitado é: ".maioridade($idade);
                }
            ?>
        </textArea>
    </form>
</body>
</html>