<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $num1 = "";
        $num2 = "";
    ?>

    <h1>Exercicio 03</h1>
    <form method="post">
        <label>Primeiro Número: </label>
        <input type="number" id="num1" name="num1"><br><br>

        <label>Segundo Número: </label>
        <input type="number" id="num2" name="num2"><br><br>

        <button>Calcular
        <?php
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
        ?>
        </button><br><br>

        <textArea rows="10" cols="60" readonly fixed>
            <?php
                if($num1 == "" || $num2 == ""){
                    echo "Preencha os campos para calcular.";
                }else{
                    echo "A Multiplicação dos numeros digitados é: ".multiplicar($num1,$num2);
                }
            ?>
        </textArea>
    </form>
</body>
</html>