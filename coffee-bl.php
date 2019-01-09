<?php
    require_once 'bl.php';
    require_once './coffee-model.php';
    class BusinessLogicCoffee extends BusinessLogic{
        public function get()
        {
            $q = 'SELECT * from products';
            
            $results = $this->dal->select($q);
            $resultsArray = [];
    
            while ($row = $results->fetch()) {
                array_push($resultsArray, new CoffeeModel($row));
            }
    
            return $resultsArray;
        }
        
        public function set($f) {
            $query = "INSERT INTO products (`product_name`, `product_category`, `product_price`, 
            `product_amount`,`product_picture`,`product_date`) VALUES (:pn, :pc, :pp, :pa, :ppi, :pd)";
            $params = array(
                "pn" => $f->getProductName(),
                "pc" => $f->getProductCategory(),
                "pp" => $f->getProductPrice(),
                "pa" => $f->getProductAmount(),
                "ppi" => $f->getProductPicture(),
                "pd" => $f->getProductDate()
            );
            $this->dal->insert($query, $params);
        }
        public function getOne($id)
        {
            $q = 'SELECT * FROM `products` WHERE product_id= :pi';
            
            $results = $this->dal->select($q, [
                'pi' => $id
            ]);
            $row = $results->fetch();
            return new CoffeeModel($row);
        }
       
  
        
        public function delete($id) {
            $query = "DELETE FROM `products` WHERE product_id = :a";
            $params = array(
                "a" => $id
            );
            $this->dal->delete($query, $params);
        }
    }
    ?>