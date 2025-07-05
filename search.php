<?php
            include 'db1.php';
            // Function to fetch search suggestions
function fetchSuggestions($query, $conn) {
    $suggestions = array();

    // Perform SQL query to fetch suggestions
    $sql = "SELECT * FROM service_tbl WHERE Service_Name LIKE '%$query%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            $suggestions[] = $row["Service_Name"];
        }
    }

    return $suggestions;
}

// Main script starts here

if (isset($_POST['query'])) {
    $query = $_POST['query'];

    // Fetch suggestions
    $suggestions = fetchSuggestions($query, $conn);

    // Output suggestions
    foreach ($suggestions as $suggestion) {
        echo "<div>" . $suggestion . "</div>";
    }

    // Perform search operation
    // You can add search functionality here and output search results if needed
} else {
    // If no query parameter is provided, return an error message
    echo "No query parameter provided.";
}

$conn->close();
?>