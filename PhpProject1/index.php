<?php
/*  NOTE: URL rewriting rule changes the way server handles requests.
          The include() or require() method requires the correct path of each file.
          Use the absolute path of the base folder as the reference point.
    */

/***************** Define constants *************************************************/
    // The magic constant __FILE__ returns the current file.
    // The dirname(file) method returns the path of the file.
    define('BASE_DIR', dirname(__FILE__));

    /* dirname() method does not return the trailing '/' for the path.
       This may create problems when copying files to a different operating system.
       Use the PHP built-in DIRECTORY_SEPARATOR constant for the directory separator.
    */
    define('DS', DIRECTORY_SEPARATOR);

    /*  Define the host  */
    define('HOSTNAME', 'http://washington.uww.edu');

    /*  URL rewriting rule changes the way server handles requests.
        Use the relative URL of the application folder as the base URL for templates and scripts
    */
    define("HOME", HOSTNAME.DS.'cs482/butlersj02/Engineering/PhpProject1/');

    // Include database connection
    require_once(BASE_DIR.DS.'config.php');

/***************************************************************************************
*
*   This application uses URL rewriting to identify request data
*
*   if the request is not an existing file or a folder then the URL rewriting rule assumes
*   that the request is in the following form:
*        HOME/prefix/method/parameter
*
*
*       The URL rewriting method converts the URL into the following:
*       HOME/index.php?mode=prefix/method/parameter
*
******************************************************************************************/

// define auto_load method to include class definitions
function __autoload($class){
  /* This method looks for all the PHP files that begins with '$class' class name.  */
  $classname = strtolower($class);
  if (file_exists(BASE_DIR.DS.'models'.DS.$classname.'.php')){
        // include the file
        require_once(BASE_DIR.DS.'models'.DS.$classname.'.php');
  }
  if (file_exists(BASE_DIR.DS.'controllers'.DS.$classname.'.php')){
        // include the file
        require_once(BASE_DIR.DS.'controllers'.DS.$classname.'.php');
  }
  if (file_exists(BASE_DIR.DS.'utilities'.DS.$classname.'.php')){
        // include the file
        require_once(BASE_DIR.DS.'utilities'.DS.$classname.'.php');
  }



}


/******  define  variables to store user input and assign default values  *****/
$mode = ''; 
$prefix = '';
$controllerName = '';
$controller_method = '-1';
$controller_model = '';
$parameter = null;

/****** read user input into variables *********************/

// 'mode' vaiable stores the information needed to define the controller
if (isset($_GET['mode'])){
        $mode = $_GET['mode'];
	/* use strpos(string, character) method to search for '/' character
	  in $mode. It returns false if the character is not found.
	*/
	if (strpos($mode, '/') !== false){
		// read the values into an array
		$request_data = explode('/', $mode);
		// Read the prefix
		$prefix = isset($request_data[0]) && !empty($request_data[0]) ? $request_data[0] : 'Index';

		// Use the prefix to define the controller
		$controllerName = ucfirst($prefix) . 'Controller';

		// Use the prefix to define the model
		$controller_model = ucfirst($prefix) . 'Model';

		// Define a method to obtain data and display result
		$controller_method = isset($request_data[1]) && !empty($request_data[1]) ? $request_data[1] : 'index';

		// Define parameter(s) to pass, if any
		$parameter = isset($request_data[2]) && !empty($request_data[2]) ? $request_data[2] : null;

	}
}

/********************** File Structure ***************************
 
  All the controller files must be placed in the 'controllers' folder.

  All the model files must be placed in the 'models' folder.

  All the templates (view files) must be placed in the views folder.

  All the css files, images, and common header/fooler files are placed in the assets folder.

  File names must be in lower case.

  The 'prefix' identifies the controller and its model
  */

  /************* Controllers *****************************************************
  Each request is handled by a controller identified by the 'prefix'. 
  Name of each controller is 'prefix'Controller (starting with an uppercase letter).
  The file name of each controller is 'prefixcontroller.php'.
  Each controller inherits properties and methods of the base Controller class.
  */

  /************* Models **********************************************************
  Name of each model  is 'prefix'Model (starting with an uppercase letter).
  The file name of each model is 'prefixmodel.php'.
  Each model inherits properties and methods of the base Model class.
  */

  /************* Examples ***********************************************************
  Suppose prefix = 'faculty', method = 'facultyList'
  Then, the controller is 'FacultyController'.
  The controller's model is 'FacultyModel'
  The controller's method to invoke is 'facultyList'
  The template file is 'facultylistview.php'

  Suppose prefix = 'schedule', method = 'subjectSchedule', parameter = 'math'
  Then, the controller is 'ScheduleController'.
  The controller's model is 'ScheduleModel'.
  The controller's method to invoke is 'subjectSchedule'
  The template is 'subjectscheduleview.php'

**************************************************************/

  // If $prefix is equal to '' or 'Index', then it is the default case.
   if ($prefix == '' || $prefix == 'Index'){
	$controller = new Controller();
   } elseif (class_exists($controllerName)){ // check if the asking controller class exists
   	// create an instance of the controller
   	$controller = new $controllerName();

 	// set its model 
 	$controller->setModel($controller_model);
  } else {
	// If the controller doesn't exist, display a 404
	require  BASE_DIR.DS.'views/404.php';
    	exit();

 }

/****   Attempt to instantiate the controller and call the appropriate method. If the controller does
	not exist, or anything at all goes wrong, display an error page.
*/
try {

	/* if the $controller_method exists then invoke the method
	   Otherwise, display default data */
	if(method_exists($controller, $controller_method)) {
 		// invoke the method
		$controller->$controller_method($parameter);
	} else { // display default data

		$controller->setView(BASE_DIR.DS.'views/defaultview.php');
		$controller->view->output();
	}
} catch (Exception $exception) {
    // Display 500 error.
    require  BASE_DIR.DS.'views/500.php';
    exit();
}

?>