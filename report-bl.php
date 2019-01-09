<?php
require_once './dal.php';
    class BusinessLogicReports {
        protected $dal;
        public function __construct()
        {
            $this->dal = DataAccessLayer::Instance();
        }
        
        public function categoryAmountReport()
        {
            $q = 'SELECT category.category_name, SUM(products.product_amount)as amount from category inner join products on category.category_id = products.product_category group by category.category_name';
            
            $results = $this->dal->select($q);
            
            $retArray = [];
            
            while ($row = $results->fetch()) {
                array_push($retArray, $row);
            }
    
            return $retArray;
        }
    }