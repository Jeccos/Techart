<?php

require_once __DIR__ . '/database.php';

$id = $_GET['id'];

$newsList->getId('news', 'id', 'id', $id);

$result = $newsList->items;

$dateTime = new DateTime();

foreach($result as &$item) {
    $item['date'] = $dateTime->modify($item['date'])->format('d.m.Y');
}

?>