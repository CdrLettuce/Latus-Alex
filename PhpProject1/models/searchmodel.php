<?php
class SearchModel extends Model
{
        public function searchPlayer(){
                $sql = "SELECT * 
                        FROM `users`
                        WHERE `first_name` LIKE CONCAT('%', :first_name, '%')
                        OR `last_name` LIKE CONCAT('%', :last_name, '%') ";
                /*
                $sql = "SELECT * 
                        FROM  `users`
                        WHERE first_name = :first_name";
                
                 */
                $this->setSql($sql);
                $data = json_decode(file_get_contents('php://input'));
                $values = array(':first_name'=>$data->firstname);
                $result = $this->getAll($values);
                /* if the user is not found then return -1 */
                if (!$result)
                        $result = -1;
                return $result;
        }
        
        public function getPlayerInfo2(){
                $sql = "SELECT youtube_urls, height, weight, bio, gpa, h_school, graduation_date, position_1 
                        FROM `player_profile` 
                        WHERE user_id = :userId";
                $this->setSql($sql);
        $data = json_decode(file_get_contents('php://input'));
                $values = array(':userId'=>$data->user_id);
                $result = $this->getOne($values);
                /* if the user is not found then return -1 */
                if (!$result)
                        $result = -1;
                return $result;
        }

}

?>