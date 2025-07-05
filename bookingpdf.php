<?php
// Include TCPDF library
require_once('tcpdf.php');
// Include database connection
require_once('db1.php');

// Get start and end dates from the request parameters
$startDate = isset($_GET['startDate']) ? $_GET['startDate'] : '';
$endDate = isset($_GET['endDate']) ? $_GET['endDate'] : '';

// Create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Remove header
$pdf->setPrintHeader(false);

// Add a footer with copyright information
$pdf->setPrintFooter(true);
$pdf->setFooterData('', 0, 'AhmdXploreHub2024', '');

// Add a page
$pdf->AddPage();

// Fetch booking report data from the database based on start and end dates
$sql = "SELECT booking_tbl.*, service_tbl.Service_Name 
        FROM booking_tbl 
        INNER JOIN service_tbl ON booking_tbl.Service_ID = service_tbl.Service_ID
        WHERE Booking_Date BETWEEN '$startDate' AND '$endDate'";
$result = $conn->query($sql);

// Generate HTML for booking report table
$html = '<style>';
$html .= 'table {width: 100%; border-collapse: collapse; border: 1px solid #ddd;}';
$html .= 'th, td {border: 1px solid #ddd; padding: 8px;}';
$html .= 'th {background-color: #f2f2f2; text-align: center; color: #333;}';
$html .= 'td {background-color: #fff;}';
$html .= 'h1 {text-align: center; color: purple;}';
$html .= '</style>';
$html .= '<h1>Booking Report</h1>';
$html .= '<table>';
$html .= '<thead><tr><th>Booking ID</th><th>User ID</th><th>Name</th><th>Booking Date</th><th>No. of Attendees</th><th>Booking Amount</th><th>Total Amount</th><th>Service Name</th></tr></thead>';
$html .= '<tbody>';
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $html .= "<tr>";
        $html .= "<td>{$row['Booking_ID']}</td>";
        $html .= "<td>{$row['User_ID']}</td>";
        $html .= "<td>{$row['Name']}</td>";
        $html .= "<td>{$row['Booking_Date']}</td>";
        $html .= "<td>{$row['No_of_Attendees']}</td>";
        $html .= "<td>{$row['Booking_Amount']}</td>";
        $html .= "<td>{$row['Total_Amount']}</td>";
        $html .= "<td>{$row['Service_Name']}</td>";
        $html .= "</tr>";
    }
} else {
    $html .= "<tr><td colspan='8' style='border: 1px solid #ddd; padding: 8px;'>No bookings found within the specified date range.</td></tr>";
}
$html .= '</tbody>';
$html .= '</table>';

// Print HTML using writeHTML() method
$pdf->writeHTML($html, true, false, true, false, '');

// Close and output PDF document
$pdf->Output('booking_report.pdf', 'I');

// Close database connection
$conn->close();
?>
