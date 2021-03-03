<?php
namespace src\model;
use libs\system\Model;

    class UsersDb extends Model
    {
        public function findAll()
        {
            return $this->entityManager
                        ->createQuery("SELECT u FROM User u")
                        ->getResult();
            
            
            //array("ROLE_COMPTA","ROLE_FINANCE");
        }

      
    }

?>