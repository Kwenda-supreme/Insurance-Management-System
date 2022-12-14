<?php

    require_once('config.php');

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Register Client</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        
    </head>
    <body>
        <div>
            <?php
                
            ?>
        </div>

        <div>
            
            <form action="registration.php" method="post">
                <div class="container">
                    <div class="row">
                        
                        <h1 class="title" style="margin-top: 100px">Personal Health Insurance</h1>
                        <h1 class="title">Registration Form</h1>

                        <div class="col-sm-8">
                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Morbi tristique senectus et netus.</p>
                        </div>

                        <div class="col-sm-2" style="border: 1px solid black;">
                            <p><u> For official use only </u></p>
                            <p>ID Number: </p>
                        </div> 
                        
                        <hr class="mb-3" style="margin-top: 10px;">
                    </div>

                    <div style="border: 1px solid black;">
                        <p style="padding-top: 10px; padding-left:10px; font-size: 20px; letter-spacing: 2px; font-weight:600; "> 
                        1. Applicant Information</p>
                    </div>
                    <br>

                    <!-- Prompt user to fill details to register -->
                    <div class="row">
                        <div class="col-sm-4">
                            <!-- Prompt user to enter firstname -->
                            <label for="firstname"><b>First Name</b></label>
                            <input class="form-control" id="firstname" type="text" name="firstname" required>

                            <!-- Prompt user to enter lastname -->
                            <label for="lastname"><b>Last Name</b></label>
                            <input class="form-control" id="lastname" type="text" name="lastname" required>

                            <!-- Prompt user to enter email -->
                            <label for="email"><b>Email Address</b></label>
                            <input class="form-control" id="email" type="email" name="email" required>

                            <!-- Prompt user to enter password -->
                            <label for="password"><b>Phone Number</b></label>
                            <input class="form-control" id="phone" type="phone" name="phone" required>

                            <hr class="mb-3">
                            <!-- Submit button -->
                            <input class="btn btn-primary" type="submit" id="register" name="register" value="Register">

                        </div>
                    </div>
                    </div>

                </div>
            </form>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript">

            // Validations
            $(function(){
                $('#register').click(function(e){
                    var isValid = this.form.checkValidity();

                    if(isValid){
                        var firstname   = $('#firstname').val();
                        var lastname    = $('#lastname').val();
                        var email       = $('#email').val();
                        var phone      = $('#phone').val();
                        

                            e.preventDefault();

                            $.ajax({
                                type : 'POST',
                                url  : 'process.php',
                                data : {firstname: firstname, lastname: lastname, email: email, phone: phone },
                                success : function(data){
                                    swal.fire({
                                        'title' : 'Successful',
                                        'text'  : data,
                                        'type' : 'success'
                                    })
                                

                                },
                                error: function(data){
                                    swal.fire({
                                        'title' : 'Errors',
                                        'text'  : 'An error occured while saving the data',
                                        'type' : 'error'
                                    })
                                }


                            });
                            
                    } else{
                        
                    }

                    


                })
                

            });
        </script>

    </body>
</html>