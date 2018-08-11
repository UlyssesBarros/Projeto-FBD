<?php



?>

<html>
    <h1>Cadastrar Comprado</h1>
<meta charset="UTF-8">
<form name="dadosComprado" action="conexao.php" method="POST">
    <table border="1">
        <tbody>
            <tr>
                <td>Produto:</td>
                <td><input type="text" step="1" name="PRODUTO" value="" /></td>
            </tr>
            <tr>
                <td>Fornecedor:</td>
                <td><input type="text" step="1" name="FORNECEDOR" value="" /></td>
            </tr>
            <tr>
                <td>Prazo Entrega:</td>
                <td><input type="text" name="PRAZO" value="" /></td>
            </tr>                     
            <tr>                
                <td><input type="hidden" name="acao" value="inserirComprado" /></td>
                <td><input type="submit" value="Enviar" name="Enviar" /></td>                
            </tr>
        </tbody>
    </table>

</form>
  
</html>

