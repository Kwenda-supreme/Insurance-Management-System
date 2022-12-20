<?php
    require_once('config.php');
    
    if(isset($_POST)){
        $firstname  = $_POST['firstname'];
        $lastname   = $_POST['lastname'];
        $email      = $_POST['email'];
        $phone     = $_POST['phone'];
        $city     = $_POST['city'];
        $nationality     = $_POST['nationality'];
        $district     = $_POST['district'];
        $village     = $_POST['village'];
        $authority     = $_POST['authority'];
        $gender     = $_POST['gender'];
        $DOB     = date('y-m-d',strtotime($_POST['DOB']));
        $cover     = $_POST['cover'];
               
        //Adding VAlues to Database   
        $sql = "INSERT INTO users (firstname, lastname, email, phone, city, nationality, district, 
                village, authority, gender, DOB, cover)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert ->execute([$firstname, $lastname, $email, $phone, $city, $nationality,
                 $district, $village, $authority, $gender, $DOB, $cover]);
        
       
            if($result){
                
                echo 'Client Registered Succesfully';
            }else{
                echo 'an error occured while registering the client';
            }
    } else {
        echo 'Please enter Data';
    }
    

                    
                

