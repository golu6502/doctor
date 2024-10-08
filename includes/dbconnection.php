<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:doctor53.database.windows.net,1433; Database = damsmsdb", "harsh", "{hacker@123}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "harsh", "pwd" => "{your_password_here}", "Database" => "damsmsdb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:doctor53.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
