<?php



?>

<html>
    <h1>Cadastrar Fornecedor</h1>
<meta charset="UTF-8">
<form name="dadosProcesso" action="conexao.php" method="POST">
    <table border="1">
        <tbody>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome" value="" /></td>
            </tr>
                                 
            <tr>                
                <td><input type="hidden" name="acao" value="inserirFornecedor" /></td>
                <td><input type="submit" value="Enviar" name="Enviar" /></td>                
            </tr>
        </tbody>
    </table>

</form>
  
</html>