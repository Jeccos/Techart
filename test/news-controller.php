<?
require_once __DIR__ . '/database.php';

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 4;
$offset = $limit * ($page - 1);

$mybase = new Mybase();
$mybase->dbPara();
$mybase->selectRow('news', 'date', 'offset', $limit);
$mybase->executeStatementParam('offset', $offset);

$result = $mybase->items;

$dateTime = new DateTime();

foreach($result as &$item) {
    $item['date'] = $dateTime->modify($item['date'])->format('d.m.Y');
}
?>