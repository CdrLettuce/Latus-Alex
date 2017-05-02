
<?php

class messagesModel extends Model
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
            $sql = "SELECT followedid
                    FROM favorites
                    WHERE followerid = :userId";
            $this->setSql($sql);
            $data = json_decode(file_get_contents('php://input'));
            $values = array(':userId'=>$data->user_id);
            $result = $this->getAll($values);
            /* if the user is not found then return -1 */
            if (!$result)
                    $result = -1;
            return $result;
        }
}