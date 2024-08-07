<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 43</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $ht = "";
        $vh = "";
        $pd = "";
    ?>

    <h1>Exercicio 43</h1>
    <form method="post">
        <label>informe as horas trabalhadas no mês: </label>
        <input type="number" id="ht" name="ht"><br><br>

        <label>informe o valor hora trabalhada: </label>
        <input type="number" id="vh" name="vh"><br><br>
        
        <label>informe o percentual de desconto: </label>
        <input type="number" id="pd" name="pd"><br><br>

        <button>Calcular
        <?php
            $ht = $_POST['ht'];
            $vh = $_POST['vh'];
            $pd = $_POST['pd'];
        ?>
        </button><br><br>

        <textArea rows="10" cols="60" readonly fixed>
            <?php
                if($ht == "" || $vh == "" || $pd == ""){
                    echo "Preencha os campos para calcular.";
                }else{
                    echo " a".trabalho($ht,$vh,$pd);
                }
            ?>
        </textArea>
    </form>
</body>
</html>