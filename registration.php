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
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        
    </head>
    <body>
        <div>
            <?php
                
            ?>
        </div>

        <div>
            <!-- Prompt user to fill details to register -->
            <form action="registration.php" method="post">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <h1 class="title">Register Client</h1>
                            
                            <hr class="mb-3">

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