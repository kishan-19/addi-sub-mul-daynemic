<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daynemic function</title>
    <script>
        function bgcolor(x) {
            x.style.background = "rgb(192,192,192)";
        }

        function focusless(y) {
            y.style.background = "transparent";
            y.style.color = "rgb(0,0,0)"

        }
    </script>
    <style>
        .btn {
            background-color: transparent;
            color: black;
            border: 3px solid rgb(105, 105, 105);
            font-size: large;
            border-radius: 10%;
        }

        .btn:hover {
            box-shadow: 0 12px 16px 0 rgb(0, 0, 0, 0.24), 0 17px 50px 0 rgb(0, 0, 0, 0.19);
            background-color: rgb(0, 0, 0, 0.24);
            color: rgb(0, 0, 0, 0.24);
            border-radius: 20%;
        }

        body {

            font-size: large;
        }

        .input {
            border: 0px;
            border-radius: 20px;
            color: black;
            height: 30px;
            width: 200px;
        }

        .input:focus {
            outline-color: rgb(128, 128, 128);
        }

        .first_body {
            background-color: rgb(248, 248, 255);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .seceand_body {
            display: flex;
            justify-content: center;
            align-items: center;
            color: rgb(105, 105, 105);
            font-size: xx-large;
            text-decoration: underline;
        }
        .seceand_body ul{
            list-style-type: square;
            color: black;
        }
    </style>
</head>

<body>
    <div class="first_body">
        <table cellpadding="5px" cellspacing="10px">
            <form method="post">
                <tr>
                    <td><label>Enter First Number :</label></td>
                    <td><input type="number" name="fnum" placeholder="Enter number" class="input" onfocus="bgcolor(this)" onblur="focusless(this)"></td>
                </tr>
                <tr>
                    <td><label>Enter Seceand Number :</label></td>

                    <td><input type="number" name="lnum" placeholder="Enter number" class="input" onfocus="bgcolor(this)" onblur="focusless(this)"></td>
                </tr>
                <tr></tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="add" value="Addition" class="btn">
                        <input type="submit" name="sub" value="Subtraction" class="btn">
                        <input type="submit" name="mul" value="Multification" class="btn">
                    </td>
                </tr>

            </form>
        </table>
    </div>
    <hr>
    <div class="seceand_body">
        <?php
        function add($x, $y)
        {
            return $x + $y;
        }
        if (isset($_POST['add'])) {
            echo " <tr><td><ul><li>Addition = " . add($_POST['fnum'], $_POST['lnum']) . "</li></ul></td><tr>";
            exit();
        }
        function sub($x, $y)
        {
            return $x - $y;
        }
        if (isset($_POST['sub'])) {
            echo "<tr><td><ul><li>  Suntraction = " . sub($_POST['fnum'], $_POST['lnum']) . "</li></ul></td></tr>";
            exit();
        }
        function mul($x, $y)
        {
            return $x * $y;
        }
        if (isset($_POST['mul'])) {
            echo "<tr><td> <ul><li> Multification = " . mul($_POST['fnum'], $_POST['lnum']) . "</li></ul></td></tr>";
            exit();
        }
        ?>

    </div>
</body>


</html>