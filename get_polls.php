<?php
include ("connect.php");
// Fetch the unique polling unit ID
if (isset($_GET['polling_unit_id'])) {
    $polling_unit_id = $_GET['polling_unit_id'];

    // Fetch results for the chosen polling unit
    $sql = "SELECT * FROM announced_pu_results WHERE polling_unit_uniqueid = $polling_unit_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "Party: " . $row["party_abbreviation"] . " - Score: " . $row["party_score"] . "<br>";
        }
    } else {
        echo "0 results";
    }
} else {
    echo "No polling unit selected.";
}

$conn->close();



?>