<?php
// Include TCPDF library
require_once('tcpdf.php');
// Include database connection
require_once('db1.php');

// Check if a category filter is provided
$categoryFilter = isset($_GET['categoryFilter']) ? $_GET['categoryFilter'] : '';

// Create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Remove header
$pdf->setPrintHeader(false);

// Add a footer with copyright information
$pdf->setPrintFooter(true);
$pdf->setFooterData('', 0, 'AhmdXploreHub2024', '');

// Add a page
$pdf->AddPage();

// Fetch service report data from the database based on the category filter
$sql = "SELECT s.*, c.Category_Name, sc.Sub_Category_Name, u.User_Name 
        FROM service_tbl s
        LEFT JOIN category_master_tbl c ON s.Category_ID = c.Category_ID
        LEFT JOIN sub_category_tbl sc ON s.Sub_Category_ID = sc.Sub_Category_ID
        LEFT JOIN user_tbl u ON s.User_ID = u.User_ID";
if (!empty($categoryFilter)) {
    $categoryFilter = $conn->real_escape_string($categoryFilter);
    $sql .= " WHERE c.Category_Name = '$categoryFilter'"; // Filter by category name instead of ID
}
$result = $conn->query($sql);

// Generate HTML for service report table
$html = '<style>';
$html .= '.report-table {width: 100%; border-collapse: collapse; border: 1px solid #ddd;}';
$html .= '.report-table th, .report-table td {border: 1px solid #ddd; padding: 8px;}';
$html .= '.report-table th {background-color: #f2f2f2; text-align: center; color: #333;}';
$html .= '.report-table td {background-color: #fff;}';
$html .= '.report-title {text-align: center; color: purple;}';
$html .= '</style>';
$html .= '<h1 class="report-title">Service Report</h1>';
$html .= '<table class="report-table">'; // Add border style to the table
$html .= '<thead><tr><th>Service ID</th><th>Service Name</th><th>Tagline</th><th>Address</th><th>Timings</th><th>Phone Number</th><th>Date</th><th>Price</th><th>Category Name</th><th>Subcategory Name</th><th>Service Provider Name</th></tr></thead>';
$html .= '<tbody>';
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $html .= "<tr>"; // Add bottom border to each row
        $html .= "<td>{$row['Service_ID']}</td>";
        $html .= "<td>{$row['Service_Name']}</td>";
        $html .= "<td>" . (!empty($row['Tagline']) ? $row['Tagline'] : '-') . "</td>";
        $html .= "<td>{$row['Address']}</td>";
        $html .= "<td>{$row['Timings']}</td>";
        $html .= "<td>" . (!empty($row['Phone']) ? $row['Phone'] : '-') . "</td>";
        $html .= "<td>" . (!empty($row['Date']) ? $row['Date'] : '-') . "</td>";
        $html .= "<td>" . (!empty($row['Price']) ? $row['Price'] : '-') . "</td>";
        $html .= "<td>{$row['Category_Name']}</td>";
        $html .= "<td>" . (!empty($row['Sub_Category_Name']) ? $row['Sub_Category_Name'] : '-') . "</td>";
        $html .= "<td>{$row['User_Name']}</td>";
        $html .= "</tr>";
    }
} else {
    $html .= "<tr><td colspan='11' style='border: 1px solid #000; padding: 8px;'>No services found</td></tr>";
}
$html .= '</tbody>';
$html .= '</table>';

// Print HTML using writeHTML() method
$pdf->writeHTML($html, true, false, true, false, '');

// Close and output PDF document
$pdf->Output('service_report.pdf', 'I');

// Close database connection
$conn->close();
?>
