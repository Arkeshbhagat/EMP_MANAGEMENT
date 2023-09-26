<?php  
    $uid=$_GET['uid'];

    $lh="localhost";
    $un="root";
    $ps="";
    $db="employeedetails";

    $con=new mysqli($lh,$un,$ps,$db);


    if($con)
    {
        $query="DELETE FROM employeelogin WHERE id='$uid'";

        $result=mysqli_query($con,$query);

        if($result){
            header("location:display.php");
            // echo"suce";
        }
    }
    else{
        echo "err";
    }
?>