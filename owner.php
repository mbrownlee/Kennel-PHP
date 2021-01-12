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
    $sql = "SELECT owner.id, owner.first_name, owner.last_name, owner.phone, animals.name FROM owner INNER JOIN animals ON owner.id = animals.owner_id";
    $result = mysqli_query($init, $sql);
    echo "<h2> Happy Owners </h2>";
    while ($row = mysqli_fetch_array($result)) {
        echo '<img src="owner.jpg" width="50" height="auto" title="person" alt="person" />' . " " . "Fur baby: " . $row['name'] . "<h3>" . $row['first_name'] . " " . $row['last_name'] . " " . "||" . " " . $row['phone'] .  "</h3>"  . "</br>" . "</br>" . "</br>";
    }

    ?>

</body>

</html>