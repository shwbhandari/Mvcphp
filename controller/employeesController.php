<?php
session_start();

if(isset($_SESSION['id'])){
    $id= $_SESSION['id'];
}
class EmployeesController{

    private $Connect;
    private $Connection;

    public function __construct() {
		require_once  __DIR__ . "/../core/connect.php";
        require_once  __DIR__ . "/../model/employee.php";
        
        $this->connect=new Connect();
        $this->Connection=$this->connect->Connection();

    }

   
    public function run($action){
        switch($action)
        { 
            case "index" :
                $this->index();
                break;
            case "insert" :
                $this->create();
                break;
            case "login" :
                $this->login();
                break;
            case "detail" :
                $this->detail();
                break;
            case "update" :
                $this->update();
                break;
            case "delete":
                $this->delete();
                break;
            default:
                $this->index();
                break;
        }
    }
    
   /**
    * Loads the employees home page with the list of
    * employees getting from the model.
    *
    */ 
    public function index(){
        
        //We create the employee object
        $employee=new Employee($this->Connection);
        
        //We get all the employees
        $employees=$employee->getAll();
       
        //We load the index view and pass values to it
        $this->view("index",array(
            "employees"=>$employees,
            "title" => "PHP MVC"
        ));
    }

    /**
    * Loads the employees home page with the list of
     * employees getting from the model.
    *
    */ 
    public function detail(){
        
        //We load the model
        $model = new Employee($this->Connection);
        //We recover the employee from the BBDD
        $employee = $model->getById($_GET["id"]);
        //We load the detail view and pass values to it
        $this->view("detail",array(
            "employee"=>$employee,
            "title" => "detail Employee"
        ));
    }
    /**
    * Loads the employees home page with the list of
     * employees getting from the model.
    *
    */ 
    public function delete(){       
        //We load the model
        $model = new Employee($this->Connection);
        
        $employee = $model->deleteById($_GET["id"]);
        
        header('location:index.php?msg=deletedaccount');
    }
   /**
    * Create a new employee from the POST parameters
     * and reload the index.php.
    *
    */
    public function create(){
        if(isset($_POST["Name"])){
            
            //We create a user
            $employee=new Employee($this->Connection);
            $employee->setName($_POST["Name"]);
            $employee->setSurname($_POST["Surname"]);
            $employee->setUsername($_POST["Username"]);
            $employee->setEmail($_POST["email"]);
            $employee->setphone($_POST["phone"]);
            $employee->setpassword($_POST["password"]);
            $save=$employee->save();
            
        }
       
        
        header('Location: view/loginView.php');
    }

    /**
    * login employee from POST parameters
     * and reload the index.php.
    *
    */
    public function login(){
        if(isset($_POST["Username"])){
            
            //We create a user
            $model = new Employee($this->Connection);
            $reslt = $model->getlogin($_POST["Username"],$_POST["password"]);    
            
            if($reslt)
            {
                header('location:index.php?controller=employees&action=detail&id='.$_SESSION['id'].'');
            }
            else{
                $_SESSION['msg']='Invalid Login Username or Password';
                header('location:views/loginview.php');
            }
        }

        
    }
   /**
    * Update employee from POST parameters
     * and reload the index.php.
    *
    */
    public function update(){
        if(isset($_POST["id"])){
            
            //We create a user
            $employee=new Employee($this->Connection);
            $employee->setId($_POST["id"]);
            $employee->setName($_POST["Name"]);
            $employee->setSurname($_POST["Surname"]);
            $employee->setUsername($_POST["Username"]);
            $employee->setEmail($_POST["email"]);
            $employee->setphone($_POST["phone"]);
            $save=$employee->update();
        }
        header('Location: view/loginView.php');
    }
    
    
   /**
    * Create the view that we pass to it with the indicated data.
    *
    */
    public function view($view,$datas){
        $data = $datas;  
        require_once  __DIR__ . "/../view/" . $view . "View.php";

    }

}
?>
