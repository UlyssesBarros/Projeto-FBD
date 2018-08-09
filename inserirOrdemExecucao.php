<?php



?>

<html>
    <h1>Cadastrar Ordem Produção</h1>
<meta charset="UTF-8">
<form name="dadosOrdemExecucao" action="conexao.php" method="POST">
    <table border="1">
        <tbody>
            <tr>
                <td>Código Tarefa:</td>
                <td><input type="number" step="1" name="COD_TAREFA" value="" /></td>
            </tr>
            <tr>
                <td>Código Processo:</td>
                <td><input type="number" step="1" name="COD_PROCESSO" value="" /></td>
            </tr>
            <tr>
                <td>Ordem:</td>
                <td><input type="number" step="1" name="ORDEM" value="" /></td>
            </tr>                     
            <tr>                
                <td><input type="hidden" name="acao" value="inserirOrdemExecucao" /></td>
                <td><input type="submit" value="Enviar" name="Enviar" /></td>                
            </tr>
        </tbody>
    </table>

</form>
  
</html>

