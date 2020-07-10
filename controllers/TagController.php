<?php 

class TagController{

    public function home()
    {
        return require "views/index.view.php";
    }
    public function result()
    {
        die(shell_exec("target\index.html"));
    }
    public function add()
    {

        $data = implode('',array_values($_POST));

        if(isset($_POST['dt']) == true && $_POST['dt'] == 'attributes'){
            $data = " " . $_POST['attribute'] . '"' . $_POST['data'] . '" ';
        }
        if(isset($_POST)){
        $file_path = "target/index.html";
        $file_handle = fopen($file_path,'a+');
        fwrite($file_handle,$data);
        fclose($file_handle);
    
        header("Location: ./");
        }

        throw new Exception("No Data Passed");
    }

}