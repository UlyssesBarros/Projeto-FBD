<?php



?>

<html>
    <h1>Cadastrar Processo</h1>
<meta charset="UTF-8">
<form name="dadosProcesso" action="conexao.php" method="POST">
    <table border="1">
        <tbody>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome" value="" /></td>
            </tr>
                                 
            <tr>                
                <td><input type="hidden" name="acao" value="inserirProcesso" /></td>
                <td><input type="submit" value="Enviar" name="Enviar" /></td>                
            </tr>
        </tbody>
    </table>

</form>
  
</html>

