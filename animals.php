<html>

<body class="body">

    <style>
        .body {
            background-color: lightgoldenrodyellow;
        }
        .btn {
            background-color: slateblue;
            color: white;
        }

        .btn:hover {
            background-color: orange;
            color: black;
        }
    </style>
      
    <?php

    include('nav.php');
    ?>
    <form action="newAnimal.php">
        <br>
        <button type="submit" name="submit" value="submit" class="btn">Add New Pet</button>
    </form>
    <?php
    include_once 'db_sql.php';
    $sql = "SELECT animals.id, animals.name, animals.breed,animals.owner_id, owner.first_name, owner.last_name FROM animals INNER JOIN owner ON animals.owner_id = owner.id";
    $result = mysqli_query($init, $sql);
    echo "<h2> Our Pets </h2>";
    while ($row = mysqli_fetch_array($result)) {
        echo "*~*~*~*~*~*~*~*~*~*~*~*~" . "</br>" . '<img src="little-dog.jpg" width="75" height="auto" title="cartoon dog" alt="cartoon house" />' . "<h3>" . $row['name'] . "</h3>" . " " . "Breed: " . $row['breed'] . "</br> " . "Owner: " . $row['first_name'] . " " . $row['last_name'] . "</br>";
    }


    ?>
    </br>
    </br>
 

</body>

</html>