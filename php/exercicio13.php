<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 13</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $num = "";
    ?>

    <h1>Exercicio 13</h1>
    <form method="post">
        <label>Primeiro Número: </label>
        <input type="number" id="num" name="num"><br><br>

        <button>Calcular
        <?php
            $num = $_POST['num'];
        ?>
        </button><br><br>

        <textArea rows="10" cols="60" readonly fixed>
            <?php
                if($num == ""){
                    echo "Preencha os campos para calcular.";
                }else{
                    echo "O dobro do numero digitado é: ".dobro($num);
                }
            ?>
        </textArea>
    </form>
</body>
</html>