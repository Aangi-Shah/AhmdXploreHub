<?php
require 'vendor/autoload.php'; // Adjust the path based on your project structure

use Dompdf\Dompdf;
use Dompdf\Options;

include 'db1.php';

// Adjust this query based on your database schema
$sql = "SELECT * FROM user_tbl";
$result = $conn->query($sql);

// Create a PDF document
$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isPhpEnabled', true);
$dompdf = new Dompdf($options);

// Load HTML content
$html = '<html><body>';
$html .= '<h1>User Report</h1>';

// Table headers
$html .= '<table border="1">';
$html .= '<tr><th>User ID</th><th>Name</th><th>Email</th><th>Registration Date</th></tr>';

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $html .= '<tr>';
        $html .= '<td>' . $row['User_Id'] . '</td>';
        $html .= '<td>' . $row['Name'] . '</td>';
        $html .= '<td>' . $row['Email_ID'] . '</td>';
        $html .= '<td>' . $row['Registration_Date'] . '</td>';
        $html .= '</tr>';
    }
} else {
    $html .= '<tr><td colspan="4">No data available.</td></tr>';
}

$html .= '</table>';
$html .= '</body></html>';

$dompdf->loadHtml($html);

// Set paper size (optional)
$dompdf->setPaper('A4', 'portrait');

// Render PDF (first pass to get the total pages)
$dompdf->render();

// Stream the file
$dompdf->stream('user_report.pdf', array('Attachment' => 0));

$conn->close();
?>
