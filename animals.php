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
    // code that adds the new animal from the form once the button on the new animal form is clicked
    require_once('db_sql.php');

    $name = $_POST['name'];
    $breed = $_POST['breed'];
    $owner_id = $_POST['owner_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];


    // $user_ins2 = "INSERT INTO owner (first_name, last_name, phone) VALUES ('$first_name', '$last_name', '$phone');";
    // $user_ins_call2 = mysqli_query($init, $user_ins2);
    // $user_ins = "INSERT INTO animals (name, breed, owner_id = (SELECT owner.id FROM owner WHERE animals.owner_id = owner.id)) VALUES ('$name', '$breed', $owner_id);";
    $user_ins = "INSERT INTO animals (name, breed, owner_id) VALUES ('$name', '$breed', 10);";
    $user_ins_call = mysqli_query($init, $user_ins);

    ?>
    <!-- button to new animal form -->
    <form action="newAnimal.php">
        <br>
        <button type="submit" name="submit" value="submit" class="btn">Add New Pet</button>
    </form>
    <?php
    // gets animals to display on page
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