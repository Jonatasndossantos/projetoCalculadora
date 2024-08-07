<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 38</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $num1 = "";
        $num2 = "";
        $num3 = "";
    ?>

    <h1>Exercicio 38</h1>
    <form method="post">
        <label>Primeiro Número: </label>
        <input type="number" id="num1" name="num1"><br><br>

        <label>Segundo Número: </label>
        <input type="number" id="num2" name="num2"><br><br>
        
        <label>Terceiro Número: </label>
        <input type="number" id="num3" name="num3"><br><br>

        <button>Calcular
        <?php
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];
        ?>
        </button><br><br>

        <textArea rows="10" cols="60" readonly fixed>
            <?php
                if($num1 == "" || $num2 == "" || $num3 == ""){
                    echo "Preencha os campos para calcular.";
                }else{
                    echo "A Maior e a media dos numeros digitados é: ".maioremedia($num1,$num2,$num3);
                }
            ?>
        </textArea>
    </form>
</body>
</html>