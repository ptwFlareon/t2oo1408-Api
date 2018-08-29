<?php

namespace MyApp\Dao;

use MyApp\Models\User;
use PDO;
/**
 * Description of DaoUser
 *
 * @author drink
 */
class DaoUser {
    
    private $conn;
    
    public function __construct(PDO $conn) {
        $this->conn = $conn;
    }
    
    public function getAllUsers(){
        
    }
    public function getById($id) {
        
    }
    public function save(User $u) {
        
    }
    public function remove(User $u) {
        
    }
    
}
