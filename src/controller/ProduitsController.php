<?php
//namespace src\controller;
use libs\system\Controller;
use src\model\ProduitsDb;

class ProduitsController extends Controller
{
        public function add()
        {
            return $this->view->load("produits/add");
        }
        public function delete($id)
        {
           echo $id;
           //return $this->view->load("roles/add");
        }
        public function getAll()
        {
            $produits_dao = new UsersDb();
            $produits = $produits_dao->findAll();//array("ROLE_USER","ROLE_ADMIN");
            return $this->view->load("produits/getAll",$produits);
        }
    }

?>
