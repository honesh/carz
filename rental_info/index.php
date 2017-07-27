<html>
<head>
    <meta charset="utf-8">
    <title>Rental Info</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #FFF;
        }

        .box {
            width: 600px;
            height: 500px;
            border: 5px solid #000;
            border-radius: 10px;
            padding: 10px 40px 25px;
        }

        .box h3 {
            /*background-color: black;*/
            color: #00F;
            text-align: center;
            padding: 20px;
            border-radius: 0 0 0 0;
            margin: -10px -40px;
            border-bottom: 5px solid #000;
            font-family: cambria, "Hoefler Text", "Liberation Serif", Times, serif;
            font-size: 24px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            font-family: cambria, "Hoefler Text", "Liberation Serif", Times, serif;
            margin-top: 10px;
        }

        label {
            font-size: 20px;
            color: #00F;
            font-family: cambria, "Hoefler Text", "Liberation Serif", Times, serif
        }

        input[type=submit] {
            background-color: #0b3b0b;
            width: 300px;
            border: 0;
            padding: 10px;
            color: #FFF;
            font-family: cambria, "Hoefler Text", "Liberation Serif", Times, serif;
            font-size: 20px;
            border-radius: 5px;
            margin-top: 40px;
            font-weight: bold;
        }

        .error {
            color: red;
            margin-top: 10px;
            font-size: 18px;
            font-family: cambria, "Hoefler Text", "Liberation Serif", Times, serif
        }
    </style>
</head>
<body>
<div align="center">
    <h1 style="font-family:cambria,'Hoefler Text','Liberation Serif',Times,serif">
        <div class="box">
            <h3>Rental Info</h3>
            <h5>Your recent rents are as follow: </h5>
            <table>
                <?php
                $conn = mysqli_connect("localhost", "root", "", "carz");


                $username = $_COOKIE['username'];
                $query = "CREATE TABLE IF NOT EXISTS cars(pickuptime text, returntime text, location text, car text, username text)";
                mysqli_query($conn, $query);


                $query = "SELECT * FROM rents WHERE username='$username'";

                $result = mysqli_query($conn, $query);
                $num_rows = mysqli_num_rows($result);

                if ($num_rows == 0) {
                    echo "<tr><td colspan='4'>No Rental Records found on your account</td></tr>";
                } else {
                    echo "
                <thead>
                <tr>
                    <th>Pickup Time</th>
                    <th>Return Time</th>
                    <th>Location</th>
                    <th>Car</th>
                </tr>
                </thead>
                <tbody>";


                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        echo "<tr>" .
                            "<td>" .
                            $row['pickuptime'] .
                            "</td>" .
                            "<td>" .
                            $row['returntime'] .
                            "</td>" .
                            "<td>" .
                            $row['location'] .
                            "</td>" .
                            "<td>" .
                            $row['car'] .
                            "</td>" .
                            "</tr>";
                    }
                }
                mysqli_close($conn);
                ?>
                </tbody>
            </table>
            <form action="/home">
                <input type="submit" style="cursor: pointer;" value="Home">
            </form>
        </div>
    </h1>
</div>
</body>
</html>