<?php
class signupController extends Controller
{

        public function coachSignup1(){
                //$data = array();
                //$data = $this->model->playerSignup();
                
                // define template
                $this->setView('views/coach/coach1.php');
                // display output
            
                //$this->view->setData($data);
                $this->view->output();         
        }
        
        public function coachSignupFinal(){
                $data = array();
                $data = $this->model->addCoach();
                // define template
                $this->setView('views/coach/coachConfirmation.php');
                // display output
                $this->view->setData($data);
                $this->view->output();         
        }  
        
        public function playerSignup1(){
                //$data = array();
                //$data = $this->model->playerSignup();
                
                // define template
                $this->setView('views/player/player1.php');
                // display output
            
                //$this->view->setData($data);
                $this->view->output();         
        }
        
        public function playerSignup2(){
                //$data = array();
                //$data = $this->model->playerSignup();
                
                // define template
                $this->setView('views/player/player2.php');
                // display output
            
                //$this->view->setData($data);
                $this->view->output();         
        }
        
        public function playerSignup3(){
                //$data = array();
                //$data = $this->model->playerSignup();
                
                // define template
                $this->setView('views/player/player3.php');
                // display output
            
                //$this->view->setData($data);
                $this->view->output();         
        }
        
        public function playerSignup4(){
                //$data = array();
                //$data = $this->model->playerSignup();
                
                // define template
                $this->setView('views/player/player4.php');
                // display output
            
                //$this->view->setData($data);
                $this->view->output();         
        }
        
        public function playerSignup5(){
                //$data = array();
                //$data = $this->model->playerSignup();
                
                // define template
                $this->setView('views/player/player5.php');
                // display output
            
                //$this->view->setData($data);
                $this->view->output();         
        }
}

?>

