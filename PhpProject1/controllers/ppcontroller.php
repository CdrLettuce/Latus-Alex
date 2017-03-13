<?php
class PPController extends Controller
{
        public function scheduleSubject($parameter){

                $data = array();
                // authenticate the user
                $data = $this->model->schedulesubject($parameter);
                // define template
                $this->setView('views/ajax_response.php');
                // define data
                $this->view->setData($data);
                // display output
                $this->view->output();
        }

        public function playerSignup(){
                //$data = array();
                //$data = $this->model->playerSignup();
                
                // define template
                $this->setView('views/betaPlayerSignup.php');
                // display output
            
                //$this->view->setData($data);
                $this->view->output();         
        }
}



?>

