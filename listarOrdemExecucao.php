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
                    <th>Processo</th>
                    <th>Tarefa</th>
                    <th>Ordem</th>             
                </tr>
            </thead>
    <tbody>
                <?php
                    foreach ($todasOrdens as $ordem) { ?>
                    <tr>
                    <td><?=$ordem["processo"]?></td>                                        
                    <td><?=$ordem["tarefa"]?></td>                    
                    <td><?=$ordem["ordem"]?></td>                                        
                    </tr>
                 <?php  }
                ?>
            </tbody>
          
</html>

