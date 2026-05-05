<?php
include "db_conn.php"

$stmt = $conn->prepare("SELECT * FROM graduates");
$stmt->execute();

$rows = stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        
    </table>
</body>
</html>