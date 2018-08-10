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
                    <th>Código Produto</th>
                    <th>Código Processo</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
    <tbody>
                <?php
                    foreach ($todasProducao as $producao) { ?>
                    <tr>
                    <td><?=$producao["COD_PRODUTO"]?></td>                                        
                    <td><?=$producao["COD_PROCESSO"]?></td>                    
                    <td>
                        <form name="alterar" action="alterarProducao.php" method="POST">
                            <input type="hidden" name="COD_PRODUTO" value=<?=$producao["COD_PRODUTO"]?> />
                            <input type="submit" value="Editar" name="editar" />
                            </form>
                    </td>
                    <td>
                        <form name="excluir" action="conexao.php" method="POST">
                            <input type="hidden" name="COD_PRODUTO" value="<?=$producao["COD_PRODUTO"]?>" />
                            <input type="hidden" name="acao" value="excluir" />
                            <input type="submit" value="Excluir" name="excluir" />
                            </form>
                        
                    </td>
                    </tr>
                 <?php  }
                ?>
            </tbody>
          
</html>

