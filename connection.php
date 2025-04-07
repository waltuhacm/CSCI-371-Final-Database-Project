<!-- saved from url=(0062)http://students.cs.ndsu.nodak.edu/~jayden.mills/connection.php -->

<?php
/* Database credentials. Assuming you are running MySQL server with default setting (user 'root' with no password) */
define('DB_SERVER', 'rei.cs.ndsu.nodak.edu');
define('DB_USERNAME', 'jayden_mills_371s25');
define('DB_PASSWORD', 'DRLS0rvQSN0!');
define('DB_NAME', 'jayden_mills_db371s25');

/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
} else {

    echo("db is done");
}
?>