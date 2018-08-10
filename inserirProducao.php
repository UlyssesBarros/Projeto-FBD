<?php



?>

<html>
    <h1>Cadastrar Produção</h1>
<meta charset="UTF-8">
<form name="dadosProducao" action="conexao.php" method="POST">
    <table border="1">
        <tbody>
            <tr>
                <td>Código Produto:</td>
                <td><input type="text" name="produto" value="" /></td>
            </tr>
            <tr>
                <td>Código Processo:</td>
                <td><input type="text" name="processo" value="" /></td>
            </tr>
                                 
            <tr>                
                <td><input type="hidden" name="acao" value="inserirProducao" /></td>
                <td><input type="submit" value="Enviar" name="Enviar" /></td>                
            </tr>
        </tbody>
    </table>

</form>
  
</html>

