<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(isset($_POST["acao"])){    
    if($_POST["acao"]=="inserirProduto"){
        if($_POST['tipo'] == 'P'){                    
            inserirProduto();
        }
        elseif ($_POST['tipo'] == 'I') {
            inserirProduto();
        }
        else{                           
            ficarNoIndex();            
        }
    }
    
    if($_POST["acao"]=="excluirProduto"){
        excluirProduto();
    }
    
    if($_POST["acao"]=="inserirTarefa"){
        inserirTarefa();
    }
    
    if($_POST["acao"]=="alterar"){
        alterarProduto();
    }
    
    if($_POST["acao"]=="alterarTarefa"){
        alterarTarefa();
    }
    
    if($_POST["acao"]=="excluirTarefa"){
        excluirTarefa();
    }
    
    if($_POST["acao"]=="inserirProcesso"){
        inserirProcesso();
    }
    
    if($_POST["acao"]=="inserirProducao"){
        inserirProducao();
    }
    
    if($_POST["acao"]=="inserirOrdemExecucao"){
        inserirOrdemExecucao();
    }
    
    if($_POST["acao"]=="inserirComposicao"){
        inserirComposicao();
    }
    
    if($_POST["acao"]=="inserirComprado"){
        inserirComprado();
    }
    
    if($_POST["acao"]=="inserirFornecedor"){
        inserirFornecedor();
    }
    if($_POST["acao"]=="excluirFornecedor"){
        excluirFornecedor();
    }
    if($_POST["acao"]=="alterarFornecedor"){
        alterarFornecedor();
    }
    
    if($_POST["acao"]=="alterarProcesso"){
        alterarProcesso();
    }
    
    if($_POST["acao"]=="excluirProcesso"){
        excluirProcesso();
    }
    
    if($_POST["acao"]=="alterarProducao"){
        alterarProducao();
    }
    
    if($_POST["acao"]=="excluirProducao"){
        excluirProducao();
    }
        
}

