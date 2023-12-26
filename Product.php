<?php
class Product {
      private $id;
      private $productName;
      private $productPrice;
      private $productType;
      private $productQuantity;
      private $userId;
  
      public function __construct($id, $productName, $productPrice, $productType, $productQuantity, $userId) {
          $this->id = $id;
          $this->productName = $productName;
          $this->productPrice = $productPrice;
          $this->productType = $productType;
          $this->productQuantity = $productQuantity;
          $this->userId = $userId;
      }
  
      // Getters
      public function getId() {
          return $this->id;
      }
  
      public function getProductName() {
          return $this->productName;
      }
  
      public function getProductPrice() {
          return $this->productPrice;
      }
  
      public function getProductType() {
          return $this->productType;
      }
  
      public function getProductQuantity() {
          return $this->productQuantity;
      }
  
      public function getUserId() {
          return $this->userId;
      }
  
  

}
?>
