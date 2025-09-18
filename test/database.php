<?
 Class Base
 {
    protected $serverName;
    protected $dbName;
    protected $userName;
    protected $password;
    
    public function __construct() {
        $this->serverName = 'localhost';
        $this->dbName = 'test';
        $this->userName = 'root';
        $this->password = '';
    }
 }

 Class Mybase extends Base 
 {
    private $sql;
    public $connection;
    public $items;

    function dbPara() {
        $this->connection = new PDO("mysql:host=$this->serverName;dbname=$this->dbName;", $this->userName, $this->password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    function selectId($tableName, $rowName, $value) {
        $this->sql = "SELECT * FROM $tableName WHERE $rowName = :$value";
    }

    function selectRow($tableName, $rowName, $offset, $limit) {
        $this->sql = "SELECT * FROM $tableName ORDER BY $rowName DESC LIMIT :$offset, $limit";
    }

    function selectPage($count, $tableName) {
        $this->sql = "SELECT COUNT(*) as $count FROM $tableName";
    }

    function executeStatementParam($rowName, $offset) {
        $stmt = $this->connection->prepare($this->sql);
        $stmt->bindParam($rowName, $offset, PDO::PARAM_INT);
        $stmt->execute();
        $this->items = $stmt->fetchALL(PDO::FETCH_ASSOC);
        return $this->items;
    }

    function executeStatement() {
        $stmt = $this->connection->prepare($this->sql);
        $stmt->execute();
        $this->items = $stmt->fetchColumn();
        return $this->items;
    }
 }
?>