<?PHP 
    if(isset($_POST['login'])){
        // echo "success";

        
        $uname = $_POST['username'];
        $psw = $_POST['password'];
    
        $lh = "localhost";
        $un = "root";
        $ps = "";
        $db = "employeedetails";
    
        $con = new mysqli($lh, $un, $ps, $db);



        if($con){

            $query="SELECT * FROM employeelogin WHERE username='$uname' AND `password`='$psw'";


            $result=mysqli_query($con,$query);

            
            $l=mysqli_fetch_assoc($result);

                if($l){
                    // echo "sucees";

                    $sess_id=$l['id'];

                    session_start();

                    $_SESSION['id']=$sess_id;

                    header('location:dashboard.php');

                }


                else{
                    echo "wrong";
                }

        }
        else{
            echo "wrong";
        }

    }
    else{
        echo"error";
    }
?>