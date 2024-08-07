<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 14</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $celsius = "";
    ?>

    <h1>Exercicio 14</h1>
    <form method="post">
        <label>Primeiro Número: </label>
        <input type="celsiusber" id="celsius" name="celsius"><br><br>

        <button>Calcular
        <?php
            $celsius = $_POST['celsius'];
        ?>
        </button><br><br>

        <textArea rows="10" cols="60" readonly fixed>
            <?php
                if($celsius == ""){
                    echo "Preencha os campos para calcular.";
                }else{
                    echo "O celsus para Fahrenheit do numero digitado é: ".celsusFahrenheit($celsius);
                }
            ?>
        </textArea>
    </form>
</body>
</html>