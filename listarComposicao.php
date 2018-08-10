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
                    <th>Produto</th>
                    <th>Componente</th>
                    <th>Quantidade</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
    <tbody>
                <?php
                    foreach ($todasComposicao as $composicao) { ?>
                    <tr>
                    <td><?=$composicao["produto"]?></td>                                        
                    <td><?=$composicao["componente"]?></td>                    
                    <td><?=$composicao["quantidade"]?></td>                    
                    <td>
                        <form name="alterar" action="alterarComposicao.php" method="POST">
                            <input type="hidden" name="COD_PRODUTO" value=<?=$composicao["cod_produto"]?> />
                            <input type="hidden" name="COD_COMPONENTE" value=<?=$composicao["cod_componente"]?> />
                            <input type="submit" value="Editar" name="editar" />
                        </form>
                    </td>
                    <td>
                        <form name="excluir" action="conexao.php" method="POST">
                            <input type="hidden" name="COD_PRODUTO" value=<?=$composicao["cod_produto"]?> />
                            <input type="hidden" name="COD_COMPONENTE" value=<?=$composicao["cod_componente"]?> />
                            <input type="hidden" name="acao" value="excluirComposicao" />
                            <input type="submit" value="Excluir" name="excluir" />
                        </form>
                        
                    </td>
                    </tr>
                 <?php  }
                ?>
            </tbody>
          
</html>

