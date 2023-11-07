<?php
include("connect.php"); // Ensure this includes the correct database connection

// Fetch the selected LGA
if (isset($_GET['lga_id']) && is_numeric($_GET['lga_id'])) {
    $lga_id = $_GET['lga_id'];

    // Use prepared statements to prevent SQL injection
    $sql = "SELECT party_abbreviation, SUM(party_score) as total_score 
            FROM announced_pu_results 
            JOIN polling_unit ON announced_pu_results.polling_unit_uniqueid = polling_unit.uniqueid 
            WHERE polling_unit.lga_id = ?
            GROUP BY party_abbreviation";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $lga_id);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Party: " . $row["party_abbreviation"] . " - Total Score: " . $row["total_score"] . "<br>";
        }
    } else {
        echo "0 results";
    }

    $stmt->close();
} else {
    echo "No or invalid LGA selected.";
}

$conn->close();
?>
