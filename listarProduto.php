<?php include("conexao.php");
      $todosProdutos = selectAllProduto();      
?>

<html>
    
    <head>
        <meta charset="iso-8859-1">
        <title></title>    
    </head>
    <body>
        <h1>
            PRODUTOS 
        </h1>
    </body>
    
    <table border="1">
            <thead>
                <tr>
                    <th>Descrição</th>
                    <th>Tipo</th>                    
                    <th>Código Produto</th> 
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
    <tbody>
                <?php
                    foreach ($todosProdutos as $produto) { ?>
                    <tr>
                        <td><?= utf8_decode($produto["DESCRICAO"])?></td>                                        
                    <td><?=$produto["TIPO"]?></td>
                    <td><?=$produto["COD_PRODUTO"]?></td>
                    <td>
                        <form name="alterar" action="alterarProduto.php" method="POST">
                            <input type="hidden" name="COD_PRODUTO" value=<?=$produto["COD_PRODUTO"]?> />
                            <input type="submit" value="Editar" name="editar" />
                            </form>
                    </td>
                    <td>
                        <form name="excluir" action="conexao.php" method="POST">
                            <input type="hidden" name="COD_PRODUTO" value="<?=$produto["COD_PRODUTO"]?>" />
                            <input type="hidden" name="acao" value="excluir" />
                            <input type="submit" value="Excluir" name="excluir" />
                            </form>
                        
                    </td>
                    </tr>
                 <?php  }
                ?>
            </tbody>
          
</html>

