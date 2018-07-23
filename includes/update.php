<?php
    include_once 'dbc.php';

    $car_id = mysqli_real_escape_string($conn, $_POST['car_select']);
    $car_name = mysqli_real_escape_string($conn, $_POST['car_input']);

    echo $car_id;
    echo $car_name;

    $sql = "UPDATE cars SET name = '$car_name' WHERE id = '$car_id'";

    $results = mysqli_query($conn, $sql);

    header("Location: ../index.php?update=success");
?>