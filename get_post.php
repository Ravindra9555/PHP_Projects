<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GET and Post </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <?php

    // connecting database 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "getpost";
    // connection 
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // die if connection is unsuccessful 
    if (!$conn) {
        die("sorry we failed to connect" . mysqli_connect_error());
    } else {
        echo "connection is successful";
        echo "<br>";

    }
    //create a datbase 
    $sql = "CREATE DATABASE getpost";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "datbase created successfully";
        echo "<br>";


    } else {
        echo "datbase not created successfully" . mysqli_error($conn);
        echo "<br>";
    }
    //create two table for email and password 
    
    $sql = "CREATE TABLE `getpost`.`Test123` (`SRN` INT(4) NOT NULL AUTO_INCREMENT , `Email` VARCHAR(25) NOT NULL , `Phone` INT(12) NOT NULL , `Name` VARCHAR(25) NOT NULL ,`Time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`SRN`)) ENGINE = InnoDB";
    $result1 = mysqli_query($conn, $sql);

    if ($result1) {
        echo "table created successfully";
        echo "<br>";
    } else {
        echo "table not created successfully" . mysqli_error($conn);
        echo "<br>";
    }
    //insert into table 
    $sql = "INSERT INTO `Test123` (`SRN`, `Email`, `Phone`, `Name`, `Time`) VALUES ('1', 'ravi@gmail.com', '1111111111', 'Ravi', current_timestamp());";
    $Result = mysqli_query($conn, $sql);
    if (!$Result) {
        echo "data not inserted successfully" . mysqli_error($conn);
    } else {
        echo "data inserted successfully";
        echo "<br>";
    }
    ?>
    <div class="container">
        <form action="/php_projects/get_post.php" method="post">
            <div class="mb-3">
                <label for="Email1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="Password1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>