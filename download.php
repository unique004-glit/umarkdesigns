<?php
require_once('tcpdf/tcpdf.php');
include "db.php";

$code = $_get['code']

$sql = "SELECT * FROM tickets WHERE ticket_code='$code'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$pdf = new TCPDF();
$pdf->AddPage();
$pdf->SetFont('helvetica', '', 12);

$html = "
 <h1>Sharp Sharp Encounter Electronic Ticket</h1>
 <p>Name: {$row['name']}</p>
 <p>Event: {$row['event']}</p>
<p>Date: {$row['event_date']}</p>
<p>Seat: {$row['seat_number']}</p>
<p>Ticket Code: {$row['ticket_code']}</p>
 ";

 $pdf->writeHTML($html);
 $pdf->Output("ticket.pdf", "D");