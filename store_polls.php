<?php
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $polling_unit_id = $_POST['polling_unit_id'];

    $party_scores = array(
        'PDP' => $_POST['pdp_score'],
        'DPP' => $_POST['dpp_score'],
        'APC' => $_POST['apc_score'],
        'APGA' => $_POST['apga_score'],
        'UPC' => $_POST['upc_score']
        // Add other parties as needed following the same pattern
    );

    $sql = "INSERT INTO announced_pu_results (polling_unit_uniqueid, party_abbreviation, party_score) VALUES ";

    $valueStrings = array();
    foreach ($party_scores as $party => $score) {
        $valueStrings[] = "('$polling_unit_id', '$party', $score)";
    }

    $sql .= implode(", ", $valueStrings);

    if ($conn->multi_query($sql) === TRUE) {
        echo "<script>alert('New records created successfully');</script>";
        echo "<script>window.location.href='storepolls.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
