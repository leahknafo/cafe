<?php 
require_once './model.php';
require_once 'bl-coffee.php';
    class CoffeeModel implements IModel{
        private $product_id;
        private $product_name;
        private $product_category;
        private $product_price;
        private $product_amount;
        private $product_picture;
        private $product_date;
        

        function __construct($arr) {
            if (!empty($arr['product_id']))
            $this->product_id = $arr['product_id'];
            $this->product_name = $arr['product_name'];
            $this->product_category = $arr['product_category'];
            $this->product_price = $arr['product_price'];
            $this->product_amount = $arr['product_amount'];
            $this->product_picture = $arr['product_picture'];
            $this->product_date = $arr['product_date'];

           
           
            
        }
        function getProductId() {
            return $this->product_id;
        }
        function getProductName() {
            return $this->product_name;
        }
        function getProductCategory() {
            return $this->product_category;
        }
        function getProductPrice() {
            return $this->product_price;
        }
        function getProductAmount() {
            return $this->product_amount;
        }
        function getProductPicture() {
            return $this->product_picture;
        }
        function getProductDate() {
            return $this->product_date;
        }

       

        
        
       
        
    }
?>