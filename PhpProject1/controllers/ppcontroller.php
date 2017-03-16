<?php
class PPController extends Controller
{

        public function playerSignup(){
                //$data = array();
                //$data = $this->model->playerSignup();
                
                // define template
                $this->setView('views/betaPlayerSignup.php');
                // display output
            
                //$this->view->setData($data);
                $this->view->output();         
        }
        
        public function addBetaPlayer(){
                $data = array();
                $data = $this->model->addBetaPlayer();
                // define template
                $this->setView('views/betaPlayerConfirmation.php');
                // display output
                $this->view->setData($data);
                $this->view->output();         
        }
        
        public function coachSignup(){
                //$data = array();
                //$data = $this->model->coachSignup();
                
                // define template
                $this->setView('views/betaCoachSignup.php');
                // display output
            
                //$this->view->setData($data);
                $this->view->output();         
        }
        
        public function addBetaCoach(){
                $data = array();
                $data = $this->model->addBetaCoach();
                // define template
                $this->setView('views/betaCoachConfirmation.php');
                // display output
                $this->view->setData($data);
                $this->view->output();         
        }
        
        public function bothSignup(){
                //$data = array();
                //$data = $this->model->coachSignup();
                
                // define template
                $this->setView('views/betaBothSignup.php');
                // display output
            
                //$this->view->setData($data);
                $this->view->output();         
        }

}



?>

