<?php



?>

<html>
    <h1>Cadastrar Composição</h1>
<meta charset="UTF-8">
<form name="dadosComposicao" action="conexao.php" method="POST">
    <table border="1">
        <tbody>
            <tr>
                <td>Produto:</td>
                <td><input type="text" name="PRODUTO" value="" /></td>
            </tr>
            <tr>
                <td>Componente:</td>
                <td><input type="text"  name="COMPONENTE" value="" /></td>
            </tr>
            <tr>
                <td>Quantidade:</td>
                <td><input type="number" name="QUANTIDADE" value="" /></td>
            </tr>                     
            <tr>                
                <td><input type="hidden" name="acao" value="inserirComposicao" /></td>
                <td><input type="submit" value="Enviar" name="Enviar" /></td>                
            </tr>
        </tbody>
    </table>

</form>
  
</html>

