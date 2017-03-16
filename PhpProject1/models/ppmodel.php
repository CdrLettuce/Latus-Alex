<?php

class PPModel extends Model{

	/* FacultyModel class inherits all the members of the Model class */
	// define additional members for the FacultyModel class
  	public function getCustomerList(){
        	// define SQL statement
        	$sql = "SELECT * FROM `customers` ";

        	// set the sql property
        	$this->setSql($sql);

        	// obtain data and return data
        	return $this->getAll();

	}

	 public function customerPurchases($parameter){
                // define SQL statement
                $sql = 'SELECT s.sales_id, s.customer_id, 
                        concat(c.first_name," ", c.last_name) AS name,
                        p.product_title, p.unit_price, s.quantity
                        FROM sales AS s, customers AS c, products AS p
                        WHERE s.customer_id = c.customer_id
                        AND s.product_id = p.product_id
                        AND s.customer_id = :customer_id'; 
                // set model's SQL 
                $this->SetSql($sql);
                // define values for the parameters
                $values = array(':customer_id'=>$parameter);
                // obtain and return data
                return $this->getAll($values);
        }
        /*
        public function playerSignup(){
            $sql = '';
            $this->SetSql($sql);
            return $this->getAll();
        }
        */
        
        public function addBetaPlayer(){
            console.log("Hello");
            $sql = 'INSERT INTO prospectivePlayers (first_name, last_name, email)
                    values (:first_name, :last_name, :email)';
            $this->SetSql($sql);
            $values = array(':first_name'=>$_POST['first_name'],
                            ':last_name'=>$_POST['last_name'],
                            ':email'=>$_POST['email']);
            return $this->setAll($values);
        }
        
        public function addBetaCoach(){
            console.log("Hello");
            $sql = 'INSERT INTO prospectiveCoaches (first_name, last_name, email)
                    values (:first_name, :last_name, :email)';
            $this->SetSql($sql);
            $values = array(':first_name'=>$_POST['first_name'],
                            ':last_name'=>$_POST['last_name'],
                            ':email'=>$_POST['email']);
            return $this->setAll($values);
        }
        

}
