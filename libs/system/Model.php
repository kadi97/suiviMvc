<?php
namespace libs\system;
    class Model
    {
        protected $entityManager;
        public function __construct()
        {

            require_once "bootstrap2.php";
            $this->entityManager = $entityManager;
        }
    }
?>