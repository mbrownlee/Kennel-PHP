<html>

<body class="body">
    <?php
    include('nav.php');
    include_once 'db_sql.php';

    ?>
    <?php
    $query = "SELECT title, id FROM location;";
    $result = mysqli_query($init, $query);
    ?>
    <h2>New Pet Form</h2>

    <form action="animals.php" method="post">
        Location: <select name="id" value=$row[id]>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo "<option value=" . $row['id'] . ">" . $row['title'] . "</option>";
            }

            ?>
        </select>
        <br>
        Pet's Name: <input type="text" name="name">

        <br>
        Breed: <input type="text" name="breed">
        <br>
        Owner's First Name: <input type="text" name="first_name">
        <br>
        Owner's Last Name: <input type="text" name="last_name">
        <br>
        Contact Number (xxx)xxx-xxxx: <input type="text" name="phone">
        <br>

        <button type="submit" name="submit" value="submit" class="btn">Add Pet</button>
    </form>
    
    <br>
    <br>
</body>
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

</html>