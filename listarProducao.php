<?php include("conexao.php");
      $todasProducao = selectAllProducao();
?>

<html>
    <head> 
    <h1>
        Produção 
    </h1>
    </head>
    <table border="1">
            <thead>
                <tr>                    
                    <th>Produto</th>
                    <th>Processo</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
    <tbody>
                <?php
                    foreach ($todasProducao as $producao) { ?>
                    <tr>
                    <td><?=$producao["produto"]?></td>                                        
                    <td><?=$producao["processo"]?></td>                    
                    <td>
                        <form name="alterar" action="alterarProducao.php" method="POST">
                            <input type="hidden" name="COD_PRODUTO" value=<?=$producao["cod_produto"]?> />
                            <input type="submit" value="Editar" name="editar" />
                            </form>
                    </td>
                    <td>
                        <form name="excluir" action="conexao.php" method="POST">
                            <input type="hidden" name="COD_PRODUTO" value="<?=$producao["cod_produto"]?>" />
                            <input type="hidden" name="acao" value="excluirProducao" />
                            <input type="submit" value="Excluir" name="excluir" />
                            </form>
                        
                    </td>
                    </tr>
                 <?php  }
                ?>
            </tbody>
          
</html>

