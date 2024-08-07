<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 36</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $num1 = "";
        $num2 = "";
        $num3 = "";
        $num4 = "";
        $num5 = "";
    ?>

    <h1>Exercicio 36</h1>
    <form method="post">
        <label>num1: </label>
        <input type="number" id="num1" name="num1"><br><br>

        <label>num2: </label>
        <input type="number" id="num2" name="num2"><br><br>
        
        <label>num3: </label>
        <input type="number" id="num3" name="num3"><br><br>
        
        <label>num4: </label>
        <input type="number" id="num4" name="num4"><br><br>
        
        <label>num5: </label>
        <input type="number" id="num5" name="num5"><br><br>

        <button>Calcular
        <?php
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];
            $num4 = $_POST['num4'];
            $num5 = $_POST['num5'];
        ?>
        </button><br><br>

        <textArea rows="10" cols="60" readonly fixed>
            <?php
                if($num1 == "" || $num2 == "" || $num3 == "" || $num4 == "" || $num5 == ""){
                    echo "Preencha os campos para calcular.";
                }else{
                    echo "A media dos numeros digitados é: ".inferior($num1,$num2,$num3,$num4,$num5);
                }
            ?>
        </textArea>
    </form>
</body>
</html>