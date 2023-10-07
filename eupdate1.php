<?php 
    $uid= $_GET['uid'];


    $lh = "localhost";
    $un = "root";
    $ps = "";
    $db = "employee";

    $con = new mysqli($lh, $un, $ps, $db);

    
    if($con){
        $query="SELECT * FROM emabout WHERE id=$uid";

        $result=mysqli_query($con,$query);

        $data=mysqli_fetch_assoc($result);

        $uname = $data['username'];
        $email = $data['email'];
        $sal = $data['salary'];
        $contact = $data['contact'];
        $dep = $data['employeefa'];



        if (isset($_POST['update'])){
            $uname1 = $_POST['username'];
            $email1 = $_POST['email'];
            $sal1 = $_POST['salary'];
            $contact1 = $_POST['phone'];
            $dep1 = $_POST['employeefa'];
            
            
            if($con){
                $query1="UPDATE emabout SET username='$uname1',email='$email1',salary='$sal1',contact='$contact1', employeefa='$dep1' WHERE id='$uid'";

                $result1=mysqli_query($con,$query1);

                if($result1){
                    echo "Inserted SUccessfully";
                    header("location:display1.php");
                }
            }

            else{
                echo "Somthing Went Error";
            }
        }
    }

?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

    <style>
        body{
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url('background.png') no-repeat;
            background-size: cover;
        }

        .update b{
            color: black;
        }

        .sec-1 {
            border: 2px solid white;
            border-radius: 10%;
            backdrop-filter: blur(15px);
            padding: 50px;
        }
        .sec-1 h1{
            font-size: 2em;
            text-align: center;
            background: -webkit-linear-gradient(blue, black);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .input-box{
            position: relative;
            width: 100%;
            height: 50px;
            border-bottom: 2px solid #162938;
            margin: 30px 0;
        }
        .input-box label{
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            font-size: 1em;
            background: -webkit-linear-gradient(blue, black);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 600;
            pointer-events: none;
            transition: 0.5s;
        }
        .input-box input{
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            font-size: 1em;
            background: -webkit-linear-gradient(blue, black);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 600;
            padding: 0 35px 0 5px;
        }
        .input-box .icon{
            position: absolute;
            right: 8px;
            font-size: 1.2em;
            color: black;
            line-height: 57px;
        }
        .input-box input:focus~label,
        .input-box input:valid~label{
            top: -5px;
        }

        .remember-forgot{
            font-size: 1em;
            color: black;
            font-weight: 500;
            margin: -15px 0 15px;
            display: flex;
            justify-content: space-between;
        }
        .remember-forgot label input{
            accent-color: #162938;
        }
                 
        .btn-grad {
            background-image: linear-gradient(to right, lightblue 0%, white  51%, #314755  100%);
            padding: 15px 45px;
            text-align: center;
            transition: 0.5s;
            background-size: 200% auto;
            color: black;            
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
            border: 1px solid black;
            width: 100%;
            font-size: 18px;
          }

          .btn-grad:hover {
            background-position: right center;
            color: #fff;
            text-decoration: none;
          }
         
    </style>
</head>
<body>
    <div class="sec-1">
        <h1>Update Your Data</h1>
        <div class="form-box Update">
            <form class="sec-1-p1" method="POST">
              <div class="input-box">
                <span class="icon"><ion-icon name="person"></ion-icon></span>
                <input type="text" name="username" value="<?php echo $uname ?>" required>
                <label>Username</label>
              </div>
              <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="email" name="email"  value="<?php echo $email ?>" required>
                <label>E-mail</label>
              </div>
              <div class="input-box">
                <span class="icon"><ion-icon name="wallet"></span>
                    <input type="text" name="salary" value="<?php echo $sal ?>" required>
                <label>Salary</label>
              </div>
              <div class="input-box">
                <span class="icon"><ion-icon name="call"></ion-icon></span>
                <input type="tel" name="phone" value="<?php echo $contact ?>" required>
                <label>Contact No.</label>
              </div>
              <div class="remember-forgot">
                <label>
                    <input type="radio" name="employeefa" id="Manager" value="Manager" >
                        Manager
                    <input type="radio" name="employeefa" id="Engineer" value="Engineer" >
                        Engineer
                    <input type="radio" name="employeefa" id="Sale" value="Sale" >
                        Sale
                    <input type="radio" name="employeefa" id="Product" value="Product" >
                        Product
                </label>
              </div> 
              <button class="btn-grad" type="submit" name="update" value="Update">Update</button>
            </form>
          </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>