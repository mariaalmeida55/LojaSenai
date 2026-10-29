<?php

$caminho = __DIR__ . '/banco/loja.db';

if (!file_exists($caminho)) {
    die('Banco não encontrado. Caminho verificado: ' . $caminho);
}

$pdo = new PDO('sqlite:' . $caminho);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
