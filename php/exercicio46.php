<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 46</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $temp = "";
        $velo = "";
    ?>

    <h1>Exercicio 46</h1>
    <form method="post">
        <label>temp: </label>
        <input type="number" id="temp" name="temp"><br><br>

        <label>velocidade: </label>
        <input type="number" id="velo" name="velo"><br><br>

        <button>Calcular
        <?php
            $temp = $_POST['temp'];
            $velo = $_POST['velo'];
        ?>
        </button><br><br>

        <textArea rows="10" cols="60" readonly fixed>
            <?php
                if($temp == "" || $velo == ""){
                    echo "Preencha os campos para calcular.";
                }else{
                    echo Velocidade($temp,$velo);
                }
            ?>
        </textArea>
    </form>
</body>
</html>