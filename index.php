<?php
$connect = mysqli_connect('db','php_docker','password','php_docker');

$table = 'php_docker_table';

$sql = "SELECT * FROM $table";

$query = mysqli_query($connect,$sql);

echo "<strong>$table: </strong>";
while ($i = mysqli_fetch_assoc($query)) {
    echo "<p>$i[title]</p>";
    echo "<p>$i[body]</p>";
    echo "<p>$i[date_created]</p>";
    echo "</br>";
}
