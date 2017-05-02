
<?php

class favoriteModel extends Model
{
        public function favoritePlayer(){
                              
            $table = favorites;
            //obtain data
            $user_data = json_decode(file_get_contents('php://input'));
            //define SQL statement
            $values = $user_data;
            $data = array('follower_id'=>$values->current_user,
                            'followed_id'=>$values->followed_id);
            // insert new record
            $this->insertRecord($table,$data);
            return 1;    
        }
        
        public function getfavoritedplayers(){           
            $sql = "SELECT followed_id
                    FROM favorites
                    WHERE follower_id = :userId";
            $this->setSql($sql);
            $data = json_decode(file_get_contents('php://input'));
            $values = array(':userId'=>$data->user_id);
            $result = $this->getAll($values);
            /* if the user is not found then return -1 */
            if (!$result)
                    $result = -1;
            return $result;
        }
        
        public function getfavoritedplayersinfo(){

                /*  This method uses a prepared SQL statement to get multiple records from a table 
                using an array of objects.
                */
                $sql = "SELECT u.first_name, u.last_name, u.city, s.state_name, u.user_id, p.graduation_date, o.position
                        FROM `users` as u, `states` as s, `player_profile` as p, `position` as o
                        WHERE u.user_id = :user_id)";
                $this->setSql($sql);
                // prepare SQL statement
                $stm = $this->_db->prepare($sql);
                // read input
                $data = json_decode(file_get_contents('php://input'));
                $customer_id = $data->customer_id;
                $products = $data->products;
                // execute SQL statement using each product in $products array
                for ($i=0; $i<count($products); $i++){
                        $parameters = array(':product_id'=>$products[$i]->product_id,
                                          ':customer_id'=>$customer_id,
                                          ':quantity'=>$products[$i]->quantity);
                        $stm->execute($parameters);
                }
                return 1;
        }
        
        public function addItemsToSales(){

                /*  This method uses a prepared SQL statement to insert multiple records into a table 
                using an array of objects.
                */
                $sql = 'INSERT INTO `sales` (product_id, customer_id, quantity)
                VALUES (:product_id, :customer_id, :quantity)';
                $this->setSql($sql);
                // prepare SQL statement
                $stm = $this->_db->prepare($sql);
                // read input
                $data = json_decode(file_get_contents('php://input'));
                $customer_id = $data->customer_id;
                $products = $data->products;
                // execute SQL statement using each product in $products array
                for ($i=0; $i<count($products); $i++){
                        $parameters = array(':product_id'=>$products[$i]->product_id,
                                          ':customer_id'=>$customer_id,
                                          ':quantity'=>$products[$i]->quantity);
                        $stm->execute($parameters);
                }
                return 1;
        }
}