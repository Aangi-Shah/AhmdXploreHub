<?php
require_once('tcpdf.php'); // Include TCPDF library
require_once('db1.php');   // Include database connection

// Get the filter value from the query string
$userTypeFilter = isset($_GET['userTypeFilter']) ? $_GET['userTypeFilter'] : '';

// Create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Remove header
$pdf->setPrintHeader(false);

// Add a footer with copyright information
$pdf->setPrintFooter(true);
$pdf->setFooterData('', 0, 'AhmdXploreHub2024', '');

// Add a page
$pdf->AddPage();

// Fetch user report data from the database based on filter
$sql = "SELECT * FROM user_tbl";
if (!empty($userTypeFilter)) {
    // Filter by user type if userTypeFilter is provided
    $sql .= " WHERE User_Type = '$userTypeFilter'";
}
$result = $conn->query($sql);

// Generate HTML for user report table
$html = '<style>';
$html .= 'table {width: 100%; border-collapse: collapse; border: 1px solid #ddd;}';
$html .= 'th, td {border: 1px solid #ddd; padding: 8px;}';
$html .= 'th {background-color: #f2f2f2; text-align: center; color: #333;}';
$html .= 'td {background-color: #fff;}';
$html .= 'h1 {text-align: center; color: purple;}';
$html .= '</style>';
$html .= '<h1>User Report</h1>';
$html .= '<table>';
$html .= '<thead><tr><th width: 5%;>User ID</th><th>User Name</th><th>User Type</th><th>Email ID</th><th>Phone No</th><th>Date</th></tr></thead>';
$html .= '<tbody>';
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $userType = $row['User_Type'] == 1 ? "Tourist" : ($row['User_Type'] == 2 ? "Service Provider" : "Unknown");
        $html .= "<tr>";
        $html .= "<td style='width: 5%;'>{$row['User_ID']}</td>";
        $html .= "<td>{$row['User_Name']}</td>";
        $html .= "<td>{$userType}</td>";
        $html .= "<td>{$row['Email_ID']}</td>";
        $html .= "<td>{$row['Phone_No']}</td>";
        $html .= "<td>{$row['date']}</td>";
        $html .= "</tr>";
    }
} else {
    $html .= "<tr><td colspan='6'>No users found</td></tr>";
}
$html .= '</tbody>';
$html .= '</table>';

// Print HTML using writeHTML() method
$pdf->writeHTML($html, true, false, true, false, '');

// Close and output PDF document
$pdf->Output('user_report.pdf', 'I');

// Close database connection
$conn->close();
?>
