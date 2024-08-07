<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 24</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $mes = "";
        $dia = "";
        $ano = "";
    ?>

    <h1>Exercicio 24</h1>
    <form method="post">
        <label>Mes: </label>
        <input type="number" id="mes" name="mes"><br><br>

        <label>Dia: </label>
        <input type="number" id="dia" name="dia"><br><br>
        
        <label>Ano: </label>
        <input type="number" id="ano" name="ano"><br><br>

        <button>Calcular
        <?php
            $mes = $_POST['mes'];
            $dia = $_POST['dia'];
            $ano = $_POST['ano'];
        ?>
        </button><br><br>

        <textArea rows="10" cols="60" readonly fixed>
            <?php
                if($mes == "" || $dia == "" || $ano == ""){
                    echo "Preencha os campos para calcular.";
                }else{
                    echo "O verificar Datas dos numeros digitados é: ".verificarDatas($mes,$dia,$ano);
                }
            ?>
        </textArea>
    </form>
</body>
</html>