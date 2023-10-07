<?php
if (isset($_POST['submit'])) {


    $uname = $_POST['username'];
    $email = $_POST['email'];
    $sal = $_POST['salary'];
    $contact = $_POST['contact'];
    $dep = $_POST['employeefa'];
    $myfile = $_FILES['myfile'];

    $lh = "localhost";
    $un = "root";
    $ps = "";
    $db = "employee";

    $con = new mysqli($lh, $un, $ps, $db);


    if ($con) {







        // echo "success";


        if (isset($_POST['submit'])) {
            // echo "<pre>";
            // print_r($_FILES['myfile']);
            // echo "</pre>";

            $img_name = $_FILES['myfile']['name'];
            $extension = $_FILES['myfile']['type'];
            $tmp_name = $_FILES['myfile']['tmp_name'];
            $error = $_FILES['myfile']['error'];
            $size = $_FILES['myfile']['size'];

            if ($error === 0) {
                if ($size > 1250000) {
                    $err = "Img size should be less than 1.25 MB";

                    header("location:dashboard.php?$err");
                } else {
                    $allowed_ext = array('png', 'jpg', 'jpeg');

                    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);



                    if (in_array($img_ex, $allowed_ext)) {

                        echo $img_ex;
                        $new_img_name = uniqid('IMG-', true) . '.' . $img_ex;
                        echo $new_img_name;

                        $path = 'uploads/' . $new_img_name;

                        move_uploaded_file($tmp_name, $path);


                        $query = "INSERT INTO emabout(username,email,salary,contact,employeefa,myfile) VALUES('$uname','$email','$sal','$contact','$dep','$new_img_name')";


                        $result = mysqli_query($con, $query);


                        if ($result) {
                            header("location:display1.php");
                        } else {
                            echo "something went wrong";
                        }

                    } else {
                        $err = "Img extension should be either png or jpg or jpeg";
                        // echo "wrong";

                        header("location:dashboard.php?$err");
                    }
                }
            }
        }

        // header("location:dashboard.php");
    } else {
        echo "wrong";
    }



} else {
    echo "Error";
}
?>