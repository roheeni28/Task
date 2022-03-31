<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>View Feedback</title>
    <!-- Custom styles for this template-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<?php
    include("function.php");
    // error_reporting(0);

    $SelectQuery = "SELECT * FROM fbdb";
    $data = mysqli_query($conn,$SelectQuery);
    $result= mysqli_num_rows($data);
    ?>
        
        <center>
        <div class="overflow-x:auto;"> 
        <table class="table";>
        <thead>
            <tr class="table-primary">
                <th scope="col">ID</th>
                <th scope="col">FirstName</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Message</th>
                <th scope="col">DateTime</th>
            </tr>
        </thead>

    <?php

    if($result!=0) {
        while($tabledata= mysqli_fetch_assoc($data)) {
            echo "<tr>
                    <td>".$tabledata['id']."</td>
                    <td>".$tabledata['fname']."</td>
                    <td>".$tabledata['lname']."</td>
                    <td>".$tabledata['email']."</td>
                    <td>".$tabledata['phone']."</td>
                    <td>".$tabledata['message']."</td>
                    <td>".$tabledata['dt']."</td></tr>";
        }
    } else{
        echo "Record Not Found ";
    }
?>
</table> </div></center>

</body>