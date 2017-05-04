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
        
        public function getInboxMessages(){
                $data = array();
                // authenticate the user
                $data = $this->model->getInboxMessages();
                // define template
                $this->setView('views/ajax_response.php');
                // define data
                $this->view->setData($data);
                // display output
                $this->view->output();
        }
        
        public function getOutboxMessages(){
                $data = array();
                // authenticate the user
                $data = $this->model->getOutboxMessages();
                // define template
                $this->setView('views/ajax_response.php');
                // define data
                $this->view->setData($data);
                // display output
                $this->view->output();
        }

}
