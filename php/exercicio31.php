<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 31</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $salario = "";
        $totalv = "";
    ?>

    <h1>Exercicio 31</h1>
    <form method="post">
        <label>Salario: </label>
        <input type="number" id="salario" name="salario"><br><br>

        <label>Valor total das vendas: </label>
        <input type="number" id="totalv" name="totalv"><br><br>

        <button>Calcular
        <?php
            $salario = $_POST['salario'];
            $totalv = $_POST['totalv'];
        ?>
        </button><br><br>

        <textArea rows="10" cols="60" readonly fixed>
            <?php
                if($salario == "" || $totalv == ""){
                    echo "Preencha os campos para calcular.";
                }else{
                    echo "A comissao dos numeros digitados é: ".comissao($salario,$totalv);
                }
            ?>
        </textArea>
    </form>
</body>
</html>