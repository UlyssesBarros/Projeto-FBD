<?php include("conexao.php");
      $todosProcessos = selectAllProcesso();      
?>

<html>
    
    <head>
        <meta charset="iso-8859-1">
        <title></title>    
    </head>
    <body>
        <h1>
            PROCESSOS 
        </h1>
    </body>
    
    <table border="1">
            <thead>
                <tr>                         
                    <th>Nome</th> 
                    <th>Código Processo</th>                     
                    <th>Editar</th>
                    <th>Excluir</th>
                    <th>Alterar Tarefas</th>
                </tr>
            </thead>
    <tbody>
                <?php
                    foreach ($todosProcessos as $processo) { ?>
                    <tr>
                        <td><?= utf8_decode($processo["NOME"])?></td>                                        
                    <td><?=$processo["COD_PROCESSO"]?></td>                    
                    <td>
                        <form name="alterar" action="alterarProcesso.php" method="POST">
                            <input type="hidden" name="COD_PROCESSO" value=<?=$processo["COD_PROCESSO"]?> />
                            <input type="submit" value="Editar" name="editar" />
                            </form>
                    </td>
                    <td>
                        <form name="excluir" action="conexao.php" method="POST">
                            <input type="hidden" name="COD_PROCESSO" value="<?=$processo["COD_PROCESSO"]?>" />
                            <input type="hidden" name="acao" value="excluirProcesso" />
                            <input type="submit" value="Excluir" name="excluir" />
                            </form>
                        
                    </td>
                    <td>
                        <form name="excluir" action="alterarTarefas.php" method="POST">
                            <input type="hidden" name="COD_PROCESSO" value="<?=$processo["COD_PROCESSO"]?>" />
                            <input type="hidden" name="acao" value="alterarTarefass" />
                            <input type="submit" value="Alterar Tarefas" name="excluir" />
                            </form>
                        
                    </td>
                    
                    </tr>
                 <?php  }
                ?>
            </tbody>
          
</html>

