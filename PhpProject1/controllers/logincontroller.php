<?php
class LoginController extends Controller
{
	public function checkLogin(){

		$data = array();
		// authenticate the user
		$data = $this->model->checkLogin();
		// define template
		$this->setView('views/ajax_response.php');
		// define data
		$this->view->setData($data);
		// display output
		$this->view->output();
	}
}



?>
