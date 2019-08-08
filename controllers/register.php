<?php
//add database
require_once '../config.php';

if($_POST)
{
    $user_name 		= $_POST['user_name'];
    $user_email 	= $_POST['user_email'];
    $user_password 	= $_POST['password'];
    
	
	//password hash see : http://www.php.net/manual/en/function.password-hash.php
	$password 	= md5( $user_password);
	//here first connection is established then prepare statement and select user from table
    try
    {
        $stmt = $conn->prepare("SELECT * FROM users WHERE email=:email");
        $stmt->execute(array(":email"=>$user_email));
        $count = $stmt->rowCount();
		//if count ==0 means no data exists with same id 
        if($count==0){
            //now here allow them to signup (insert the data in database)
            $stmt = $conn->prepare("INSERT INTO users(name,email,password ,type) VALUES(:uname, :email, :pass, :type)");
            $type="user";//only user can sign up, no admin here
            $stmt->bindParam(":uname",$user_name);
            $stmt->bindParam(":email",$user_email);
            $stmt->bindParam(":pass",$password);
            $stmt->bindValue(":type", $type);
            if($stmt->execute())
            {
                echo "registered";
            }
            else
            {
                echo "Query could not execute !";
            }

        }
        else{

            echo "1"; //  not available
        }

    }
    catch(PDOException $e){ //Handle any exception
        echo $e->getMessage();
    }
}

?>