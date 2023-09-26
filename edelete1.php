<?php  
    $uid=$_GET['uid'];

    $lh="localhost";
    $un="root";
    $ps="";
    $db="employee";

    $con=new mysqli($lh,$un,$ps,$db);


    if($con)
    {
        $query="DELETE FROM emabout WHERE id='$uid'";

        $result=mysqli_query($con,$query);

        if($result){
            header("location:display1.php");
        }
    }
    else{
        echo "err";
    }
?>