<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include("conexao.php");
$produto = selectCodProduto($_POST["COD_PRODUTO"]);

?>
<meta charset="UTF-8">
<form name="dadosProduto" action="conexao.php" method="POST">
    <table border="1">
        <tbody>
            <tr>
                <td>Descricao:</td>
                <td><input type="text" name="DESCRICAO" value="<?=$produto["DESCRICAO"]?>" size="20"/></td>
            </tr>
            <tr>
                <td>Tipo:</td>
                <td><input type="text" name="TIPO" value="<?=$produto["TIPO"]?>" /></td>
            </tr>
                        
            <tr>
                <td><input type="hidden" name="acao" value="alterar" />
                    <input type="hidden" name="COD_PRODUTO" value="<?=$produto["COD_PRODUTO"]?>" />
                </td>
                <td><input type="submit" value="Enviar" name="Enviar" /></td>
            </tr>
        </tbody>
    </table>

</form>
