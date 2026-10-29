
<?php

$caminho = __DIR__ . '/banco/loja.db';

$pdo = new PDO('sqlite:' . $caminho);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

