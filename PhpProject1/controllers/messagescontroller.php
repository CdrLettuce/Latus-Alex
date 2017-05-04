<?php
class messagesController extends Controller
{
        public function sendMessage(){
                $data = array();
                // authenticate the user
                $data = $this->model->sendMessage();
                // define template
                $this->setView('views/ajax_response.php');
                // define data
                $this->view->setData($data);
                // display output
                $this->view->output();
        }
        
        public function getMessagers(){
                $data = array();
                // authenticate the user
                $data = $this->model->getMessagers();
                // define template
                $this->setView('views/ajax_response.php');
                // define data
                $this->view->setData($data);
                // display output
                $this->view->output();
        }
        
        public function getMessagersInfo(){
                $data = array();
                // authenticate the user
                $data = $this->model->getMessagersInfo();
                // define template
                $this->setView('views/ajax_response.php');
                // define data
                $this->view->setData($data);
                // display output
                $this->view->output();
        }
        
        
        public function getMessages(){
                $data = array();
                // authenticate the user
                $data = $this->model->getMessages();
                // define template
                $this->setView('views/ajax_response.php');
                // define data
                $this->view->setData($data);
                // display output
                $this->view->output();
        }

}
