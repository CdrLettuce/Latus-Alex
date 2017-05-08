
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
                $sql = "SELECT u.first_name, u.last_name, u.city, s.state_name, u.user_id, p.graduation_date, o.position, p.Image
                        FROM `users` as u, `states` as s, `player_profile` as p, `position` as o
                        WHERE u.user_id = :user_id
                        AND u.state_id = s.state_id
                        AND p.position_1 = o.position_id
                        AND u.user_id = p.user_id";
                $this->setSql($sql);
                // prepare SQL statement
                $stm = $this->_db->prepare($sql);
                // read input
                $data = json_decode(file_get_contents('php://input'));
                $followed = $data->ids;
                // execute SQL statement using each followed person in $user_id array
                for ($i=0; $i<count($followed); $i++){
                        $parameters = array(':user_id'=>$followed[$i]->followed_id);
                        $stm->execute($parameters);
                        $result[$i] = $stm->fetch();
                }
                /* if the user is not found then return -1 */
                if (!$result)
                        $result = -1;
                return $result;
        }
        
        public function getfavoritedschools(){           
            $sql = "SELECT followed_id
                    FROM favorite_schools
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
        
        public function getfavoritedschoolinfo(){

                /*  This method uses a prepared SQL statement to get multiple records from a table 
                using an array of objects.
                */
                $sql = "SELECT u.first_name, u.last_name, u.city, s.state_name, u.user_id, c.image, c.division, c.college, c.head_coach
                        FROM `users` as u, `states` as s, `coach_profile` as c
                        WHERE u.user_id = :user_id
                        AND u.state_id = s.state_id
                        AND u.user_id = c.user_id";
                $this->setSql($sql);
                // prepare SQL statement
                $stm = $this->_db->prepare($sql);
                // read input
                $data = json_decode(file_get_contents('php://input'));
                $followed = $data->ids;
                // execute SQL statement using each followed person in $user_id array
                for ($i=0; $i<count($followed); $i++){
                        $parameters = array(':user_id'=>$followed[$i]->followed_id);
                        $stm->execute($parameters);
                        $result[$i] = $stm->fetch();
                }
                /* if the user is not found then return -1 */
                if (!$result)
                        $result = -1;
                return $result;
        }
        
}