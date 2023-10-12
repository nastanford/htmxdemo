<?php

include_once '../models/config.php';

try {
  $sql = "SELECT * FROM PEOPLE LIMIT 10 OFFSET 0;";
  $stmt = $pdo->query($sql);
  $qry_people = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}