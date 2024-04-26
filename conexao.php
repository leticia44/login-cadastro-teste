<?php
    try {
        $pdo = new PDO('sqlite:login.db');
    } catch (PDOException $e) {
        echo "Erro!: " . $e->getMessage();
        die();
    }
?>
