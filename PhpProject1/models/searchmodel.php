<?php
class SearchModel extends Model
{
        public function searchPlayer(){           
                $sql = "SELECT u.user_id, u.first_name, u.last_name, u.city, s.state_name, p.Image
                        FROM `users` as u, `states` as s, `player_profile` as p
                        WHERE u.first_name LIKE CONCAT('%', :first_name, '%')
                        AND u.last_name LIKE CONCAT('%', :last_name, '%')
                        AND u.user_id = p.user_id
                        AND s.state_id = u.state_id";
                $this->setSql($sql);
                $data = json_decode(file_get_contents('php://input'));
                $values = array(':first_name'=>$data->firstname,
                                ':last_name'=>$data->lastname );
                $result = $this->getAll($values);
                /* if the user is not found then return -1 */
                if (!$result)
                        $result = -1;
                return $result;
        }
        
        public function advsearchPlayer(){           
                $sql = "SELECT u.first_name, u.last_name, u.city, s.state_name, u.user_id, p.graduation_date, o.position, p.Image
                        FROM `users` as u, `states` as s, `player_profile` as p, `position` as o
                        WHERE u.first_name LIKE CONCAT('%', :first_name, '%')
                        AND u.last_name LIKE CONCAT('%', :last_name, '%')
                        AND u.gender LIKE CONCAT('%', :gender, '%')
                        AND u.state_id LIKE CONCAT('%', :state_id)
                        AND p.position_1 LIKE CONCAT('%', :position_1, '%')
                        AND p.graduation_date LIKE CONCAT('%', :graduation_date, '%')
                        AND s.state_id = u.state_id
                        AND p.user_id = u.user_id
                        AND o.position_id = p.position_1";
                $this->setSql($sql);
                $data = json_decode(file_get_contents('php://input'));
                $values = array(':first_name'=>$data->firstname,
                                ':last_name'=>$data->lastname,
                                ':position_1'=>$data->position,
                                ':graduation_date'=>$data->gradYear,
                                ':state_id'=>$data->state,
                                ':gender'=>$data->gender);
                $result = $this->getAll($values);
                /* if the user is not found then return -1 */
                if (!$result)
                        $result = -1;
                return $result;
        }
        
        public function advsearchCoach(){           
                $sql = "SELECT u.city, s.state_name, u.user_id, c.image, c.head_coach, c.division, c.college
                        FROM `users` as u, `states` as s, `coach_profile` as c
                        WHERE c.college LIKE CONCAT('%', :college, '%')
                        AND u.state_id LIKE CONCAT('%', :state_id)
                        AND c.division LIKE CONCAT('%', :division, '%')
                        AND s.state_id = u.state_id
                        AND c.user_id = u.user_id";
                $this->setSql($sql);
                $data = json_decode(file_get_contents('php://input'));
                $values = array(':college'=>$data->school,
                                ':division'=>$data->division,
                                ':state_id'=>$data->state);
                $result = $this->getAll($values);
                /* if the user is not found then return -1 */
                if (!$result)
                        $result = -1;
                return $result;
        }
}

?>