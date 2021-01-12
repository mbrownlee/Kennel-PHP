<html>

<body class="body">
    <style>
        .body {
            background-color: lightgoldenrodyellow;
        }
    </style>
    <?php

    include('nav.php');
    include_once 'db_sql.php';

    $sql = "SELECT * FROM animals";
    $result = mysqli_query($init, $sql);
    echo "<h2> Our Pets </h2>";
    while ($row = mysqli_fetch_array($result)) {
        echo "*~*~*~*~*~*~*~*~*~*~*~*~" . "</br>" . '<img src="little-dog.jpg" width="75" height="auto" title="cartoon dog" alt="cartoon house" />' . "<h3>" . $row['name'] . "</h3>" . " " . "Breed: " . $row['breed'] . "</br>";
    }


    ?>
    </br>
    </br>


</body>

</html>