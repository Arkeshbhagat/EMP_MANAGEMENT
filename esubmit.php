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
    
    
            
            $q1= "SELECT * FROM employeelogin WHERE email='$email'";
            
            $result = mysqli_query($con, $q1);
            
            $r1= mysqli_fetch_assoc($result);

            if($r1){
                echo "you have already account";
            }
            else{
                $query = "INSERT INTO employeelogin(username,email,password,contact) VALUES('$uname','$email','$psw','$contact')";

                $result1 = mysqli_query($con, $query) ;

                    if ($result1) {
                    // echo "success";
                    
                    header("location:eaboutus.php");
                } 
                else {
                    echo "wrong";
                }
                
            }
            
        } else {
            die($con);
        }
    
    } 
    else {
        echo "Error";
    }
?>