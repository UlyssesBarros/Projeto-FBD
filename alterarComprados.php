<?php

/* o change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include("conexao.php");
$comprado = selectCodComprado($_POST["COD_PRODUTO"]);
?>
<meta charset="UTF-8">
<form name="dadosFornecedor" action="conexao.php" method="POST">
    <table border="1">
        <tbody>
            <tr>
                <td>Insumo:</td>
                <td><input type="text" name="PRODUTO" value="<?=$comprado["produto"]?>" size="30"/></td>
            </tr>
            <tr>
                <td>Fornecedor:</td>
                <td><input type="text" name="FORNECEDOR" value="<?=$comprado["fornecedor"]?>" size="30"/></td>
            </tr>
            <tr>
                <td>Prazo:</td>
                <td><input type="text" name="PRAZO" value="<?=$comprado["prazo"]?>" size="30"/></td>
            </tr>
            
                        
            <tr>
                <td><input type="hidden" name="acao" value="alterarComprado" />
                <input type="hidden" name="COD_PRODUTO" value="<?=$comprado["cod_produto"]?>" />
                    <input type="hidden" name="COD_COMPONENTE" value="<?=$comprado["cod_fornecedor"]?>" />
                </td>
                <td><input type="submit" value="Enviar" name="Enviar" /></td>
            </tr>
        </tbody>
    </table>

</form>