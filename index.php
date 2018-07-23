<?php
    include_once('includes/dbc.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <h1>Current car list:</h1>

    <?php
        $sql = "SELECT * FROM cars";
        $results = mysqli_query($conn, $sql);
        $validate = mysqli_num_rows($results);

        if($validate>0){
            while($row = mysqli_fetch_assoc($results)){
                echo $row['name'];
                echo '</br>';

            }
        }
    ?>

    <br>

    <form action="includes/update.php" method="POST">
        <label for="car_select">Which car do you want to change?</label>
        <select name="car_select" id="car_select">     
            <?php
                $results = mysqli_query($conn, $sql);
                $validate = mysqli_num_rows($results);

                while($row = mysqli_fetch_assoc($results)){
                    echo "<option value=" . $row['id'] .">" . $row['name'] . "</option>";
                    echo '</br>';
                }
            ?>
        </select>

        <label for="car_input">And what to?</label>
        <input type="text" name="car_input">

        <button type="submit" name="submit">Submit</button>
    </form>
    
</body>
</html>