<?php

$page = isset($_GET['page']) ? $_GET['page'] : 1;

$limit = 4;

$row_count = $newsList->getPage('count', 'news');

$result = $newsList->items;

$total_pages = ceil($row_count / $limit);

$nextPage = $page + 1;

?>