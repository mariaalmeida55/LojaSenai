
<?php
require_once 'conexao.php';

$id = $_POST['id'] ?? '';
$nome = $_POST['nome'] ?? '';
$quantidade = $_POST['quantidade'] ?? 0;
$valor_compra = $_POST['valor_compra'] ?? 0;
$valor_venda = $_POST['valor_venda'] ?? 0;

if ($id == '') {
    $sql = $pdo->prepare(
        'INSERT INTO produto (nome, quantidade, valor_compra, valor_venda)
         VALUES (?, ?, ?, ?)'
    );

    $sql->execute([
        $nome,
        $quantidade,
        $valor_compra,
        $valor_venda
    ]);
} else {
    $sql = $pdo->prepare(
        'UPDATE produto
         SET nome = ?, quantidade = ?, valor_compra = ?, valor_venda = ?
         WHERE id = ?'
    );

    $sql->execute([
        $nome,
        $quantidade,
        $valor_compra,
        $valor_venda,
        $id
    ]);
}

header('Location: produtos.php?msg=salvo');
exit;


header('Location: produtos.php?msg=salvo');
exit;
