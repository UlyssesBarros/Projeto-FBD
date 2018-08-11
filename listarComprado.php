<?php include("conexao.php");
      $todosComprado = selectAllComprado();
?>

<html>
    <head> 
    <h1>
        Comprados 
    </h1>
    </head>
    <table border="1">
            <thead>
                <tr>                                        
                    <th>Produto</th>
                    <th>Fornecedor</th>
                    <th>Prazo Entrega</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
    <tbody>
                <?php
                    foreach ($todosComprado as $comprado) { ?>
                    <tr>
                    <td><?=$comprado["produto"]?></td>                                        
                    <td><?=$comprado["fornecedor"]?></td>                    
                    <td><?=$comprado["prazo"]?></td>                    
                    <td>
                        <form name="alterar" action="alterarComprados.php" method="POST">
                            <input type="hidden" name="COD_PRODUTO" value=<?=$comprado["cod_produto"]?> />
                            <input type="submit" value="Editar" name="editar" />
                            </form>
                    </td>
                    <td>
                        <form name="excluir" action="conexao.php" method="POST">
                            <input type="hidden" name="COD_PRODUTO" value="<?=$comprado["cod_produto"]?>" />
                            <input type="hidden" name="acao" value="excluirComprado" />
                            <input type="submit" value="excluir" name="excluir" />
                            </form>
                        
                    </td>
                    </tr>
                 <?php  }
                ?>
            </tbody>
          
</html>

