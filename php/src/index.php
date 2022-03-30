<!DOCTYPE html>
<html lang="en">
<head>
    <title>Docker PHP MySQL server</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>
            <?php
                echo 'This is it, your own apache website.'
            ?>
        </h1>
    </div>

    <?php
    //These are the defined authentication environment in the db service

    // The MySQL service named in the docker-compose.yml.
    $host = 'db';

    // Database use name
    $user = 'MYSQL_USER';

    //database user password
    $pass = 'MYSQL_PASSWORD';

    // database name
    $mydatabase = 'MYSQL_DATABASE';
    // check the mysql connection status

    $conn = new mysqli($host, $user, $pass, $mydatabase);

    // select query
    $sql = 'SELECT * FROM users';

    if ($result = $conn->query($sql)) {
        while ($data = $result->fetch_object()) {
            $users[] = $data;
        }
    }

    foreach ($users as $user) {
        echo "<br>";
        echo $user->username . " " . $user->password;
        echo "<br>";
    }
    ?>
</body>
</html>