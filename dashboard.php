<?php
session_start();

if (!isset($_SESSION['id'])) {
    header("location:index.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dash board</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url('background.png') no-repeat;
            background-size: cover;
        }

        .sec-1 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 99;
        }

        .navigation button {
            margin-left: 40px;
            padding: 10px 15px;
            border: 2px solid white;
            background: transparent;
            border-radius: 20px;
            transition: all 0.5s;
        }

        .navigation button:hover {
            background: white;
            color: black;
        }

        .sec-1 h1 {
            color: white;
            user-select: none;
        }

        .navigation a {
            text-decoration: none;
            color: white;
            font-weight: 500;
            font-size: 15px;
            padding: 10px 15px;
        }

        .navigation a:hover {
            color: black;
        }
    </style>

</head>

<body>
    <div class="sec-1">
        <h1>
            dash board
        </h1>

        <nav class="navigation">
            <button><a href="eregistar.php">Add employee</a></button>
            <button><a href="aboutus.php">About</a></button>
            <button><a href="display1.php">All employee</a></button>
            <button><a href="logout.php">logout</a></button>
        </nav>

    </div>
</body>

</html>