<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 29</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $dia = "";
        $mes = "";
        $ano = "";
    ?>

    <h1>Exercicio 29</h1>
    <form method="post">
    
        <label>Dia: </label>
        <input type="number" id="dia" name="dia"><br><br>

        <label>Mes: </label>
        <input type="number" id="mes" name="mes"><br><br>
        
        <label>Ano: </label>
        <input type="number" id="ano" name="ano"><br><br>

        <button>Calcular
        <?php
            $dia = $_POST['dia'];
            $mes = $_POST['mes'];
            $ano = $_POST['ano'];
        ?>
        </button><br><br>

        <textArea rows="10" cols="60" readonly fixed>
            <?php
                if($dia == "" || $mes == "" || $ano == ""){
                    echo "Preencha os campos para calcular.";
                }else{
                    echo "O total de dia das datas digitados é: ".totaldia($dia,$mes,$ano);
                }
            ?>
        </textArea>
    </form>
</body>
</html>