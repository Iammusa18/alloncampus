<?php
require_once "../config.php";
//php controllers for different actions
$action = isset($_POST['action']) ? $_POST['action'] : '';

switch ($action) {
    case 'logout': //logout request
    unset($_SESSION["logger"]);
     $_SESSION['logged_in'] = 0;
   
    break;
    case 'login': //login request
    if (isset($_POST['login']) && isset($_POST['password'])) {

      $email=$_POST['login'];
      $password=MD5($_POST['password']);
      $query = $conn->prepare("SELECT * FROM users WHERE email=:email");
      $query->bindParam("email", $email);

      $query->execute(); //its execute the query above ^. 
      if ($query->rowCount() > 0) {
          $result = $query->fetch(PDO::FETCH_OBJ);
          if($result->password==$password){
            $_SESSION["logger"] = $result->name;
            $_SESSION["logger_id"]=$result->user_id;
            $_SESSION["type"]=$result->type;  
            echo json_encode(['login' => true]);
            $_SESSION['logged_in'] = 1;
             break;

        }
           else { echo json_encode(['login' => false]); break; }//Returns a string containing the JSON representation of the supplied value.
        


        
       }//if querry have value
        else { echo json_encode(['login' => false]); break; } 
     
      
        } // if login END

   //case 'signup': //signup request
    // if (isset($_POST['email']) && isset($_POST['name']) && isset($_POST['password'])) {

       
    //    $sql = "INSERT INTO users(name, email, password, type) VALUES (:name, :email, :password, :type)";
    //     $st = $conn->prepare($sql);
    //     $type="user";
    //     $password= md5($_POST['password']);
    //  echo "$password";
    //  var_dump($password);
        
       
    //     $st->bindValue(":name", $_POST['name']);
    //     $st->bindValue(":email", $_POST['email']);
    //     $st->bindValue(":password",$password);
    //     $st->bindValue(":type", $type);

    //     $st->execute();
       
    //     $conn = null;
    //     if($st->execute()){
    //        echo json_encode(['signup' => true]);
    //     break;

    //     }
    //      else { echo json_encode(['signup' => false]); break; } 
       

    //   }
    //     else { echo json_encode(['signup' => false]); break; } 
       
       
    
        
    case 'index': //main admin index
        if (check_login()) { //if user logged in show main admin page 
            include '../views/admin.php';
        } else { //show login form
            include '../views/login.php';
        }
        break;
    }
