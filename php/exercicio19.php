<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 19</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $palavra = "";
    ?>

    <h1>Exercicio 19</h1>
    <form method="post">
        <label>Primeiro Número: </label>
        <input type="palavraber" id="palavra" name="palavra"><br><br>

        <button>Calcular
        <?php
            $palavra = $_POST['palavra'];
        ?>
        </button><br><br>

        <textArea rows="10" cols="60" readonly fixed>
            <?php
                if($palavra == ""){
                    echo "Preencha os campos para calcular.";
                }else{
                    echo "O palindromo do palavra digitado é: ".palindromo($palavra);
                }
            ?>
        </textArea>
    </form>
</body>
</html>