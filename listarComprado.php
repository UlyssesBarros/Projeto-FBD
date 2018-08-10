<?php include("conexao.php");
      $todosComprado = selectAllComprado();
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
                    <th>Código Produto</th>
                    <th>Código Fornecedor</th>
                    <th>Prazo Entrega</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
    <tbody>
                <?php
                    foreach ($todosComprado as $comprado) { ?>
                    <tr>
                    <td><?=$comprado["COD_PRODUTO"]?></td>                                        
                    <td><?=$comprado["COD_FORNECEDOR"]?></td>                    
                    <td><?=$comprado["PRAZO_ENTREGA"]?></td>                    
                    <td>
                        <form name="alterar" action="alterar.php" method="POST">
                            <input type="hidden" name="COD_PRODUTO" value=<?=$comprado["COD_PRODUTO"]?> />
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

