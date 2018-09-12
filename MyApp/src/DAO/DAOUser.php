<?php

namespace MyApp\DAO;

use MyApp\Models\User;
use PDO;

class DAOUser {
    
    /**
     *
     * @var \PDO 
     */
    private $conn;

    public function __construct(PDO $conn) {
        $this->conn = $conn;
    }
    
    public function getAllusers(){
        $sql = "select * from tbl_caixa";
        
        $prepare = $this->conn->prepare($sql);
        $prepare->execute();
        
        $array = $prepare->fetchAll();
        
        var_dump($array);
        
    }
    
    public function getById($id){
        
    }
    
    public function save(User $u){
        
    }
    
    public function remove(User $u){
        
    }
    
}
