<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Search Client</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    </head>
    <body>
        
        <div class="container">
            
            <div class="row">

            <!-- Searching for Client -->
                <form action="" method="POST" style="margin-top: 100px">
                    <div class="form-inline">
                        <input type="text" name="keyword" placeholder="Enter Keyword" class="form-control" style="max-width: 200px;"> 
                        <button class="btn btn-success" name="search" style="margin-top: 5px">Search</button>
                    </div><br>
                
                </form>
                <br>
                <?php 
                    include 'find.php';
                    ?>
            </div>
        </div>



        
        <script src="" async defer></script>
    </body>
</html>