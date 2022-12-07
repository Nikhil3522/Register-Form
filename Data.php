<?php include("connection.php");
    // error_reporting(0);
?>
<html>
    <header>
        
    <header>
    <style>
        body{
            background-image: blue;
        }
    </style>
    <body>
  
    </body>
</html>


<?php
    if($_POST['register']){
        $name = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $DOB = $_POST['DOB'];
        $gender = $_POST['gender'];

        $query = "INSERT INTO userdata values('$name', '$email', '$password', '$DOB', '$gender')";

        $data = mysqli_query($conn, $query);

        if($data){
            //echo "Data Inserted done!";
        }else{
            echo "Failed";
        }
    }

    $storedData = "SELECT * FROM userdata";
    $display = mysqli_query($conn, $storedData);

    $total = mysqli_num_rows($display);

    // $result = mysqli_fetch_assoc($display);

    // echo $result['uName'];

    if($total != 0){
        ?>
        
        <table border="3">
            <thead>
                <tr>
                    <th> Name </th>
                    <th> Password </th>
                    <th> Email </th>
                    <th> DOB </th>
                    <th> Gender </th>
                <tr>
            </thead>
            <tbody>
                
                    <?php
                        while($result = mysqli_fetch_assoc($display)){
                            echo "
                            <tr>
                                <td>$result[uName]</td>
                                <td>$result[uPassword]</td>
                                <td>$result[email]</td>
                                <td>$result[DOB]</td>
                                <td>$result[gender]</td>
                            </tr>
                            ";
                        }
                    ?>
                    
                
            </tbody>
        </table>
    <?php

        
    }else{
        echo "No records found!";
    }
?>