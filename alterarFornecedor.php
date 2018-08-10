<?php

/* o change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include("conexao.php");
$fornecedor = selectCodFornecedor($_POST["COD_FORNECEDOR"])


?>
<meta charset="UTF-8">
<form name="dadosFornecedor" action="conexao.php" method="POST">
    <table border="1">
        <tbody>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="NOME" value="<?=$fornecedor["NOME"]?>" size="20"/></td>
            </tr>
            
                        
            <tr>
                <td><input type="hidden" name="acao" value="alterarFornecedor" />
                    <input type="hidden" name="COD_FORNECEDOR" value="<?=$fornecedor["COD_FORNECEDOR"]?>" />
                </td>
                <td><input type="submit" value="Enviar" name="Enviar" /></td>
            </tr>
        </tbody>
    </table>

</form>