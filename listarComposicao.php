<?php include("conexao.php");
      $todasComposicao = selectAllComposicao();
?>

<html>
    <head> 
    <h1>
        Composições 
    </h1>
    </head>
    <table border="1">
            <thead>
                <tr>                                        
                    <th>Código Produto</th>
                    <th>Código Componente</th>
                    <th>Quantidade</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
    <tbody>
                <?php
                    foreach ($todasComposicao as $composicao) { ?>
                    <tr>
                    <td><?=$composicao["COD_PRODUTO"]?></td>                                        
                    <td><?=$composicao["COD_COMPONENTE"]?></td>                    
                    <td><?=$composicao["QUANTIDADE"]?></td>                    
                    <td>
                        <form name="alterar" action="alterar.php" method="POST">
                            <input type="hidden" name="COD_PRODUTO" value=<?=$composicao["COD_PRODUTO"]?> />
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

