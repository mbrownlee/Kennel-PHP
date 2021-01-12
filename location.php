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
    
        $sql = "SELECT * FROM location";
        $result = mysqli_query($init, $sql);
        echo "<h2> Visit us at: </h2>";
        while ($row = mysqli_fetch_array($result)) {
            echo '<img src="location.png" width="75" height="auto" title="doghouse" alt="doghouse" />'. 
            "<h2>" . $row['title'] . "</h2>" . " " . $row['address'] . "</br>";
        }
    

    ?>
    </br>
    </br>
    
   
    </form>

    </body>
</html>