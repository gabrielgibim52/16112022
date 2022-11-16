<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de banco</title>
</head>
<body>

    <form action="criarbanco.php" method="post">
        <fieldset>
            <legend>Criar Banco</legend>
         <input type="text" name="nomebanco" id="nomebanco"
         placeholder="Digite o nome do banco">
         <input type="submit" value="Criar Banco">
         </fieldset>
    </form> 
    <br>
    <form action="deletarbanco.php" method="post">
        <fieldset>
            <legend>Deletar</legend>
         <input type="text" name="nomebanco" id="nomebanco"
         placeholder="Digite o nome do banco">
         <input type="submit" value="Deletar Banco">
         </fieldset>
    </form>  
    
</body>
</html>