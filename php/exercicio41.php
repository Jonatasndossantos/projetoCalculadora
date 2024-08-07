<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 41</title>
</head>
<body>
    <?php
        include 'funcoes.php';
        $sal = "";
        $sal1 = "";
        $fil = "";
        $fil1 = "";
    ?>

    <h1>Exercicio 41</h1>
    <form method="post">
        <label>sal: </label>
        <input type="number" id="sal" name="sal"><br><br>

        <label>sal1: </label>
        <input type="number" id="sal1" name="sal1"><br><br>
        
        <label>fil: </label>
        <input type="number" id="fil" name="fil"><br><br>
        
        <label>fil1: </label>
        <input type="number" id="fil1" name="fil1"><br><br>
        
        <button>Calcular
        <?php
            $sal = $_POST['sal'];
            $sal1 = $_POST['sal1'];
            $fil = $_POST['fil'];
            $fil1 = $_POST['fil1'];
        ?>
        </button><br><br>

        <textArea rows="10" cols="60" readonly fixed>
            <?php
                if($sal == "" || $sal1 == "" || $fil == "" || $fil1 == ""){
                    echo "Preencha os campos para calcular.";
                }else{
                    echo " ".prefeitura($sal,$sal1,$fil,$fil1);
                }
            ?>
        </textArea>
    </form>
</body>
</html>