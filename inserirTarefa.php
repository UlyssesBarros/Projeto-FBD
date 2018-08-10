<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<meta charset="UTF-8">
<form name="dadosTarefa" action="conexao.php" method="POST">
    <table border="1">
        <tbody>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome" value="" /></td>
            </tr>
            <tr>
                <td>Tempo em minutos:</td>
                <td><input type="number" step=".01" name="tempo" value="" /></td>
            </tr>
                     
            <tr>
                <td><input type="hidden" name="acao" value="inserirTarefa" /></td>
                <td><input type="submit" value="Enviar" name="Enviar" /></td>
            </tr>
        </tbody>
    </table>

</form>

