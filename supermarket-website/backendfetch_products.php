<?php
$conn = new mysqli("localhost", "root", "", "supermarket");
$res = $conn->query("SELECT * FROM products");
$rows = [];
while($row = $res->fetch_assoc()) {
    $rows[] = $row;
}
echo json_encode($rows);
?>
