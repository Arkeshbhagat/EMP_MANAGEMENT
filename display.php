<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Display Form</title>
    <link rel="stylesheet" href="display.css">
</head>
<body>
    <div class="header">
        <h2 class="logo">Logo</h2>
        <nav class="navigation">
            <button class="btnDisplay-popup"><a href="#">Display</a></button>
            <button class="btnUpdate-popup"><a href="emupdate.php">Update</a></button>
            <button class="btnLogout-popup"><a href="#">Logout</a></button>
        </nav>
    </div>
        <div class="wrapper">
        <div class="form-box register">
            <h2>Registration</h2>
            <form action="#" method="#">
              <div class="input-box">
                <span class="icon"><ion-icon name="person"></ion-icon></span>
                <input type="text" name="username" required>
                <label>Username</label>
              </div>
              <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="email" name="email" required>
                <label>E-mail</label>
              </div>
              <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" name="password" required>
                <label>Password</label>
              </div>
              <div class="input-box">
                <span class="icon"><ion-icon name="call"></ion-icon></span>
                <input type="tel" name="contact" required>
                <label>Contact No.</label>
              </div>
             
              <div class="login-register">
                <p>Do You Want Login ? &nbsp &nbsp &nbsp<a href="#" class="login-link">Login</a></p>
              </div>
            </form>
          </div>
        </div>
            
            <script src="script.js">
            </script>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>All Users</h1>

    <table border="1">
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Contact</th>
            <th>Action</th>
        </tr>

        <tbody>
            <?php


              
                $lh="localhost";
                $un="root";
                $ps="";
                $db="employeedetails";


                $con= new mysqli($lh,$un,$ps,$db);


                if ($con){

                    $query="SELECT * FROM employeelogin";

                    $result=mysqli_query($con,$query);


                    if ($result){

                        while($rows=mysqli_fetch_assoc($result)){
                            $id=$rows['id'];
                            $uname = $rows['username'];
                            $email = $rows['email'];
                            $psw = $rows['password'];
                            $contact = $rows['contact'];
                            

                            echo'
                                <tr>
                                    <th>'.$uname.'</th>
                                    <th>'.$email.'</th>
                                    <th>'.$psw.'</th>
                                    <th>'.$contact.'</th>
                                    <td>
                                        <a href="emupdate.php?uid='. $id .' ">Update</a>
                                        <a href="emdelete.php?uid='.$id.'">Delete</a>
                                    </td>   
                                </tr>
                            ';
                        }

                        
                    }
                    else{
                        echo "Error";
                    }

                }

                else{
                    echo"Error";
                }
            ?>
        </tbody>

    </table>
</body>

</html>