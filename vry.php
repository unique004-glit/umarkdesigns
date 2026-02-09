<?php
include "db.php";

$code = $_GET['code'];

$sql = "SELECT * FROM tickets WHERE ticket_code='$code'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();

    if ($row['check_in_status'] == 'not_checked') {
        $conn->query("UPDATE tickets SET check_in_status='checked_in' WHERE ticket_code='$code'");
        echo "<h2 style='color:green;'>✅ VALID TICKET - CHECKED IN</h2>";
    } else {
        echo "<h2 style='color:orange;'>⚠ Ticket Already Used</h2>";
    }

} else {
    echo "<h2 style='color:red;'>❌ INVALID TICKET</h2>";
}
?>
