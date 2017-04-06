<?php
class PlayerInfoModel extends Model
{
        public function getPlayerInfo(){
                $sql = "SELECT u.city, s.state_name 
                        FROM `users` as u, `states` as s  
                        WHERE u.state_id = s.state_id
                        AND user_id = :userId";
                $this->setSql($sql);
        $data = json_decode(file_get_contents('php://input'));
                $values = array(':userId'=>$data->user_id);
                $result = $this->getOne($values);
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