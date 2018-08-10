<?php include("conexao.php");
      $todosFornecedores = selectAllFornecedor();      
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
                    <th>Nome</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
    <tbody>
                <?php
                    foreach ($todosFornecedores as $fornecedor) { ?>
                    <tr>
                        <td><?= utf8_decode($fornecedor["NOME"])?></td>                                        
                
                    <td>
                        <form name="alterar" action="alterarFornecedor.php" method="POST">
                            <input type="hidden" name="COD_FORNECEDOR" value=<?=$fornecedor["COD_FORNECEDOR"]?> />
                            <input type="submit" value="Editar" name="editar" />
                            </form>
                    </td>
                    <td>
                        <form name="excluir" action="conexao.php" method="POST">
                            <input type="hidden" name="COD_FORNECEDOR" value="<?=$fornecedor["COD_FORNECEDOR"]?>" />
                            <input type="hidden" name="acao" value="excluirFornecedor" />
                            <input type="submit" value="Excluir" name="excluir" />
                            </form>
                        
                    </td>
                    </tr>
                 <?php  }
                ?>
            </tbody>
          
</html>
