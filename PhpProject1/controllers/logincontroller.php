<?php
class LoginController extends Controller
{

        public function checkLogin(){

                $data = array();
                $response_data = $this->model->checkLogin();

                $this->setView(BASE_DIR.DS.'views/ajax_response.php');
                $this->view->setData($response_data);
                $this->view->output();
        }

}

?>
