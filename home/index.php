<html>
<head>
    <meta charset="utf-8">
    <title>Home</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #FFF;
        }

        .box {
            width: 600px;
            /*height: 500px;*/
            border: 5px solid #000;
            border-radius: 10px;
            padding: 10px 40px 25px;
            margin: auto auto;
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
            padding: 10px;
            font-family: cambria, "Hoefler Text", "Liberation Serif", Times, serif;
            margin-top: 10px;
            display: inline;
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
    <div style="font-family:cambria,'Hoefler Text','Liberation Serif',Times,serif">
        <div class="box">
            <h3>Home</h3>
            <br><br>
            <form method="post" action="next.php">
                <table>
                    <tr>
                        <td>
                            <input type="radio" required name="option" value="rent"> Rent a car
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="option" value="personal-info"> Enter/View Personal Information
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="option" value="rental-info"> View Rental Information
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Next >>">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>
