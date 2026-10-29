<?php
require_once 'conexao.php';

$id = $_POST['id'] ?? '';
$nome = $_POST['nome'] ?? '';
$quantidade = $_POST['quantidade'] ?? 0;
$valor_compra = $_POST['valor_compra'] ?? 0;
$valor_venda = $_POST['valor_venda'] ?? 0;
 
if($id == ''){
    $sql = $pdo -> prepare('INSERT INTO produto(nome, descricao, preco, imagem)VALUES (?, ?, ?, ?');
    $sql -> execute ([$nome, $descricao, $preco, $imagem]);
 } else {
    $sql = $pdo -> prepare ('UPDATE produto SET nome = ?, descricao = ?, preco = ?, imagem = ? WHERE id = ?');
     $sql -> execute ([$nome, $descricao, $preco, $imagem, $id]);
 }
 
 header('Location: produtos.php?msg=salvo');
 exit;
