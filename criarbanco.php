<?php
include_once('conexao.php');


if($conexao){
    $texto= "CREATE DATABASE ".$_POST['nomebanco'];
    $acao = $conexao->prepare($texto);
    try {
        $acao->execute();
        echo "Banco ".$_POST['nomebanco']."
        criado com sucesso.";
    }catch (PDO $th) {
        echo $th.getMessage();
    }
}

$dbname = $_POST['nomebanco'];

try {
    $conexao = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
    echo "<br>Banco ".$dbname." conectado com sucesso";
} catch (PDOException $th) {
}
?>

<form action="criartabela.php" method="post">
<fieldset>
    <legend>Dados da Tabela</legend>
    Nome da Tabela: <input type="text" name="tabela" id="tabela" placeholder="Nome da Tabela"><br><br>
    Campo 1 <input type="text" name="campo1" id="campo1" placeholder="Coluna 1"> Tipo 1 <input type="text" name="tipo1" id="tipo1" placeholder="INT(11)"><br>
    Campo 2 <input type="text" name="campo2" id="campo2" placeholder="Coluna 2"> Tipo 2 <input type="text" name="tipo2" id="tipo2" placeholder="INT(11)"><br>
    Campo 3 <input type="text" name="campo3" id="campo3" placeholder="Coluna 3"> Tipo 3 <input type="text" name="tipo3" id="tipo3" placeholder="INT(11)"><br>
    Campo 4 <input type="text" name="campo4" id="campo4" placeholder="Coluna 4"> Tipo 4 <input type="text" name="tipo4" id="tipo4" placeholder="INT(11)"><br>
    Campo 5 <input type="text" name="campo5" id="campo5" placeholder="Coluna 5"> Tipo 5 <input type="text" name="tipo5" id="tipo5" placeholder="INT(11)"><br>
    <input type="hidden" name="banco"
    value="<?php echo $_POST['nomebanco']; ?>"><br>
    <input type="submit" value="Enviar">
</fieldset>
</form>

