<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include("conexao.php");
$tarefa = selectCodTarefa($_POST["COD_TAREFA"]);

?>
<meta charset="UTF-8">
<form name="dadosTarefa" action="conexao.php" method="POST">
    <table border="1">
        <tbody>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="NOME" value="<?=$tarefa["NOME"]?>" size="20"/></td>
            </tr>
            <tr>
                <td>Tempo:</td>
                <td><input type="number" step=".01" name="TEMPO" value="<?=$tarefa["TEMPO"]?>" /></td>
            </tr>
                        
            <tr>
                <td><input type="hidden" name="acao" value="alterarTarefa" />
                    <input type="hidden" name="COD_TAREFA" value="<?=$tarefa["COD_TAREFA"]?>" />
                </td>
                <td><input type="submit" value="Enviar" name="Enviar" /></td>
            </tr>
        </tbody>
    </table>

</form>

