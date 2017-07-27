<html>
<head>
    <meta charset="utf-8">
    <title>Rent a car</title>
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
            <h3>Rent a car</h3>
            <br><br>
            <form method="post" action="">
                <table>
                    <tr>
                        <td colspan="2">
                            <label>Choose Pick Up Time:</label>
                        </td>
                        <td colspan="3">
                            <input type="datetime" required name="pick-up-time" placeholder="YYYY-MM-DD HH:mm:ss"/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label>Choose Return Time :</label>
                        </td>
                        <td colspan="3">
                            <input type="datetime" required name="return-time" placeholder="YYYY-MM-DD HH:mm:ss"/><br>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label>Location :</label>
                        </td>
                        <td colspan="3">
                            <select required name="location">
                                <option value="" selected>Bus Stand</option>
                                <?php
                                $conn = mysqli_connect("localhost", "root", "", "carz");

                                $query = "SELECT name FROM stops";

                                $result = mysqli_query($conn, $query);

                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    echo "<option>" .
                                        $row['name'] .
                                        "</option>";
                                }

                                mysqli_close($conn);
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label>Cars(Choose By Type) :</label>
                        </td>
                        <td colspan="3">
                            <select required name="car">
                                <option value="" selected>SUV</option>
                                <?php
                                $conn = mysqli_connect("localhost", "root", "", "carz");

                                $query = "SELECT DISTINCT(type) FROM cars";

                                $result = mysqli_query($conn, $query);

                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    echo "<option>" .
                                        $row['type'] .
                                        "</option>";
                                }

                                mysqli_close($conn);
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" align="center">
                            <input type="submit" value="Rent">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
</div>
</body>
</html>
