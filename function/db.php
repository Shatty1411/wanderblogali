<?php

$servername = "eu-cdbr-azure-west-d.cloudapp.net";
$username = "b2b3b585e0826f";
//$password = "a757beba";
$password = "a757beba";
$dbname = "wonderblog";

global $DbConnection;
// Create connection
$DbConnection = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$DbConnection) {
    die("Connection failed: " . mysqli_connect_error());
}

else {
    echo "success";
}


/*
echo $adID;
$tray = $make_sql["adID"] . $make_sql["title"];



$sql = "ALTER TABLE comment ADD FOREIGN KEY (adID) REFERENCES adventures (adID)";
$run_sql = mysqli_query($DbConnection, $sql);

if ($run_sql) {
    echo "foreign key successfully added";
};*/