<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All employee Data</title>
    <style>
        @import url('<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">');

        table,
        tr,
        th,
        td {
            border: 2px solid black;
            border-collapse: collapse;
            padding: 15px 10px;
        }

        body {
            display: grid;
            place-items: center;
            font-family: 'Dancing Script', cursive;
            background: url('background.png'), no-repeat;
        }

        h1 {
            text-align: center;
            font-size: 50px;
            -webkit-text-stroke: 2.5px black;
            background: -webkit-linear-gradient(white, grey);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        th:nth-child(1) {
            background: -webkit-linear-gradient(white, grey);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        th:nth-child(2) {
            background: -webkit-linear-gradient(grey, blue);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        th:nth-child(3) {
            background: -webkit-linear-gradient(red, grey);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        th:nth-child(4) {
            background: -webkit-linear-gradient(lightblue, black);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        th:nth-child(5) {
            background: -webkit-linear-gradient(brown, grey);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        th,
        td:nth-child(6) {
            background: -webkit-linear-gradient(white, grey);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        table {
            text-align: center;
            min-width: 200vh;
            backdrop-filter: blur(20px);
        }

        td a {
            text-decoration: none;
            background: -webkit-linear-gradient(white, grey);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        td a:hover {
            text-decoration: underline 2px #162938;
        }
    </style>
</head>

<body>
    <h1>All Users</h1>

    <table border="1">
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Salary</th>
            <th>Contact</th>
            <th>department</th>
            <th>Image</th>
            <th>Action</th>
        </tr>

        <tbody>
            <?php



            $lh = "localhost";
            $un = "root";
            $ps = "";
            $db = "employee";


            $con = new mysqli($lh, $un, $ps, $db);


            if ($con) {

                $query = "SELECT * FROM emabout";

                $result = mysqli_query($con, $query);


                if ($result) {

                    while ($rows = mysqli_fetch_assoc($result)) {
                        $id = $rows['id'];
                        $uname = $rows['username'];
                        $email = $rows['email'];
                        $sal = $rows['salary'];
                        $contact = $rows['contact'];
                        $dep = $rows['employeefa'];


                        echo '
                                <tr>
                                    <th>' . $uname . '</th>
                                    <th>' . $email . '</th>
                                    <th>' . $sal . '</th>
                                    <th>' . $contact . '</th>
                                    <th>' . $dep . '</th>
                                    '; ?>

                                    <td>
                                        <img src="uploads/<?=$rows['myfile']?>" height="100" width="100" alt="">
                                    </td>



                        <?php



                        echo '
                                    <td>
                                        <a href="eupdate1.php?uid=' . $id . ' ">Update</a>
                                        <a href="edelete1.php?uid=' . $id . '">Delete</a>
                                    </td>   
                                </tr>
                            ';
                    }



                } else {
                    echo "Error";
                }

            } else {
                echo "Error";
            }
            ?>
        </tbody>

    </table>
</body>

</html>