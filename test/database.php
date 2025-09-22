<?
 Class Base
 {
    protected $serverName;
    protected $dbName;
    protected $userName;
    protected $password;
    protected $connection;
    
    function __construct() {
        $this->serverName = 'localhost';
        $this->dbName = 'test';
        $this->userName = 'root';
        $this->password = '';

        $this->connection = new PDO("mysql:host=$this->serverName;dbname=$this->dbName;", $this->userName, $this->password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
 }

 Class NewsList extends Base 
 {
    private $sql;
    public $items;

    function getFirstNews($tableName, $rowName, $limit, $var) {
        $this->sql = "SELECT * FROM $tableName ORDER BY $rowName DESC LIMIT :$limit";

        $response = $this->executeStatementParam('limit', $var);

        return $response;
    }

    function getNews($tableName, $rowName, $limit, $offset, $var) {
        $this->sql = "SELECT * FROM $tableName ORDER BY $rowName DESC LIMIT $limit OFFSET :$offset";

        $response = $this->executeStatementParam('offset', $var);

        return $response;
    }

    function getId($tableName, $rowName, $id, $var) {
        $this->sql = "SELECT * FROM $tableName WHERE $rowName = :$id";

        $response = $this->executeStatementParam('id', $var);

        return $response;
    }

    function getPage($count, $tableName) {
        $this->sql = "SELECT COUNT(*) as $count FROM $tableName";

        $response = $this->executeStatement();

        return $response;
    }

    private function executeStatementParam($param, $value) {
        $stmt = $this->connection->prepare($this->sql);
        $stmt->bindParam($param, $value, PDO::PARAM_INT);
        $stmt->execute();
        $this->items = $stmt->fetchALL(PDO::FETCH_ASSOC);
        return $this->items;
    }

    private function executeStatement() {
        $stmt = $this->connection->prepare($this->sql);
        $stmt->execute();
        $this->items = $stmt->fetchColumn();
        return $this->items;
    }
 }

 $newsList = new NewsList();
?>