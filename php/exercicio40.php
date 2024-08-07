<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 40</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $salario = "";
    ?>

    <h1>Exercicio 40</h1>
    <form method="post">
        <label>Primeiro Número: </label>
        <input type="salariober" id="salario" name="salario"><br><br>

        <button>Calcular
        <?php
            $salario = $_POST['salario'];
        ?>
        </button><br><br>

        <textArea rows="10" cols="60" readonly fixed>
            <?php
                if($salario == ""){
                    echo "Preencha os campos para calcular.";
                }else{
                    echo "O salario reajustado é: ".reajuste($salario);
                }
            ?>
        </textArea>
    </form>
</body>
</html>