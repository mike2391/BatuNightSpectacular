<?php
    
    $netctl = mysqli_connect("localhost","root","","contactdb");
    // mysqli_query($netctl, "SELECT * FROM ");

    // require "dbconnect.php";
    if (isset($_POST['submit'])) {
        
         $name = $_POST['name'];
         $email = $_POST['email'];
         $phone = $_POST['mobile'];
         $bdate = date('Y-m-d', strtotime($_POST['bookingdate'])); 
         $seat = $_POST['seat'];
 
        $query = "INSERT INTO contactrasac VALUE ('','$name','$email','$phone','$bdate','$seat')";
        mysqli_query($netctl,$query);
        // $query = mysqli_query($netctl,"INSERT INTO 'tblemp'('name','email','phone','bookdate') VALUES ('$name','$emai','$phone','$bookdate')");
        // $query = " INSERT INTO contactdb('name','email','phone','bookdate','seat') VALUES ('$name','$email','$phone','$bookdate','$seat')";
        // $query_run = mysqli_query($netctl,$query);

        // if ($query_run){
        //     $_SESSION['status'] = "Sucsess";
        //     header('Location: index.php');
        // }else {
        //     $_SESSION['status'] = "Failed";
        //     header('Location: index.php');
        // }
        // if (!$query) {
        //     echo mysqli_error($netctl);       
        // }else {
        //     echo "Succsesfully your 1337";
        // }
    }
    // mysqli_close($netctl);
