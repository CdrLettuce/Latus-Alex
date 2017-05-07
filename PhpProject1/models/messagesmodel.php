
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
                            'subject'=>$values->subject);
            // insert new record
            $this->insertRecord($table,$data);
            return 1;
        }
        
        public function getInboxMessages(){
                 $sql = "SELECT  m.sender_id, m.subject, m.receiver_id, m.time_sent, m.message, u.first_name, u.last_name
                        FROM `messages` AS m, `users` AS u
                        WHERE receiver_id = :userId
                        AND u.user_id = m.sender_id";
                $this->setSql($sql);
                $data = json_decode(file_get_contents('php://input'));
                $values = array(':userId'=>$data->user_id);
                $result = $this->getAll($values);
                /* if the user is not found then return -1 */
                if (!$result)
                        $result = -1;
                return $result;
        }
        
        public function getOutboxMessages(){
                 $sql = "SELECT m.sender_id, m.subject, m.receiver_id, m.time_sent, m.message, u.first_name, u.last_name
                        FROM `messages` AS m, `users` AS u
                        WHERE sender_id = :userId
                        AND u.user_id = m.receiver_id";
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