
<?php

class profileupdateModel extends Model
{
        public function updateProfile(){
                $user_data = json_decode(file_get_contents('php://input'));
                $values = $user_data;
                $data = array(':user_id'=>$values->userID);
                
                $sql = "SELECT *
                        FROM `player_profile` 
                        WHERE user_id = :user_id";
                
                $this->setSql($sql);
                $result = $this->getOne($data);
                
                if (!$result)
                    $result = -1;
                else 
                    $result = 1;
                    
                if($result == -1){
                    $table = 'player_profile';

                    //obtain data
                    $user_data = json_decode(file_get_contents('php://input'));
                    //define SQL statement
                    $values = $user_data;
                    $data = array('user_id'=>$values->userID,
                                    'position_1'=>$values->position,
                                    'position_2'=>$values->position2,
                                    'position_3'=>$values->position3,   
                                    'bio'=>$values->bio,
                                    'weight'=>$values->weight,
                                    'h_school'=>$values->school,
                                    'gpa'=>$values->gpa,
                                    'graduation_date'=>$values->grad,
                                    'youtube_urls'=>$values->videourl,
                                    'dob'=>$values->birth,
                                    'height_feet'=>$values->feet,
                                    'height_inches'=>$values->inches,
                                    'bench'=>$values->bench,
                                    'squat'=>$values->sqaut,    
                                    'mile_time'=>$values->mile,
                                    'dash_time'=>$values->yard,
                                    'Image'=>$values->image);
                    // insert new record
                    $this->insertRecord($table,$data);
                    return 1;    
                }
                else{                  
                    $table = 'player_profile';
                    //obtain data
                    $user_data = json_decode(file_get_contents('php://input'));
                    //define SQL statement
                    $values = $user_data;
                    
                    $data = array('position_1'=>$values->position1,
                                    'position_2'=>$values->position2,
                                    'position_3'=>$values->position3,   
                                    'bio'=>$values->bio,
                                    'weight'=>$values->weight,
                                    'h_school'=>$values->school,
                                    'gpa'=>$values->gpa,
                                    'graduation_date'=>$values->grad,
                                    'youtube_urls'=>$values->videourl,
                                    'dob'=>$values->birth,
                                    'height_feet'=>$values->feet,
                                    'height_inches'=>$values->inches,
                                    'bench'=>$values->bench,
                                    'squat'=>$values->squat,    
                                    'mile_time'=>$values->mile,
                                    'dash_time'=>$values->yard,
                                    'Image'=>$values->image);
                    $condition = 'user_id = :user_id ';
                    $condition_values = array('user_id'=>$values->userID);
                    // insert new record
                    $this->updateRecord($table,$data, $condition, $condition_values);
                    return 1;                     
                }               
        }
        
        public function updateCoachProfile(){
                $user_data = json_decode(file_get_contents('php://input'));
                $values = $user_data;
                $data = array(':user_id'=>$values->userID);
                
                $sql = "SELECT *
                        FROM `coach_profile` 
                        WHERE user_id = :user_id";
                
                $this->setSql($sql);
                $result = $this->getOne($data);
                
                if (!$result)
                    $result = -1;
                else 
                    $result = 1;
                    
                if($result == -1){
                    $table = 'coach_profile';

                    //obtain data
                    $user_data = json_decode(file_get_contents('php://input'));
                    //define SQL statement
                    $values = $user_data;
                    $data = array('user_id'=>$values->userID,
                                    'college'=>$values->college,
                                    'image'=>$values->image,
                                    'bio'=>$values->bio,
                                    'youtube_urls'=>$values->youtube_urls);
                    // insert new record
                    $this->insertRecord($table,$data);
                    return 1;    
                }
                else{                  
                    $table = 'coach_profile';
                    //obtain data
                    $user_data = json_decode(file_get_contents('php://input'));
                    //define SQL statement
                    $values = $user_data;
                    
                    $data = array('user_id'=>$values->userID,
                                    'college'=>$values->college,
                                    'image'=>$values->image,
                                    'bio'=>$values->bio,
                                    'youtube_urls'=>$values->youtube_urls);
                    $condition = 'user_id = :user_id ';
                    $condition_values = array('user_id'=>$values->userID);
                    // insert new record
                    $this->updateRecord($table,$data, $condition, $condition_values);
                    return 1;                     
                }               
        }
}

