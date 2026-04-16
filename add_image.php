<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('config/config.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$link = mysqli_connect($mysql_host, $mysql_user, $mysql_password);
	if(!$link) {
		die('Failed to connect to server: ' . mysqli_connect_error());
	}
	
	//Select database
	$db = mysqli_select_db($link, $mysql_database);
	if(!$db) {
		die("Unable to select database");
	}
	
    //input values from the form
	$id = $_POST['id'];
    $title = $_POST['title'];
    

	$date = date('Y-m-d H:i:s');

    function getExtension($str)
    {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
    }


    $image = $_FILES['file']['name'];
    
    if ($image) 
    {
        $filename = stripslashes($_FILES['file']['name']);
        $extension = getExtension($filename);
        $extension = strtolower($extension);
       
            $doc_name=time().'.'.$extension;
            $slidepath="gallery/".$doc_name;

            $copied = copy($_FILES['file']['tmp_name'], $slidepath);
    }
    

	//Create insert query   

    $sql = "INSERT INTO album_images (album_id, file) values ('$id', '$slidepath')";
    $result = mysqli_query($link, $sql) or die(mysqli_connect_error());
	
	
	//Check whether the query was successful or not
	if(!$result){
            die("Could not add Image".mysqli_connect_error());
                }else{
                echo '<script type="text/javascript">alert("Image added successfully to album!"); location.href="view_album.php?id='.$id.'&title='.$title.'";</script>';
			
			exit();
              }

?>