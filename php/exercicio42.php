<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 42</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $raio = "";
    ?>

    <h1>Exercicio 42</h1>
    <form method="post">
        <label>Raio: </label>
        <input type="number" id="raio" name="raio"><br><br>

        <button>Calcular
        <?php
            $raio = $_POST['raio'];
        ?>
        </button><br><br>

        <textArea rows="10" cols="60" readonly fixed>
            <?php
                if($raio == ""){
                    echo "Preencha os campos para calcular.";
                }else{
                    echo "area da circunferencia é: ".areadacircunferencia($raio);
                }
            ?>
        </textArea>
    </form>
</body>
</html>