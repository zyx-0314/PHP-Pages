<?php

$host = "host.docker.internal";  // NOT "localhost"
$port = "5112"; // use the correct port your host PostgreSQL is running on
$username = "user";
$password = "password"; // this should be hidden in the password
$dbname = "mydatabase";

$conn_string = "host=$host port=$port dbname=$dbname user=$username password=$password";

$dbconn = pg_connect($conn_string);

if (!$dbconn) {
    echo "❌ Connection Failed: ", pg_last_error() . "  <br>";
    exit();
} else {
    echo "✔️ PostgreSQL Connection  <br>";
    pg_close($dbconn);
}