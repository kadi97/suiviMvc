<?php
namespace src\model;
use libs\system\Model;

    class ProduitsDb extends Model
    {
        public function findAll()
        {
            return $this->entityManager
                        ->createQuery("SELECT p FROM Produits p")
                        ->getResult();
            
            
            //array("ROLE_COMPTA","ROLE_FINANCE");
        }
    }

?>