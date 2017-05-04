
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
        
        public function sendMessage(){  
            $table = 'messages';
            //obtain data
            $user_data = json_decode(file_get_contents('php://input'));
            //define SQL statement
            $values = $user_data;
            $data = array('sender_id'=>$values->sender_id,
                            'receiver_id'=>$values->receiver_id,
                            'message'=>$values->message,
                            'sender_fname'=>$values->sender_fname,   
                            'sender_lname'=>$values->sender_lname,
                            'receiver_fname'=>$values->receiver_fname,
                            'receiver_lname'=>$values->receiver_lname);
            // insert new record
            $this->insertRecord($table,$data);
            return 1;
        }
        
        public function getMessagers(){
                 $sql = "SELECT DISTINCT sender_id, receiver_id, time_sent, sender_fname, sender_lname, receiver_fname, receiver_lname
                        FROM messages 
                        WHERE receiver_id = :userId
                        OR sender_id = :userId";
                $this->setSql($sql);
                $data = json_decode(file_get_contents('php://input'));
                $values = array(':userId'=>$data->user_id);
                $result = $this->getAll($values);
                /* if the user is not found then return -1 */
                if (!$result)
                        $result = -1;
                return $result;
        }
        
        public function getMessagersInfo(){
                /*  This method uses a prepared SQL statement to get multiple records from a table 
                using an array of objects.
                */
                $sql = "SELECT time_sent, 
                        FROM messages
                        WHERE receiver_id = :current_id, sender_id = :other_id
                        OR sender_id = :current_id, receiver_id = :other_id
                        ORDER BY time_sent DESC
                        LIMIT 1";
                $this->setSql($sql);
                // prepare SQL statement
                $stm = $this->_db->prepare($sql);
                // read input
                $data = json_decode(file_get_contents('php://input'));
                $current = $data->current_id;
                $other = $data->other_id;
                // execute SQL statement using each followed person in $user_id array
                for ($i=0; $i<count($other); $i++){
                        $parameters = array(':current_id'=>$current->user_id,
                                            ':other_id'=>$other[$i]);
                        $stm->execute($parameters);
                        $result[$i] = $stm->fetch();
                }
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
        
        public function getMessages(){
                 $sql = "SELECT sender_id, receiver_id, message, time_sent, sender_fname, sender_lname, receiver_fname, receiver_lname
                        FROM messages 
                        WHERE receiver_id = :userId
                        OR sender_id = :userId";
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