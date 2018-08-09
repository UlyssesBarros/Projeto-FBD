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
    
    if($_POST["acao"]=="inserirTarefa"){
        inserirTarefa();
    }
    
    if($_POST["acao"]=="alterar"){
        alterarProduto();
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
}

function inserirProduto(){
    $banco = abrirBanco();
    $sql = "INSERT INTO produto(DESCRICAO, TIPO) "
            . "VALUES ('{$_POST["descricao"]}','{$_POST["tipo"]}')";
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

function selectCodProduto($cod_produto){
    $banco = abrirBanco();
    $sql = "SELECT * FROM produto WHERE cod_produto =".$cod_produto;
    $resultado = $banco->query($sql);
    $banco->close();
    $produto = mysqli_fetch_assoc($resultado);
    return $produto;
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
    $sql = "SELECT * FROM tarefa ORDER BY nome";
    $resultado = $banco->query($sql);
    $banco->close();
    while ($row = mysqli_fetch_array($resultado)) {
        $todasTarefas[] = $row;
    }
    return $todasTarefas;
}

function abrirBanco(){
    $conexao = new mysqli("localhost", "root", "", "fabricacao");
    return $conexao;
}

function alterarPessoa(){
    $banco = abrirBanco();
    $sql = "UPDATE pessoa SET nome='{$_POST["nome"]}',"
            . "nascimento='{$_POST["nascimento"]}',endereco='{$_POST["endereco"]}',"
            . "telefone='{$_POST["telefone"]}' WHERE id='{$_POST["id"]}'";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function excluirPessoa(){
    $banco = abrirBanco();
    $sql = "DELETE FROM pessoa WHERE id='{$_POST["id"]}'";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function selectAllPessoa(){
    $banco = abrirBanco();
    $sql = "SELECT * FROM pessoa ORDER BY nome";
    $resultado = $banco->query($sql);
    $banco->close();
    while ($row = mysqli_fetch_array($resultado)) {
        $grupo[] = $row;
    }
    return $grupo;
}

function selectIdPessoa($id){
    $banco = abrirBanco();
    $sql = "SELECT * FROM pessoa WHERE id =".$id;
    $resultado = $banco->query($sql);
    $banco->close();
    $pessoa = mysqli_fetch_assoc($resultado);
    return $pessoa;
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

function voltarIndex(){
    header("Location:index.php");
}

function ficarNoIndex(){
    header ("Location: inserirProduto.php");
}