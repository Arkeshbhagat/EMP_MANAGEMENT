<?php 
    $uid= $_GET['uid'];


    $lh = "localhost";
    $un = "root";
    $ps = "";
    $db = "employeedetails";

    $con = new mysqli($lh, $un, $ps, $db);


    if($con){
        $query="SELECT * FROM employeelogin WHERE id=$uid";

        $result=mysqli_query($con,$query);

        $data=mysqli_fetch_assoc($result);

        $uname = $data['username'];
        $email = $data['email'];
        $psw = $data['password'];
        $contact = $data['contact'];



        if (isset($_POST['update'])){
            $uname1 = $_POST['username'];
            $email1 = $_POST['email'];
            $psw1 = $_POST['password'];
            $contact1 = $_POST['phone'];
            
            
            if($con){
                $query1="UPDATE employeelogin SET username='$uname1',email='$email1',password='$psw1',contact='$contact1' WHERE id='$uid'";

                $result1=mysqli_query($con,$query1);

                if($result1){
                    echo "Inserted SUccessfully";
                    header("location:display.php");
                }
            }

            else{
                echo "Somthing Went Error";
            }
        }
    }

?> 



<html>
    <head>
        <title>Form</title>
    </head>

    <body>
        <form method="post">
            <b>Name: </b> <input type="text" name="username" value="<?php echo $uname ?>"><br><br>
            <b>Email: </b> <input type="text" name="email" value="<?php echo $email ?>"><br><br>
            <b>Password: </b> <input type="password" name="password" value="<?php echo $psw ?>"><br><br>
            <b>Contact: </b> <input type="tel" name="phone" value="<?php echo $contact ?>"><br><br>
            <input type="submit" name="update" value="Update">
        </form>
    </body>
</html>