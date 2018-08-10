<?php include("conexao.php");
      $todasOrdens = selectAllOrdens();
?>

<html>
    <head> 
    <h1>
        Ordem Execução 
    </h1>
    </head>
    <table border="1">
            <thead>
                <tr>                                        
                    <th>Código Processo</th>
                    <th>Código Tarefa</th>
                    <th>Ordem</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
    <tbody>
                <?php
                    foreach ($todasOrdens as $ordem) { ?>
                    <tr>
                    <td><?=$ordem["processo"]?></td>                                        
                    <td><?=$ordem["tarefa"]?></td>                    
                    <td><?=$ordem["ordem"]?></td>                    
                    <td>
                        <form name="alterar" action="alterar.php" method="POST">
                            <input type="hidden" name="COD_PROCESSO" value=<?=$ordem["ordem"]?> />
                            <input type="submit" value="Editar" name="editar" />
                            </form>
                    </td>
                    <td>
                        <form name="excluir" action="conexao.php" method="POST">
                            <input type="hidden" name="COD_TAREFA" value="<?=$producao["COD_PRODUTO"]?>" />
                            <input type="hidden" name="acao" value="excluir" />
                            <input type="submit" value="Excluir" name="excluir" />
                            </form>
                        
                    </td>
                    </tr>
                 <?php  }
                ?>
            </tbody>
          
</html>