function inserirProduto(){
    $banco = abrirBanco();
    $sql = "INSERT INTO produto(DESCRICAO, TIPO) "
            . "VALUES ('{$_POST["descricao"]}','{$_POST["tipo"]}')";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function excluirProduto(){
    $banco = abrirBanco();
    $sql = "DELETE FROM produto WHERE cod_produto='{$_POST["COD_PRODUTO"]}'";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function alterarProduto(){
    $banco = abrirBanco();
    $sql = "UPDATE produto SET DESCRICAO='{$_POST["DESCRICAO"]}',"
            . "TIPO='{$_POST["TIPO"]}' WHERE COD_PRODUTO='{$_POST["COD_PRODUTO"]}'";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function alterarTarefa(){
    $banco = abrirBanco();
    $sql = "UPDATE tarefa SET NOME='{$_POST["NOME"]}',"
            . "TEMPO='{$_POST["TEMPO"]}' WHERE COD_TAREFA='{$_POST["COD_TAREFA"]}'";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function excluirTarefa(){
    $banco = abrirBanco();
    $sql = "DELETE FROM tarefa WHERE cod_tarefa='{$_POST["COD_TAREFA"]}'";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function selectCodProduto($cod_produto){
    $banco = abrirBanco();
    $sql = "SELECT * FROM produto WHERE cod_produto =".$cod_produto;
    $resultado = $banco->query($sql);
    $banco->close();
    $produto = mysqli_fetch_assoc($resultado);
    return $produto;
}

function selectCodTarefa($cod_tarefa){
    $banco = abrirBanco();
    $sql = "SELECT * FROM tarefa WHERE cod_tarefa =".$cod_tarefa;
    $resultado = $banco->query($sql);
    $banco->close();
    $tarefa = mysqli_fetch_assoc($resultado);
    return $tarefa;
}

function inserirTarefa(){
    $banco = abrirBanco();
    $sql = "INSERT INTO tarefa(NOME, TEMPO) "
            . "VALUES ('{$_POST["nome"]}','{$_POST["tempo"]}')";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function selectAllProduto(){
    $banco = abrirBanco();
    $sql = "SELECT * FROM produto ORDER BY descricao";
    $resultado = $banco->query($sql);
    $banco->close();
    while ($row = mysqli_fetch_array($resultado)) {
        $todosProdutos[] = $row;
    }
    return $todosProdutos;
}

function selectAllTarefas(){
    $banco = abrirBanco();
    $sql = "SELECT * FROM tarefa ORDER BY cod_tarefa";
    $resultado = $banco->query($sql);
    $banco->close();
    while ($row = mysqli_fetch_array($resultado)) {
        $todasTarefas[] = $row;
    }
    return $todasTarefas;
}

function selectAllProcesso(){
    $banco = abrirBanco();
    $sql = "SELECT * FROM processo ORDER BY nome";
    $resultado = $banco->query($sql);
    $banco->close();
    while ($row = mysqli_fetch_array($resultado)) {
        $todosProcessos[] = $row;
    }
    return $todosProcessos;
}

function selectAllProducao(){
    $banco = abrirBanco();
    $sql = "SELECT * FROM producao ORDER BY cod_produto";
    $resultado = $banco->query($sql);
    $banco->close();
    while ($row = mysqli_fetch_array($resultado)) {
        $todasProducao[] = $row;
    }
    return $todasProducao;
}

function selectAllOrdens(){
    $banco = abrirBanco();
    $sql = "SELECT * FROM ordem";
    $resultado = $banco->query($sql);
    $banco->close();
    while ($row = mysqli_fetch_array($resultado)) {
        $todasOrdens[] = $row;
    }
    return $todasOrdens;
}

function selectAllComposicao(){
    $banco = abrirBanco();
    $sql = "SELECT * FROM composicao ORDER BY cod_produto";
    $resultado = $banco->query($sql);
    $banco->close();
    while ($row = mysqli_fetch_array($resultado)) {
        $todasComposicao[] = $row;
    }
    return $todasComposicao;
}

function selectAllComprado(){
    $banco = abrirBanco();
    $sql = "SELECT * FROM comprado_no ORDER BY cod_produto";
    $resultado = $banco->query($sql);
    $banco->close();
    while ($row = mysqli_fetch_array($resultado)) {
        $todosComprado[] = $row;
    }
    return $todosComprado;
}

function abrirBanco(){
    $conexao = new mysqli("localhost", "root", "", "fabricacao");
    return $conexao;
}

function inserirProcesso(){
    $banco = abrirBanco();
    $sql = "INSERT INTO processo(NOME) "
            . "VALUES ('{$_POST["nome"]}')";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function inserirProducao(){
    $banco = abrirBanco();
    $sql = "INSERT INTO producao(COD_PRODUTO, COD_PROCESSO) "
            . "VALUES ('{$_POST["cod_produto"]}','{$_POST["cod_processo"]}')";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function inserirOrdemExecucao(){
    $banco = abrirBanco();
    $sql = "INSERT INTO ordem_execucao(COD_PROCESSO, COD_TAREFA, ORDEM) "
            . "VALUES ('{$_POST["COD_PROCESSO"]}','{$_POST["COD_TAREFA"]}','{$_POST["ORDEM"]}')";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function inserirComposicao(){
    $banco = abrirBanco();
    $sql = "INSERT INTO composicao(COD_PRODUTO, COD_COMPONENTE, QUANTIDADE) "
            . "VALUES ('{$_POST["COD_PRODUTO"]}','{$_POST["COD_COMPONENTE"]}','{$_POST["QUANTIDADE"]}')";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function inserirComprado(){
    $banco = abrirBanco();
    $sql = "INSERT INTO comprado_no(COD_PRODUTO, COD_FORNECEDOR, PRAZO_ENTREGA) "
            . "VALUES ('{$_POST["COD_PRODUTO"]}','{$_POST["COD_FORNECEDOR"]}','{$_POST["PRAZO_ENTREGA"]}')";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function inserirFornecedor(){
    $banco = abrirBanco();
    $sql = "INSERT INTO fornecedor(nome) VALUES ('{$_POST["nome"]}')";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function selectAllFornecedor(){
    $banco = abrirBanco();
    $sql = "SELECT * FROM fornecedor ORDER BY nome";
    $resultado = $banco->query($sql);
    $banco->close();
    while ($row = mysqli_fetch_array($resultado)) {
        $todosFornecedores[] = $row;
    }
    return $todosFornecedores;
}

function selectCodFornecedor($cod_fornecedor){
    
    $banco = abrirBanco();
    $sql = "SELECT * FROM fornecedor WHERE cod_fornecedor =".$cod_fornecedor;
    $resultado = $banco->query($sql);
    $banco->close();
    $fornecedor = mysqli_fetch_assoc($resultado);
    return $fornecedor;
}

function selectCodProcesso($cod_processo){
    
    $banco = abrirBanco();
    $sql = "SELECT * FROM processo WHERE cod_processo =".$cod_processo;
    $resultado = $banco->query($sql);
    $banco->close();
    $processo = mysqli_fetch_assoc($resultado);
    return $processo;
}

function selectCodProcessoByNome($cod_processo){
    
    $banco = abrirBanco();
    $sql = "SELECT COD_PROCESSO FROM processo WHERE NOME=".$cod_processo;
    $resultado = $banco->query($sql);
    $banco->close();
    if ($resultado == false){
        return $resultado = 'deu ruim';
    }
    $processo = mysqli_fetch_assoc($resultado);
    return $processo;
}

function alterarFornecedor(){
    $banco = abrirBanco();
    $sql = "UPDATE fornecedor SET NOME='{$_POST["NOME"]}' WHERE COD_FORNECEDOR='{$_POST["COD_FORNECEDOR"]}'";
    echo $sql;
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function alterarProcesso(){
    $banco = abrirBanco();
    $sql = "UPDATE processo SET NOME='{$_POST["NOME"]}' WHERE COD_PROCESSO='{$_POST["COD_PROCESSO"]}'";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function excluirFornecedor(){
    $banco = abrirBanco();
    $sql = "DELETE FROM fornecedor WHERE cod_fornecedor='{$_POST["COD_FORNECEDOR"]}'";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function excluirProcesso(){
    $banco = abrirBanco();
    $sql = "DELETE FROM processo WHERE cod_processo='{$_POST["COD_PROCESSO"]}'";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function excluirProducao(){
    $banco = abrirBanco();
    $sql = "DELETE FROM producao WHERE COD_PRODUTO='{$_POST["COD_PRODUTO"]}'";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function selectCodProducao($cod_produto){
    
    $banco = abrirBanco();
    $sql = "SELECT * FROM producao WHERE cod_produto =".$cod_produto;
    $resultado = $banco->query($sql);
    $banco->close();
    $producao = mysqli_fetch_assoc($resultado);
    return $producao;
}

function alterarProducao(){
    $banco = abrirBanco();
    $sql = "UPDATE `producao` SET `COD_PRODUTO`='{$_POST['COD_PRODUTO']}',`COD_PROCESSO`='{$_POST['COD_PROCESSO']}' WHERE `COD_PRODUTO`='{$_POST['COD_PRODUTO']}'";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function voltarIndex(){
    header("Location:index.php");
}

function ficarNoIndex(){
    header ("Location: inserirProduto.php");
}