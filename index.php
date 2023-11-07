<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agência</title>
</head>
<body>

<form action="">
    
    <label for="nome">Número</label>
    <input type="text" name="número">
    <br>
    <label for="nome">Agência</label>
    <input type="text" name="agencia">
    <br>        
    <label for="nome">Proprietário</label>
    <input type="text" name="proprietário">
    <br>        
    <label for="nome">Saldo</label>
    <input type="text" name="saldo">
    <br>        
    <label for="nome">Limite</label>
    <input type="text" name="limite">
    <br>
    <input type="submit" value="Depositar">
    <input type="submit" value="Sacar">
</form>

    <?php
        include("class/conta.php");


        if (isset($_GET["saldo"]))
        {
            $sal = $_GET["saldo"];
            
            $sal + 2000;

            echo 
        

        else
        {
            $sal 
            echo Você depositou $saldo
        }

    }


    ?>

</body>
</html>