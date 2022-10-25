<?php
    require_once('config.php');

    if(isset($_POST)){
        $firstname  = $_POST['firstname'];
        $lastname   = $_POST['lastname'];
        $email      = $_POST['email'];
        $phone     = $_POST['phone'];
        
            
        $sql = "INSERT INTO users (firstname, lastname, email, phone) VALUES (?, ?, ?, ?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert ->execute([$firstname, $lastname, $email, $phone]);

            if($result){
                echo 'Client Registered Succesfully';
            }else{
                echo 'an error occured while registering the client';
            }
    } else {
        echo 'Please enter Data';
    }
    

                    
                

