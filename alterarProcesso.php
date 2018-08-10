<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include("conexao.php");
$processo = selectCodProcesso($_POST["COD_PROCESSO"]);
echo $processo;

?>
<meta charset="UTF-8">
<form name="dadosProcesso" action="conexao.php" method="POST">
    <table border="1">
        <tbody>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="NOME" value="<?=$processo["NOME"]?>" size="20"/></td>
            </tr>                                   
            <tr>
                <td><input type="hidden" name="acao" value="alterarProcesso" />
                    <input type="hidden" name="COD_PROCESSO" value="<?=$processo["COD_PROCESSO"]?>" />
                </td>
                <td><input type="submit" value="Enviar" name="Enviar" /></td>
            </tr>
        </tbody>
    </table>

</form>

