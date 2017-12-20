<?php

if(isset($_POST["acao"])){
    if($_POST["acao"]=="inserir"){
        inserirAluguel();
    }
    if($_POST["acao"]=="alterar"){
        alterarAluguel();
    }
    if($_POST["acao"]=="excluir"){
        excluirAluguel();
    }
    if($_POST["acao"]=="pagar"){
        pagarAluguel();
    }
}

function abrirBanco(){
    $conexao = new mysqli("localhost", "root", "", "quadra");
    return $conexao;
}

function inserirAluguel(){
    $banco = abrirBanco();
    $sql = "INSERT INTO aluguel(responsavel, numero, horario, dia, pago) "
            . "VALUES ('{$_POST["responsavel"]}','"
            . "{$_POST["quadraSelect"]}','"
            . "{$_POST["horarioSelect"]}','"
            . "{$_POST["diaSelect"]}','"
            . "{$_POST["pagoSelect"]}')";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function alterarAluguel(){
    $banco = abrirBanco();
    $sql = "UPDATE aluguel SET responsavel='{$_POST["responsavel"]}',"
            . "numero='{$_POST["quadraSelect"]}',horario='{$_POST["horarioSelect"]}',"
            . "dia='{$_POST["diaSelect"]}', pago='{$_POST["pagoSelect"]}' "
            . "WHERE id='{$_POST["id"]}'";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function pagarAluguel(){
    $banco = abrirBanco();
    $sql = "UPDATE aluguel SET pago='Pago' "
            . "WHERE id='{$_POST["id"]}'";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function excluirAluguel(){
    $banco = abrirBanco();
    $sql = "DELETE FROM aluguel WHERE id='{$_POST["id"]}'";
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function selectAllAluguel(){
    $banco = abrirBanco();
    $sql = "SELECT * FROM aluguel ORDER BY FIELD(dia, 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado', 'Domingo'), horario;";
    $resultado = $banco->query($sql);
    
    $banco->close();
    while ($row = mysqli_fetch_array($resultado)) {
        $grupo[] = $row;
    }
    return $grupo;
}

function selectIdAluguel($id){
    $banco = abrirBanco();
    $sql = "SELECT * FROM aluguel WHERE id =".$id;
    $resultado = $banco->query($sql);
    $banco->close();
    $pessoa = mysqli_fetch_assoc($resultado);
    return $pessoa;
}

function voltarIndex(){
    header("Location:index.php");
}