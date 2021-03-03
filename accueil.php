<?php
 use src\controller\UsersController;
 use src\entities\User;

    require_once "config/autoload.php";
    require_once 'header.php';
    
    $usersdao = new UsersController();
    $user = new User();
    $user->setId(1);
    $user->setNom("Diallo");
    print_r($user);
   $usersdao->add();
   
   // $usersdao->getAll();
   
   // $mvc = new libs\system\BootStrap();
     require_once 'corp.php';
?>
    
<?php
   require_once 'footer.php';
  ?>