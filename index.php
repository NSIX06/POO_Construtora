<?php
    include("class/conta.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
</head>
<body>

    <form>
        <p>Nova conta</p>
        <label>Número</label>
        <input type="text" name="numero"><br><br>
        
        <label>Agência</label>
        <input type="text" name="agencia"><br><br>
        
        <label>Proprietário</label>
        <input type="text" name="proprietario"><br><br>
        
        <label>Saldo</label>
        <input type="text" name="saldo"><br><br>
        
        <label>Limite</label>
        <input type="text" name="limite"><br><br>

        <input type="submit" value="Cadastrar" name="cadastrar">
    </form>

    <form>

    <?php
        
        if (isset($_GET["cadastrar"]) )
        {
            $conta = new conta(); 
            $conta->create($_GET["numero"], $_GET["agencia"], $_GET["proprietario"], 
                            $_GET["saldo"], $_GET["limite"]); 
    
            echo "<p>Conta cadastrada!</p>";
            
            echo "
                    <p>Depositar/Sacar</p>
                    <label>Saldo disponível</label>
                    <input type='text' name='saldoAtual' value='" . $conta->getSaldo() .  "'><br><br>
                    
                    <label>Limite disponível</label>
                    <input type='text' name='limiteAtual' value='" . $conta->getLimite() .  "'><br><br>

                    <label>Valor</label>
                    <input type='text' name='valor'><br><br>

                    <input type='submit' name='depositar' value='Depositar'><br><br>
                    <input type='submit' name='sacar' value='Sacar'>
                ";
        }
    ?>

   
    <?php
            if (isset($_GET["depositar"])) 
            {
                $conta = new conta();
                $conta->setSaldo($_GET["saldoAtual"]);
                echo $conta->depositar($_GET["valor"]);
            }
            else if (isset($_GET["sacar"])) 
            {
                $conta = new conta();
                $conta->setSaldo($_GET["saldoAtual"]);
                $conta->setLimite($_GET["limiteAtual"]);

                echo $conta->sacar($_GET["valor"]) != false ? 
                                    $conta->getSaldo() 
                                    : "Saldo insuficiente";
            }
        
       

    ?>

    </form>
    
</body>
</html>