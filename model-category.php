<?php 
require_once './model.php';
require_once 'bl-category.php';
require_once 'bl-coffee.php';
    class CategoryModel implements IModel{
        private $category_name;
        private $category_id;
       

        function __construct($arr) {
            $this->category_name = $arr['category_name'];
            if (!empty($arr['category_id']))
                $this->category_id = $arr['category_id'];
           
            
        }
        function getCategoryName() {
            return $this->category_name;
        }
        function getCategoryId() {
            return $this->category_id;
        }
      
        
    }
?>