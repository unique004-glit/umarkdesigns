<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sharp Sharp Encounter Electronic Ticket</title>
    <link rel="stylesheet" href="style2.css">
    <meta http-equiv="refresh" content="">
</head>
<body>
    <div class="ticket-info">
    <h2>Sharp Sharp Encounter ETicket</h2>
     <form action="gen.php" method="POST">
        <input type="text" name="name" placeholder="Kelvin mark" required><br><br>
        <input type="email" name="email" placeholder="Email Address" required><br><br>
        <input type="text" name="event_name" placeholder="EbubeDike Praise Cursade" required><br><br>
        <input type="date" name="event_date"required><br><br>  
        <input type="text" name="seat_number" placeholder="Seat Number" required><br><br>
        <button type="submit">Generate Ticket</button>
     </form>
    </div>

</body>

</html>
