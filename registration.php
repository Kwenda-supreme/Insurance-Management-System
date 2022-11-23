<?php

    require_once('config.php');
    
?>

<!DOCTYPE male>

<male>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Register Client</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

        <style>
            input{
                margin-bottom: 30px;
            }

            .plan label{
                font-weight: 700;
                letter-spacing: 2px;
                font-size: 20px;
            }
                   
        </style>
        
    </head>
    <body>
                 
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

                    <!-- APPLICANT INFORMATION -->
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

                            <!-- Prompt user to enter city -->
                            <label for="city"><b>City/ District of Residence</b></label>
                            <input class="form-control" id="city" type="text" name="city" required>

                            <!-- Prompt user to enter village -->
                            <label for="password"><b>Village</b></label>
                            <input class="form-control" id="village" type="text" name="village" required>

                            <!-- Entering Gender -->
                            <label for="Gender"><b>Gender</b></label><br>
                            <select name="gender" id="gender" name="gender" required >
                                <option value="null">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>

                        </div>

                        <div class="col-sm-4">
                            <!-- Prompt user to enter lastname -->
                            <label for="lastname"><b>Last Name</b></label>
                            <input class="form-control" id="lastname" type="text" name="lastname" required>

                            <!-- Prompt user to enter nationality -->
                            <label for="nationality"><b>Nationality</b></label><br>
                            <select name="nationality" id="nationality" name="nationality" style="margin-bottom: 44px;">
                                <option value="null">Select Nationality</option>
                                <option value="Malawian">Malawian</option>
                                <option value="Non-Malawian">Non-Malawian</option>
                            </select><br>

                            <!-- Prompt user to enter district -->
                            <label for="district"><b>Home District</b></label>
                            <input class="form-control" id="district" type="text" name="district" required>

                            <!-- Entering Date Of Birth -->
                            <label for="DOB"><b>Date Of Birth</b> </label>
                            <input type="date" id="DOB" name="DOB" class="form-control">
                        </div>

                        <div class="col-sm-4">
                            <!-- Prompt user to enter email -->
                            <label for="email"><b>Email Address</b></label>
                            <input class="form-control" id="email" type="email" name="email" required>

                            <!-- Prompt user to enter phone -->
                            <label for="phone"><b>Phone Number</b></label>
                            <input class="form-control" id="phone" type="text" name="phone" required>

                            <!-- Prompt user to enter T/A -->
                            <label for="authority"><b>T/A</b></label>
                            <input class="form-control" id="authority" type="text" name="authority" required>
                        </div>
                        
                    </div>

                    <!-- COVER USER APPLYING FOR -->
                    <div style="border: 1px solid black;">
                        <p style="padding-top: 10px; padding-left:10px; font-size: 20px; letter-spacing: 2px; font-weight:600; "> 
                        2. Coverage Plan Applying For</p>
                    </div>
                    <br>

                    <!-- Prompt user to fill Cover plandetails -->
                    <div class="col plan">
                        <div class="basic">
                            <input type="radio" name="cover" id="cover" value="basic">
                            <label for="basic">Basic Plan</label><br>
                        </div>

                        <div class="standard">
                            <input type="radio" name="cover" id="cover" value="standard">
                            <label for="standard">Standard Plan</label>
                        </div><br>

                        <div class="enhanced">
                            <input type="radio" name="cover" id="cover" value="enhanced">
                            <label for="standard">Enhanced Plan</label>
                        </div>
                    </div>
                    <!-- Submit button -->
                    <div>
                    <hr class="mb-3">
                        
                        <input class="btn btn-primary" type="submit" id="register" name="register" value="Register">
                    </div>

                </div>
            </form>
        
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
                        var city      = $('#city').val();
                        var nationality      = $('#nationality').val();
                        var district  = $('#district').val();
                        var village  = $('#village').val();
                        var authority  = $('#authority').val();
                        var gender  = $('#gender').val();
                        var DOB  = $('#DOB').val();
                        var cover  = $('#cover').val();
                        
                        
                            e.preventDefault();

                            $.ajax({
                                type : 'POST',
                                url  : 'process.php',
                                data : {firstname: firstname, lastname: lastname, email: email, phone: phone, city: city, nationality: nationality,
                                    district: district, village: village, authority: authority, gender: gender, DOB: DOB, cover: cover},
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
                            
                    } 

                })
                
            });


        </script>

    </body>
</male>