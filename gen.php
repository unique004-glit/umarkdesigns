<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name  = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $event = $conn->real_escape_string($_POST['event']);
    $date  = $_POST['date'];
    $seat  = $conn->real_escape_string($_POST['seat']);

    // Strong unique ticket ID
    $ticket_code = "TK" . strtoupper(bin2hex(random_bytes(4)));

    $sql = "INSERT INTO tickets 
            (ticket_code, full_name, email, event_name, event_date, seat_number)
            VALUES 
            ('$ticket_code','$name','$email','$event','$date','$seat')";

    if ($conn->query($sql) === TRUE) {

        $qr = "https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=$ticket_code";

        echo "<h2>✅ Ticket Purchased Successfully</h2>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Ticket Code:</strong> $ticket_code</p>";
        echo "<img src='$qr'><br><br>";
        echo "<a href='verify.php?code=$ticket_code'>Verify Ticket</a><br>";
        echo "<a href='download.php?code=$ticket_code'>Download PDF</a>";

    } else {
        echo "Error: " . $conn->error;
    }
}
?>
