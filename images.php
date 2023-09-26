<?php 
    if(isset($_POST['submit'])){
        echo "<pre>";
        print_r($_FILES['myfile']);
        echo "</pre>";
    }
    else{
        // $err = "something went wrong";
        echo "something went wrong";
    }
?>