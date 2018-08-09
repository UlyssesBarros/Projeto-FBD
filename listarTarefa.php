<?php include("conexao.php");
      $todasTarefas = selectAllTarefas();
?>

<html>
    <head> 
    <h1>
        TAREFAS 
    </h1>
    </head>
    <table border="1">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Tempo</th>                    
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
    <tbody>
                <?php
                    foreach ($todasTarefas as $tarefa) { ?>
                    <tr>
                    <td><?=$tarefa["NOME"]?></td>                                        
                    <td><?=$tarefa["TEMPO"]?></td>
                    <td>
                        <form name="alterar" action="alterar.php" method="POST">
                            <input type="hidden" name="COD_TAREFA" value=<?=$tarefa["COD_TAREFA"]?> />
                            <input type="submit" value="Editar" name="editar" />
                            </form>
                    </td>
                    <td>
                        <form name="excluir" action="conexao.php" method="POST">
                            <input type="hidden" name="COD_TAREFA" value="<?=$tarefa["COD_TAREFA"]?>" />
                            <input type="hidden" name="acao" value="excluir" />
                            <input type="submit" value="Excluir" name="excluir" />
                            </form>
                        
                    </td>
                    </tr>
                 <?php  }
                ?>
            </tbody>
          
</html>

