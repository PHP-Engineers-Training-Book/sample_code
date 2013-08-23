<?php
$id = 10;

try {
    $pdo = new PDO('pgsql:dbname=test', 'user', 'pass');
    $stmt = $pdo->prepare('SELECT * FROM samples WHERE id=:id');
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetchAll();
} catch (\PDOException $e) {
    echo $e->getMessage().PHP_EOL;
}
