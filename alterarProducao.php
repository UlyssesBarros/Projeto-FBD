<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include("conexao.php");
$produto = selectCodProducao($_POST["COD_PRODUTO"]);

?>
<meta charset="UTF-8">
<form name="dadosProcesso" action="conexao.php" method="POST">
    <table border="1">
        <tbody>
            <tr>
                <td>Código Produto:</td>
                <td><input type="text" name="PRODUTO" value="<?=$produto["produto"]?>" size="20"/></td>
            </tr>                                   
            <tr>
                <td>Código Processo:</td>
                <td><input type="text" name="PROCESSO" value="<?=$produto["processo"]?>" size="20"/></td>
            </tr>                                   
            <tr>
                <td><input type="hidden" name="acao" value="alterarProducao" />
                    <input type="hidden" name="COD_PRODUTO" value="<?=$produto["cod_produto"]?>" />
                    <input type="hidden" name="COD_PROCESSO" value="<?=$produto["cod_processo"]?>" />
                </td>
                <td><input type="submit" value="Enviar" name="Enviar" /></td>
            </tr>
        </tbody>
    </table>

</form>

