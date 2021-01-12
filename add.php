<html>

<body class=body>
    <h1>Thanks for adding your pet!</h1>

    <?php
    include('nav.php');
    require_once('db_sql.php');

    $name = $_POST['name'];
    $breed = $_POST['breed'];
    $owner_id = $_POST['owner_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];


    $user_ins2 = "INSERT INTO owner (first_name, last_name, phone) VALUES ('$first_name', '$last_name', '$phone');";
    $user_ins_call2 = mysqli_query($init, $user_ins2);
    $user_ins = "INSERT INTO animals (name, breed, owner_id) VALUES ('$name', '$breed', 3);";
    $user_ins_call = mysqli_query($init, $user_ins);

    ?>

    <br>
    <br>
    <br>

    <form action="index.php">
        <button type="submit" name="submit" value="submit" class="btn">Home</button>
    </form>
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
</body>

</html>