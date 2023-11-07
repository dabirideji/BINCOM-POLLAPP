<!DOCTYPE html>
<html>
<head>
    <title>Enter Results for New Polling Unit</title>
</head>
<body>
  <?php include "nav.php" ?>
    <h2>Enter Results for New Polling Unit</h2>
    <form action="store_polls.php" method="POST" onsubmit="return validateForm()">
    <label for="polling_unit_id">Polling Unit ID:</label>
    <input type="number" name="polling_unit_id" id="polling_unit_id" required><br><br>

    <label for="party_results">Party Results:</label><br>
    <label for="pdp_score">PDP:</label>
    <input type="number" name="pdp_score" id="pdp_score" min="0" required><br>

    <label for="dpp_score">DPP:</label>
    <input type="number" name="dpp_score" id="dpp_score" min="0" required><br>

    <!-- Include other party scores input fields -->
    <label for="apc_score">APC:</label>
    <input type="number" name="apc_score" id="apc_score" min="0" required><br>

    <label for="apga_score">APGA:</label>
    <input type="number" name="apga_score" id="apga_score" min="0" required><br>

    <label for="upc_score">UPC:</label>
    <input type="number" name="upc_score" id="upc_score" min="0" required><br>

    <!-- Include other parties as needed -->

    <input type="submit" value="Submit Results">
</form>

<script>
    function validateForm() {
        const partyScores = ["pdp_score", "dpp_score", "apc_score", "apga_score", "upc_score"];
        for (let score of partyScores) {
            const value = document.getElementById(score).value;
            if (value === "" || parseInt(value) < 0) {
                alert("Please ensure all scores are non-negative integers.");
                return false;
            }
        }
        return true;
    }
</script>

</body>
</html>
