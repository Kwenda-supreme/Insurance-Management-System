<?php

    require_once 'config.php'
?>

<table class="table table-bordered">
    <thead class="alert-info">
        <tr style="text-align:center; ">
            <th style="padding: 20px">First Name</th>
            <th style="padding: 20px">Last Name</th>
            <th style="padding: 20px">Email</th>
            <th style="padding: 20px">Phone Number</th>
            <th style="padding: 20px">Nationality</th>
            <th style="padding: 20px">Gender</th>
            <th style="padding: 15px">Date of Birth <br> (YYYY-MM-DD)</th>
            <th style="padding: 20px">Cover</th>
        </tr>

    </thead>

    <tbody>

    <!-- Displaying data from database -->
        <?php
            if (isset($_POST['search'])) {
                $keyword = $_POST['keyword'];
                $query = $db->prepare("SELECT * FROM users WHERE firstname LIKE '%$keyword%' OR lastname LIKE '%$keyword%' 
                 OR email LIKE '%$keyword%' OR phone LIKE '%$keyword%' OR nationality LIKE '%$keyword%'
                 OR gender LIKE '%$keyword%' OR DOB LIKE '%$keyword%' OR cover LIKE '%$keyword%'");

                $query->execute();
                while ($row=$query -> fetch()) {?>
                    <tr>
                        
                        <td> <?php echo $row['firstname']; ?> </td>
                        <td> <?php echo $row['lastname']; ?> </td>
                        <td> <?php echo $row['email']; ?> </td>
                        <td> <?php echo $row['phone']; ?> </td>
                        <td> <?php echo $row['nationality']; ?> </td>
                        <td> <?php echo $row['gender']; ?> </td>
                        <td> <?php echo $row['DOB']; ?> </td>
                        <td> <?php echo $row['cover']; ?> </td>
                    </tr>
                    <?php
                } 
            }
        ?>
    </tbody>
</table>
