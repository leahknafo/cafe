<?php
    require_once 'bl.php';
    require_once './category-model.php';
    class BusinessLogicCategory extends BusinessLogic{
        public function get()
        {
            $q = 'SELECT * from category';
            
            $results = $this->dal->select($q);
            $resultsArray = [];
    
            while ($row = $results->fetch()) {
                array_push($resultsArray, new CategoryModel($row));
            }
    
            return $resultsArray;
        }

        public function getOne($id)
        {
            $q = 'SELECT * from category WHERE category_id';
            
            $results = $this->dal->select($q);
            $resultsArray = [];
    
            while ($row = $results->fetch()) {
                array_push($resultsArray, new CategoryModel($row));
            }
    
            return $resultsArray;
        }
        
    
    }
    ?>