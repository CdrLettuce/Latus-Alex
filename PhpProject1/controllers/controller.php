<?php
Class Controller
{
    public $model;
    public $view;

    public function setModel($modelName)
    {
     // define a method to set model
        $this->model = new $modelName();
    }

    public function setView($view_file)
    {
        // define a method to set template
        $this->view = new View( $view_file);
    }

    public function default_view()
    {
        // define a method to set output
        try {
                $this->view->output();
        } catch (Exception $e) {
                echo "Application error:".$e->getMessage();
        }
    }
}
?>
