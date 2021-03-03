<?php
namespace src\controller;
use libs\system\Controller;
use src\model\UsersDb;

class UsersController extends Controller
{
        public function add()
        {
            return $this->view->load("users/add");
        }
        public function delete($id)
        {
           echo $id;
          
        }
        public function getAll()
        {
            $users_dao = new UsersDb();
            $users = $users_dao->findAll();
            return $this->view->load("users/getAll",$users);
        }
    }

?>
