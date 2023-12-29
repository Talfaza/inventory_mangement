<?php 

class ProductParent {

      protected $idProductParent;
      protected $idUser;
      protected $productPrice;
      protected $productQte;

      //constructor


        
      public function __construct(  $idProductParent, $idUser, $productPrice, $productQte) {
           
            $this->idProductParent = $idProductParent;
            $this->idUser = $idUser;
            $this->productPrice = $productPrice;
            $this->productQte = $productQte;

      }

      //getters

      public function getIdProductParent(){ return $this->idProductParent; }
      public function getIdUser(){ return $this->idUser; }
      public function getProductPrice(){ return $this->productPrice; }
      public function getProductQte(){ return $this->productQte; }

   



}

   //Product Class

   class Product extends ProductParent {

      private $id;
      private $productName;
      private $userId;

      private $idParent;

      //constructor

      public function __construct($id ,$productName ,$userId, $idParent){
            $this->id = $id;
            $this->productName = $productName;
            $this->userId = $userId;
            $this->idParent = $idParent;
      }




   }





?>