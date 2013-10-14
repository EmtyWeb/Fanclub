<?php
class Database extends PDO {
    public function __construct($DB_TYPE,$DB_HOST,$DB_NAME,$DB_USER,$DB_PASSWORD) {
        try {
            parent::__construct($DB_TYPE.":host=".$DB_HOST.";dbname=".$DB_NAME, $DB_USER, $DB_PASSWORD);
        } catch (PDOException $e) {
            throw new Database_Exception("D00002: " . $e->getMessage());
        }
    }
}