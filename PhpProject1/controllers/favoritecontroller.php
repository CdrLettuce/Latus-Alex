<?php
class favoriteController extends Controller
{
        public function favoritePlayer(){
                $data = array();
                // authenticate the user
                $data = $this->model->favoritePlayer();
                // define template
                $this->setView('views/ajax_response.php');
                // define data
                $this->view->setData($data);
                // display output
                $this->view->output();

        }
        
        public function getfavoritedplayers(){
                $data = array();
                // authenticate the user
                $data = $this->model->getfavoritedplayers();
                // define template
                $this->setView('views/ajax_response.php');
                // define data
                $this->view->setData($data);
                // display output
                $this->view->output();

        }
        
        public function getfavoritedplayersinfo(){
                $data = array();
                // authenticate the user
                $data = $this->model->getfavoritedplayersinfo();
                // define template
                $this->setView('views/ajax_response.php');
                // define data
                $this->view->setData($data);
                // display output
                $this->view->output();

        }
        
        public function favoriteSchool(){
                $data = array();
                // authenticate the user
                $data = $this->model->favoriteSchool();
                // define template
                $this->setView('views/ajax_response.php');
                // define data
                $this->view->setData($data);
                // display output
                $this->view->output();

        }
        
        public function getfavoritedschools(){
                $data = array();
                // authenticate the user
                $data = $this->model->getfavoritedschools();
                // define template
                $this->setView('views/ajax_response.php');
                // define data
                $this->view->setData($data);
                // display output
                $this->view->output();

        }
        
        public function getfavoritedschoolinfo(){
                $data = array();
                // authenticate the user
                $data = $this->model->getfavoritedschoolinfo();
                // define template
                $this->setView('views/ajax_response.php');
                // define data
                $this->view->setData($data);
                // display output
                $this->view->output();

        }

}
