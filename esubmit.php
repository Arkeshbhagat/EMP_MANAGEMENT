<?php 
    if (isset($_POST['submit'])) {
        $uname = $_POST['username'];
        $email = $_POST['email'];
        $psw = $_POST['password'];
        $contact = $_POST['contact'];
    
        $lh = "localhost";
        $un = "root";
        $ps = "";
        $db = "employeedetails";
    
        $con = new mysqli($lh, $un, $ps, $db);
    
    
        if ($con) {
    
    
            $query = "INSERT INTO employeelogin(username,email,password,contact) VALUES('$uname','$email','$psw','$contact')";
    
    
    
            $result = mysqli_query($con, $query);
    
            if ($result) {
                // echo "success";
    
                header("location:eaboutus.php");
            } 
            else {
                echo "wrong";
            }
    
        } else {
            die($con);
        }
    
    } 
    else {
        echo "Error";
    }
?>