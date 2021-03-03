<?php

    use Doctrine\ORM\Mapping as ORM;
    use Doctrine\Common\Collections\ArrayCollection;
    
    
    /**
     * @ORM\Entity 
     * ORM\Table(name="produit")
     */

    class Produit
    {

        /**
         * @ORM\id
         * @ORM\Column(type="integer")
         * @ORM\GeneratedValue
         */
        private $id;
        /**
         *@ORM\Column(type="string")
         */
        private $ref;
        /**
         *@ORM\Column(type="string")
         */
        private $nom;
        /**
         *@ORM\Column(type="integer")
         */
        private $qte;
        /**
         * Many produit have one user. This is the owning side.
         * @ORM\ManyToOne(targetEntity="User", inversedBy="produits")
         * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
         */
        private $user;
        public function __construct()
        {

        }

        public function getId()
        {
            return $this -> id;
        }
        public function setId($id)
        {
            $this->id = $id ;
        }
        public function getRef()
        {
            return $this -> ref;
        }
        public function setRef($ref)
        {
            $this->ref = $ref ;
        }
        public function getNom()
        {
            return $this -> nom;
        }
        public function setNom($nom)
        {
            $this->nom = $nom ;
        }
        public function getQte()
        {
            return $this -> qte;
        }
        public function setQte($qte)
        {
            $this->qte = $qte ;
        }
    
        public function getUser()
        {
            return $this -> user;
        }
        public function setUser($user)
        {
            $this->user = $user ;
        }







}

?>