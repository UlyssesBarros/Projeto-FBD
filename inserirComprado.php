<?php



?>

<html>
    <h1>Cadastrar Comprado</h1>
<meta charset="UTF-8">
<form name="dadosComprado" action="conexao.php" method="POST">
    <table border="1">
        <tbody>
            <tr>
                <td>Código Produto:</td>
                <td><input type="number" step="1" name="COD_PRODUTO" value="" /></td>
            </tr>
            <tr>
                <td>Código Fornecedor:</td>
                <td><input type="number" step="1" name="COD_FORNECEDOR" value="" /></td>
            </tr>
            <tr>
                <td>Prazo Entrega:</td>
                <td><input type="date" name="PRAZO_ENTREGA" value="" /></td>
            </tr>                     
            <tr>                
                <td><input type="hidden" name="acao" value="inserirComprado" /></td>
                <td><input type="submit" value="Enviar" name="Enviar" /></td>                
            </tr>
        </tbody>
    </table>

</form>
  
</html>

