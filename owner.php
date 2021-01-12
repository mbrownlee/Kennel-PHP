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

    $sql = "SELECT * FROM owner";
    $result = mysqli_query($init, $sql);
    echo "<h2> Happy Owners </h2>";
    while ($row = mysqli_fetch_array($result)) {
        echo '<img src="owner.jpg" width="75" height="auto" title="person" alt="person" />' . "<h3>" . $row['first_name'] . " " . $row['last_name'] . "</h3>" . "</br>";
    }


    ?>



</body>

</html>