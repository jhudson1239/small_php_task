<?php
    include_once('includes/dbc.php');
?>
<!DOCTYPE html>
<html>
<head> 
    <title>Small Task</title>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    
    <script src="main.js" defer></script>
</head>

<body>

    <h1>Current car list:</h1>

    <?php
        $query = "SELECT * FROM cars";
        $data = $conn->query($query);
        
        foreach($data as $row){
            echo $row['name'] . '</br>';
        }
    ?>

    <br>

    <form action="includes/update.php" method="POST">
        <label for="car_select">Which car do you want to change?</label>
        <select name="car_select" id="car_select">     
            <?php
                $query = "SELECT * FROM cars";
                $data = $conn->query($query);

                foreach($data as $row){
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