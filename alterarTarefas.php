<?php 
    include("conexao.php");
    $tarefas = selectTarefaByProcesso($_POST["COD_PROCESSO"]);
    
    
?>

<html>
<form name="dadosComposicao" action="conexao.php" method="POST">
    <table border="1">
        <tbody>
            
            <tr>
                <td>Tarefa:</td>
                <td><input type="text"  name="TAREFA" value="" /></td>
            </tr>        
            <tr>
                <td>Ordem:</td>
                <td><input type="NUMBER"  name="ORDEM" value="" /></td>
            </tr>               
            <tr>      
                    <input type="hidden" name="PROCESSO" value=<?=$_POST["COD_PROCESSO"]?> />
                <td><input type="hidden" name="acao" value="inserirTarefa" /></td>
                <td><input type="submit" value="Inserir" name="Enviar" /></td>                
            </tr>
        </tbody>
    </table>

</form>

    <head> 
    <h1>
        Tarefas  
    </h1>
    </head>
    <table border="1">
            <thead>
                <tr>                                        
                    <th>Processo</th>
                    <th>Tarefa</th>
                    <th>Ordem</th>  
                    <th>Excluir</th>           
                </tr>
            </thead>
    <tbody>
                <?php
                    if ($tarefas != null){
                        foreach ($tarefas as $tarefa) { ?>
                        <tr>
                        <td><?=$tarefa["processo"]?></td>                                        
                        <td><?=$tarefa["tarefa"]?></td>                    
                        <td><?=$tarefa["ordem"]?></td>  
                        <td>
                        <form name="excluir" action="conexao.php" method="POST">
                            <input type="hidden" name="COD_PROCESSO" value="<?=$processo["COD_PROCESSO"]?>" />
                            <input type="hidden" name="acao" value="excluirProcesso" />
                            <input type="submit" value="Excluir" name="excluir" />
                            </form>
                        
                    </td>                                      
                        </tr>
                        
                    
                    

                        
                    
                        <?php  }
                }
                ?>
            </tbody>
          
</html>
