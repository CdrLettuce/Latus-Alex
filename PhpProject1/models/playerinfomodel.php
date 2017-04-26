<?php
class PlayerInfoModel extends Model
{
        public function getPlayerInfo(){
                $sql = "SELECT u.city, s.state_name, u.first_name, u.last_name, u.email, u.phone 
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
                $sql = "SELECT p.youtube_urls, p.height_feet, p.height_inches, p.weight, p.bio, p.gpa, p.h_school, p.graduation_date, s.position, p.mile_time, p.dash_time, p.bench, p.squat, p.dob, p.position_1, p.position_2, p.position_3
                        FROM `player_profile` as p, `position` as s
                        WHERE p.user_id = :userId
                        AND p.position_1 = s.position_id";
                $this->setSql($sql);
                $data = json_decode(file_get_contents('php://input'));
                $values = array(':userId'=>$data->user_id);
                $result = $this->getOne($values);
                /* if the user is not found then return -1 */
                if (!$result)
                        $result = -1;
                return $result;
        }
        
        public function getPlayerInfo3(){
                $sql = "SELECT s.position
                        FROM `player_profile` as p, `position` as s
                        WHERE p.user_id = :userId
                        AND p.position_2 = s.position_id";
                $this->setSql($sql);
                $data = json_decode(file_get_contents('php://input'));
                $values = array(':userId'=>$data->user_id);
                $result = $this->getOne($values);
                /* if the user is not found then return -1 */
                if (!$result)
                        $result = -1;
                return $result;
        }
        
        public function getPlayerInfo4(){
                $sql = "SELECT s.position
                        FROM `player_profile` as p, `position` as s
                        WHERE p.user_id = :userId
                        AND p.position_3 = s.position_id";
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