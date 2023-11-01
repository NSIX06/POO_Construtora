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
    <input type="submit" value="Sacar">
</form>

    <?php
        include("class/conta.php");

        if (isset($_GET["numero"]))
        {
            $conta = new conta();
            
            $conta->create($_GET["numero"], $_GET["agencia"], $_GET["proprietario"], 
                            $_GET["saldo"], $_GET["limite"]);

            $conta->depositar();

            $dog3->set_Nome("Jujuba");
            $dog3->latir();
            
            echo "<ul><li>" . $dog3->get_Raca() . "</li></ul>";
        }

    ?>

</body>
</html>