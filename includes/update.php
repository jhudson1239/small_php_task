<?php
    include_once 'dbc.php';

    $query = "UPDATE cars SET name = :name WHERE id = :id";

    echo "started";

    //prepre statment
    $stmt = $conn->prepare($query);
    echo "stmt prepared";

    //clean data
    $id = htmlspecialchars(strip_tags($_POST['car_select']));
    $name = htmlspecialchars(strip_tags($_POST['car_input']));
    echo "data cleaned";

    //bind data
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':name', $name);

    if ($stmt->execute()){
        echo "completed";
    } else {
        echo "not comeplted";
    }

    header("Location: ../index.php?update=success");
?>