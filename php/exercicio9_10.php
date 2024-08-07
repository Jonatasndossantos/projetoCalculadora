<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 09_10</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $a = "";
        $b = "";
        $c = "";
    ?>

    <h1>Exercicio 09_10</h1>
    <form method="post">
        <label>Primeiro Número: </label>
        <input type="number" id="a" name="a"><br><br>

        <label>Segundo Número: </label>
        <input type="number" id="b" name="b"><br><br>
        
        <label>Terceiro Número: </label>
        <input type="number" id="c" name="c"><br><br>

        <button>Calcular
        <?php
            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];
        ?>
        </button><br><br>

        <textArea rows="10" cols="60" readonly fixed>
            <?php
                if($a == "" || $b == "" || $c == ""){
                    echo "Preencha os campos para calcular.";
                }else{
                    echo "O baskara dos numeros digitados é: ".x1($a,$b,$c);
                    echo "O baskara dos numeros digitados é: ".x2($a,$b,$c);
                }
            ?>
        </textArea>
    </form>
</body>
</html>