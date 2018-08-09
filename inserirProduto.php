<?php



?>

<html>
    <h1>Cadastrar Produto</h1>
<meta charset="UTF-8">
<form name="dadosProduto" action="conexao.php" method="POST">
    <table border="1">
        <tbody>
            <tr>
                <td>Descrição:</td>
                <td><input type="text" name="descricao" value="" /></td>
            </tr>
            <tr>
                <td>Tipo:</td>
                <td><input type="text" name="tipo" value="" /></td>
            </tr>
                     
            <tr>                
                <td><input type="hidden" name="acao" value="inserirProduto" /></td>
                <td><input type="submit" value="Enviar" name="Enviar" /></td>                
            </tr>
        </tbody>
    </table>

</form>

<p> Para cadastrar corretamente o tipo do produto deve ser P ou I</p>
  
</html>

