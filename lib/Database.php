<?php

class Database
{
    private static $INSTANCE;
    
    private $pdo;

    private function __construct($host, $db, $user, $pass, $charset)
    {
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            $this->pdo = new PDO($dsn, $user, $pass, $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public static function get()
    {
        if (empty(self::$INSTANCE)) {
            $host = '127.0.0.1';
            $db   = 'keybat_travel';
            $user = 'root';
            $pass = '';
            $charset = 'utf8mb4';
            self::$INSTANCE = new Database($host, $db, $user, $pass, $charset);
        }

        return self::$INSTANCE;
    }

    public function getPDO()
    {
        return $this->pdo;
    }

    public function selectQuery($query, $values =[])
    {
        $preparedQuery = $this->pdo->prepare($query);
        $preparedQuery->execute($values);

        return $preparedQuery->fetchAll();
    }

    public function insertQuery($table, $values)
    {
        $fields = array_keys($values);

        $mapFunction = function ($value) {
            return ":".$value;
        };

        $placeholders = array_map($mapFunction, $fields);

        $query = "INSERT INTO ".$table."(".implode(",", $fields).") VALUES(".implode(",", $placeholders).")";

        $preparedQuery = $this->pdo->prepare($query);
        $preparedQuery->execute($values);

        return $this->pdo->lastInsertId();
    }
}
