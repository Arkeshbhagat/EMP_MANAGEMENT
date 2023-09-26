
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee ragistar</title>

    <style>
            @import url('<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Dancing Script', cursive;
        }   
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url('background.png') no-repeat;
            background-position: center;
            background-size: cover;
        }
        .sec-1{
            border: 2px solid white;
            backdrop-filter: blur(20px);
            padding: 40px;
            border-radius: 40px;
        }
        .sec-1 h1{
            text-align: center;
            font-weight: 500;
            font-size: 40px;
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
            color: black;
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
            color: #162938;
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
        .login-register{
            font-size: 0.9em;
            color: white;
            text-align: center;
            font-weight: 500;
            margin: 25px 0 10px;
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
        .login-register p a{
            color: white;
            text-decoration: none;
            font-weight: 600;
            transition: 0.5s;
        }
        .login-register p a:hover{
            text-decoration: underline;
            color: #162938;
        }

        .btn{
            width: 100%;
            height: 45px;
            background-color: #162938;
            border: none;
            outline: none;
            cursor: pointer;
            font-size: 1em;
            color: white;
            font-weight: 500;
            transition: 0.3s;
        }

        .btn:hover{
            background-color: white;
            color: #162938;
        }
        #myfile{
            align-items: center;
            margin: 10px 0;
        }
    </style>
</head>
<body>


    <div class="sec-1">
        <h1>Add Employee</h1>


        <div class="form-box register">
            <form action="emsubmit.php" method="POST" enctype="multipart/form-data">
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
                <span class="icon"><ion-icon name="wallet"></ion-icon></span>
                    <input type="salary" name="salary" required>
                <label>Salary</label>
              </div>
              <div class="input-box">
                <span class="icon"><ion-icon name="call"></ion-icon></span>
                <input type="tel" name="contact" required>
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


              <div class="input-box">
                <span class="icon"><ion-icon name="add"></ion-icon></span>
                <input type="file" id="myfile" name="myfile" value="Upload" multiple>
                <label>Select File</label>
              </div>
              <input type="submit" class="btn" name="submit" value="Add Employee">
              <div class="login-register">
                <p>Do you Want Login?<a href="index.php" class="login-link">Login</a></p>
              </div>
            </form>
          </div>



    </div>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 
</body>
</html>