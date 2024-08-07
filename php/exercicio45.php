<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 45</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $raio = "";
        $altura = "";
    ?>

    <h1>Exercicio 45</h1>
    <form method="post">
        <label>Raio: </label>
        <input type="number" id="raio" name="raio"><br><br>

        <label>Altura: </label>
        <input type="number" id="altura" name="altura"><br><br>

        <button>Calcular
        <?php
            $raio = $_POST['raio'];
            $altura = $_POST['altura'];
        ?>
        </button><br><br>

        <textArea rows="10" cols="60" readonly fixed>
            <?php
                if($raio == "" || $altura == ""){
                    echo "Preencha os campos para calcular.";
                }else{
                    echo "O Volume é: ".volume($raio,$altura);
                }
            ?>
        </textArea>
    </form>
</body>
</html>