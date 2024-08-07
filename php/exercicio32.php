<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 32</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $conta = "";
        $saldo = "";
        $debido = "";
        $credito = "";
    ?>

    <h1>Exercicio 32</h1>
    <form method="post">
        <label>conta: </label>
        <input type="number" id="conta" name="conta"><br><br>

        <label>saldo: </label>
        <input type="number" id="saldo" name="saldo"><br><br>
        
        <label>debido: </label>
        <input type="number" id="debido" name="debido"><br><br>
        
        <label>credito: </label>
        <input type="number" id="credito" name="credito"><br><br>
        
        <button>Calcular
        <?php
            $conta = $_POST['conta'];
            $saldo = $_POST['saldo'];
            $debido = $_POST['debido'];
            $credito = $_POST['credito'];
        ?>
        </button><br><br>

        <textArea rows="10" cols="60" readonly fixed>
            <?php
                if($conta == "" || $saldo == "" || $debido == "" || $credito == ""){
                    echo "Preencha os campos para calcular.";
                }else{
                    echo "O saldo dos numeros digitados é: ".saldo($conta,$saldo,$debido,$credito);
                }
            ?>
        </textArea>
    </form>
</body>
</html>