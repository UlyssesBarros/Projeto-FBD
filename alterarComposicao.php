<?php

/* o change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include("conexao.php");
$composicao = selectCodComposicao($_POST["COD_PRODUTO"],$_POST["COD_COMPONENTE"]);

?>
<meta charset="UTF-8">
<form name="dadosFornecedor" action="conexao.php" method="POST">
    <table border="1">
        <tbody>
            <tr>
                <td>Produto:</td>
                <td><input type="text" name="PRODUTO" value="<?=$composicao["produto"]?>" size="20"/></td>
            </tr>
            <tr>
                <td>Componente:</td>
                <td><input type="text" name="COMPONENTE" value="<?=$composicao["componente"]?>" size="20"/></td>
            </tr>
            <tr>
                <td>Quantidade:</td>
                <td><input type="number" name="QUANTIDADE" value="<?=$composicao["quantidade"]?>" size="20"/></td>
            </tr>
            
                        
            <tr>
                <td><input type="hidden" name="acao" value="alterarComposicao" />
                <input type="hidden" name="COD_PRODUTO" value="<?=$composicao["cod_produto"]?>" />
                    <input type="hidden" name="COD_COMPONENTE" value="<?=$composicao["cod_componente"]?>" />
                </td>
                <td><input type="submit" value="Enviar" name="Enviar" /></td>
            </tr>
        </tbody>
    </table>

</form>