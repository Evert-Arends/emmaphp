<?php

/**
 * Base Table of the EmmaPHP MVC Framework
 */
abstract class EmmaTable implements Table {
    
    private $_db;
    protected $table_name;
    
    function __construct () {
    
        $this->initialize ();
        
    }
    
    private function initialize () {
        
        $this->_db = new Db ();
        
        $sql = "SELECT * FROM :tablename;";
        $stmt = $this->db->connection->prepare ($sql);
        $stmt->bindParam (":tablename", $this->table_name, PDO::PARAM_STRING);
        $stmt->execute ();
        
        $result = $stmt->fetch (PDO::FETCH_CLASS, "EmmaTable");
        
        die (var_dump ($result));
        
//        return $result;
        
    }
    
}